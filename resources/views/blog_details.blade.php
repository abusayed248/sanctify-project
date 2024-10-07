@extends('layouts.app')

@section('title', "$blog->title")

@section('description', "$blog->description")

@section('site_url', url('/blog/details/'. $blog->id))

@section('thumbnail', asset($blog->thumbnail))

@section('content')

<section class="blog-details pad-tb">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 single-card-item wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
          	<div class="card">
                <img src="{{ asset($blog->thumbnail) }}" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $blog->title }}</h5>
                  <p class="card-text">{{ $blog->description }}</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

@endsection