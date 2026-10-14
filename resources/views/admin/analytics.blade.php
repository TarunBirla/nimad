@extends('admin.layout')

@section('title', 'Visitor Analytics & User Tracking')

@section('content')

<!-- Analytics Summary -->
<div class="stats-grid">
  <div class="stat-card">
    <div class="stat-icon purple"><i class="fa-solid fa-users"></i></div>
    <div>
      <div class="stat-val">{{ $totalUnique }}</div>
      <div class="stat-label">Unique Visitors (Distinct IPs)</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon green"><i class="fa-solid fa-repeat"></i></div>
    <div>
      <div class="stat-val">{{ $totalVisits }}</div>
      <div class="stat-label">Total Visits / Return Sessions</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon blue"><i class="fa-solid fa-eye"></i></div>
    <div>
      <div class="stat-val">{{ $totalPageviews }}</div>
      <div class="stat-label">Total Page Views</div>
    </div>
  </div>

  <div class="stat-card">
    <div class="stat-icon orange"><i class="fa-solid fa-arrow-trend-up"></i></div>
    <div>
      <div class="stat-val">{{ $totalUnique > 0 ? round($totalPageviews / $totalUnique, 1) : 0 }}</div>
      <div class="stat-label">Avg. Pages per Visitor</div>
    </div>
  </div>
</div>

<!-- Graph -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><i class="fa-solid fa-chart-column" style="color: #8f89ff; margin-right: 8px;"></i> Traffic & Unique Visitors Trend (Last 14 Days)</h3>
  </div>
  <div style="height: 300px; position: relative;">
    <canvas id="analyticsChart"></canvas>
  </div>
</div>

<!-- Top Pages -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><i class="fa-solid fa-fire-flame-curved" style="color: #fbbf24; margin-right: 8px;"></i> Most Popular Pages</h3>
  </div>
  @if($topPages->isEmpty())
    <p style="color: var(--text-muted); text-align: center; padding: 20px 0;">No pageview data recorded yet.</p>
  @else
    <div style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>Rank</th>
            <th>Page Title / Name</th>
            <th>Page URL</th>
            <th>Total Views</th>
          </tr>
        </thead>
        <tbody>
          @foreach($topPages as $idx => $p)
            <tr>
              <td><span style="font-weight: 700; color: #8f89ff;">#{{ $idx + 1 }}</span></td>
              <td><strong style="color: #fff;">{{ $p->page_title ?: 'Home' }}</strong></td>
              <td><a href="{{ $p->page_url }}" target="_blank" style="color: #60a5fa; text-decoration: none; font-size: 13px;">{{ $p->page_url }}</a></td>
              <td><strong style="color: #34d399;">{{ $p->total }} views</strong></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</div>

<!-- Unique Visitors Table (Zero Duplicates, Full Journey) -->
<div class="card">
  <div class="card-header">
    <div>
      <h3 class="card-title"><i class="fa-solid fa-network-wired" style="color: #34d399; margin-right: 8px;"></i> Unique Visitor Profiles & Browsing Journeys</h3>
      <p style="font-size: 13px; color: var(--text-muted); margin-top: 4px;">Each IP address appears once with total visit count and click-by-click page history</p>
    </div>
  </div>

  @if($visitors->isEmpty())
    <div style="text-align: center; padding: 40px; color: var(--text-muted);">
      <i class="fa-solid fa-chart-simple" style="font-size: 36px; margin-bottom: 12px; opacity: 0.5;"></i>
      <p>No visitor records logged yet. As users browse your website, their IP and page journeys will appear here automatically.</p>
    </div>
  @else
    <div style="overflow-x: auto;">
      <table>
        <thead>
          <tr>
            <th>IP Address</th>
            <th>Times Visited</th>
            <th>Pages Viewed</th>
            <th>Device & OS</th>
            <th>First Seen</th>
            <th>Last Active</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($visitors as $v)
            <tr>
              <td>
                <span style="font-family: monospace; font-size: 14px; font-weight: 600; color: #38bdf8;">{{ $v->ip_address }}</span>
              </td>
              <td>
                <span class="badge" style="background: rgba(16, 185, 129, 0.2); color: #34d399; border: 1px solid #059669; font-size: 13px;">
                  <i class="fa-solid fa-rotate"></i> {{ $v->total_visits }} {{ Str::plural('time', $v->total_visits) }}
                </span>
              </td>
              <td>
                <strong style="color: #fff;">{{ $v->total_pageviews }}</strong> pages
              </td>
              <td>
                <span style="color: #cbd5e1;">{{ $v->device ?? 'Desktop' }}</span> • 
                <span style="font-size: 12px; color: var(--text-muted);">{{ $v->browser }} ({{ $v->os }})</span>
              </td>
              <td>
                <span style="font-size: 12px; color: var(--text-muted);">{{ $v->first_visited_at ? $v->first_visited_at->format('M d, H:i') : '—' }}</span>
              </td>
              <td>
                <span style="font-size: 12px; color: #fff;">{{ $v->last_visited_at ? $v->last_visited_at->diffForHumans() : '—' }}</span>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="toggleJourney('journey-{{ $v->id }}')">
                  <i class="fa-solid fa-route"></i> View Journey ({{ $v->pageviews->count() }})
                </button>
              </td>
            </tr>
            <!-- Collapsible Journey Row -->
            <tr id="journey-{{ $v->id }}" style="display: none; background: #0b1120;">
              <td colspan="7" style="padding: 16px 24px; border-bottom: 2px solid var(--accent);">
                <h4 style="font-size: 13px; color: #8f89ff; margin-bottom: 10px;">
                  <i class="fa-solid fa-shoe-prints"></i> Browsing History for IP: {{ $v->ip_address }}
                </h4>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                  @forelse($v->pageviews as $pv)
                    <div style="display: flex; align-items: center; gap: 12px; font-size: 13px; padding: 6px 12px; background: #131c2e; border-radius: 6px; border: 1px solid #1e293b;">
                      <span style="color: var(--text-muted); font-size: 11px; min-width: 80px;">{{ $pv->created_at->format('M d, H:i:s') }}</span>
                      <strong style="color: #fff;">{{ $pv->page_title ?: 'Home' }}</strong>
                      <span style="color: #64748b; font-size: 12px;">→ {{ $pv->page_url }}</span>
                      @if($pv->referer)
                        <span style="margin-left: auto; font-size: 11px; color: #94a3b8;">from: {{ $pv->referer }}</span>
                      @endif
                    </div>
                  @empty
                    <p style="color: var(--text-muted); font-size: 12px;">No detailed page logs available.</p>
                  @endforelse
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    @if(method_exists($visitors, 'links'))
      <div style="margin-top: 20px;">
        {{ $visitors->links() }}
      </div>
    @endif
  @endif
</div>

@endsection

@push('scripts')
<script>
  function toggleJourney(id) {
    const el = document.getElementById(id);
    if (el.style.display === 'none' || el.style.display === '') {
      el.style.display = 'table-row';
    } else {
      el.style.display = 'none';
    }
  }

  const ctx = document.getElementById('analyticsChart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: {!! json_encode($chartDates) !!},
      datasets: [
        {
          label: 'Page Views',
          data: {!! json_encode($chartViews) !!},
          backgroundColor: '#635bff',
          borderRadius: 4
        },
        {
          label: 'Unique Visitors',
          data: {!! json_encode($chartVisits) !!},
          backgroundColor: '#10b981',
          borderRadius: 4
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { labels: { color: '#94a3b8' } }
      },
      scales: {
        x: { grid: { color: '#1e293b' }, ticks: { color: '#94a3b8' } },
        y: { grid: { color: '#1e293b' }, ticks: { color: '#94a3b8', stepSize: 1 }, beginAtZero: true }
      }
    }
  });
</script>
@endpush
