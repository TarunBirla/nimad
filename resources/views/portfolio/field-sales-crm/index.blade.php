@extends('layouts.app')

@section('title', 'Lightweight CRM for a field sales team | Nimad Tech')
@section('meta_description', 'Lead pipeline, follow-up reminders and manager dashboards replacing spreadsheets. A Nimad Tech demonstration project.')
@section('page_type', 'case-study')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://nimadtech.in/portfolio/"},{"@type":"ListItem","position":3,"name":"Lightweight CRM for a field sales team","item":"https://nimadtech.in/portfolio/field-sales-crm/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li><a href="/portfolio">Portfolio</a></li><li aria-current="page">Lightweight CRM for a field sales team</li></ol></nav>
    <p class="eyebrow">Demonstration project</p>
    <h1>Lightweight CRM for a field sales team</h1>
    <p class="lead">Lead pipeline, follow-up reminders and manager dashboards replacing spreadsheets.</p>
    
  </div>
</section>
<section class="section"><div class="container case">
  <div class="case-main">
    <figure class="case-image"><img src="{{ asset('assets/img/projects/field-sales-crm.svg') }}" alt="Illustrative interface concept for Lightweight CRM for a field sales team" width="640" height="400" decoding="async"></figure>
    <p class="note-inline"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span><strong>Demonstration project.</strong> This is an illustrative concept created to show our approach. It is not a real client engagement, and the outcome below describes intended goals, not achieved results.</span></p>
    <h2>The challenge</h2><p>A sales team tracks leads in personal spreadsheets, so follow-ups are missed and managers cannot see the pipeline without asking for updates.</p>
    <h2>The solution</h2><p>A CRM with a visual pipeline, activity history, automatic follow-up reminders and role-based dashboards, importing the existing spreadsheet data.</p>
    <h2>Key features</h2><ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Pipeline board</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Follow-up reminders</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Manager dashboards</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Spreadsheet import</li></ul>
    <h2>Intended outcome</h2><p>a single source of truth for leads and fewer missed follow-ups. Success measures would be defined with the sales team.</p>
  </div>
  <aside class="case-side" aria-label="Project details">
    <dl>
      <dt>Industry</dt><dd><a href="/industries/finance-professional-services">Finance &amp; Professional Services</a></dd>
      <dt>Services</dt><dd><ul><li><a href="/services/crm-erp-development">CRM &amp; ERP Development</a></li><li><a href="/services/custom-software-development">Custom Software Development</a></li></ul></dd>
      <dt>Technology stack</dt><dd><ul class="chips"><li>Laravel</li><li>PostgreSQL</li><li>React</li></ul></dd>
    </dl>
    <a class="btn btn--primary" href="/start-a-project?service=crm-erp-development" data-track="project_cta" data-track-label="case_study_side">Discuss a similar project</a>
  </aside>
</div></section>
<section class="section section--soft"><div class="container">
  <div class="section-head">
  <p class="eyebrow">Related services</p>
  <h2>Services behind this project</h2>
  
</div>
  <div class="grid grid-3"><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg></div>
  <h3><a href="/services/crm-erp-development" class="card-link">CRM &amp; ERP Development</a></h3>
  <p>Business systems that connect sales, operations, inventory and finance in one place.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Lead, contact and pipeline management</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Quotations, orders, invoicing and payment tracking</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Inventory and purchase management</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
  <h3><a href="/services/custom-software-development" class="card-link">Custom Software Development</a></h3>
  <p>Software shaped around how your business actually works, not the other way round.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Requirements analysis and process mapping</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Internal tools, portals and back-office systems</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Role-based access and approval workflows</li></ul>
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
