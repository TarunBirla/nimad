<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin Dashboard') | Nimad Tech Admin</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    :root {
      --bg: #f8fafc;
      --card-bg: #ffffff;
      --card-border: #e2e8f0;
      --navy: #0f172a;
      --accent: #635bff;
      --accent-hover: #4f46e5;
      --text: #0f172a;
      --text-muted: #64748b;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
      --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px -1px rgba(0, 0, 0, 0.05);
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: var(--bg); color: var(--text); min-height: 100vh; display: flex; }
    
    /* Sidebar */
    .sidebar { width: 260px; background-color: #ffffff; border-right: 1px solid var(--card-border); display: flex; flex-direction: column; flex-shrink: 0; }
    .sidebar-header { padding: 24px 20px; border-bottom: 1px solid var(--card-border); display: flex; align-items: center; gap: 12px; }
    .sidebar-header img { height: 52px; border-radius: 6px; }
    .sidebar-nav { padding: 20px 12px; flex: 1; display: flex; flex-direction: column; gap: 4px; }
    .nav-link { display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 8px; color: var(--text-muted); text-decoration: none; font-weight: 500; font-size: 14px; transition: all 0.2s; }
    .nav-link:hover { background-color: #f1f5f9; color: var(--text); }
    .nav-link.active { background-color: var(--accent); color: #fff; font-weight: 600; box-shadow: 0 4px 6px -1px rgba(99, 91, 255, 0.25); }
    .nav-link i { font-size: 16px; width: 20px; text-align: center; }
    .nav-badge { margin-left: auto; background: #ef4444; color: #fff; font-size: 11px; padding: 2px 7px; border-radius: 9999px; font-weight: 700; }

    .sidebar-footer { padding: 16px; border-top: 1px solid var(--card-border); }
    .btn-logout { width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 10px; background: #fef2f2; border: 1px solid #fecaca; color: #dc2626; border-radius: 8px; cursor: pointer; font-size: 14px; font-weight: 600; transition: all 0.2s; }
    .btn-logout:hover { background: #fee2e2; border-color: #fca5a5; }

    /* Content Area */
    .main-wrap { flex: 1; display: flex; flex-direction: column; min-width: 0; overflow-y: auto; }
    .topbar { height: 64px; background-color: #ffffff; border-bottom: 1px solid var(--card-border); display: flex; align-items: center; justify-content: space-between; padding: 0 30px; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.03); }
    .topbar-title { font-size: 18px; font-weight: 700; color: #0f172a; }
    .user-info { display: flex; align-items: center; gap: 10px; font-size: 14px; color: var(--text-muted); }
    .user-avatar { width: 34px; height: 34px; border-radius: 50%; background: var(--accent); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 600; font-size: 14px; }

    .content { padding: 30px; }

    /* Cards & Stats */
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px; }
    .stat-card { background: var(--card-bg); border: 1px solid var(--card-border); border-radius: 12px; padding: 22px; display: flex; align-items: center; gap: 16px; box-shadow: var(--shadow); }
    .stat-icon { width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
    .stat-icon.purple { background: #ede9fe; color: #635bff; }
    .stat-icon.green { background: #d1fae5; color: #059669; }
    .stat-icon.blue { background: #dbeafe; color: #2563eb; }
    .stat-icon.orange { background: #fef3c7; color: #d97706; }
    .stat-val { font-size: 26px; font-weight: 800; color: #0f172a; }
    .stat-label { font-size: 13px; color: var(--text-muted); margin-top: 2px; }

    /* Tables */
    .card { background: var(--card-bg); border: 1px solid var(--card-border); border-radius: 12px; padding: 24px; margin-bottom: 30px; box-shadow: var(--shadow); }
    .card-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; }
    .card-title { font-size: 17px; font-weight: 700; color: #0f172a; }
    table { width: 100%; border-collapse: collapse; font-size: 14px; text-align: left; }
    th { padding: 12px 16px; color: #475569; font-weight: 600; border-bottom: 1px solid var(--card-border); background-color: #f8fafc; font-size: 13px; text-transform: uppercase; letter-spacing: 0.02em; }
    td { padding: 14px 16px; border-bottom: 1px solid var(--card-border); color: #334155; vertical-align: middle; }
    tr:hover td { background-color: #f8fafc; }

    /* Badges */
    .badge { display: inline-block; padding: 4px 10px; border-radius: 9999px; font-size: 12px; font-weight: 600; }
    .badge-unread { background: #fef3c7; color: #b45309; border: 1px solid #fde68a; }
    .badge-read { background: #d1fae5; color: #047857; border: 1px solid #a7f3d0; }
    .badge-tag { background: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; }

    /* Buttons */
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 8px 16px; border-radius: 6px; font-size: 14px; font-weight: 600; cursor: pointer; text-decoration: none; border: none; transition: all 0.2s; }
    .btn-primary { background: var(--accent); color: #fff; }
    .btn-primary:hover { background: var(--accent-hover); }
    .btn-danger { background: #ef4444; color: #fff; }
    .btn-danger:hover { background: #dc2626; }
    .btn-sm { padding: 5px 12px; font-size: 12px; }

    /* Flash Alerts */
    .alert-success { background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 14px; font-weight: 500; }
    .alert-danger { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; padding: 14px 18px; border-radius: 8px; margin-bottom: 24px; font-size: 14px; font-weight: 500; }

    /* Forms */
    .form-group { margin-bottom: 20px; }
    .form-label { display: block; font-size: 14px; font-weight: 600; color: #334155; margin-bottom: 8px; }
    .form-control { width: 100%; padding: 10px 14px; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; color: #0f172a; font-size: 14px; outline: none; transition: border-color 0.2s; }
    .form-control:focus { border-color: var(--accent); box-shadow: 0 0 0 3px rgba(99, 91, 255, 0.15); }
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
        <span><strong>{{ auth()->user()->name ?? 'Administrator' }}</strong> ({{ auth()->user()->email ?? 'info@nimadtech.in' }})</span>
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
