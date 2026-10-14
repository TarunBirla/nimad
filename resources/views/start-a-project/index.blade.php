@extends('layouts.app')

@section('title', 'Start a Project | Nimad Tech')
@section('meta_description', 'Start a software project with Nimad Tech. Describe your goals, budget and timeline in a short multi-step form and receive a considered response.')
@section('page_type', 'start-project')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Start a Project","item":"https://nimadtech.in/start-a-project/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li aria-current="page">Start a Project</li></ol></nav>
    <p class="eyebrow">Start a project</p>
    <h1>Describe your project in three short steps</h1>
    <p class="lead">No need for a perfect brief. Share what you know and we will ask about the rest.</p>
    
  </div>
</section>
<section class="section"><div class="container contact-layout">
  <div class="contact-info">
    <h2 class="h3">What helps us most</h2>
    <ul class="ticks">
      <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>The problem you want to solve and who has it</li>
      <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Who will use the software</li>
      <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Systems it needs to connect with</li>
      <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Examples you like</li>
      <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>Rough budget and timing, if you have them</li>
    </ul>
    <div class="side-card"><h3 class="h4">What happens next</h3><p>We review your enquiry, reply to the email you give us with questions or a suggested call, then outline an approach, timeline and estimate. Pricing depends on scope.</p></div>
    <p class="alt-contact">Prefer a general message? Use the <a href="/contact">contact page</a>. You can also read <a href="/blog/what-to-prepare-before-contacting-a-development-company">what to prepare before contacting a development company</a>.</p>
  </div>
  <div class="contact-form-card"><div class="form-wrap form-wrap--steps" data-form-wrap>
<form id="project-form" class="lead-form" method="post" action="{{ route('project.submit') }}" novalidate data-lead-form data-form-type="start_project">
  @csrf
  <div class="form-status" role="status" aria-live="polite" tabindex="-1" data-status></div>
  <input type="hidden" name="form_type" value="start_project">
<input type="hidden" name="source_page" value="">
<input type="hidden" name="ts" value="">

<div class="hp" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
<ol class="stepper" data-stepper aria-label="Form progress"><li data-step-indicator="0" aria-current="step"><span class="step-num">1</span><span class="step-label">About you</span></li><li data-step-indicator="1"><span class="step-num">2</span><span class="step-label">Your project</span></li><li data-step-indicator="2"><span class="step-num">3</span><span class="step-label">Budget & timing</span></li></ol>
<fieldset class="step" data-step="0"><legend>About you</legend>
<div class="grid-2">
<div class="field">
  <label for="p-name">Full name <span class="req" aria-hidden="true">*</span></label>
  <input id="p-name" name="full_name" type="text" required aria-required="true" aria-describedby="err-p-name" autocomplete="name" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-p-name" data-error-for="full_name" role="alert"></p>
</div>
<div class="field">
  <label for="p-email">Business email <span class="req" aria-hidden="true">*</span></label>
  <input id="p-email" name="email" type="email" required aria-required="true" aria-describedby="err-p-email" autocomplete="email" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-p-email" data-error-for="email" role="alert"></p>
</div>
<div class="field">
  <label for="p-company">Company name <span class="opt">(optional)</span></label>
  <input id="p-company" name="company" type="text" aria-describedby="err-p-company" autocomplete="organization" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-p-company" data-error-for="company" role="alert"></p>
</div>
<div class="field">
  <label for="p-phone">Phone number <span class="opt">(optional)</span></label>
  <input id="p-phone" name="phone" type="tel" aria-describedby="err-p-phone" autocomplete="tel" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-p-phone" data-error-for="phone" role="alert"></p>
</div>
</div>
</fieldset>
<fieldset class="step" data-step="1"><legend>Your project</legend>
<div class="field">
  <label for="p-service">What do you need? <span class="req" aria-hidden="true">*</span></label>
  <select id="p-service" name="service" required aria-required="true" aria-describedby="err-p-service"><option value="">Select…</option><option value="custom-software-development">Custom Software Development</option><option value="web-application-development">Web Application Development</option><option value="website-design-development">Website Design &amp; Development</option><option value="mobile-app-development">Mobile App Development</option><option value="crm-erp-development">CRM &amp; ERP Development</option><option value="ai-integration-automation">AI Integration &amp; Business Automation</option><option value="saas-product-development">SaaS Product Development</option><option value="api-development-integrations">API Development &amp; Third-Party Integrations</option><option value="application-modernization">Application Modernization</option><option value="website-maintenance-support">Website Maintenance &amp; Technical Support</option><option value="not-sure">Not sure yet</option><option value="other">Something else</option></select>
  
  <p class="field-error" id="err-p-service" data-error-for="service" role="alert"></p>
</div>
<div class="field">
  <label for="p-message">Project description <span class="req" aria-hidden="true">*</span></label>
  <textarea id="p-message" name="message" rows="7" required aria-required="true" aria-describedby="err-p-message hint-p-message" placeholder="What problem are you solving? Who will use it? Any systems it must connect to? Examples you like?" maxlength="5000"></textarea>
  <p class="hint" id="hint-p-message">A rough description is fine. We will ask about the rest.</p>
  <p class="field-error" id="err-p-message" data-error-for="message" role="alert"></p>
</div>
</fieldset>
<fieldset class="step" data-step="2"><legend>Budget & timing</legend>
<div class="grid-2">
<div class="field">
  <label for="p-budget">Estimated budget <span class="opt">(optional)</span></label>
  <select id="p-budget" name="budget" aria-describedby="err-p-budget hint-p-budget"><option value="">Select…</option><option value="Not sure yet">Not sure yet</option><option value="Under ₹1 lakh">Under ₹1 lakh</option><option value="₹1 – 3 lakh">₹1 – 3 lakh</option><option value="₹3 – 10 lakh">₹3 – 10 lakh</option><option value="₹10 lakh and above">₹10 lakh and above</option><option value="Prefer to discuss">Prefer to discuss</option></select>
  <p class="hint" id="hint-p-budget">Or the equivalent in your currency. Pricing depends on scope.</p>
  <p class="field-error" id="err-p-budget" data-error-for="budget" role="alert"></p>
</div>
<div class="field">
  <label for="p-timeline">Project timeline <span class="opt">(optional)</span></label>
  <select id="p-timeline" name="timeline" aria-describedby="err-p-timeline"><option value="">Select…</option><option value="Not sure yet">Not sure yet</option><option value="As soon as possible">As soon as possible</option><option value="Within 1 – 3 months">Within 1 – 3 months</option><option value="3 – 6 months">3 – 6 months</option><option value="Flexible">Flexible</option></select>
  
  <p class="field-error" id="err-p-timeline" data-error-for="timeline" role="alert"></p>
</div>
</div>
<div class="field">
  <label for="p-next">Preferred next step <span class="opt">(optional)</span></label>
  <select id="p-next" name="preferred_next_step" aria-describedby="err-p-next"><option value="">Select…</option><option value="estimate">Send me a written estimate</option><option value="consultation">Book a short consultation call</option><option value="not-sure">Not sure, advise me</option></select>
  
  <p class="field-error" id="err-p-next" data-error-for="preferred_next_step" role="alert"></p>
</div>
<div class="field field--check">
  <div class="check">
    <input id="p-consent" name="consent" type="checkbox" required aria-required="true" aria-describedby="err-p-consent">
    <label for="p-consent">I agree to Nimad Tech using these details to respond to my enquiry, as described in the <a href="/privacy-policy">Privacy Policy</a>. <span class="req" aria-hidden="true">*</span></label>
  </div>
  <p class="field-error" id="err-p-consent" data-error-for="consent" role="alert"></p>
</div>
</fieldset>
<div class="step-nav" data-step-nav>
  <button type="button" class="btn btn--ghost" data-prev hidden>Back</button>
  <button type="button" class="btn btn--primary" data-next>Continue <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></button>
</div>
  <div class="form-actions" data-final-actions>
    <button type="submit" class="btn btn--primary btn--lg" data-submit><span class="btn-label">Submit project enquiry</span><span class="spinner" aria-hidden="true"></span></button>
  </div>
  <noscript><p class="form-noscript">This form needs JavaScript to submit. Please enable it.</p></noscript>
</form>
<div class="form-success" data-success hidden tabindex="-1">
  <div class="success-icon"><svg class="icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg></div>
  <h3>Thank you. Your enquiry has been received.</h3>
  <p data-success-text>We will be in touch shortly.</p>
  <h4>What happens next</h4>
  <ol class="next-steps">
  <li><strong>We review your message.</strong> Someone from our team reads every enquiry personally.</li>
  <li><strong>We get in touch.</strong> We will reply to the email address you provided, usually to ask a few clarifying questions or suggest a short call.</li>
  <li><strong>You receive a proposal.</strong> After we understand your goals, we outline an approach, timeline and estimate.</li>
</ol>
</div>
</div></div>
</div></section>

@endsection
