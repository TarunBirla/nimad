<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login | Nimad Tech</title>
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.jpeg') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f8fafc; color: #0f172a; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
    .login-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 40px; width: 100%; max-width: 440px; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.06), 0 8px 10px -6px rgba(0, 0, 0, 0.04); }
    .logo-wrap { text-align: center; margin-bottom: 24px; }
    .logo-wrap img { height: 42px; border-radius: 8px; }
    h1 { font-size: 22px; font-weight: 700; margin-bottom: 6px; text-align: center; color: #0f172a; }
    p.sub { font-size: 14px; color: #64748b; text-align: center; margin-bottom: 28px; }
    .form-group { margin-bottom: 20px; }
    label { display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 8px; }
    input[type="email"], input[type="password"] { width: 100%; padding: 12px 14px; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; color: #0f172a; font-size: 14px; outline: none; transition: border-color 0.2s, box-shadow 0.2s; }
    input[type="email"]:focus, input[type="password"]:focus { border-color: #635bff; box-shadow: 0 0 0 3px rgba(99, 91, 255, 0.15); }
    .checkbox-wrap { display: flex; align-items: center; gap: 8px; font-size: 13px; color: #64748b; margin-bottom: 24px; cursor: pointer; }
    .btn-submit { width: 100%; padding: 12px; background: #635bff; color: #fff; border: none; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 4px 6px -1px rgba(99, 91, 255, 0.25); }
    .btn-submit:hover { background: #4f46e5; }
    .alert-error { background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 20px; }
    .alert-success { background: #ecfdf5; border: 1px solid #a7f3d0; color: #065f46; padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 20px; }
    .back-link { text-align: center; margin-top: 24px; font-size: 13px; }
    .back-link a { color: #635bff; text-decoration: none; font-weight: 500; }
    .back-link a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="logo-wrap">
      <img src="{{ asset('logo.png') }}" alt="Nimad Tech">
    </div>
    <h1>Welcome Back</h1>
    <p class="sub">Sign in to manage inquiries, projects, and articles</p>

    @if(session('success'))
      <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
      <div class="alert-error">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}">
      @csrf
      <div class="form-group">
        <label for="email">Admin Email</label>
        <input type="email" id="email" name="email" value="{{ old('email', 'info@nimadtech.in') }}" required autofocus autocomplete="email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="current-password">
      </div>

      <label class="checkbox-wrap">
        <input type="checkbox" name="remember" value="1" checked>
        <span>Remember me on this browser</span>
      </label>

      <button type="submit" class="btn-submit">
        <i class="fa-solid fa-lock"></i>
        <span>Sign In to Admin</span>
      </button>
    </form>

    <div class="back-link">
      <a href="{{ route('home') }}">← Return to Nimad Tech Website</a>
    </div>
  </div>
</body>
</html>
