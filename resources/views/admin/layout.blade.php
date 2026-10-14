<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin Dashboard') | Nimad Tech Admin</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    :root {
      --bg: #0b1120;
      --card-bg: #131c2e;
      --card-border: #1e293b;
      --navy: #0f172a;
      --accent: #635bff;
      --accent-hover: #4f46e5;
      --text: #f8fafc;
      --text-muted: #94a3b8;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg); color: var(--text); min-height: 100vh; display: flex; }
    
    /* Sidebar */
    .sidebar { width: 260px; background-color: var(--card-bg); border-right: 1px solid var(--card-border); display: flex; flex-direction: column; flex-shrink: 0; }
    .sidebar-header { padding: 24px 20px; border-bottom: 1px solid var(--card-border); display: flex; align-items: center; gap: 12px; }
    .sidebar-header img { height: 32px; border-radius: 6px; }
    .sidebar-nav { padding: 20px 12px; flex: 1; display: flex; flex-direction: column; gap: 4px; }
    .nav-link { display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 8px; color: var(--text-muted); text-decoration: none; font-weight: 500; font-size: 14px; transition: all 0.2s; }
    .nav-link:hover { background-color: #1a253c; color: var(--text); }
    .nav-link.active { background-color: var(--accent); color: #fff; font-weight: 600; }
    .nav-link i { font-size: 16px; width: 20px; text-align: center; }
    .nav-badge { margin-left: auto; background: #e02424; color: #fff; font-size: 11px; padding: 2px 7px; border-radius: 9999px; font-weight: 700; }

    .sidebar-footer { padding: 16px; border-top: 1px solid var(--card-border); }
    .btn-logout { width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 10px; background: transparent; border: 1px solid var(--card-border); color: #f87171; border-radius: 8px; cursor: pointer; font-size: 14px; font-weight: 600; transition: all 0.2s; }
    .btn-logout:hover { background: #450a0a; border-color: #7f1d1d; }

    /* Content Area */
    .main-wrap { flex: 1; display: flex; flex-direction: column; min-width: 0; overflow-y: auto; }
    .topbar { height: 64px; background-color: var(--card-bg); border-bottom: 1px solid var(--card-border); display: flex; align-items: center; justify-content: space-between; padding: 0 30px; }
    .topbar-title { font-size: 18px; font-weight: 600; color: #fff; }
    .user-info { display: flex; align-items: center; gap: 10px; font-size: 14px; color: var(--text-muted); }
    .user-avatar { width: 34px; height: 34px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 600; }

    .content { padding: 30px; }

    /* Cards & Stats */
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px; }
    .stat-card { background: var(--card-bg); border: 1px solid var(--card-border); border-radius: 12px; padding: 20px; display: flex; align-items: center; gap: 16px; }
    .stat-icon { width: 48px; height: 48px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
    .stat-icon.purple { background: rgba(99, 91, 255, 0.15); color: #8f89ff; }
    .stat-icon.green { background: rgba(16, 185, 129, 0.15); color: #34d399; }
    .stat-icon.blue { background: rgba(59, 130, 246, 0.15); color: #60a5fa; }
    .stat-icon.orange { background: rgba(245, 158, 11, 0.15); color: #fbbf24; }
    .stat-val { font-size: 24px; font-weight: 700; color: #fff; }
    .stat-label { font-size: 13px; color: var(--text-muted); margin-top: 2px; }

    /* Tables */
    .card { background: var(--card-bg); border: 1px solid var(--card-border); border-radius: 12px; padding: 24px; margin-bottom: 30px; }
    .card-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; }
    .card-title { font-size: 16px; font-weight: 600; color: #fff; }
    table { width: 100%; border-collapse: collapse; font-size: 14px; text-align: left; }
    th { padding: 12px 16px; color: var(--text-muted); font-weight: 600; border-bottom: 1px solid var(--card-border); }
    td { padding: 14px 16px; border-bottom: 1px solid var(--card-border); color: #cbd5e1; vertical-align: middle; }
    tr:hover td { background-color: #1a253c; }

    /* Badges */
    .badge { display: inline-block; padding: 4px 10px; border-radius: 9999px; font-size: 12px; font-weight: 600; }
    .badge-unread { background: #451a03; color: #f59e0b; border: 1px solid #78350f; }
    .badge-read { background: #064e3b; color: #34d399; border: 1px solid #065f46; }
    .badge-tag { background: #1e293b; color: #94a3b8; }

    /* Buttons */
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; border-radius: 6px; font-size: 14px; font-weight: 600; cursor: pointer; text-decoration: none; border: none; transition: all 0.2s; }
    .btn-primary { background: var(--accent); color: #fff; }
    .btn-primary:hover { background: var(--accent-hover); }
    .btn-danger { background: #ef4444; color: #fff; }
    .btn-danger:hover { background: #dc2626; }
    .btn-sm { padding: 5px 10px; font-size: 12px; }

    /* Flash Alerts */
    .alert-success { background: #064e3b; border: 1px solid #059669; color: #a7f3d0; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 14px; }
    .alert-danger { background: #450a0a; border: 1px solid #dc2626; color: #fecaca; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 14px; }

    /* Forms */
    .form-group { margin-bottom: 20px; }
    .form-label { display: block; font-size: 14px; font-weight: 500; color: #e2e8f0; margin-bottom: 8px; }
    .form-control { width: 100%; padding: 10px 14px; background: #0b1120; border: 1px solid var(--card-border); border-radius: 8px; color: #fff; font-size: 14px; outline: none; }
    .form-control:focus { border-color: var(--accent); }
    textarea.form-control { min-height: 140px; resize: vertical; }

    @media (max-width: 900px) {
      body { flex-direction: column; }
      .sidebar { width: 100%; height: auto; }
    }
  </style>
  @stack('styles')
</head>
<body>
  <!-- Sidebar Navigation -->
  <aside class="sidebar">
    <div class="sidebar-header">
      <img src="{{ asset('logo.png') }}" alt="Nimad Tech">
      <span style="font-weight: 700; font-size: 16px; color: #fff;">Admin Portal</span>
    </div>
    <nav class="sidebar-nav">
      <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="fa-solid fa-chart-pie"></i>
        <span>Dashboard</span>
      </a>
      <a href="{{ route('admin.contacts') }}" class="nav-link {{ request()->routeIs('admin.contacts') ? 'active' : '' }}">
        <i class="fa-solid fa-envelope-open-text"></i>
        <span>Contact Leads</span>
        @php $unreadContacts = \App\Models\Contact::where('status', 'unread')->count(); @endphp
        @if($unreadContacts > 0)
          <span class="nav-badge">{{ $unreadContacts }}</span>
        @endif
      </a>
      <a href="{{ route('admin.projects') }}" class="nav-link {{ request()->routeIs('admin.projects') ? 'active' : '' }}">
        <i class="fa-solid fa-rocket"></i>
        <span>Project Requests</span>
        @php $unreadProjects = \App\Models\ProjectRequest::where('status', 'unread')->count(); @endphp
        @if($unreadProjects > 0)
          <span class="nav-badge">{{ $unreadProjects }}</span>
        @endif
      </a>
      <a href="{{ route('admin.blogs.index') }}" class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
        <i class="fa-solid fa-newspaper"></i>
        <span>Blogs & Articles</span>
      </a>
      <a href="{{ route('admin.analytics') }}" class="nav-link {{ request()->routeIs('admin.analytics') ? 'active' : '' }}">
        <i class="fa-solid fa-users-viewfinder"></i>
        <span>Visitor Analytics</span>
      </a>
      <a href="{{ route('home') }}" target="_blank" class="nav-link">
        <i class="fa-solid fa-arrow-up-right-from-square"></i>
        <span>View Website</span>
      </a>
    </nav>
    <div class="sidebar-footer">
      <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn-logout">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <span>Sign Out</span>
        </button>
      </form>
    </div>
  </aside>

  <!-- Main Content Area -->
  <div class="main-wrap">
    <header class="topbar">
      <div class="topbar-title">@yield('title', 'Admin Dashboard')</div>
      <div class="user-info">
        <div class="user-avatar"><i class="fa-solid fa-user-shield"></i></div>
        <span>{{ auth()->user()->name ?? 'Administrator' }} ({{ auth()->user()->email ?? 'info@nimadtech.in' }})</span>
      </div>
    </header>

    <main class="content">
      @if(session('success'))
        <div class="alert-success">
          <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
        </div>
      @endif
      @if(session('error'))
        <div class="alert-danger">
          <i class="fa-solid fa-circle-exclamation"></i> {{ session('error') }}
        </div>
      @endif

      @yield('content')
    </main>
  </div>

  @stack('scripts')
</body>
</html>
