@extends('layouts.app')

@section('title', 'Contact Us | Nimad Tech')
@section('meta_description', 'Contact Nimad Tech about your software, web, mobile or AI project. Share your requirements and we will respond with next steps.')
@section('page_type', 'contact')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://nimadtech.in/"},{"@type":"ListItem","position":2,"name":"Contact","item":"https://nimadtech.in/contact/"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="/">Home</a></li><li aria-current="page">Contact</li></ol></nav>
    <p class="eyebrow">Contact</p>
    <h1>Tell us about your project</h1>
    <p class="lead">Share a few details and we will get back to you. A rough idea is enough to start a conversation.</p>
    
  </div>
</section>
<section class="section"><div class="container contact-layout">
  <div class="contact-info">
    <h2 class="h3">How we can help</h2>
    <p>Ask about a new product, an existing system, a quote or a technical problem. We read every message.</p>
    
    <div class="side-card"><h3 class="h4">Have a bigger project?</h3><p>Use the <a href="/start-a-project" data-track="project_cta" data-track-label="contact_side">Start a Project</a> form to describe your requirements step by step, or ask for a short consultation call.</p></div>
    <div class="side-card"><h3 class="h4">Not sure which service you need?</h3><p>Browse our <a href="/services">services</a> or <a href="/solutions">solutions by business problem</a>. Or choose “Not sure yet” in the form and we will advise.</p></div>
  </div>
  <div class="contact-form-card"><div class="form-wrap " data-form-wrap>
<form id="contact-form" class="lead-form" method="post" action="{{ route('contact.submit') }}" novalidate data-lead-form data-form-type="contact">
  @csrf
  <div class="form-status" role="status" aria-live="polite" tabindex="-1" data-status></div>
  <input type="hidden" name="form_type" value="contact">
<input type="hidden" name="source_page" value="">
<input type="hidden" name="ts" value="">

<div class="hp" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
<div class="grid-2">
<div class="field">
  <label for="c-name">Full name <span class="req" aria-hidden="true">*</span></label>
  <input id="c-name" name="full_name" type="text" required aria-required="true" aria-describedby="err-c-name" autocomplete="name" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-c-name" data-error-for="full_name" role="alert"></p>
</div>
<div class="field">
  <label for="c-email">Business email <span class="req" aria-hidden="true">*</span></label>
  <input id="c-email" name="email" type="email" required aria-required="true" aria-describedby="err-c-email" autocomplete="email" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-c-email" data-error-for="email" role="alert"></p>
</div>
<div class="field">
  <label for="c-company">Company name <span class="opt">(optional)</span></label>
  <input id="c-company" name="company" type="text" aria-describedby="err-c-company" autocomplete="organization" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-c-company" data-error-for="company" role="alert"></p>
</div>
<div class="field">
  <label for="c-phone">Phone number <span class="opt">(optional)</span></label>
  <input id="c-phone" name="phone" type="tel" aria-describedby="err-c-phone" autocomplete="tel" placeholder="" maxlength="200">
  
  <p class="field-error" id="err-c-phone" data-error-for="phone" role="alert"></p>
</div>
<div class="field">
  <label for="c-service">Service required <span class="req" aria-hidden="true">*</span></label>
  <select id="c-service" name="service" required aria-required="true" aria-describedby="err-c-service"><option value="">Select…</option><option value="custom-software-development">Custom Software Development</option><option value="web-application-development">Web Application Development</option><option value="website-design-development">Website Design &amp; Development</option><option value="mobile-app-development">Mobile App Development</option><option value="crm-erp-development">CRM &amp; ERP Development</option><option value="ai-integration-automation">AI Integration &amp; Business Automation</option><option value="saas-product-development">SaaS Product Development</option><option value="api-development-integrations">API Development &amp; Third-Party Integrations</option><option value="application-modernization">Application Modernization</option><option value="website-maintenance-support">Website Maintenance &amp; Technical Support</option><option value="not-sure">Not sure yet</option><option value="other">Something else</option></select>
  
  <p class="field-error" id="err-c-service" data-error-for="service" role="alert"></p>
</div>
<div class="field">
  <label for="c-budget">Estimated budget <span class="opt">(optional)</span></label>
  <select id="c-budget" name="budget" aria-describedby="err-c-budget hint-c-budget"><option value="">Select…</option><option value="Not sure yet">Not sure yet</option><option value="Under ₹1 lakh">Under ₹1 lakh</option><option value="₹1 – 3 lakh">₹1 – 3 lakh</option><option value="₹3 – 10 lakh">₹3 – 10 lakh</option><option value="₹10 lakh and above">₹10 lakh and above</option><option value="Prefer to discuss">Prefer to discuss</option></select>
  <p class="hint" id="hint-c-budget">Or the equivalent in your currency.</p>
  <p class="field-error" id="err-c-budget" data-error-for="budget" role="alert"></p>
</div>
</div>
<div class="field">
  <label for="c-timeline">Project timeline <span class="opt">(optional)</span></label>
  <select id="c-timeline" name="timeline" aria-describedby="err-c-timeline"><option value="">Select…</option><option value="Not sure yet">Not sure yet</option><option value="As soon as possible">As soon as possible</option><option value="Within 1 – 3 months">Within 1 – 3 months</option><option value="3 – 6 months">3 – 6 months</option><option value="Flexible">Flexible</option></select>
  
  <p class="field-error" id="err-c-timeline" data-error-for="timeline" role="alert"></p>
</div>
<div class="field">
  <label for="c-message">Project description <span class="req" aria-hidden="true">*</span></label>
  <textarea id="c-message" name="message" rows="6" required aria-required="true" aria-describedby="err-c-message" placeholder="What are you trying to achieve? What systems or processes are involved?" maxlength="5000"></textarea>
  
  <p class="field-error" id="err-c-message" data-error-for="message" role="alert"></p>
</div>
<div class="field field--check">
  <div class="check">
    <input id="c-consent" name="consent" type="checkbox" required aria-required="true" aria-describedby="err-c-consent">
    <label for="c-consent">I agree to Nimad Tech using these details to respond to my enquiry, as described in the <a href="/privacy-policy">Privacy Policy</a>. <span class="req" aria-hidden="true">*</span></label>
  </div>
  <p class="field-error" id="err-c-consent" data-error-for="consent" role="alert"></p>
</div>
  <div class="form-actions">
    <button type="submit" class="btn btn--primary btn--lg" data-submit><span class="btn-label">Send enquiry</span><span class="spinner" aria-hidden="true"></span></button>
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
