<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Database Setup | Nimad Tech</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.png') }}">
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #0f172a; color: #f8fafc; margin: 0; padding: 40px 20px; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
    .card { background-color: #1e293b; border: 1px solid #334155; border-radius: 16px; padding: 40px; max-width: 680px; width: 100%; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.5); }
    .badge-success { background: #065f46; color: #34d399; padding: 6px 14px; border-radius: 9999px; font-weight: 600; font-size: 13px; display: inline-block; }
    .badge-error { background: #991b1b; color: #fca5a5; padding: 6px 14px; border-radius: 9999px; font-weight: 600; font-size: 13px; display: inline-block; }
    h1 { margin: 16px 0 8px 0; font-size: 24px; font-weight: 700; }
    p { color: #94a3b8; font-size: 15px; line-height: 1.6; }
    .table-list { list-style: none; padding: 0; margin: 20px 0; display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; }
    .table-item { background: #0f172a; padding: 10px 14px; border-radius: 8px; border: 1px solid #334155; display: flex; align-items: center; justify-content: space-between; font-size: 14px; }
    .table-item.ok { border-color: #059669; color: #a7f3d0; }
    .credentials { background: #131c2e; border: 1px dashed #635bff; border-radius: 10px; padding: 18px; margin: 24px 0; }
    .credentials h3 { margin: 0 0 10px 0; font-size: 15px; color: #8f89ff; }
    .btn { display: inline-block; background: #635bff; color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; font-size: 15px; transition: background 0.2s; }
    .btn:hover { background: #4f46e5; }
    pre { background: #0b1120; border: 1px solid #1e293b; padding: 14px; border-radius: 8px; font-size: 12px; color: #cbd5e1; overflow-x: auto; max-height: 200px; }
  </style>
</head>
<body>
  <div class="card">
    <div style="text-align: center; margin-bottom: 24px;">
      <img src="{{ asset('logo.png') }}" alt="Nimad Tech" style="height: 48px; border-radius: 8px;">
    </div>

    @if($status === 'success')
      <span class="badge-success">✓ Setup Completed</span>
      <h1>Database Initialized Successfully</h1>
      <p>{{ $message }}</p>

      <div class="credentials">
        <h3>Default Administrator Credentials</h3>
        <p style="margin: 4px 0; color: #e2e8f0;"><strong>Login URL:</strong> <a href="{{ route('admin.login') }}" style="color: #8f89ff;">{{ url('/admin/login') }}</a></p>
        <p style="margin: 4px 0; color: #e2e8f0;"><strong>Email:</strong> <code>info@nimadtech.in</code></p>
        <p style="margin: 4px 0; color: #e2e8f0;"><strong>Password:</strong> <code>Birlahariom11@123#$</code></p>
      </div>

      <h3 style="font-size: 15px; margin-bottom: 8px;">Verified Tables:</h3>
      <ul class="table-list">
        @foreach($tables as $tbl => $exists)
          <li class="table-item {{ $exists ? 'ok' : '' }}">
            <span><code>{{ $tbl }}</code></span>
            <span>{{ $exists ? '✓ Created' : '✗ Failed' }}</span>
          </li>
        @endforeach
      </ul>

      <div style="margin-top: 30px; text-align: center;">
        <a href="{{ route('admin.login') }}" class="btn">Proceed to Admin Login →</a>
      </div>

    @else
      <span class="badge-error">✗ Connection Failed</span>
      <h1>Database Setup Error</h1>
      <p>{{ $message }}</p>

      @if($error_detail)
        <pre>{{ $error_detail }}</pre>
      @endif

      <div style="background: #1e1b4b; border: 1px solid #4338ca; border-radius: 8px; padding: 16px; margin: 20px 0; font-size: 14px;">
        <strong style="color: #a5b4fc;">How to fix:</strong>
        <p style="margin: 6px 0 0 0; color: #e0e7ff;">Open the <code>.env</code> file on your server and enter your hosting database details:</p>
        <pre style="margin-top: 8px; background: #0f172a;">DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password</pre>
      </div>

      <div style="text-align: center; margin-top: 20px;">
        <a href="{{ url('/setup-database') }}" class="btn">Retry Database Setup ↻</a>
      </div>
    @endif
  </div>
</body>
</html>
