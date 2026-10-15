@extends('layouts.app')

@section('title', 'Offshore Software Development for US Companies & Startups | Nimad Tech')
@section('meta_description', 'Scale your engineering team with dedicated offshore developers. Custom software, web apps, SaaS & AI solutions for US businesses with EST/PST overlap and 100% US IP protection.')
@section('page_type', 'service')

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Offshore Software Development for US Companies",
  "serviceType": "Dedicated Software Engineering, Web Apps, SaaS & Offshore Staff Augmentation",
  "description": "High-velocity offshore software engineering for US startups, scale-ups, and established enterprises. Seamless EST/PST timezone overlap, strict US IP ownership, and senior developers.",
  "url": "https://nimadtech.in/offshore-software-development-usa",
  "provider": {
    "@type": "Organization",
    "name": "Nimad Tech",
    "url": "https://nimadtech.in",
    "logo": "https://nimadtech.in/logo.png"
  },
  "areaServed": [
    {"@type": "Country", "name": "United States"},
    {"@type": "Place", "name": "North America"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How does Nimad Tech protect intellectual property (IP) for US clients?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "All contracts include strict US-compliant Non-Disclosure Agreements (NDAs) and Work-for-Hire provisions. You own 100% of all source code, git repositories, architectural assets, and documentation. No code is ever reused or retained."
      }
    },
    {
      "@type": "Question",
      "name": "How do you manage communication with US time zones (EST, CST, PST)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our engineering teams offer daily working overlaps with US morning hours for agile standups, sprint reviews, and live Slack/Teams interactions. In addition, our async workflow (GitHub PRs, Loom video walkthroughs, and Jira updates) keeps velocity moving 24 hours a day while you sleep."
      }
    },
    {
      "@type": "Question",
      "name": "What cost savings can a US business expect by working with Nimad Tech?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "US domestic agencies typically charge $150 to $250+ per hour, while senior in-house engineers command high salaries plus benefits. Nimad Tech delivers the same caliber of senior architectural leadership and clean code at 50% to 70% lower total project cost."
      }
    },
    {
      "@type": "Question",
      "name": "Can you integrate directly with our existing engineering team or tools?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We work inside your existing GitHub/GitLab repositories, Slack channels, Linear/Jira boards, and AWS/GCP cloud environments as a seamless extension of your in-house squad."
      }
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://nimadtech.in/"},
    {"@type": "ListItem", "position": 2, "name": "Global Reach", "item": "https://nimadtech.in/#regions"},
    {"@type": "ListItem", "position": 3, "name": "Offshore Development USA", "item": "https://nimadtech.in/offshore-software-development-usa"}
  ]
}
</script>
@endsection

@section('content')

<!-- Hero Section -->
<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><span>Global Reach</span></li>
        <li aria-current="page">United States</li>
      </ol>
    </nav>
    <p class="eyebrow">Offshore Software Engineering &bull; USA Client Focus</p>
    <h1>Offshore Software Development for US Startups &amp; Growing Businesses</h1>
    <p class="lead">Build your product faster without Silicon Valley agency overhead. Nimad Tech provides dedicated senior engineering, full-stack web and SaaS development, CRM/ERP builds, and AI automation with predictable delivery, transparent pricing, and daily US timezone overlap.</p>
    <div class="hero-actions">
      <a class="btn btn--primary btn--lg" href="{{ route('start-a-project') }}?region=usa" data-track="project_cta" data-track-label="usa_hero_start">Get a US Project Estimate</a>
      <a class="btn btn--outline-light btn--lg" href="#engagement-models">Explore Engagement Models</a>
    </div>
  </div>
</section>

<!-- Value Strip -->
<section class="cap-strip" aria-label="US client advantages">
  <div class="container">
    <p class="cap-label">The US Offshoring Advantage</p>
    <ul>
      <li>
        <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        <span>50%–70% Cost Advantage vs US Onshore</span>
      </li>
      <li>
        <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        <span>EST, CST &amp; PST Overlap Hours</span>
      </li>
      <li>
        <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>100% US IP Ownership &amp; Mutual NDA</span>
      </li>
      <li>
        <svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        <span>Modern Tech: Laravel, React, Node, AI</span>
      </li>
    </ul>
  </div>
</section>

<!-- Why US Companies Outsource to Nimad Tech -->
<section class="section" aria-labelledby="why-us-h">
  <div class="container split">
    <div>
      <div class="section-head">
        <p class="eyebrow">High Velocity Engineering</p>
        <h2 id="why-us-h">Why US Founders &amp; CTOs Partner With Us</h2>
        <p class="lead">Hiring domestic US engineers is expensive and slow. Freelancers disappear mid-project. Nimad Tech gives you an accountable, highly communicative software engineering partner ready to hit the ground running.</p>
      </div>
    </div>
    <ul class="problem-list">
      <li>
        <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg>
        <span><strong>No Silicon Valley Markup:</strong> Access senior full-stack developers without paying $180+/hour domestic agency billing rates.</span>
      </li>
      <li>
        <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg>
        <span><strong>Clean, Documented Code:</strong> We follow PSR standards, maintain unit &amp; feature test coverage, and write clean, modular architectures your internal team can easily adopt.</span>
      </li>
      <li>
        <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg>
        <span><strong>Fluent English &amp; Proactive Communication:</strong> Direct Slack/Zoom conversations, sprint demos, and concise progress reports—never radio silence.</span>
      </li>
      <li>
        <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg>
        <span><strong>24-Hour Follow-The-Sun Velocity:</strong> You review code in the morning, give feedback during overlapping hours, and our team builds while your local office is offline.</span>
      </li>
    </ul>
  </div>
</section>

<!-- Engagement Models -->
<section class="section section--soft" id="engagement-models" aria-labelledby="models-h">
  <div class="container">
    <div class="section-head text-center">
      <p class="eyebrow">Flexible Engagement</p>
      <h2 id="models-h">How US Companies Work With Us</h2>
      <p class="lead">Whether you are building a new SaaS product from scratch or extending an existing dev team, we fit your exact cadence.</p>
    </div>
    <div class="grid grid-3 cap-grid">
      <div class="card cap-card">
        <svg class="icon" viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        <h3>Dedicated Team Augmentation</h3>
        <p>Hire full-time senior Laravel, Node, React, or Python developers who integrate directly into your daily standups, GitHub pull requests, and Jira sprints.</p>
      </div>
      <div class="card cap-card">
        <svg class="icon" viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 3l9 5-9 5-9-5z"/><path d="M3 13l9 5 9-5"/></svg>
        <h3>End-to-End SaaS &amp; MVP Engineering</h3>
        <p>From initial scope architecture and wireframing to full MVP launch. Built with Stripe/Paddle subscriptions, multi-tenant DBs, and auto-scaling cloud deployments.</p>
      </div>
      <div class="card cap-card">
        <svg class="icon" viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"/><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"/><path d="M21 3v5h-5M3 21v-5h5"/></svg>
        <h3>Legacy Application Modernization</h3>
        <p>Refactor outdated PHP systems, upgrade legacy frameworks to modern Laravel 10/11, optimize sluggish queries, and migrate on-prem servers to AWS or Google Cloud.</p>
      </div>
    </div>
  </div>
</section>

<!-- Comparison Table: US In-house vs Domestic Agency vs Nimad Tech -->
<section class="section" aria-labelledby="us-comparison-h">
  <div class="container">
    <div class="section-head text-center">
      <p class="eyebrow">Cost &amp; Quality Reality</p>
      <h2 id="us-comparison-h">Hiring in the US vs Partnering with Nimad Tech</h2>
    </div>
    <div style="overflow-x:auto;">
      <table style="width:100%; border-collapse: collapse; margin-top: 1.5rem; background: var(--color-surface, #fff); border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <thead>
          <tr style="background: #101828; color: #fff; text-align: left;">
            <th style="padding: 1.25rem 1.5rem; font-size: 1rem;">Metric</th>
            <th style="padding: 1.25rem 1.5rem; font-size: 1rem; color: #8F89FF;">Nimad Tech Offshore</th>
            <th style="padding: 1.25rem 1.5rem; font-size: 1rem; color: #94A3B8;">US Domestic Agency</th>
            <th style="padding: 1.25rem 1.5rem; font-size: 1rem; color: #94A3B8;">US In-House Hire</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom: 1px solid #E2E8F0;">
            <td style="padding: 1rem 1.5rem; font-weight: 600;">Average Cost</td>
            <td style="padding: 1rem 1.5rem; color: #12B76A; font-weight: 600;">$25 &ndash; $45 / hour</td>
            <td style="padding: 1rem 1.5rem; color: #DC2626;">$150 &ndash; $250+ / hour</td>
            <td style="padding: 1rem 1.5rem;">$140k+ salary + benefits + taxes</td>
          </tr>
          <tr style="border-bottom: 1px solid #E2E8F0;">
            <td style="padding: 1rem 1.5rem; font-weight: 600;">Time to Ramp Up</td>
            <td style="padding: 1rem 1.5rem; color: #12B76A; font-weight: 600;">3 to 7 business days</td>
            <td style="padding: 1rem 1.5rem;">3 to 6 weeks onboarding</td>
            <td style="padding: 1rem 1.5rem;">60 to 90 days recruiting cycle</td>
          </tr>
          <tr style="border-bottom: 1px solid #E2E8F0;">
            <td style="padding: 1rem 1.5rem; font-weight: 600;">Flexibility</td>
            <td style="padding: 1rem 1.5rem;">Scale up or down per sprint</td>
            <td style="padding: 1rem 1.5rem;">Locked into 6-12 month contracts</td>
            <td style="padding: 1rem 1.5rem;">Severance &amp; employment liability</td>
          </tr>
          <tr style="border-bottom: 1px solid #E2E8F0;">
            <td style="padding: 1rem 1.5rem; font-weight: 600;">IP Protection</td>
            <td style="padding: 1rem 1.5rem;">US-compliant NDA &amp; Work-for-Hire</td>
            <td style="padding: 1rem 1.5rem;">Standard US contract</td>
            <td style="padding: 1rem 1.5rem;">Standard employment IP</td>
          </tr>
          <tr>
            <td style="padding: 1rem 1.5rem; font-weight: 600;">Tech Leadership</td>
            <td style="padding: 1rem 1.5rem;">Architects &amp; senior engineers</td>
            <td style="padding: 1rem 1.5rem;">Junior devs managed by PMs</td>
            <td style="padding: 1rem 1.5rem;">Depends on individual hire</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- FAQs -->
<section class="section section--soft" aria-labelledby="usa-faq-h">
  <div class="container">
    <div class="section-head text-center">
      <p class="eyebrow">Questions &amp; Answers</p>
      <h2 id="usa-faq-h">Offshore Development for US Clients FAQ</h2>
    </div>
    <div class="grid grid-2 faq-grid" style="margin-top: 2rem;">
      <div class="card" style="padding: 1.75rem;">
        <h3>How do we handle payments from the US?</h3>
        <p>We accept ACH bank transfers, wire transfers (USD), and electronic invoices via major international payment rails. Terms are milestone-based or bi-weekly depending on the engagement.</p>
      </div>
      <div class="card" style="padding: 1.75rem;">
        <h3>What if we need to adjust our development capacity?</h3>
        <p>Our contracts are flexible. You can scale from a single dedicated engineer to a full squad as your product roadmap and funding evolve.</p>
      </div>
      <div class="card" style="padding: 1.75rem;">
        <h3>Which tools do you use for project management?</h3>
        <p>We work inside your preferred stack—commonly Jira, Linear, Trello, GitHub Issues, Slack, and Zoom. If you don’t have an existing setup, we configure a structured project workspace for you.</p>
      </div>
      <div class="card" style="padding: 1.75rem;">
        <h3>Can you sign our company’s custom NDA?</h3>
        <p>Yes. We routinely review and sign customer-provided NDAs prior to any technical briefing or code repository access.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="section section--dark" style="text-align: center;">
  <div class="container">
    <p class="eyebrow eyebrow--light">Scale Your Product Without High Overhead</p>
    <h2>Schedule a Discovery Call with Our Engineering Leads</h2>
    <p class="lead lead--light" style="max-width: 680px; margin: 1rem auto 2rem;">Book a consultation that aligns with your EST, CST, or PST working hours. We'll review your architecture, feature requirements, and timeline.</p>
    <a class="btn btn--primary btn--lg" href="{{ route('start-a-project') }}?region=usa">Start Your US Project</a>
    <a class="btn btn--outline-light btn--lg" href="{{ route('contact') }}" style="margin-left: 0.5rem;">Book a Video Call</a>
  </div>
</section>

@endsection
