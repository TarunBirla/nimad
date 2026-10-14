@extends('layouts.app')

@section('title', 'Blog & Insights | Nimad Tech')
@section('meta_description', 'Guides and insights on software projects, modernization, AI automation and web performance from the Nimad Tech team.')
@section('page_type', 'blog')

@section('schema')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"{{ route('home') }}"},{"@type":"ListItem","position":2,"name":"Blog","item":"{{ route('blog') }}"}]}</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb"><ol><li><a href="{{ route('home') }}">Home</a></li><li aria-current="page">Blog</li></ol></nav>
    <p class="eyebrow">Blog &amp; insights</p>
    <h1>Practical notes on building and running business software</h1>
    <p class="lead">Guides and perspectives on software projects, modernization, automation and web performance.</p>
  </div>
</section>

<section class="section"><div class="container">
  <h2 class="sr-only">Latest articles</h2>
  <div class="blog-tools" data-blog-tools>
    <div class="field search-field">
      <label for="blog-search">Search articles</label>
      <div class="search-wrap">
        <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg>
        <input id="blog-search" type="search" placeholder="Search by keyword" autocomplete="off" data-blog-search>
      </div>
    </div>
    <div class="cat-filter" role="group" aria-label="Filter by category">
      <button type="button" class="chip-btn" data-cat="" aria-pressed="true">All</button>
      <button type="button" class="chip-btn" data-cat="AI &amp; Automation" aria-pressed="false">AI &amp; Automation</button>
      <button type="button" class="chip-btn" data-cat="Guides" aria-pressed="false">Guides</button>
      <button type="button" class="chip-btn" data-cat="Modernization" aria-pressed="false">Modernization</button>
      <button type="button" class="chip-btn" data-cat="Strategy" aria-pressed="false">Strategy</button>
      <button type="button" class="chip-btn" data-cat="Web" aria-pressed="false">Web</button>
    </div>
  </div>

  @php
    $count = (isset($blogs) && $blogs->count() > 0) ? $blogs->count() : 6;
  @endphp
  <p class="result-count" role="status" aria-live="polite" data-count>{{ $count }} {{ Str::plural('article', $count) }}</p>

  <div class="grid grid-3" data-grid>
    @if(isset($blogs) && $blogs->count() > 0)
      @foreach($blogs as $post)
        <article class="card card--link post-card" data-post data-category="{{ $post->category }}" data-search="{{ strtolower($post->title . ' ' . $post->excerpt . ' ' . $post->category) }}" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
          <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
          </div>
          <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
            <p class="post-meta">
              <span class="badge badge--soft">{{ $post->category }}</span>
              <time datetime="{{ $post->published_at ? $post->published_at->toDateString() : $post->created_at->toDateString() }}">
                {{ $post->published_at ? $post->published_at->format('j F Y') : $post->created_at->format('j F Y') }}
              </time>
            </p>
            <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
            <p style="margin-top: 8px;">{{ $post->excerpt }}</p>
            <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
          </div>
        </article>
      @endforeach
    @else
      <article class="card card--link post-card" data-post data-category="Web" data-search="website performance and core web vitals: the basics what core web vitals measure and the practical changes that usually make a website faster. web" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/website-performance-core-web-vitals.svg') }}" alt="Website Performance" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">Web</span><time datetime="2026-10-12">12 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'website-performance-and-core-web-vitals-basics') }}">Website performance and Core Web Vitals: the basics</a></h3>
          <p style="margin-top: 8px;">What Core Web Vitals measure and the practical changes that usually make a website faster.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>

      <article class="card card--link post-card" data-post data-category="Guides" data-search="what to prepare before contacting a software development company a short checklist that helps you get a faster, more accurate response to your project enquiry. guides" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/what-to-prepare-software-development.svg') }}" alt="Software Scoping" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">Guides</span><time datetime="2026-10-10">10 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'what-to-prepare-before-contacting-a-development-company') }}">What to prepare before contacting a software development company</a></h3>
          <p style="margin-top: 8px;">A short checklist that helps you get a faster, more accurate response to your project enquiry.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>

      <article class="card card--link post-card" data-post data-category="AI &amp; Automation" data-search="where ai and automation actually help a growing business practical places to start with ai and workflow automation, and where to be careful. ai &amp; automation" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/where-ai-automation-helps-business.svg') }}" alt="AI Automation" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">AI &amp; Automation</span><time datetime="2026-10-08">8 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'where-ai-automation-actually-helps-small-businesses') }}">Where AI and automation actually help a growing business</a></h3>
          <p style="margin-top: 8px;">Practical places to start with AI and workflow automation, and where to be careful.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>

      <article class="card card--link post-card" data-post data-category="Modernization" data-search="five signs your business application needs modernization slow, fragile or impossible to change: how to recognise when ageing software is costing more than it saves. modernization" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/signs-application-needs-modernization.svg') }}" alt="Application Modernization" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">Modernization</span><time datetime="2026-10-06">6 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'signs-your-application-needs-modernization') }}">Five signs your business application needs modernization</a></h3>
          <p style="margin-top: 8px;">Slow, fragile or impossible to change: how to recognise when ageing software is costing more than it saves.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>

      <article class="card card--link post-card" data-post data-category="Strategy" data-search="custom software or off-the-shelf: how to decide when a ready-made product is the smart choice, and when building something tailored pays off. strategy" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/custom-software-vs-off-the-shelf.svg') }}" alt="Custom Software vs Off-the-Shelf" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">Strategy</span><time datetime="2026-10-03">3 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'custom-software-vs-off-the-shelf') }}">Custom software or off-the-shelf: how to decide</a></h3>
          <p style="margin-top: 8px;">When a ready-made product is the smart choice, and when building something tailored pays off.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>

      <article class="card card--link post-card" data-post data-category="Guides" data-search="how to scope a software project so the estimate means something a practical way to describe a software project so a development partner can give you an estimate you can rely on. guides" style="display: flex; flex-direction: column; overflow: hidden; padding: 0;">
        <div style="width: 100%; height: 190px; overflow: hidden; background: #0f172a; border-bottom: 1px solid var(--border);">
          <img src="{{ asset('assets/img/blogs/how-to-scope-software-project.svg') }}" alt="Software Scoping" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
          <p class="post-meta"><span class="badge badge--soft">Guides</span><time datetime="2026-10-01">1 October 2026</time></p>
          <h3 style="margin-top: 10px;"><a class="card-link" href="{{ route('blog.show', 'how-to-scope-a-software-project') }}">How to scope a software project so the estimate means something</a></h3>
          <p style="margin-top: 8px;">A practical way to describe a software project so a development partner can give you an estimate you can rely on.</p>
          <span class="link-arrow" aria-hidden="true" style="margin-top: auto; padding-top: 14px;">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
        </div>
      </article>
    @endif
  </div>
  <div class="empty" data-empty hidden><h2 class="h3">No articles found</h2><p>Try a different keyword or category.</p></div>
</div></section>

<section class="cta-band" aria-labelledby="cta-title">
  <div class="container cta-inner">
    <div>
      <h2 id="cta-title">Have a question about your project?</h2>
      <p>We are happy to talk through your situation, with no obligation.</p>
    </div>
    <div class="cta-actions">
      <a class="btn btn--primary btn--lg" href="{{ route('start-a-project') }}" data-track="project_cta" data-track-label="cta_band">Discuss Your Project</a>
      <a class="btn btn--outline-light btn--lg" href="{{ route('contact') }}">Contact Nimad Tech</a>
    </div>
  </div>
</section>

@endsection
