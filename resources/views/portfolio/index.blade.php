@extends('layouts.app')

@section('title', 'Portfolio &amp; Case Studies | Nimad Tech')
@section('meta_description', 'Browse Nimad Tech demonstration projects across healthcare, hospitality, logistics, education and more. Filter by service, industry and technology.')
@section('page_type', 'portfolio')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://nimadtech.in/portfolio/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li aria-current="page">Portfolio</li></ol></nav>
    <p class="eyebrow">Portfolio</p>
    <h1>Projects and case studies</h1>
    <p class="lead">A selection of demonstration projects that show how we approach common business problems. We add approved client case studies as they become available.</p>
    
  </div>
</section>
<section class="section"><div class="container">
  <h2 class="sr-only">Browse projects</h2>
  <p class="note-inline note-inline--top"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span>These are demonstration projects: illustrative concepts, not real client engagements. They contain no real client names or results.</span></p>
  <form class="filters" data-filters role="search" aria-label="Filter projects" onsubmit="return false">
    <div class="field"><label for="f-service">Service</label><select id="f-service" data-filter="services"><option value="">All services</option><option value="web-application-development">Web Application Development</option><option value="application-modernization">Application Modernization</option><option value="mobile-app-development">Mobile App Development</option><option value="api-development-integrations">API Development &amp; Third-Party Integrations</option><option value="crm-erp-development">CRM &amp; ERP Development</option><option value="custom-software-development">Custom Software Development</option><option value="ai-integration-automation">AI Integration &amp; Business Automation</option><option value="saas-product-development">SaaS Product Development</option></select></div>
    <div class="field"><label for="f-industry">Industry</label><select id="f-industry" data-filter="industry"><option value="">All industries</option><option value="healthcare-wellness">Healthcare &amp; Wellness</option><option value="hospitality">Hospitality</option><option value="finance-professional-services">Finance &amp; Professional Services</option><option value="ecommerce-retail">E-commerce &amp; Retail</option><option value="logistics-transportation">Logistics &amp; Transportation</option><option value="education-elearning">Education &amp; E-learning</option></select></div>
    <div class="field"><label for="f-tech">Technology</label><select id="f-tech" data-filter="tech"><option value="">All technologies</option><option value="llm-integrations">LLM integrations</option><option value="laravel">Laravel</option><option value="mysql">MySQL</option><option value="next-js">Next.js</option><option value="node-js">Node.js</option><option value="postgresql">PostgreSQL</option><option value="react">React</option></select></div>
    <button type="button" class="btn btn--ghost btn--sm" data-filter-reset>Reset filters</button>
  </form>
  <p class="result-count" role="status" aria-live="polite" data-count>6 projects</p>
  <div class="grid grid-3" data-grid><article class="card card--link project-card" data-project data-services="web-application-development application-modernization" data-industry="healthcare-wellness" data-tech="laravel mysql react">
  <div class="project-media"><img src="{{ asset('assets/img/projects/clinic-appointment-platform.svg') }}" alt="Illustrative interface concept for Multi-location clinic appointment platform" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>Healthcare &amp; Wellness</span></p>
    <h3><a href="/portfolio/clinic-appointment-platform" class="card-link" data-track="case_study_click">Multi-location clinic appointment platform</a></h3>
    <p>Online booking, reminders and a scheduling dashboard for a clinic with several practitioners.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>A clinic with several practitioners takes bookings by phone and messaging apps.</dd></div>
      <div><dt>Solution</dt><dd>A web platform where patients choose a practitioner and slot, receptionists see a single live calendar, and automated reminders go out before each visit.</dd></div>
      <div><dt>Intended outcome</dt><dd>fewer scheduling conflicts and less reception time spent on phone coordination.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>Laravel</li><li>MySQL</li><li>React</li></ul>
  </div>
</article><article class="card card--link project-card" data-project data-services="web-application-development mobile-app-development api-development-integrations" data-industry="hospitality" data-tech="next-js node-js postgresql">
  <div class="project-media"><img src="{{ asset('assets/img/projects/restaurant-ordering-system.svg') }}" alt="Illustrative interface concept for Direct ordering system for a restaurant group" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>Hospitality</span></p>
    <h3><a href="/portfolio/restaurant-ordering-system" class="card-link" data-track="case_study_click">Direct ordering system for a restaurant group</a></h3>
    <p>Commission-free online ordering with menu management and kitchen order screen.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>A restaurant group depends on third-party marketplaces for most online orders, paying commission and having little access to customer data.</dd></div>
      <div><dt>Solution</dt><dd>A branded ordering site and app with a menu admin, order status tracking and a kitchen display.</dd></div>
      <div><dt>Intended outcome</dt><dd>more orders placed directly and better insight into repeat customers.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>Next.js</li><li>Node.js</li><li>PostgreSQL</li></ul>
  </div>
</article><article class="card card--link project-card" data-project data-services="crm-erp-development custom-software-development" data-industry="finance-professional-services" data-tech="laravel postgresql react">
  <div class="project-media"><img src="{{ asset('assets/img/projects/field-sales-crm.svg') }}" alt="Illustrative interface concept for Lightweight CRM for a field sales team" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>Finance &amp; Professional Services</span></p>
    <h3><a href="/portfolio/field-sales-crm" class="card-link" data-track="case_study_click">Lightweight CRM for a field sales team</a></h3>
    <p>Lead pipeline, follow-up reminders and manager dashboards replacing spreadsheets.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>A sales team tracks leads in personal spreadsheets, so follow-ups are missed and managers cannot see the pipeline without asking for updates.</dd></div>
      <div><dt>Solution</dt><dd>A CRM with a visual pipeline, activity history, automatic follow-up reminders and role-based dashboards, importing the existing spreadsheet data.</dd></div>
      <div><dt>Intended outcome</dt><dd>a single source of truth for leads and fewer missed follow-ups.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>Laravel</li><li>PostgreSQL</li><li>React</li></ul>
  </div>
</article><article class="card card--link project-card" data-project data-services="ai-integration-automation api-development-integrations" data-industry="ecommerce-retail" data-tech="llm-integrations node-js postgresql">
  <div class="project-media"><img src="{{ asset('assets/img/projects/support-assistant-ai.svg') }}" alt="Illustrative interface concept for AI support assistant for an online store" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>E-commerce &amp; Retail</span></p>
    <h3><a href="/portfolio/support-assistant-ai" class="card-link" data-track="case_study_click">AI support assistant for an online store</a></h3>
    <p>A help-centre assistant that answers routine questions and hands complex ones to staff.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>An online store spends much of its support time answering the same order, shipping and returns questions.</dd></div>
      <div><dt>Solution</dt><dd>An assistant grounded in the store’s own help content and order data, drafting answers for common questions and escalating anything uncertain to a human agent with the conversation attached.</dd></div>
      <div><dt>Intended outcome</dt><dd>faster replies on routine questions and more staff time for complex cases.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>LLM integrations</li><li>Node.js</li><li>PostgreSQL</li></ul>
  </div>
</article><article class="card card--link project-card" data-project data-services="custom-software-development mobile-app-development api-development-integrations" data-industry="logistics-transportation" data-tech="node-js postgresql react">
  <div class="project-media"><img src="{{ asset('assets/img/projects/fleet-dispatch-dashboard.svg') }}" alt="Illustrative interface concept for Dispatch dashboard and driver app for a delivery fleet" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>Logistics &amp; Transportation</span></p>
    <h3><a href="/portfolio/fleet-dispatch-dashboard" class="card-link" data-track="case_study_click">Dispatch dashboard and driver app for a delivery fleet</a></h3>
    <p>Live job board for dispatchers and a driver app with proof of delivery.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>Dispatch runs on phone calls and group chats.</dd></div>
      <div><dt>Solution</dt><dd>A dispatcher dashboard showing job status, a driver app for assignments and photo proof of delivery, and an integration that pushes completed jobs to invoicing.</dd></div>
      <div><dt>Intended outcome</dt><dd>fewer status calls and faster invoicing after delivery.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>Node.js</li><li>PostgreSQL</li><li>React</li></ul>
  </div>
</article><article class="card card--link project-card" data-project data-services="saas-product-development web-application-development" data-industry="education-elearning" data-tech="next-js node-js postgresql">
  <div class="project-media"><img src="{{ asset('assets/img/projects/learning-portal-saas.svg') }}" alt="Illustrative interface concept for Subscription learning portal for schools" width="640" height="400" loading="lazy" decoding="async"></div>
  <div class="project-body">
    <p class="project-meta"><span class="badge">Demonstration project</span><span>Education &amp; E-learning</span></p>
    <h3><a href="/portfolio/learning-portal-saas" class="card-link" data-track="case_study_click">Subscription learning portal for schools</a></h3>
    <p>Multi-tenant platform where schools manage courses, students and progress.</p>
    <dl class="project-facts">
      <div><dt>Challenge</dt><dd>An education business wants to offer its curriculum to many schools, each needing its own users, data and branding.</dd></div>
      <div><dt>Solution</dt><dd>A multi-tenant SaaS with school accounts, teacher and student roles, course delivery with progress tracking and subscription billing.</dd></div>
      <div><dt>Intended outcome</dt><dd>a product that onboards new schools without custom work each time.</dd></div>
    </dl>
    <ul class="chips" aria-label="Technology stack"><li>Next.js</li><li>Node.js</li><li>PostgreSQL</li></ul>
  </div>
</article></div>
  <div class="empty" data-empty hidden><h2 class="h3">No projects match those filters</h2><p>Try removing a filter, or <a href="/contact">tell us what you are looking for</a>.</p></div>
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
