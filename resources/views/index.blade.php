@extends('layouts.app')

@section('title', 'Nimad Tech | Custom Software, Web &amp; AI Development Company')
@section('meta_description', 'Nimad Tech builds custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide.')
@section('page_type', 'home')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"Nimad Tech","url":"https://nimadtech.in","logo":"https://nimadtech.in/assets/img/logo.svg","description":"Nimad Tech is a software development and digital solutions company building custom software, web applications, mobile apps, CRM/ERP systems, AI automation and SaaS products for businesses in India and worldwide."}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"Nimad Tech","url":"https://nimadtech.in"}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"What services do you offer?","acceptedAnswer":{"@type":"Answer","text":"Custom software, web applications, websites, mobile apps, CRM and ERP systems, AI integration and automation, SaaS products, API integrations, application modernization and ongoing technical support."}},{"@type":"Question","name":"How long does a typical project take?","acceptedAnswer":{"@type":"Answer","text":"It depends on scope, complexity and how quickly decisions and content are available. A focused website can take weeks; larger systems are delivered in phases. We provide a timeline after understanding your requirements."}},{"@type":"Question","name":"How is pricing decided?","acceptedAnswer":{"@type":"Answer","text":"Scope, timelines and pricing depend on your project requirements. After a conversation or written brief we provide an estimate and explain what drives it. Larger projects can be phased to fit a budget."}},{"@type":"Question","name":"Can you improve a system we already have?","acceptedAnswer":{"@type":"Answer","text":"Yes. We can review, extend, stabilise or gradually modernise existing applications, starting with an assessment of what you have."}},{"@type":"Question","name":"Can you integrate with third-party tools?","acceptedAnswer":{"@type":"Answer","text":"Usually, where the tool provides an API or a dependable data format. Common examples are payment gateways, messaging providers and accounting software."}},{"@type":"Question","name":"Do you provide maintenance and support after launch?","acceptedAnswer":{"@type":"Answer","text":"Yes. We offer maintenance plans covering updates, monitoring, fixes and small improvements."}},{"@type":"Question","name":"How will we communicate during the project?","acceptedAnswer":{"@type":"Answer","text":"We agree a communication rhythm up front, typically regular progress updates and demos, with a named point of contact."}},{"@type":"Question","name":"How do I start a new project?","acceptedAnswer":{"@type":"Answer","text":"Use the Start a Project form to describe your goals. We will respond to discuss next steps, which may include a short consultation."}}]}</script>
@endsection

@section('content')


<section class="hero" aria-labelledby="hero-title">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="container hero-grid">
    <div class="hero-copy">
      <p class="eyebrow eyebrow--light">Software engineering • AI • Digital products</p>
      <h1 id="hero-title">Build Smarter. Scale Faster. Go Further.</h1>
      <p class="lead lead--light">Nimad Tech helps businesses design, develop, and scale digital solutions—from custom software and web applications to intelligent automation and AI-powered products.</p>
      <div class="hero-actions">
        <a class="btn btn--primary btn--lg" href="/start-a-project" data-track="project_cta" data-track-label="hero_primary">Start Your Project</a>
        <a class="btn btn--outline-light btn--lg" href="/services">Explore Our Services</a>
      </div>
      <p class="hero-note">Technology That Moves Your Business Forward.</p>
    </div>
    <div class="hero-visual"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 560" role="img" aria-label="Abstract illustration of a software dashboard connected to business systems" focusable="false">
<defs>
<linearGradient id="hg" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#1A2540"/><stop offset="1" stop-color="#0E1627"/></linearGradient>
<linearGradient id="ha" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#635BFF"/><stop offset="1" stop-color="#8F89FF"/></linearGradient>
<linearGradient id="hf" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#635BFF" stop-opacity="0.45"/><stop offset="1" stop-color="#635BFF" stop-opacity="0"/></linearGradient>
<filter id="hs" x="-20%" y="-20%" width="140%" height="150%"><feDropShadow dx="0" dy="14" stdDeviation="16" flood-color="#000" flood-opacity="0.4"/></filter>
</defs>
<!-- connection lines -->
<g fill="none" stroke="#8F89FF" stroke-opacity="0.55" stroke-width="1.5" stroke-dasharray="4 5">
<path d="M130 120 C 200 120 190 200 260 200"/><path d="M130 300 C 200 300 190 280 260 280"/><path d="M130 470 C 210 470 200 360 260 360"/>
<path d="M600 130 C 650 130 640 220 600 220"/><path d="M610 440 C 660 440 650 340 610 340"/>
</g>
<!-- system nodes -->
<g><rect x="68" y="96" width="100" height="48" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="90" cy="120" r="9" fill="#635BFF"/><text x="136" y="124" font-family="Inter, system-ui, Segoe UI, Arial, sans-serif" font-size="11" font-weight="600" fill="#E6EAF2" text-anchor="middle">CRM</text></g><g><rect x="68" y="276" width="100" height="48" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="90" cy="300" r="9" fill="#635BFF"/><text x="136" y="304" font-family="Inter, system-ui, Segoe UI, Arial, sans-serif" font-size="11" font-weight="600" fill="#E6EAF2" text-anchor="middle">Orders</text></g><g><rect x="68" y="446" width="100" height="48" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="90" cy="470" r="9" fill="#635BFF"/><text x="136" y="474" font-family="Inter, system-ui, Segoe UI, Arial, sans-serif" font-size="11" font-weight="600" fill="#E6EAF2" text-anchor="middle">Billing</text></g>
<g><rect x="560" y="106" width="90" height="48" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="582" cy="130" r="9" fill="#12B76A"/><text x="614" y="134" font-family="Inter, system-ui, Segoe UI, Arial, sans-serif" font-size="11" font-weight="600" fill="#E6EAF2" text-anchor="middle">API</text></g><g><rect x="560" y="416" width="90" height="48" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="582" cy="440" r="9" fill="#12B76A"/><text x="614" y="444" font-family="Inter, system-ui, Segoe UI, Arial, sans-serif" font-size="11" font-weight="600" fill="#E6EAF2" text-anchor="middle">AI</text></g>
<!-- main window -->
<g filter="url(#hs)">
<rect x="240" y="90" width="380" height="380" rx="18" fill="url(#hg)" stroke="#26324A"/>
<circle cx="264" cy="114" r="4.5" fill="#F04438"/><circle cx="280" cy="114" r="4.5" fill="#F5A524"/><circle cx="296" cy="114" r="4.5" fill="#12B76A"/>
<rect x="330" y="106" width="150" height="16" rx="8" fill="#182338" />
<path d="M240 138H620" stroke="#26324A"/>
<!-- sidebar -->
<rect x="252" y="150" width="56" height="306" rx="10" fill="#131C2E" />
<rect x="262" y="164" width="36" height="28" rx="8" fill="#635BFF" /><rect x="262" y="204" width="36" height="28" rx="8" fill="#182338" /><rect x="262" y="244" width="36" height="28" rx="8" fill="#182338" /><rect x="262" y="284" width="36" height="28" rx="8" fill="#182338" /><rect x="262" y="324" width="36" height="28" rx="8" fill="#182338" />
<!-- KPI tiles (shapes only) -->
<rect x="322" y="152" width="88" height="62" rx="10" fill="#131C2E" /><rect x="332" y="164" width="40" height="5" rx="3" fill="#5B6B8C" /><rect x="332" y="178" width="56" height="9" rx="3" fill="#E6EAF2" /><rect x="332" y="196" width="30" height="5" rx="3" fill="#12B76A" /><rect x="420" y="152" width="88" height="62" rx="10" fill="#131C2E" /><rect x="430" y="164" width="40" height="5" rx="3" fill="#5B6B8C" /><rect x="430" y="178" width="56" height="9" rx="3" fill="#E6EAF2" /><rect x="430" y="196" width="30" height="5" rx="3" fill="#8F89FF" /><rect x="518" y="152" width="88" height="62" rx="10" fill="#131C2E" /><rect x="528" y="164" width="40" height="5" rx="3" fill="#5B6B8C" /><rect x="528" y="178" width="56" height="9" rx="3" fill="#E6EAF2" /><rect x="528" y="196" width="30" height="5" rx="3" fill="#F5A524" />
<!-- chart -->
<rect x="322" y="228" width="284" height="134" rx="10" fill="#131C2E" /><rect x="334" y="240" width="70" height="7" rx="3" fill="#E6EAF2" />
<path d="M334 340 L376 312 L416 324 L458 288 L500 300 L546 262 L594 270 L594 346 L334 346 Z" fill="url(#hf)"/>
<path d="M334 340 L376 312 L416 324 L458 288 L500 300 L546 262 L594 270" fill="none" stroke="url(#ha)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="546" cy="262" r="5" fill="#fff"/>
<!-- workflow row -->
<rect x="322" y="374" width="284" height="82" rx="10" fill="#131C2E" /><rect x="334" y="386" width="84" height="7" rx="3" fill="#E6EAF2" />
<rect x="336" y="412" width="48" height="28" rx="8" fill="#182338" stroke="#26324A"/><rect x="402" y="412" width="48" height="28" rx="8" fill="#182338" stroke="#26324A"/><rect x="468" y="412" width="48" height="28" rx="8" fill="#182338" stroke="#26324A"/><rect x="534" y="412" width="48" height="28" rx="8" fill="#12B76A" />
<path d="M384 426h18" stroke="#8F89FF" stroke-width="2" stroke-linecap="round"/><path d="M450 426h18" stroke="#8F89FF" stroke-width="2" stroke-linecap="round"/><path d="M516 426h18" stroke="#8F89FF" stroke-width="2" stroke-linecap="round"/>
</g>
<!-- floating success chip -->
<g filter="url(#hs)"><rect x="500" y="40" width="150" height="44" rx="12" fill="#131C2E" stroke="#26324A"/><circle cx="524" cy="62" r="12" fill="#12B76A"/><path d="M518 62l4 4 8-8" fill="none" stroke="#04210F" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/><rect x="544" y="52" width="76" height="7" rx="3" fill="#E6EAF2" /><rect x="544" y="66" width="52" height="5" rx="3" fill="#3A4A68" /></g>
</svg></div>
  </div>
</section>

<section class="cap-strip" aria-label="Core capabilities">
  <div class="container">
    <p class="cap-label">What we build</p>
    <ul><li><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg><span>Custom Software</span></li><li><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg><span>Web Applications</span></li><li><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8z"/><path d="M19 15l.8 2.2L22 18l-2.2.8L19 21l-.8-2.2L16 18l2.2-.8z"/></svg><span>AI &amp; Automation</span></li><li><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg><span>Business Systems</span></li><li><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg><span>Mobile Applications</span></li></ul>
  </div>
</section>

<section class="section section--soft" id="services" aria-labelledby="services-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Services</p>
  <h2 id="services-title">Digital solutions for every stage of your business</h2>
  <p class="lead">We Build Digital Products That Solve Real Business Problems. Choose a starting point below or talk to us about something in between.</p>
</div>
    <div class="grid grid-3"><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
  <h3><a href="/services/custom-software-development" class="card-link">Custom Software Development</a></h3>
  <p>Software shaped around how your business actually works, not the other way round.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Requirements analysis and process mapping</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Internal tools, portals and back-office systems</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Role-based access and approval workflows</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></div>
  <h3><a href="/services/web-application-development" class="card-link">Web Development</a></h3>
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
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg></div>
  <h3><a href="/services/crm-erp-development" class="card-link">CRM &amp; ERP Development</a></h3>
  <p>Business systems that connect sales, operations, inventory and finance in one place.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Lead, contact and pipeline management</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Quotations, orders, invoicing and payment tracking</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Inventory and purchase management</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8z"/><path d="M19 15l.8 2.2L22 18l-2.2.8L19 21l-.8-2.2L16 18l2.2-.8z"/></svg></div>
  <h3><a href="/services/ai-integration-automation" class="card-link">AI Integration &amp; Business Automation</a></h3>
  <p>Practical AI assistants and automations that remove repetitive work.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>LLM integrations inside your existing applications</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Knowledge-base assistants for support and internal teams</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Document summarisation, classification and data extraction</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article><article class="card card--link service-card">
  <div class="card-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l9 5-9 5-9-5z"/><path d="M3 13l9 5 9-5"/></svg></div>
  <h3><a href="/services/saas-product-development" class="card-link">SaaS Product Development</a></h3>
  <p>From idea to launched subscription product, with architecture ready to scale.</p>
  <ul class="ticks"><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>MVP scoping and phased roadmaps</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Multi-tenant architecture and user management</li><li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Subscription and payment integration</li></ul>
  <span class="link-arrow" aria-hidden="true">Learn more <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
</article></div>
    <p class="section-more"><a class="link-arrow" href="/services">See all ten services <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
  </div>
</section>

<section class="section" aria-labelledby="problems-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Business problems we solve</p>
  <h2 id="problems-title">Start with the problem, then choose the technology</h2>
  <p class="lead">Most projects begin with something that is slowing a business down. These are the problems we are asked to solve most often.</p>
</div>
    <div class="grid grid-3"><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg></div>
      <h3>Replace repetitive manual work</h3>
      <p>Automate data entry, approvals and reporting so your team spends time on work that needs judgement.</p>
      <a class="link-arrow" href="/services/ai-integration-automation">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9 2v6M15 2v6M6 8h12v3a6 6 0 0 1-12 0zM12 17v5"/></svg></div>
      <h3>Connect disconnected systems</h3>
      <p>Link your tools through reliable APIs so information flows once instead of being retyped.</p>
      <a class="link-arrow" href="/services/api-development-integrations">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 3v18h18"/><path d="M7 15l4-5 3 3 5-7"/></svg></div>
      <h3>Improve operational visibility</h3>
      <p>Dashboards and reports that show what is happening now, not what happened last month.</p>
      <a class="link-arrow" href="/services/custom-software-development">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"/><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"/><path d="M21 3v5h-5M3 21v-5h5"/></svg></div>
      <h3>Modernise outdated applications</h3>
      <p>Upgrade ageing software in safe stages, improving speed, security and maintainability.</p>
      <a class="link-arrow" href="/services/application-modernization">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 15c-1.5 1.5-2 5-2 5s3.5-.5 5-2M12 15l-3-3a22 22 0 0 1 3-6 10 10 0 0 1 9-3c0 3-1 7-4 9a22 22 0 0 1-6 3z"/><circle cx="15" cy="9" r="1.5"/></svg></div>
      <h3>Launch new digital products</h3>
      <p>Turn an idea into a working product, starting with a focused first release.</p>
      <a class="link-arrow" href="/services/saas-product-development">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article><article class="problem">
      <div class="card-icon card-icon--plain"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6"/><path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14c2.2.6 4 2.4 4 5"/></svg></div>
      <h3>Improve customer experiences</h3>
      <p>Faster, clearer ways for customers to book, order, pay and get help.</p>
      <a class="link-arrow" href="/services/web-application-development">How we help <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
    </article></div>
  </div>
</section>

<section class="section section--soft" aria-labelledby="work-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Featured projects</p>
  <h2 id="work-title">How we approach real business problems</h2>
  <p class="lead">These concept projects show our approach to typical briefs. They are demonstrations, not client results.</p>
</div>
    <div class="grid grid-3"><article class="card card--link project-card" data-project data-services="web-application-development application-modernization" data-industry="healthcare-wellness" data-tech="laravel mysql react">
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
</article></div>
    <p class="note-inline"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l8 3v6c0 4.5-3.2 8.2-8 9-4.8-.8-8-4.5-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg><span>Projects marked “Demonstration project” are illustrative concepts created to explain our approach. They are not client engagements and show no real client results.</span></p>
    <p class="section-more"><a class="link-arrow" href="/portfolio">Browse all projects <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></p>
  </div>
</section>

<section class="section section--dark" aria-labelledby="process-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Our development process</p>
  <h2 id="process-title">A clear path from idea to launch</h2>
  <p class="lead">Six stages, regular check-ins and no surprises about what happens next.</p>
</div>
    <ol class="process"><li class="process-step"><span class="process-num">01</span><h3>Discovery &amp; Requirements</h3><p>We learn your business, users and constraints, and write down what success looks like.</p></li><li class="process-step"><span class="process-num">02</span><h3>Strategy &amp; Planning</h3><p>Scope, priorities, architecture and a realistic roadmap, so everyone agrees on the plan.</p></li><li class="process-step"><span class="process-num">03</span><h3>UI/UX Design</h3><p>Flows, wireframes and visual design reviewed with you before development.</p></li><li class="process-step"><span class="process-num">04</span><h3>Development &amp; Integration</h3><p>Iterative builds with regular demos, connected to the systems you rely on.</p></li><li class="process-step"><span class="process-num">05</span><h3>Quality Assurance</h3><p>Functional, device and security-minded testing before anything goes live.</p></li><li class="process-step"><span class="process-num">06</span><h3>Deployment &amp; Ongoing Support</h3><p>Controlled launch, training and a support plan for what comes next.</p></li></ol>
  </div>
</section>

<section class="section" aria-labelledby="why-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Why choose Nimad Tech?</p>
  <h2 id="why-title">A technology partner, not just a vendor</h2>
  
</div>
    <div class="grid grid-3"><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Tailored to your requirements</h3><p>We start from your processes and goals rather than forcing a generic template.</p></div></div><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Maintainable, scalable engineering</h3><p>Conventional, documented code that your future developers can work with.</p></div></div><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Transparent communication</h3><p>Regular updates, visible progress and plain-language explanations.</p></div></div><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Security-conscious development</h3><p>Input validation, access control and careful handling of credentials from the start.</p></div></div><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Quality testing</h3><p>Testing is part of every stage, not a last-minute step.</p></div></div><div class="why"><span class="why-check"><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></span><div><h3>Long-term technical support</h3><p>Support plans so your software stays updated after launch.</p></div></div></div>
  </div>
</section>

<section class="section section--soft" aria-labelledby="industries-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Industries we serve</p>
  <h2 id="industries-title">Experience across sectors, focus on your context</h2>
  
</div>
    <ul class="industry-grid"><li><a class="industry-tile" href="/industries/healthcare-wellness"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 20s-7-4.4-9-9a5 5 0 0 1 9-3 5 5 0 0 1 9 3c-2 4.6-9 9-9 9z"/></svg><span>Healthcare &amp; Wellness</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/ecommerce-retail"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="9" cy="20" r="1.5"/><circle cx="18" cy="20" r="1.5"/><path d="M2 3h3l2.5 12h11L21 7H6"/></svg><span>E-commerce &amp; Retail</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/education-elearning"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M3 5a2 2 0 0 1 2-2h6v17H5a2 2 0 0 0-2 2zM21 5a2 2 0 0 0-2-2h-6v17h6a2 2 0 0 1 2 2z"/></svg><span>Education &amp; E-learning</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/finance-professional-services"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2M3 13h18"/></svg><span>Finance &amp; Professional Services</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/logistics-transportation"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M2 6h11v10H2zM13 9h4l4 4v3h-8"/><circle cx="6" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg><span>Logistics &amp; Transportation</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/hospitality"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 8h13v6a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5zM17 10h2a2 2 0 0 1 0 4h-2M7 2v3M11 2v3M15 2v3"/></svg><span>Hospitality</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/real-estate"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="5" y="3" width="14" height="18" rx="1"/><path d="M9 7h2M13 7h2M9 11h2M13 11h2M9 15h2M13 15h2M10 21v-3h4v3"/></svg><span>Real Estate</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li><li><a class="industry-tile" href="/industries/startups-growing-businesses"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 15c-1.5 1.5-2 5-2 5s3.5-.5 5-2M12 15l-3-3a22 22 0 0 1 3-6 10 10 0 0 1 9-3c0 3-1 7-4 9a22 22 0 0 1-6 3z"/><circle cx="15" cy="9" r="1.5"/></svg><span>Startups &amp; Growing Businesses</span><svg class="icon icon--sm tile-arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></li></ul>
  </div>
</section>

<section class="section" aria-labelledby="tech-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Technology</p>
  <h2 id="tech-title">Proven tools, chosen to fit your project</h2>
  <p class="lead">We pick technology based on your requirements, hosting and long-term maintenance, not fashion.</p>
</div>
    <div class="grid grid-3"><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="7" rx="2"/><rect x="3" y="14" width="18" height="7" rx="2"/><path d="M7 6.5h.01M7 17.5h.01"/></svg>Backend</h3><ul class="chips"><li>PHP</li><li>Laravel</li><li>Node.js</li></ul></div><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>Frontend</h3><ul class="chips"><li>React</li><li>Next.js</li><li>HTML</li><li>CSS</li><li>JavaScript</li></ul></div><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"/></svg>Database</h3><ul class="chips"><li>MySQL</li><li>PostgreSQL</li></ul></div><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 18a4 4 0 0 1-.5-8 6 6 0 0 1 11.5 1.5A3.5 3.5 0 0 1 17.5 18z"/></svg>Cloud &amp; Infrastructure</h3><ul class="chips"><li>Deployment</li><li>Hosting</li><li>APIs</li><li>Integrations</li></ul></div><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3l1.8 5.2L19 10l-5.2 1.8L12 17l-1.8-5.2L5 10l5.2-1.8z"/><path d="M19 15l.8 2.2L22 18l-2.2.8L19 21l-.8-2.2L16 18l2.2-.8z"/></svg>AI</h3><ul class="chips"><li>LLM integrations</li><li>Workflow automation</li><li>Intelligent assistants</li></ul></div><div class="tech-group"><h3><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg>Mobile</h3><ul class="chips"><li>Cross-platform options</li><li>Native options</li></ul></div></div>
  </div>
</section>

<section class="section section--soft" aria-labelledby="engage-title">
  <div class="container">
    <div class="section-head">
  <p class="eyebrow">Engagement models</p>
  <h2 id="engage-title">Flexible ways to work together</h2>
  <p class="lead">Scope, timelines and pricing depend on your project requirements. We will recommend the model that fits and give you a clear estimate.</p>
</div>
    <div class="grid grid-4"><article class="card engage"><span class="engage-num">1</span><h3>Fixed-scope projects</h3><p>A defined scope, deliverables and timeline. Best when requirements are clear.</p></article><article class="card engage"><span class="engage-num">2</span><h3>Dedicated development</h3><p>A developer or small team working as an extension of yours for ongoing needs.</p></article><article class="card engage"><span class="engage-num">3</span><h3>Ongoing maintenance &amp; support</h3><p>Regular updates, monitoring and fixes for websites and applications.</p></article><article class="card engage"><span class="engage-num">4</span><h3>Product development partnerships</h3><p>A longer collaboration to build and evolve a product with you.</p></article></div>
  </div>
</section>



<section class="section" aria-labelledby="faq-title">
  <div class="container narrow">
    <div class="section-head section-head--center">
  <p class="eyebrow">FAQ</p>
  <h2 id="faq-title">Questions we are often asked</h2>
  
</div>
    <div class="faq"><details class="faq-item"><summary>What services do you offer?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Custom software, web applications, websites, mobile apps, CRM and ERP systems, AI integration and automation, SaaS products, API integrations, application modernization and ongoing technical support.</p></div></details><details class="faq-item"><summary>How long does a typical project take?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>It depends on scope, complexity and how quickly decisions and content are available. A focused website can take weeks; larger systems are delivered in phases. We provide a timeline after understanding your requirements.</p></div></details><details class="faq-item"><summary>How is pricing decided?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Scope, timelines and pricing depend on your project requirements. After a conversation or written brief we provide an estimate and explain what drives it. Larger projects can be phased to fit a budget.</p></div></details><details class="faq-item"><summary>Can you improve a system we already have?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Yes. We can review, extend, stabilise or gradually modernise existing applications, starting with an assessment of what you have.</p></div></details><details class="faq-item"><summary>Can you integrate with third-party tools?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Usually, where the tool provides an API or a dependable data format. Common examples are payment gateways, messaging providers and accounting software.</p></div></details><details class="faq-item"><summary>Do you provide maintenance and support after launch?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Yes. We offer maintenance plans covering updates, monitoring, fixes and small improvements.</p></div></details><details class="faq-item"><summary>How will we communicate during the project?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>We agree a communication rhythm up front, typically regular progress updates and demos, with a named point of contact.</p></div></details><details class="faq-item"><summary>How do I start a new project?<span class="faq-icon" aria-hidden="true"></span></summary><div class="faq-body"><p>Use the Start a Project form to describe your goals. We will respond to discuss next steps, which may include a short consultation.</p></div></details></div>
  </div>
</section>

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
