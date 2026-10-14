@extends('layouts.app')

@section('title', 'Subscription learning portal for schools | Nimad Tech')
@section('meta_description', 'Multi-tenant platform where schools manage courses, students and progress. A Nimad Tech demonstration project.')
@section('page_type', 'case-study')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://nimadtech.in/portfolio/"},{"@type":"ListItem","position":3,"name":"Subscription learning portal for schools","item":"https://nimadtech.in/portfolio/learning-portal-saas/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li><a href="/portfolio">Portfolio</a></li><li aria-current="page">Subscription learning portal for schools</li></ol></nav>
    <p class="eyebrow">Demonstration project</p>
    <h1>Subscription learning portal for schools</h1>
    <p class="lead">Multi-tenant platform where schools manage courses, students and progress.</p>
    
  </div>
</section>
<section class="section"><div class="container case">
  <div class="case-main">
    <figure class="case-image"><img src="{{ asset('assets/img/projects/learning-portal-saas.svg') }}" alt="Illustrative interface concept for Subscription learning portal for schools" width="640" height="400" decoding="async"></figure>
    <p class="note-inline"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span><strong>Demonstration project.</strong> This is an illustrative concept created to show our approach. It is not a real client engagement, and the outcome below describes intended goals, not achieved results.</span></p>
    <h2>The challenge</h2><p>An education business wants to offer its curriculum to many schools, each needing its own users, data and branding.</p>
    <h2>The solution</h2><p>A multi-tenant SaaS with school accounts, teacher and student roles, course delivery with progress tracking and subscription billing.</p>
    <h2>Key features</h2><ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>School accounts and roles</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Course and progress tracking</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Subscription billing</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Admin console</li></ul>
    <h2>Intended outcome</h2><p>a product that onboards new schools without custom work each time. Adoption would be measured after launch.</p>
  </div>
  <aside class="case-side" aria-label="Project details">
    <dl>
      <dt>Industry</dt><dd><a href="/industries/education-elearning">Education &amp; E-learning</a></dd>
      <dt>Services</dt><dd><ul><li><a href="/services/saas-product-development">SaaS Product Development</a></li><li><a href="/services/web-application-development">Web Application Development</a></li></ul></dd>
      <dt>Technology stack</dt><dd><ul class="chips"><li>Next.js</li><li>Node.js</li><li>PostgreSQL</li></ul></dd>
    </dl>
    <a class="btn btn--primary" href="/start-a-project?service=saas-product-development" data-track="project_cta" data-track-label="case_study_side">Discuss a similar project</a>
  </aside>
</div></section>
<section class="section section--soft"><div class="container">
  <div class="section-head">
  <p class="eyebrow">Related services</p>
  <h2>Services behind this project</h2>
  
</div>
  <div class="grid grid-3"><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l9 5-9 5-9-5z"/><path d="M3 13l9 5 9-5"/></svg></div>
  <h3><a href="/services/saas-product-development" class="card-link">SaaS Product Development</a></h3>
  <p>From idea to launched subscription product, with architecture ready to scale.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>MVP scoping and phased roadmaps</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Multi-tenant architecture and user management</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Subscription and payment integration</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
  <h3><a href="/services/web-application-development" class="card-link">Web Application Development</a></h3>
  <p>Fast, secure browser-based applications for customers, staff and partners.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Customer and partner portals with secure login</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Dashboards, data tables and charts</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Booking, ordering and payment flows</li></ul>
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
