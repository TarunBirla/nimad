@extends('layouts.app')

@section('title', 'Multi-location clinic appointment platform | Nimad Tech')
@section('meta_description', 'Online booking, reminders and a scheduling dashboard for a clinic with several practitioners. A Nimad Tech demonstration project.')
@section('page_type', 'case-study')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://nimadtech.in/portfolio/"},{"@type":"ListItem","position":3,"name":"Multi-location clinic appointment platform","item":"https://nimadtech.in/portfolio/clinic-appointment-platform/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li><a href="/portfolio">Portfolio</a></li><li aria-current="page">Multi-location clinic appointment platform</li></ol></nav>
    <p class="eyebrow">Demonstration project</p>
    <h1>Multi-location clinic appointment platform</h1>
    <p class="lead">Online booking, reminders and a scheduling dashboard for a clinic with several practitioners.</p>
    
  </div>
</section>
<section class="section"><div class="container case">
  <div class="case-main">
    <figure class="case-image"><img src="{{ asset('assets/img/projects/clinic-appointment-platform.svg') }}" alt="Illustrative interface concept for Multi-location clinic appointment platform" width="640" height="400" decoding="async"></figure>
    <p class="note-inline"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span><strong>Demonstration project.</strong> This is an illustrative concept created to show our approach. It is not a real client engagement, and the outcome below describes intended goals, not achieved results.</span></p>
    <h2>The challenge</h2><p>A clinic with several practitioners takes bookings by phone and messaging apps. Double-bookings, missed appointments and limited visibility of free slots take up reception time.</p>
    <h2>The solution</h2><p>A web platform where patients choose a practitioner and slot, receptionists see a single live calendar, and automated reminders go out before each visit. Role-based access limits who can view which records.</p>
    <h2>Key features</h2><ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Practitioner and location availability</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Reminder notifications</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Reception calendar view</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Role-based access</li></ul>
    <h2>Intended outcome</h2><p>fewer scheduling conflicts and less reception time spent on phone coordination. Measured results would be agreed and tracked with a real client.</p>
  </div>
  <aside class="case-side" aria-label="Project details">
    <dl>
      <dt>Industry</dt><dd><a href="/industries/healthcare-wellness">Healthcare &amp; Wellness</a></dd>
      <dt>Services</dt><dd><ul><li><a href="/services/web-application-development">Web Application Development</a></li><li><a href="/services/application-modernization">Application Modernization</a></li></ul></dd>
      <dt>Technology stack</dt><dd><ul class="chips"><li>Laravel</li><li>MySQL</li><li>React</li></ul></dd>
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
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"/><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"/><path d="M21 3v5h-5M3 21v-5h5"/></svg></div>
  <h3><a href="/services/application-modernization" class="card-link">Application Modernization</a></h3>
  <p>Upgrade, stabilise or gradually replace ageing software without halting the business.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Code and architecture assessment with a written report</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Framework and language version upgrades</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Performance profiling and database optimisation</li></ul>
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
