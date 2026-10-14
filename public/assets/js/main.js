/* Nimad Tech — site behaviour. Vanilla JS, no dependencies. */
(function () {
  'use strict';

  var CFG = window.NIMAD || {};
  var $ = function (sel, root) { return (root || document).querySelector(sel); };
  var $$ = function (sel, root) { return Array.prototype.slice.call((root || document).querySelectorAll(sel)); };
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function store(key, val) {
    try {
      if (val === undefined) return window.localStorage.getItem(key);
      window.localStorage.setItem(key, val);
    } catch (e) { /* storage unavailable: degrade silently */ }
    return null;
  }

  /* ------------------------------------------------ analytics (consent-gated) */
  var analyticsOn = false;
  function loadAnalytics() {
    if (analyticsOn || !CFG.ga4) return;
    analyticsOn = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = function () { window.dataLayer.push(arguments); };
    window.gtag('js', new Date());
    window.gtag('config', CFG.ga4, { anonymize_ip: true });
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(CFG.ga4);
    document.head.appendChild(s);
  }
  function track(name, params) {
    if (analyticsOn && typeof window.gtag === 'function') window.gtag('event', name, params || {});
  }

  function initConsent() {
    if (!CFG.ga4) return;
    var banner = $('[data-consent]');
    var saved = store('nt_consent');
    if (saved === 'granted') return loadAnalytics();
    if (saved === 'denied' || !banner) return;
    banner.hidden = false;
    $('[data-consent-accept]', banner).addEventListener('click', function () {
      store('nt_consent', 'granted');
      banner.hidden = true;
      loadAnalytics();
    });
    $('[data-consent-decline]', banner).addEventListener('click', function () {
      store('nt_consent', 'denied');
      banner.hidden = true;
    });
  }

  var EVENT_MAP = { project_cta: 'project_cta_click', email_click: 'email_click', whatsapp_click: 'whatsapp_click', case_study_click: 'case_study_click' };
  function initClickTracking() {
    document.addEventListener('click', function (e) {
      var el = e.target.closest('a, button');
      if (!el) return;
      var name = el.getAttribute('data-track');
      var href = el.getAttribute('href') || '';
      if (!name) {
        if (href.indexOf('mailto:') === 0) name = 'email_click';
        else if (href.indexOf('wa.me') !== -1) name = 'whatsapp_click';
      }
      if (name) track(EVENT_MAP[name] || name, { link_label: el.getAttribute('data-track-label') || '', page_path: location.pathname });
    });
    if (CFG.pageType === 'case-study') track('case_study_view', { page_path: location.pathname });
  }

  /* ------------------------------------------------ header / navigation */
  function initNav() {
    var toggle = $('.nav-toggle');
    var nav = $('#primary-nav');
    if (toggle && nav) {
      var setOpen = function (open) {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
      };
      toggle.addEventListener('click', function () { setOpen(toggle.getAttribute('aria-expanded') !== 'true'); });
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && nav.classList.contains('is-open')) { setOpen(false); toggle.focus(); }
      });
      window.addEventListener('resize', function () { if (window.innerWidth >= 1100) setOpen(false); });
    }
    $$('[data-menu]').forEach(function (item) {
      var btn = $('.menu-toggle', item);
      if (!btn) return;
      var set = function (open) {
        item.classList.toggle('is-open', open);
        btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      };
      btn.addEventListener('click', function () { set(btn.getAttribute('aria-expanded') !== 'true'); });
      item.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && item.classList.contains('is-open')) { set(false); btn.focus(); }
      });
      document.addEventListener('click', function (e) { if (!item.contains(e.target)) set(false); });
    });
  }

  function initAnnouncement() {
    var bar = $('[data-announce]');
    if (!bar) return;
    if (store('nt_announce') === 'dismissed') { bar.hidden = true; return; }
    var close = $('[data-announce-close]', bar);
    if (close) close.addEventListener('click', function () { bar.hidden = true; store('nt_announce', 'dismissed'); });
  }

  function initReveal() {
    if (reduceMotion || !('IntersectionObserver' in window)) return;
    var targets = $$('.section .card, .section .problem, .section .why, .process-step, .industry-tile, .tech-group, .faq-item').filter(function (el) {
      return el.getBoundingClientRect().top > window.innerHeight; // only below the fold: no flash on first paint
    });
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('in'); io.unobserve(en.target); } });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
    targets.forEach(function (el) { el.classList.add('reveal'); io.observe(el); });
  }

  /* ------------------------------------------------ portfolio filters */
  function initPortfolio() {
    var wrap = $('[data-filters]');
    if (!wrap) return;
    var selects = $$('[data-filter]', wrap);
    var cards = $$('[data-project]');
    var count = $('[data-count]');
    var empty = $('[data-empty]');
    var apply = function () {
      var n = 0;
      cards.forEach(function (c) {
        var ok = selects.every(function (s) {
          return !s.value || (c.getAttribute('data-' + s.getAttribute('data-filter')) || '').split(' ').indexOf(s.value) !== -1;
        });
        c.hidden = !ok;
        if (ok) n++;
      });
      if (count) count.textContent = n + (n === 1 ? ' project' : ' projects');
      if (empty) empty.hidden = n > 0;
    };
    selects.forEach(function (s) { s.addEventListener('change', apply); });
    var reset = $('[data-filter-reset]', wrap);
    if (reset) reset.addEventListener('click', function () { selects.forEach(function (s) { s.value = ''; }); apply(); });
  }

  /* ------------------------------------------------ blog search & categories */
  function initBlog() {
    var tools = $('[data-blog-tools]');
    if (!tools) return;
    var input = $('[data-blog-search]', tools);
    var buttons = $$('[data-cat]', tools);
    var posts = $$('[data-post]');
    var count = $('[data-count]');
    var empty = $('[data-empty]');
    var cat = '';
    var apply = function () {
      var q = input.value.trim().toLowerCase();
      var n = 0;
      posts.forEach(function (p) {
        var ok = (!cat || p.getAttribute('data-category') === cat) && (!q || p.getAttribute('data-search').indexOf(q) !== -1);
        p.hidden = !ok;
        if (ok) n++;
      });
      if (count) count.textContent = n + (n === 1 ? ' article' : ' articles');
      if (empty) empty.hidden = n > 0;
      try {
        var url = new URL(location.href);
        q ? url.searchParams.set('q', q) : url.searchParams.delete('q');
        cat ? url.searchParams.set('cat', cat) : url.searchParams.delete('cat');
        history.replaceState(null, '', url);
      } catch (e) { /* ignore */ }
    };
    buttons.forEach(function (b) {
      b.addEventListener('click', function () {
        cat = b.getAttribute('data-cat');
        buttons.forEach(function (x) { x.setAttribute('aria-pressed', x === b ? 'true' : 'false'); });
        apply();
      });
    });
    input.addEventListener('input', apply);
    try {
      var params = new URL(location.href).searchParams;
      if (params.get('q')) input.value = params.get('q');
      var c = params.get('cat');
      if (c) {
        var match = buttons.filter(function (b) { return b.getAttribute('data-cat') === c; })[0];
        if (match) { cat = c; buttons.forEach(function (x) { x.setAttribute('aria-pressed', x === match ? 'true' : 'false'); }); }
      }
    } catch (e) { /* ignore */ }
    apply();
  }

  /* ------------------------------------------------ lead forms */
  var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  var PHONE_RE = /^[+\d][\d\s().-]{6,19}$/;
  var LABELS = { full_name: 'your name', email: 'your email address', service: 'a service', message: 'a project description', consent: '' };

  function fieldMessage(el) {
    var v = (el.type === 'checkbox' ? el.checked : el.value.trim());
    var name = el.name;
    if (el.required && !v) {
      if (name === 'consent') return 'Please tick the box to let us contact you about your enquiry.';
      if (el.tagName === 'SELECT') return 'Please choose ' + (LABELS[name] || 'an option') + '.';
      return 'Please enter ' + (LABELS[name] || 'this field') + '.';
    }
    if (!v) return '';
    if (name === 'full_name' && v.length < 2) return 'Please enter your full name.';
    if (name === 'email' && !EMAIL_RE.test(v)) return 'Please enter a valid email address, for example name@company.com.';
    if (name === 'phone' && !PHONE_RE.test(v)) return 'Please enter a valid phone number, or leave this blank.';
    if (name === 'message' && v.length < 10) return 'Please add a little more detail (at least 10 characters) so we can help.';
    return '';
  }

  function setError(form, el, msg) {
    var out = $('[data-error-for="' + el.name + '"]', form);
    if (out) out.textContent = msg;
    if (msg) el.setAttribute('aria-invalid', 'true'); else el.removeAttribute('aria-invalid');
  }

  function initForm(form) {
    var wrap = form.closest('[data-form-wrap]');
    var status = $('[data-status]', form);
    var submit = $('[data-submit]', form);
    var success = $('[data-success]', wrap);
    var formType = form.getAttribute('data-form-type');
    var endpoint = form.getAttribute('action') || CFG.endpoint;
    var started = false;

    form.elements.source_page.value = location.pathname;
    form.elements.ts.value = String(Date.now());

    // Prefill from query string (e.g. /start-a-project/?service=crm-erp-development&type=consultation)
    try {
      var qs = new URL(location.href).searchParams;
      var svc = qs.get('service');
      if (svc && form.elements.service && form.elements.service.tagName === 'SELECT') {
        var has = $$('option', form.elements.service).some(function (o) { return o.value === svc; });
        if (has) form.elements.service.value = svc;
      }
      if (qs.get('type') === 'consultation' && form.elements.preferred_next_step) form.elements.preferred_next_step.value = 'consultation';
    } catch (e) { /* ignore */ }

    var fields = $$('input, select, textarea', form).filter(function (el) { return el.name && el.type !== 'hidden' && el.name !== 'website'; });

    form.addEventListener('focusin', function () {
      if (!started) { started = true; track('contact_form_start', { form_type: formType }); }
    });
    fields.forEach(function (el) {
      el.addEventListener('blur', function () { if (el.type !== 'checkbox') setError(form, el, fieldMessage(el)); });
      var clear = function () { if (el.getAttribute('aria-invalid') === 'true' && !fieldMessage(el)) setError(form, el, ''); };
      el.addEventListener('input', clear);
      el.addEventListener('change', clear);
    });

    /* multi-step support */
    var steps = $$('[data-step]', form);
    var current = 0;
    var next = $('[data-next]', form);
    var prev = $('[data-prev]', form);
    var finalActions = $('[data-final-actions]', form);
    var indicators = $$('[data-step-indicator]', form);
    var showStep = function (i, focus) {
      current = i;
      steps.forEach(function (s, idx) { s.hidden = idx !== i; });
      indicators.forEach(function (li, idx) {
        li.classList.toggle('is-done', idx < i);
        if (idx === i) li.setAttribute('aria-current', 'step'); else li.removeAttribute('aria-current');
      });
      if (prev) prev.hidden = i === 0;
      if (next) next.hidden = i === steps.length - 1;
      if (finalActions) finalActions.hidden = i !== steps.length - 1;
      if (focus) {
        var first = $('input:not([type=hidden]):not([name=website]), select, textarea', steps[i]);
        if (first) first.focus();
        form.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'start' });
      }
    };
    var validateScope = function (scope) {
      var firstBad = null;
      fields.forEach(function (el) {
        if (scope && !scope.contains(el)) return;
        var msg = fieldMessage(el);
        setError(form, el, msg);
        if (msg && !firstBad) firstBad = el;
      });
      return firstBad;
    };
    if (steps.length) {
      showStep(0, false);
      next.addEventListener('click', function () {
        var bad = validateScope(steps[current]);
        if (bad) { bad.focus(); return; }
        showStep(current + 1, true);
      });
      prev.addEventListener('click', function () { showStep(current - 1, true); });
    }

    var showStatus = function (msg, state) {
      status.textContent = msg || '';
      if (msg) status.setAttribute('data-state', state || 'error'); else status.removeAttribute('data-state');
      if (msg) status.focus();
    };
    var setLoading = function (on) {
      submit.disabled = on;
      submit.classList.toggle('is-loading', on);
      submit.setAttribute('aria-busy', on ? 'true' : 'false');
      var label = $('.btn-label', submit);
      if (label) {
        if (on) { label.setAttribute('data-orig', label.textContent); label.textContent = 'Sending…'; }
        else if (label.getAttribute('data-orig')) label.textContent = label.getAttribute('data-orig');
      }
    };

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (steps.length && current < steps.length - 1) { next.click(); return; }
      showStatus('');
      var bad = validateScope(null);
      if (bad) {
        if (steps.length) {
          var idx = steps.findIndex(function (s) { return s.contains(bad); });
          if (idx > -1) showStep(idx, false);
        }
        showStatus('Please check the highlighted fields and try again.');
        bad.focus();
        return;
      }

      var data = {};
      new FormData(form).forEach(function (v, k) { data[k] = typeof v === 'string' ? v.trim() : v; });
      data.consent = form.elements.consent.checked ? 'yes' : '';
      setLoading(true);

      fetch(endpoint, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
        body: JSON.stringify(data),
        credentials: 'same-origin'
      })
        .then(function (res) {
          return res.text().then(function (text) {
            var json = null;
            try { json = JSON.parse(text); } catch (err) { /* not JSON */ }
            return { res: res, json: json };
          });
        })
        .then(function (r) {
          setLoading(false);
          if (r.res.ok && r.json && r.json.ok === true) {
            track('contact_form_submit', { form_type: formType, page_path: location.pathname });
            form.hidden = true;
            if (r.json.message) { var t = $('[data-success-text]', success); if (t) t.textContent = r.json.message; }
            success.hidden = false;
            success.focus();
            return;
          }
          if (r.json && r.json.errors) {
            var firstEl = null;
            Object.keys(r.json.errors).forEach(function (k) {
              var el = form.elements[k];
              if (el && el.type !== 'hidden') { setError(form, el, r.json.errors[k]); if (!firstEl) firstEl = el; }
            });
            if (firstEl) {
              var idx2 = steps.findIndex(function (s) { return s.contains(firstEl); });
              if (idx2 > -1) showStep(idx2, false);
              firstEl.focus();
            }
          }
          var msg;
          if (r.res.status === 429) msg = 'You have sent several messages in a short time. Please wait a few minutes and try again.';
          else if (r.json && r.json.message) msg = r.json.message;
          else if (r.res.status === 404 || r.res.status === 405 || r.res.status === 0) msg = 'Our enquiry service is not available right now. Your message was not sent. Please try again later or contact us using the details on this page.';
          else msg = 'Something went wrong and your message was not sent. Please try again in a moment.';
          showStatus(msg, 'error');
        })
        .catch(function () {
          setLoading(false);
          showStatus('We could not reach the server, so your message was not sent. Please check your connection and try again.', 'error');
        });
    });
  }

  function init() {
    initConsent();
    initClickTracking();
    initNav();
    initAnnouncement();
    initPortfolio();
    initBlog();
    $$('[data-lead-form]').forEach(initForm);
    initReveal();
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();
})();
