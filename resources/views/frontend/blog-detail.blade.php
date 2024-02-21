@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $blog['description'] ?? '' }}">
    <meta name="title" content="{{ $blog['meta_title'] ?? '' }}">
    <meta name="keywords" content="{{ $blog['meta_keyword'] ?? '' }}">
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $blog['meta_title'] != null ? $blog['meta_title'] : $blog['name'] }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ Storage::url($blog['image']) }});  background-size: cover; background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="title">{{ $blog['name'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_details position-relative">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="blog__title">{{ $blog['name'] }} </h2>
                    {!! $blog['description'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
