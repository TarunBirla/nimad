@extends('layouts.app')

@section('title', 'Website performance and Core Web Vitals: the basics | Nimad Tech')
@section('meta_description', 'What Core Web Vitals measure and the practical changes that usually make a website faster.')
@section('page_type', 'article')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","headline":"Website performance and Core Web Vitals: the basics","description":"What Core Web Vitals measure and the practical changes that usually make a website faster.","datePublished":"2026-10-12","dateModified":"2026-10-12","mainEntityOfPage":"https://nimadtech.in/blog/website-performance-and-core-web-vitals-basics/","author":{"@type":"Organization","name":"Nimad Tech Team"},"publisher":{"@type":"Organization","name":"Nimad Tech","logo":{"@type":"ImageObject","url":"https://nimadtech.in/assets/img/logo.svg"}},"image":"https://nimadtech.in/assets/img/og-default.png"}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Blog","item":"https://nimadtech.in/blog/"},{"@type":"ListItem","position":3,"name":"Website performance and Core Web Vitals: the basics","item":"https://nimadtech.in/blog/website-performance-and-core-web-vitals-basics/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark page-hero--post"><div class="container narrow-left">
  <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li><a href="/blog">Blog</a></li><li aria-current="page">Website performance and Core Web Vitals: the basics</li></ol></nav>
  <p class="post-meta post-meta--light"><span class="badge">Web</span><time datetime="2026-10-12">12 October 2026</time><span>1 min read</span></p>
  <h1>Website performance and Core Web Vitals: the basics</h1>
  <p class="lead">What Core Web Vitals measure and the practical changes that usually make a website faster.</p>
</div></section>
<section class="section"><div class="container article-layout">
  <article class="prose article" data-article>
    <div style="margin-bottom: 30px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.06); border: 1px solid var(--border); background: #0f172a;">
      <img src="{{ asset('assets/img/blogs/website-performance-core-web-vitals.svg') }}" alt="Website performance and Core Web Vitals" style="width: 100%; max-height: 440px; object-fit: cover; display: block;">
    </div>
    <p>A slow website costs you visitors, enquiries and search visibility. Google&#39;s Core Web Vitals give a common way to measure the experience.</p>
<h2 id="the-three-measures">The three measures</h2>
<ul><li><strong>Largest Contentful Paint (LCP)</strong> is how quickly the main content appears.</li><li><strong>Interaction to Next Paint (INP)</strong> is how quickly the page responds when someone taps or clicks.</li><li><strong>Cumulative Layout Shift (CLS)</strong> is how much the layout jumps around while loading.</li></ul>
<p>Search Console and PageSpeed tools report these for your site, and recommended thresholds are published by Google.</p>
<h2 id="common-causes-of-slow-pages">Common causes of slow pages</h2>
<ol><li>Large, uncompressed images</li><li>Too much JavaScript, often from third-party scripts</li><li>Slow hosting or no caching</li><li>Web fonts that delay text or cause shifts</li><li>Images and embeds without reserved space</li></ol>
<h2 id="practical-fixes">Practical fixes</h2>
<p><strong>Images.</strong> Use modern formats, size them for the screen and load below-the-fold images lazily. Always specify width and height so the layout does not jump.</p>
<p><strong>Scripts.</strong> Remove what you do not need. Load analytics and widgets after the page is usable, and ask whether each one earns its cost.</p>
<p><strong>Fonts.</strong> Limit the number of weights and use a font-display setting that shows text immediately.</p>
<p><strong>Hosting and caching.</strong> Enable compression and sensible cache headers, and serve static files efficiently.</p>
<p><strong>Keep it simple.</strong> A page built with clean HTML and CSS and a small amount of JavaScript is hard to beat for speed.</p>
<h2 id="measure-change-measure-again">Measure, change, measure again</h2>
<p>Test key pages on a mobile connection, change one thing at a time and re-test. Performance is also an ongoing habit: every new plugin or script can undo earlier work.</p>
<p>Performance is built into how we design and build sites. See our <a href="/services/website-design-development">website design and development</a> service, or our <a href="/services/website-maintenance-support">maintenance and support</a> plans if you need an existing site improved.</p></article>
  <aside class="article-side">
    <nav class="toc" aria-label="On this page"><h2 class="h4">On this page</h2><ul><li><a href="#the-three-measures">The three measures</a></li><li><a href="#common-causes-of-slow-pages">Common causes of slow pages</a></li><li><a href="#practical-fixes">Practical fixes</a></li><li><a href="#measure-change-measure-again">Measure, change, measure again</a></li></ul></nav>
    <div class="side-card"><h2 class="h4">Related services</h2><ul><li><a href="/services/website-design-development">Website Design &amp; Development</a></li><li><a href="/services/website-maintenance-support">Website Maintenance &amp; Technical Support</a></li></ul></div>
  </aside>
</div>
<div class="container narrow-left"><div class="author-box"><div class="author-avatar" aria-hidden="true">NT</div><div><p class="author-name">Nimad Tech Team</p><p>The Nimad Tech team writes practical notes on building, modernising and running business software.</p></div></div></div>
</section>
<section class="section section--soft"><div class="container">
  <div class="section-head">
  <p class="eyebrow">Keep reading</p>
  <h2>Related articles</h2>
  
</div>
  <div class="grid grid-3"><article class="card card--link post-card" data-post data-category="Guides" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
  <div style="width: 100%; height: 170px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
    <img src="{{ asset('assets/img/blogs/what-to-prepare-software-development.svg') }}" alt="What to prepare" style="width: 100%; height: 100%; object-fit: cover;">
  </div>
  <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
    <p class="post-meta"><span class="badge badge--soft">Guides</span><time datetime="2026-10-10">10 October 2026</time></p>
    <h3 style="margin-top: 10px;"><a class="card-link" href="/blog/what-to-prepare-before-contacting-a-development-company">What to prepare before contacting a software development company</a></h3>
    <p style="margin-top: 8px;">A short checklist that helps you get a faster, more accurate response to your project enquiry.</p>
    <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
  </div>
</article><article class="card card--link post-card" data-post data-category="AI &amp; Automation" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
  <div style="width: 100%; height: 170px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
    <img src="{{ asset('assets/img/blogs/where-ai-automation-helps-business.svg') }}" alt="AI automation" style="width: 100%; height: 100%; object-fit: cover;">
  </div>
  <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
    <p class="post-meta"><span class="badge badge--soft">AI &amp; Automation</span><time datetime="2026-10-08">8 October 2026</time></p>
    <h3 style="margin-top: 10px;"><a class="card-link" href="/blog/where-ai-automation-actually-helps-small-businesses">Where AI and automation actually help a growing business</a></h3>
    <p style="margin-top: 8px;">Practical places to start with AI and workflow automation, and where to be careful.</p>
    <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
  </div>
</article><article class="card card--link post-card" data-post data-category="Modernization" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
  <div style="width: 100%; height: 170px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
    <img src="{{ asset('assets/img/blogs/signs-application-needs-modernization.svg') }}" alt="Application modernization" style="width: 100%; height: 100%; object-fit: cover;">
  </div>
  <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
    <p class="post-meta"><span class="badge badge--soft">Modernization</span><time datetime="2026-10-06">6 October 2026</time></p>
    <h3 style="margin-top: 10px;"><a class="card-link" href="/blog/signs-your-application-needs-modernization">Five signs your business application needs modernization</a></h3>
    <p style="margin-top: 8px;">Slow, fragile or impossible to change: how to recognise when ageing software is costing more than it saves.</p>
    <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
  </div>
</article></div>
</div></section>
<section class="cta-band" aria-labelledby="cta-title">
  <div class="container cta-inner">
    <div>
      <h2 id="cta-title">Want to talk about your own project?</h2>
      <p>We read every enquiry. Tell us what you are working on and we will suggest sensible next steps.</p>
    </div>
    <div class="cta-actions">
      <a class="btn btn--primary btn--lg" href="/start-a-project" data-track="project_cta" data-track-label="blog_cta">Discuss Your Project</a>
      <a class="btn btn--outline-light btn--lg" href="/contact">Contact Nimad Tech</a>
    </div>
  </div>
</section>

@endsection
