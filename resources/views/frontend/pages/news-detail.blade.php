@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $news['description'] ?? '' }}">
    <meta name="title" content="{{ $news['meta_title'] ?? '' }}">
    <meta name="keywords" content="{{ $news['meta_keyword'] ?? '' }}">
    {!! $news['google_analytics'] ?? '' !!}
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $news['meta_title'] != null ? $news['meta_title'] : $news['name'] }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ Storage::url($news['image']) }});  background-size: cover; background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="title">{{ $news['name'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_details position-relative">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h2 class="blog__title">{{ $news['name'] }} </h2> --}}
                    {!! $news['description'] !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
