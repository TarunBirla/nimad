<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a class="brand brand--light" href="{{ route('home') }}" aria-label="Nimad Tech — home">
        <img src="{{ asset('logo.png') }}" alt="Nimad Tech Logo" class="brand-mark" style="height: 70px; width: auto; max-width: 200px; object-fit: contain; vertical-align: middle;">
      </a>
      <p>Software development and digital solutions for startups, growing businesses and established organisations in India and worldwide.</p>
    </div>
    <nav aria-label="Company"><h2 class="footer-h">Company</h2>
      <ul>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('solutions') }}">Solutions</a></li>
        <li><a href="{{ route('industries') }}">Industries</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('start-a-project') }}">Start a Project</a></li>
      </ul>
    </nav>
    <nav aria-label="Services"><h2 class="footer-h">Services</h2>
      <ul>
        <li><a href="{{ route('services.custom-software') }}">Custom Software Development</a></li>
        <li><a href="{{ route('services.web-application') }}">Web Application Development</a></li>
        <li><a href="{{ route('services.website-design') }}">Website Design &amp; Development</a></li>
        <li><a href="{{ route('services.mobile-app') }}">Mobile App Development</a></li>
        <li><a href="{{ route('services.crm-erp') }}">CRM &amp; ERP Development</a></li>
        <li><a href="{{ route('services.ai-integration') }}">AI Integration &amp; Business Automation</a></li>
        <li><a href="{{ route('services.saas-product') }}">SaaS Product Development</a></li>
        <li><a href="{{ route('services.api-development') }}">API Development &amp; Third-Party Integrations</a></li>
        <li><a href="{{ route('services.application-modernization') }}">Application Modernization</a></li>
        <li><a href="{{ route('services.website-maintenance') }}">Website Maintenance &amp; Technical Support</a></li>
      </ul>
    </nav>
    <div><h2 class="footer-h">Contact</h2>
      <ul class="footer-contact">
        <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg><a href="{{ route('contact') }}">Send us a message</a></li>
        <li><svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg><a href="https://wa.me/919575370343?text=Hi%20Nimad%20Tech%2C%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer">WhatsApp: +91 95753 70343</a></li>
      </ul>
      <h2 class="footer-h" style="margin-top: 24px;">Regions We Serve</h2>
      <ul>
        <li><a href="{{ route('locations.dubai') }}">Dubai &amp; UAE</a></li>
        <li><a href="{{ route('locations.usa') }}">United States</a></li>
        <li><a href="{{ route('locations.india') }}">India</a></li>
      </ul>
    </div>
  </div>
  <div class="container footer-bottom">
    <p>© {{ date('Y') }} Nimad Tech. All rights reserved.</p>
    <ul>
      <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
      <li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
    </ul>
  </div>
</footer>
