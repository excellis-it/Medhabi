@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="Fountains of Knowledge, Shaping Minds Towards Enlightment.">
    <meta name="title" content="Medhavi University In The Media - Explore Our Latest In The Media">
    <meta name="keywords"
        content="Medhavi University, In The Media, Television Commercial, University Ad, Education, Higher Education, University">
@endsection
@section('title')
    {{ env('APP_NAME') }} In The Media - Explore Our Latest In The Media
@endsection
@push('styles')
    <style>
        a p {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 0 !important;
            font-size: 14px !important;
            font-weight: 500 !important;
        }

        .flexbox {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            --bs-gutter-y: 1rem;
            --bs-gutter-x: 1rem;
        }

        .student-img-wrap {
            width: 100%;
        }

        .flexbox>div {
            width: 400px !important;
            max-width: 100%;
            display: flex;
        }

        .media-coverage-img-wrap {
            padding: 15px;
        }

        .media-coverage-text-wrap h4 {
            font-size: 14px;
        }

        .media-coverage-text-wrap {
            display: flex;
            justify-content: space-between;
        }

        .media-coverage-text-wrap .media-icon-text-div:nth-child(2) {
            margin-right: 0;
            min-width: 115px;
        }
    </style>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="
background-image: url({{ asset('frontend_assets/images/m-u/media-coverage/media-bg.jpg') }});
background-size: cover;
background-position: center;
">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-title">
                        <h1 class="title">In The Media</h1>
                        <p>
                            {{-- Fountains of Knowledge, Shaping Minds Towards Enlightment. --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="media-coverage">
        <div class="container-fluid custom-width__2">
            <div class="media-coverage-wrap">
                @if (count($medias) > 0)
                <div class="row g-5 flexbox">
                    @foreach ($medias as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="media-coverage-img-wrap">
                                <a href="{{ $item->media_channel_url }}" target="_blank">
                                    <div class="media-coverage-img">
                                        <img src="{{ Storage::url($item->media_channel_thumbnail) }}" alt="" />
                                    </div>
                                </a>
                                <div class="media-coverage-text-wrap d-flex align-items-center">
                                    <div class="media-icon-text-div">
                                        <div class="media-icon">
                                            <span><i class="ri-newspaper-line"></i></span>
                                            <h4>{{ $item->media_channel_name }}</h4>
                                        </div>
                                    </div>
                                    <div class="media-icon-text-div">
                                        <div class="media-icon">
                                            <span><i class="ri-calendar-2-line"></i></span>
                                            <h4>{{$item->news_date ? date('M d,Y', strtotime($item->news_date)) : '' }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-coverage-text-p">
                                    <a href="{{ $item->media_channel_url }}" target="_blank">
                                        <p>
                                            {{ $item->news_title }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger" role="alert">
                            No In The Media Found
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
