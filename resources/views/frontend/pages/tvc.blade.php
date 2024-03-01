@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description"
        content="Explore the latest TVC of Medhavi University. Get insights into our campus, courses, and vibrant community.">
    <meta name="title" content="Medhavi University TVC - Explore Our Latest TVC">
    <meta name="keywords"
        content="Medhavi University, TVC, Television Commercial, University Ad, Education, Higher Education, University">
@endsection
@section('title')
    {{ env('APP_NAME') }} TVC - Explore Our Latest TVC
@endsection
@push('styles')
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
                        <h1 class="title">TVC</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=         tvc-sec Sec    =-->
    <!--=====================================-->
    <section class="media-coverage tvc-sec">
        <div class="container-fluid custom-width__2">
            <div class="media-coverage-wrap">
                <div class="media-date-div-main">
                </div>
            </div>
            @if (count($tvcs) > 0)
                <div class="uni-vdo-sec">
                    <div class="container-fluid custom-width__2">
                        <div class="uni-vdo-sec-wrap">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="uni-vdo-left">
                                        <div class="uni-vdo-box">
                                            <img src="{{ Storage::url($tvcs[0]->thumbnail) }}" alt="" />
                                            <a href="{{ $tvcs[0]->url }}" target="_blank">
                                                <div class="play-btn-icon">
                                                    <i class="ri-play-fill"></i>
                                                </div>
                                            </a>
                                            <div>
                                                <a href="{{ $tvcs[0]->url }}" target="_blank">
                                                    <div class="uni-vdo-name">
                                                        <h4>{{ $tvcs[0]->title }}</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="uni-vdo-right">
                                        @foreach ($tvcs as $item)
                                            @if ($loop->index == 0)
                                                @continue
                                            @endif
                                            <div class="uni-vdo-right-div d-flex justify-content-between uni-vdo-right-div-btm">
                                                <div class="uni-vdo-right-img">
                                                    <img src="{{ Storage::url($item->thumbnail) }}" alt="" />
                                                    <a href="{{ $item->url }}" target="_blank">
                                                        <div class="play-btn-icon-sm">
                                                            <i class="ri-play-fill"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ $item->url }}" target="_blank">
                                                        <div class="uni-vdo-box-text">
                                                            <h4>{{ $item->title }}</h4>
                                                            <h5> views</h5>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="w-100 text-center underline">
                                            <a href="https://www.youtube.com/@medhaviskillsuniversity/featured"
                                                target="_blank">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger" role="alert">
                            No TVC Found
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
@endpush
