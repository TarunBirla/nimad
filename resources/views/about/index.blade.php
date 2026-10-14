@extends('layouts.app')

@section('title', 'About Us | Nimad Tech')
@section('meta_description', 'Nimad Tech is a software development and digital solutions company helping businesses in India and worldwide build reliable digital products.')
@section('page_type', 'page')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"About Us","item":"https://nimadtech.in/about/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li aria-current="page">About Us</li></ol></nav>
    <p class="eyebrow">About us</p>
    <h1>A technology partner for businesses that want to move forward</h1>
    <p class="lead">Nimad Tech is a software development and digital solutions company. We help startups, growing businesses and established organisations turn ideas and operational challenges into reliable digital products.</p>
    
  </div>
</section>
<section class="section"><div class="container split">
  <div><div class="section-head">
  <p class="eyebrow">Who we are</p>
  <h2>Software built around business needs</h2>
  
</div></div>
  <div class="prose">
    <p>We design and build custom software, web and mobile applications, business systems and AI-powered automation. Our work starts with understanding your business: the people who use the software, the processes it supports and the outcome you want.</p>
    <p>We work with clients in India and internationally, collaborating remotely through scheduled calls, shared documents and regular written updates. For businesses in other time zones, including the UK, we agree meeting times that work for both sides.</p>
  </div>
</div></section>
<section class="section section--soft"><div class="container grid grid-2">
  <div class="panel"><p class="eyebrow">Our mission</p><h2 class="h3">Make good software accessible to businesses of every size</h2><p>We want businesses to have technology that fits how they work: reliable, understandable and ready to grow, without unnecessary complexity or cost.</p></div>
  <div class="panel panel--dark"><p class="eyebrow eyebrow--light">How we think</p><h2 class="h3">Business outcomes first, technology second</h2><p>The best technology choice is the one that solves your problem and that your team can maintain. We recommend accordingly, including when the answer is a simpler or cheaper option.</p></div>
</div></section>
<section class="section"><div class="container">
  <div class="section-head">
  <p class="eyebrow">Our values</p>
  <h2>What you can expect from working with us</h2>
  
</div>
  <div class="grid grid-3"><article class="card"><h3>Clarity first</h3><p>We explain options and trade-offs in plain language so you can decide with confidence.</p></article><article class="card"><h3>Business outcomes over features</h3><p>We ask what the software should change for your business before we discuss how to build it.</p></article><article class="card"><h3>Honest scoping</h3><p>We say when something is out of scope, risky or better solved another way.</p></article><article class="card"><h3>Craft and maintainability</h3><p>We write code to be read, tested and extended by whoever comes next.</p></article><article class="card"><h3>Collaboration</h3><p>You know your business; we know software. The best results come from working together.</p></article></div>
</div></section>
<section class="section section--soft"><div class="container split">
  <div><div class="section-head">
  <p class="eyebrow">Engineering approach</p>
  <h2>How we build</h2>
  
</div></div>
  <ul class="usecase-list">
    <li>Conventional, well-documented code that another developer can pick up</li>
    <li>Security-conscious practices: input validation, access control and careful handling of credentials</li>
    <li>Testing at every stage, with real devices and realistic data</li>
    <li>Small, frequent releases so you can see progress and change direction early</li>
    <li>Clear handover documentation so you are never locked in</li>
  </ul>
</div></section>
<section class="section"><div class="container narrow">
  <div class="section-head section-head--center">
  <p class="eyebrow">Collaboration</p>
  <h2>You know your business. We know software.</h2>
  <p class="lead">The best projects are joint efforts. We ask a lot of questions early, share work in progress often and treat your feedback as part of the process, not an interruption.</p>
</div>
  <div class="center-actions"><a class="btn btn--primary btn--lg" href="/start-a-project" data-track="project_cta" data-track-label="about">Start Your Project</a><a class="btn btn--outline btn--lg" href="/contact">Contact us</a></div>
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
