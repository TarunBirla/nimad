<header class="site-header" data-header>
  <div class="container header-inner">
    <a class="brand" href="{{ route('home') }}" aria-label="Nimad Tech — home">
      <img src="{{ asset('logo.png') }}" alt="Nimad Tech Logo" class="brand-mark" style="height: 70px; width: auto; max-width: 200px; object-fit: contain; vertical-align: middle;">
    </a>
    <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="Open menu">
      <span class="nav-toggle-open"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 7h16M4 12h16M4 17h16"/></svg></span><span class="nav-toggle-close"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 6l12 12M18 6L6 18"/></svg></span>
    </button>
    <nav id="primary-nav" class="primary-nav" aria-label="Primary">
      <ul>
        <li><a href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a></li>
        <li class="has-menu" data-menu>
          <a href="{{ route('services') }}" @if(request()->is('services*')) aria-current="page" @endif>Services</a>
          <button type="button" class="menu-toggle" aria-expanded="false" aria-controls="services-menu" aria-label="Show services menu"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M6 9l6 6 6-6"/></svg></button>
          <div class="submenu" id="services-menu">
            <ul>
              <li><a href="{{ route('services.custom-software') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg><span>Custom Software Development</span></a></li>
              <li><a href="{{ route('services.web-application') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg><span>Web Application Development</span></a></li>
              <li><a href="{{ route('services.website-design') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg><span>Website Design &amp; Development</span></a></li>
              <li><a href="{{ route('services.mobile-app') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg><span>Mobile App Development</span></a></li>
              <li><a href="{{ route('services.crm-erp') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg><span>CRM &amp; ERP Development</span></a></li>
              <li><a href="{{ route('services.ai-integration') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8z"/><path d="M19 15l.8 2.2L22 18l-2.2.8L19 21l-.8-2.2L16 18l2.2-.8z"/></svg><span>AI Integration &amp; Business Automation</span></a></li>
              <li><a href="{{ route('services.saas-product') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l9 5-9 5-9-5z"/><path d="M3 13l9 5 9-5"/></svg><span>SaaS Product Development</span></a></li>
              <li><a href="{{ route('services.api-development') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9 2v6M15 2v6M6 8h12v3a6 6 0 0 1-12 0zM12 17v5"/></svg><span>API Development &amp; Third-Party Integrations</span></a></li>
              <li><a href="{{ route('services.application-modernization') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"/><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"/><path d="M21 3v5h-5M3 21v-5h5"/></svg><span>Application Modernization</span></a></li>
              <li><a href="{{ route('services.website-maintenance') }}"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span>Website Maintenance &amp; Technical Support</span></a></li>
            </ul>
            <a class="submenu-all" href="{{ route('services') }}">View all services <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
          </div>
        </li>
        <li><a href="{{ route('solutions') }}" @if(request()->routeIs('solutions')) aria-current="page" @endif>Solutions</a></li>
        <li><a href="{{ route('industries') }}" @if(request()->is('industries*')) aria-current="page" @endif>Industries</a></li>
        <li><a href="{{ route('portfolio') }}" @if(request()->is('portfolio*')) aria-current="page" @endif>Portfolio</a></li>
        <li><a href="{{ route('about') }}" @if(request()->routeIs('about')) aria-current="page" @endif>About Us</a></li>
        <li><a href="{{ route('blog') }}" @if(request()->is('blog*')) aria-current="page" @endif>Blog</a></li>
        <li><a href="{{ route('contact') }}" @if(request()->routeIs('contact')) aria-current="page" @endif>Contact</a></li>
      </ul>
      <a class="btn btn--primary btn--sm header-cta" href="{{ route('start-a-project') }}" data-track="project_cta" data-track-label="header">Discuss Your Project</a>
    </nav>
  </div>
</header>
