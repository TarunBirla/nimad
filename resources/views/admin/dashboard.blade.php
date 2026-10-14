@extends('admin.layout')

@section('title', 'Dashboard Overview')

@section('content')

<!-- Quick Stats -->
<div class="stats-grid">
  <div class="stat-card">
    <div class="stat-icon purple"><i class="fa-solid fa-envelope-open-text"></i></div>
    <div>
      <div class="stat-val">{{ $stats['contacts'] }}</div>
      <div class="stat-label">Contact Inquiries @if($stats['contacts_unread'] > 0) <span style="color: #d97706; font-weight: 700;">({{ $stats['contacts_unread'] }} new)</span> @endif</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon green"><i class="fa-solid fa-rocket"></i></div>
    <div>
      <div class="stat-val">{{ $stats['projects'] }}</div>
      <div class="stat-label">Project Briefs @if($stats['projects_unread'] > 0) <span style="color: #059669; font-weight: 700;">({{ $stats['projects_unread'] }} new)</span> @endif</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon orange"><i class="fa-solid fa-newspaper"></i></div>
    <div>
      <div class="stat-val">{{ $stats['blogs'] }}</div>
      <div class="stat-label">Published Articles</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon blue"><i class="fa-solid fa-users"></i></div>
    <div>
      <div class="stat-val">{{ $stats['unique_visitors'] }}</div>
      <div class="stat-label">Unique Visitors ({{ $stats['total_pageviews'] }} views)</div>
    </div>
  </div>
</div>

<!-- Analytics Graph -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><i class="fa-solid fa-chart-line" style="color: #635bff; margin-right: 8px;"></i> Visitor Activity (Last 7 Days)</h3>
    <a href="{{ route('admin.analytics') }}" class="btn btn-primary btn-sm">Full Analytics & User Journeys →</a>
  </div>
  <div style="height: 280px; position: relative;">
    <canvas id="overviewChart"></canvas>
  </div>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 24px;">
  <!-- Recent Contact Leads -->
  <div class="card" style="margin-bottom: 0;">
    <div class="card-header">
      <h3 class="card-title"><i class="fa-solid fa-envelope" style="color: #635bff; margin-right: 8px;"></i> Recent Contact Leads</h3>
      <a href="{{ route('admin.contacts') }}" class="btn btn-primary btn-sm">View All</a>
    </div>
    @if($recentContacts->isEmpty())
      <p style="color: var(--text-muted); padding: 20px 0; text-align: center;">No contact leads yet.</p>
    @else
      <div style="overflow-x: auto;">
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Service</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($recentContacts as $c)
              <tr>
                <td>
                  <strong style="color: #0f172a;">{{ $c->full_name }}</strong><br>
                  <span style="font-size: 12px; color: var(--text-muted);">{{ $c->email }}</span>
                </td>
                <td><span class="badge badge-tag">{{ ucwords(str_replace('-', ' ', $c->service)) }}</span></td>
                <td><span style="font-size: 12px; color: var(--text-muted);">{{ $c->created_at->diffForHumans() }}</span></td>
                <td>
                  <span class="badge {{ $c->status === 'unread' ? 'badge-unread' : 'badge-read' }}">
                    {{ ucfirst($c->status) }}
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>

  <!-- Recent Project Requests -->
  <div class="card" style="margin-bottom: 0;">
    <div class="card-header">
      <h3 class="card-title"><i class="fa-solid fa-file-signature" style="color: #059669; margin-right: 8px;"></i> Recent Project Requests</h3>
      <a href="{{ route('admin.projects') }}" class="btn btn-primary btn-sm">View All</a>
    </div>
    @if($recentProjects->isEmpty())
      <p style="color: var(--text-muted); padding: 20px 0; text-align: center;">No project requests yet.</p>
    @else
      <div style="overflow-x: auto;">
        <table>
          <thead>
            <tr>
              <th>Client</th>
              <th>Budget</th>
              <th>Timeline</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($recentProjects as $p)
              <tr>
                <td>
                  <strong style="color: #0f172a;">{{ $p->full_name }}</strong><br>
                  <span style="font-size: 12px; color: var(--text-muted);">{{ $p->company ?: $p->email }}</span>
                </td>
                <td><span style="font-size: 13px; font-weight: 600; color: #059669;">{{ $p->budget ?: 'Discuss' }}</span></td>
                <td><span style="font-size: 12px; color: var(--text-muted);">{{ $p->timeline ?: 'Flexible' }}</span></td>
                <td>
                  <span class="badge {{ $p->status === 'unread' ? 'badge-unread' : 'badge-read' }}">
                    {{ ucfirst($p->status) }}
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>
</div>

@endsection

@push('scripts')
<script>
  const ctx = document.getElementById('overviewChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: {!! json_encode($chartDates) !!},
      datasets: [
        {
          label: 'Page Views',
          data: {!! json_encode($chartViews) !!},
          borderColor: '#635bff',
          backgroundColor: 'rgba(99, 91, 255, 0.08)',
          fill: true,
          tension: 0.3,
          borderWidth: 2,
          pointBackgroundColor: '#635bff'
        },
        {
          label: 'Unique Visitors',
          data: {!! json_encode($chartVisits) !!},
          borderColor: '#10b981',
          backgroundColor: 'rgba(16, 185, 129, 0.08)',
          fill: true,
          tension: 0.3,
          borderWidth: 2,
          pointBackgroundColor: '#10b981'
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { labels: { color: '#475569', font: { weight: 500 } } }
      },
      scales: {
        x: { grid: { color: '#f1f5f9' }, ticks: { color: '#64748b' } },
        y: { grid: { color: '#f1f5f9' }, ticks: { color: '#64748b', stepSize: 1 }, beginAtZero: true }
      }
    }
  });
</script>
@endpush
