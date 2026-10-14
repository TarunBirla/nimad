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
    <h3 class="card-title"><i class="fa-solid fa-chart-column" style="color: #635bff; margin-right: 8px;"></i> Traffic & Unique Visitors Trend (Last 14 Days)</h3>
  </div>
  <div style="height: 300px; position: relative;">
    <canvas id="analyticsChart"></canvas>
  </div>
</div>

<!-- Top Pages -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><i class="fa-solid fa-fire-flame-curved" style="color: #d97706; margin-right: 8px;"></i> Most Popular Pages</h3>
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
              <td><span style="font-weight: 700; color: #635bff;">#{{ $idx + 1 }}</span></td>
              <td><strong style="color: #0f172a;">{{ $p->page_title ?: 'Home' }}</strong></td>
              <td><a href="{{ $p->page_url }}" target="_blank" style="color: #2563eb; text-decoration: none; font-size: 13px; font-weight: 500;">{{ $p->page_url }}</a></td>
              <td><strong style="color: #059669;">{{ $p->total }} views</strong></td>
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
      <h3 class="card-title"><i class="fa-solid fa-network-wired" style="color: #059669; margin-right: 8px;"></i> Unique Visitor Profiles & Browsing Journeys</h3>
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
                <span style="font-family: monospace; font-size: 14px; font-weight: 700; color: #0284c7;">{{ $v->ip_address }}</span>
              </td>
              <td>
                <span class="badge" style="background: #ecfdf5; color: #047857; border: 1px solid #a7f3d0; font-size: 12px; font-weight: 600;">
                  <i class="fa-solid fa-rotate"></i> {{ $v->total_visits }} {{ Str::plural('time', $v->total_visits) }}
                </span>
              </td>
              <td>
                <strong style="color: #0f172a;">{{ $v->total_pageviews }}</strong> pages
              </td>
              <td>
                <span style="color: #334155; font-weight: 500;">{{ $v->device ?? 'Desktop' }}</span> • 
                <span style="font-size: 12px; color: var(--text-muted);">{{ $v->browser }} ({{ $v->os }})</span>
              </td>
              <td>
                <span style="font-size: 12px; color: var(--text-muted);">{{ $v->first_visited_at ? $v->first_visited_at->format('M d, H:i') : '—' }}</span>
              </td>
              <td>
                <span style="font-size: 12px; font-weight: 500; color: #0f172a;">{{ $v->last_visited_at ? $v->last_visited_at->diffForHumans() : '—' }}</span>
              </td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" onclick="toggleJourney('journey-{{ $v->id }}')">
                  <i class="fa-solid fa-route"></i> View Journey ({{ $v->pageviews->count() }})
                </button>
              </td>
            </tr>
            <!-- Collapsible Journey Row -->
            <tr id="journey-{{ $v->id }}" style="display: none; background: #f8fafc;">
              <td colspan="7" style="padding: 18px 24px; border-bottom: 2px solid var(--accent);">
                <h4 style="font-size: 14px; font-weight: 700; color: #4338ca; margin-bottom: 12px;">
                  <i class="fa-solid fa-shoe-prints"></i> Browsing History for IP: {{ $v->ip_address }}
                </h4>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                  @forelse($v->pageviews as $pv)
                    <div style="display: flex; align-items: center; gap: 12px; font-size: 13px; padding: 10px 14px; background: #ffffff; border-radius: 8px; border: 1px solid #e2e8f0; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">
                      <span style="color: var(--text-muted); font-size: 12px; font-weight: 500; min-width: 80px;">{{ $pv->created_at->format('M d, H:i:s') }}</span>
                      <strong style="color: #0f172a;">{{ $pv->page_title ?: 'Home' }}</strong>
                      <span style="color: #64748b; font-size: 12px;">→ {{ $pv->page_url }}</span>
                      @if($pv->referer)
                        <span style="margin-left: auto; font-size: 12px; color: #94a3b8;">from: {{ $pv->referer }}</span>
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
