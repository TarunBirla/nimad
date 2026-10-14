@extends('layouts.app')

@section('title', ($blog->meta_title ?: $blog->title) . ' | Nimad Tech')
@section('meta_description', $blog->meta_description ?: $blog->excerpt)
@section('page_type', 'article')

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{ $blog->title }}",
  "description": "{{ $blog->excerpt }}",
  "datePublished": "{{ $blog->published_at ? $blog->published_at->toDateString() : $blog->created_at->toDateString() }}",
  "dateModified": "{{ $blog->updated_at->toDateString() }}",
  "mainEntityOfPage": "{{ url()->current() }}",
  "author": {
    "@type": "Organization",
    "name": "{{ $blog->author ?: 'Nimad Tech Team' }}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Nimad Tech",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('logo.jpeg') }}"
    }
  },
  "image": "{{ $blog->image ? asset($blog->image) : asset('assets/img/og-default.png') }}"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('home') }}"},
    {"@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('blog') }}"},
    {"@type": "ListItem", "position": 3, "name": "{{ $blog->title }}", "item": "{{ url()->current() }}"}
  ]
}
</script>
@endsection

@section('content')

<section class="page-hero page-hero--dark page-hero--post">
  <div class="container narrow-left">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li aria-current="page">{{ $blog->title }}</li>
      </ol>
    </nav>
    <p class="post-meta post-meta--light">
      <span class="badge">{{ $blog->category }}</span>
      <time datetime="{{ $blog->published_at ? $blog->published_at->toDateString() : $blog->created_at->toDateString() }}">
        {{ $blog->published_at ? $blog->published_at->format('j F Y') : $blog->created_at->format('j F Y') }}
      </time>
      <span>{{ $blog->read_time ?: '3 min read' }}</span>
    </p>
    <h1>{{ $blog->title }}</h1>
    @if($blog->excerpt)
      <p class="lead">{{ $blog->excerpt }}</p>
    @endif
  </div>
</section>

<section class="section">
  <div class="container article-layout">
    <article class="prose article" data-article>
      @if($blog->image)
        <div style="margin-bottom: 24px;">
          <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="width: 100%; max-height: 440px; object-fit: cover; border-radius: 12px;">
        </div>
      @endif
      {!! $blog->content !!}
    </article>
    <aside class="article-side">
      <div class="side-card">
        <h2 class="h4">Related services</h2>
        <ul>
          <li><a href="{{ route('services.custom-software') }}">Custom Software Development</a></li>
          <li><a href="{{ route('services.crm-erp') }}">CRM &amp; ERP Development</a></li>
          <li><a href="{{ route('services.ai-integration') }}">AI Integration &amp; Automation</a></li>
        </ul>
      </div>
      <div class="side-card">
        <h2 class="h4">Need expert advice?</h2>
        <p style="font-size: 14px; color: var(--navy-muted); margin-bottom: 12px;">We are happy to review your situation and recommend the right path.</p>
        <a href="{{ route('start-a-project') }}" class="btn btn--primary btn--sm" style="display: block; text-align: center;">Start a Project</a>
      </div>
    </aside>
  </div>
  <div class="container narrow-left">
    <div class="author-box">
      <div class="author-avatar" aria-hidden="true">NT</div>
      <div>
        <p class="author-name">{{ $blog->author ?: 'Nimad Tech Team' }}</p>
        <p>The Nimad Tech team writes practical notes on building, modernising and running business software.</p>
      </div>
    </div>
  </div>
</section>

@if(isset($related) && $related->count() > 0)
<section class="section section--soft">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">Keep reading</p>
      <h2>Related articles</h2>
    </div>
    <div class="grid grid-3">
      @foreach($related as $rel)
      <article class="card card--link post-card">
        <p class="post-meta">
          <span class="badge badge--soft">{{ $rel->category }}</span>
          <time datetime="{{ $rel->published_at ? $rel->published_at->toDateString() : $rel->created_at->toDateString() }}">
            {{ $rel->published_at ? $rel->published_at->format('j F Y') : $rel->created_at->format('j F Y') }}
          </time>
        </p>
        <h3><a class="card-link" href="{{ route('blog.show', $rel->slug) }}">{{ $rel->title }}</a></h3>
        <p>{{ $rel->excerpt }}</p>
        <span class="link-arrow" aria-hidden="true">Read article <svg class="icon icon--sm" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </article>
      @endforeach
    </div>
  </div>
</section>
@endif

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
