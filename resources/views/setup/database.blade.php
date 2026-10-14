<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Database Setup | Nimad Tech</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg') }}">
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f8fafc; color: #0f172a; margin: 0; padding: 40px 20px; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
    .card { background-color: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 40px; max-width: 680px; width: 100%; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.06), 0 8px 10px -6px rgba(0,0,0,0.04); }
    .badge-success { background: #d1fae5; color: #047857; padding: 6px 14px; border-radius: 9999px; font-weight: 600; font-size: 13px; display: inline-block; border: 1px solid #a7f3d0; }
    .badge-error { background: #fee2e2; color: #b91c1c; padding: 6px 14px; border-radius: 9999px; font-weight: 600; font-size: 13px; display: inline-block; border: 1px solid #fecaca; }
    h1 { margin: 16px 0 8px 0; font-size: 24px; font-weight: 700; color: #0f172a; }
    p { color: #64748b; font-size: 15px; line-height: 1.6; }
    .table-list { list-style: none; padding: 0; margin: 20px 0; display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; }
    .table-item { background: #f8fafc; padding: 12px 14px; border-radius: 8px; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: space-between; font-size: 14px; font-weight: 500; }
    .table-item.ok { border-color: #a7f3d0; background: #ecfdf5; color: #047857; }
    .credentials { background: #f8fafc; border: 1.5px dashed #635bff; border-radius: 10px; padding: 18px; margin: 24px 0; }
    .credentials h3 { margin: 0 0 10px 0; font-size: 15px; color: #4338ca; }
    .btn { display: inline-block; background: #635bff; color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; font-size: 15px; transition: background 0.2s; box-shadow: 0 4px 6px -1px rgba(99, 91, 255, 0.25); }
    .btn:hover { background: #4f46e5; }
    pre { background: #0f172a; border: 1px solid #1e293b; padding: 14px; border-radius: 8px; font-size: 12px; color: #cbd5e1; overflow-x: auto; max-height: 200px; }
  </style>
</head>
<body>
  <div class="card">
    <div style="text-align: center; margin-bottom: 24px;">
      <img src="{{ asset('logo.jpeg') }}" alt="Nimad Tech" style="height: 48px; border-radius: 8px;">
    </div>

    @if($status === 'success')
      <span class="badge-success">✓ Setup Completed</span>
      <h1>Database Initialized Successfully</h1>
      <p>{{ $message }}</p>

      <div class="credentials">
        <h3>Default Administrator Credentials</h3>
        <p style="margin: 4px 0; color: #334155;"><strong>Login URL:</strong> <a href="{{ route('admin.login') }}" style="color: #635bff; font-weight: 600;">{{ url('/admin/login') }}</a></p>
        <p style="margin: 4px 0; color: #334155;"><strong>Email:</strong> <code style="background: #e2e8f0; padding: 2px 6px; border-radius: 4px;">info@nimadtech.in</code></p>
        <p style="margin: 4px 0; color: #334155;"><strong>Password:</strong> <code style="background: #e2e8f0; padding: 2px 6px; border-radius: 4px;">Birlahariom11@123#$</code></p>
      </div>

      <h3 style="font-size: 15px; margin-bottom: 8px; color: #0f172a;">Verified Tables:</h3>
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

      <div style="background: #eef2ff; border: 1px solid #c7d2fe; border-radius: 8px; padding: 16px; margin: 20px 0; font-size: 14px;">
        <strong style="color: #3730a3;">How to fix:</strong>
        <p style="margin: 6px 0 0 0; color: #312e81;">Open the <code>.env</code> file on your server and enter your hosting database details:</p>
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
