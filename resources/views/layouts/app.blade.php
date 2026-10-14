<!doctype html>
<html lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Nimad Tech | Custom Software, Web & AI Development Company')</title>
  <meta name="description" content="@yield('meta_description', 'Nimad Tech builds custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide.')">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <meta name="theme-color" content="#101828">

  <!-- Open Graph -->
  <meta property="og:site_name" content="Nimad Tech">
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:title" content="@yield('title', 'Nimad Tech | Custom Software, Web & AI Development Company')">
  <meta property="og:description" content="@yield('meta_description', 'Nimad Tech builds custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide.')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('assets/img/og-default.png') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Nimad Tech: Technology That Moves Your Business Forward.">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title', 'Nimad Tech | Custom Software, Web & AI Development Company')">
  <meta name="twitter:description" content="@yield('meta_description', 'Nimad Tech builds custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide.')">
  <meta name="twitter:image" content="{{ asset('assets/img/og-default.png') }}">

  <!-- Favicon -->
  <link rel="icon" type="image/jpeg" href="{{ asset('favicon.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}?v=20261014">

  <script>
    document.documentElement.classList.add('js');
    window.NIMAD = {
      "ga4": "",
      "endpoint": "{{ route('contact') }}",
      "pageType": "@yield('page_type', 'page')"
    };
  </script>

  @yield('schema')
  @stack('head')
</head>
<body data-page-type="@yield('page_type', 'page')">
  <a class="skip-link" href="#main">Skip to main content</a>

  <!-- Announcement Bar -->
  <div class="announce" data-announce role="region" aria-label="Announcement">
    <div class="container announce-inner">
      <p>Planning a new product or system? Book a free project consultation. <a href="{{ route('start-a-project') }}?type=consultation" data-track="project_cta" data-track-label="announcement">Book a consultation <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
      <button type="button" class="announce-close" data-announce-close aria-label="Dismiss announcement"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 6l12 12M18 6L6 18"/></svg></button>
    </div>
  </div>

  <!-- Common Header -->
  @include('layouts.header')

  <!-- Main Content -->
  <main id="main" tabindex="-1">
    @yield('content')
  </main>

  <!-- Common Footer -->
  @include('layouts.footer')

  <!-- Scripts -->
  <script src="{{ asset('assets/js/main.js') }}?v=20261014" defer></script>
  @stack('scripts')
</body>
</html>
