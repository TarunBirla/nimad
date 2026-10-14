@extends('layouts.app')

@section('title', 'Page not found | Nimad Tech')
@section('meta_description', 'The page you were looking for could not be found.')
@section('page_type', 'page')

@section('content')

<section class="section notfound"><div class="container narrow center">
  <p class="eyebrow">Error 404</p>
  <h1>We couldn’t find that page</h1>
  <p class="lead">The link may be outdated or the page may have moved. Try one of these instead.</p>
  <div class="center-actions"><a class="btn btn--primary btn--lg" href="/">Go to homepage</a><a class="btn btn--outline btn--lg" href="/services/">Browse services</a><a class="btn btn--outline btn--lg" href="/contact/">Contact us</a></div>
</div></section>

@endsection
