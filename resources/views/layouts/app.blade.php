<!doctype html>
<html lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Nimad Tech | Custom Software, Web & AI Development Company')</title>
  <meta name="description" content="@yield('meta_description', 'Nimad Tech builds custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide.')">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="{{ url()->current() }}">
  <meta name="theme-color" content="#101828">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- GEO & Local Business Meta for AEO / GEO -->
  <meta name="geo.region" content="IN-MP">
  <meta name="geo.placename" content="Nimad, Madhya Pradesh, India">
  <meta name="geo.position" content="21.8257;76.3526">
  <meta name="ICBM" content="21.8257, 76.3526">

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

  <!-- LLM & AEO Semantic Knowledge Graph Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": ["Organization", "ProfessionalService"],
        "@id": "{{ url('/') }}#organization",
        "name": "Nimad Tech",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('logo.png') }}",
        "description": "Nimad Tech is a premier custom software development, AI automation, CRM/ERP and digital product engineering company serving businesses in India and globally.",
        "email": "info@nimadtech.in",
        "address": {
          "@type": "PostalAddress",
          "addressRegion": "Madhya Pradesh",
          "addressCountry": "IN"
        },
        "knowsAbout": [
          "Custom Software Development",
          "Web Application Development",
          "Laravel & PHP Development",
          "Artificial Intelligence Automation",
          "Mobile App Development",
          "CRM & ERP Systems",
          "SaaS Product Engineering",
          "API Integration",
          "Application Modernization"
        ],
        "areaServed": [
          {"@type": "Country", "name": "India"},
          {"@type": "Country", "name": "United Arab Emirates"},
          {"@type": "City", "name": "Dubai"},
          {"@type": "Country", "name": "United States"},
          {"@type": "Country", "name": "United Kingdom"},
          {"@type": "Country", "name": "Global"}
        ]
      },
      {
        "@type": "WebSite",
        "@id": "{{ url('/') }}#website",
        "url": "{{ url('/') }}",
        "name": "Nimad Tech",
        "publisher": {"@id": "{{ url('/') }}#organization"},
        "inLanguage": "en-IN"
      }
    ]
  }
  </script>

  <script>
    document.documentElement.classList.add('js');
    window.NIMAD = {
      "ga4": "",
      "endpoint": "{{ route('contact.submit') }}",
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

  <!-- Floating WhatsApp Action -->
  <a class="wa-float" href="https://wa.me/919575370343?text=Hi%20Nimad%20Tech%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" aria-label="Chat with Nimad Tech on WhatsApp" title="Chat on WhatsApp (+91 95753 70343)">
    <svg class="icon" viewBox="0 0 24 24" width="30" height="30" fill="currentColor" aria-hidden="true" focusable="false">
      <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.16 12.04 20.16C10.66 20.16 9.3 19.8 8.1 19.09L7.81 18.92L4.69 19.74L5.52 16.7L5.33 16.39C4.55 15.16 4.14 13.56 4.14 11.92C4.14 7.38 7.84 3.67 12.05 3.67ZM8.83 7.37C8.63 7.37 8.31 7.44 8.04 7.74C7.77 8.04 7.02 8.74 7.02 10.17C7.02 11.6 8.06 12.98 8.21 13.18C8.36 13.38 10.27 16.33 13.2 17.6C13.9 17.9 14.44 18.08 14.86 18.21C15.56 18.43 16.2 18.4 16.7 18.33C17.26 18.25 18.42 17.63 18.66 16.95C18.9 16.27 18.9 15.69 18.83 15.57C18.76 15.45 18.57 15.38 18.27 15.23C17.97 15.08 16.52 14.37 16.25 14.27C15.98 14.17 15.78 14.12 15.58 14.42C15.38 14.72 14.81 15.38 14.64 15.57C14.47 15.77 14.3 15.79 14 15.64C13.7 15.49 12.74 15.18 11.61 14.17C10.73 13.38 10.13 12.41 9.96 12.11C9.79 11.81 9.94 11.65 10.09 11.5C10.23 11.37 10.39 11.16 10.54 10.98C10.69 10.81 10.74 10.68 10.84 10.48C10.94 10.28 10.89 10.11 10.82 9.96C10.74 9.81 10.14 8.33 9.89 7.73C9.65 7.15 9.41 7.23 9.23 7.22C9.06 7.21 8.86 7.21 8.66 7.21L8.83 7.37Z"/>
    </svg>
  </a>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/main.js') }}?v=20261014" defer></script>
  @stack('scripts')
</body>
</html>
