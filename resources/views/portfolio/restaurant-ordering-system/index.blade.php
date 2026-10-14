@extends('layouts.app')

@section('title', 'Direct ordering system for a restaurant group | Nimad Tech')
@section('meta_description', 'Commission-free online ordering with menu management and kitchen order screen. A Nimad Tech demonstration project.')
@section('page_type', 'case-study')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://nimadtech.in/portfolio/"},{"@type":"ListItem","position":3,"name":"Direct ordering system for a restaurant group","item":"https://nimadtech.in/portfolio/restaurant-ordering-system/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li><a href="/portfolio">Portfolio</a></li><li aria-current="page">Direct ordering system for a restaurant group</li></ol></nav>
    <p class="eyebrow">Demonstration project</p>
    <h1>Direct ordering system for a restaurant group</h1>
    <p class="lead">Commission-free online ordering with menu management and kitchen order screen.</p>
    
  </div>
</section>
<section class="section"><div class="container case">
  <div class="case-main">
    <figure class="case-image"><img src="{{ asset('assets/img/projects/restaurant-ordering-system.svg') }}" alt="Illustrative interface concept for Direct ordering system for a restaurant group" width="640" height="400" decoding="async"></figure>
    <p class="note-inline"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span><strong>Demonstration project.</strong> This is an illustrative concept created to show our approach. It is not a real client engagement, and the outcome below describes intended goals, not achieved results.</span></p>
    <h2>The challenge</h2><p>A restaurant group depends on third-party marketplaces for most online orders, paying commission and having little access to customer data.</p>
    <h2>The solution</h2><p>A branded ordering site and app with a menu admin, order status tracking and a kitchen display. Payment and messaging providers are connected through APIs.</p>
    <h2>Key features</h2><ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Menu and availability admin</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Order status tracking</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Kitchen display screen</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Payment gateway integration</li></ul>
    <h2>Intended outcome</h2><p>more orders placed directly and better insight into repeat customers. Actual results depend on traffic and operations and would be reported against agreed measures.</p>
  </div>
  <aside class="case-side" aria-label="Project details">
    <dl>
      <dt>Industry</dt><dd><a href="/industries/hospitality">Hospitality</a></dd>
      <dt>Services</dt><dd><ul><li><a href="/services/web-application-development">Web Application Development</a></li><li><a href="/services/mobile-app-development">Mobile App Development</a></li><li><a href="/services/api-development-integrations">API Development &amp; Third-Party Integrations</a></li></ul></dd>
      <dt>Technology stack</dt><dd><ul class="chips"><li>Next.js</li><li>Node.js</li><li>PostgreSQL</li></ul></dd>
    </dl>
    <a class="btn btn--primary" href="/start-a-project?service=web-application-development" data-track="project_cta" data-track-label="case_study_side">Discuss a similar project</a>
  </aside>
</div></section>
<section class="section section--soft"><div class="container">
  <div class="section-head">
  <p class="eyebrow">Related services</p>
  <h2>Services behind this project</h2>
  
</div>
  <div class="grid grid-3"><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
  <h3><a href="/services/web-application-development" class="card-link">Web Application Development</a></h3>
  <p>Fast, secure browser-based applications for customers, staff and partners.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Customer and partner portals with secure login</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Dashboards, data tables and charts</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Booking, ordering and payment flows</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg></div>
  <h3><a href="/services/mobile-app-development" class="card-link">Mobile App Development</a></h3>
  <p>Mobile apps for customers and field teams, with the right approach for your budget.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Cross-platform and native options, chosen per project</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Secure login and role-based access</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Push notifications and in-app messaging</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9 2v6M15 2v6M6 8h12v3a6 6 0 0 1-12 0zM12 17v5"/></svg></div>
  <h3><a href="/services/api-development-integrations" class="card-link">API Development &amp; Third-Party Integrations</a></h3>
  <p>Reliable APIs and integrations that connect your systems and partners.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>REST API design, versioning and documentation</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Authentication and rate limiting</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Payment, SMS, email and messaging integrations</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article></div>
</div></section>
<section class="cta-band" aria-labelledby="cta-title">
  <div class="container cta-inner">
    <div>
      <h2 id="cta-title">Have an Idea? Let’s Build It Together.</h2>
      <p>Tell us about your business goals, technical challenges, or next digital product. Let’s explore the right solution for you.</p>
    </div>
    <div class="cta-actions">
      <a class="btn btn--primary btn--lg" href="/start-a-project" data-track="project_cta" data-track-label="cta_band">Discuss Your Project</a>
      <a class="btn btn--outline-light btn--lg" href="/contact">Contact Nimad Tech</a>
    </div>
  </div>
</section>

@endsection
