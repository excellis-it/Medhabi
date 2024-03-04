@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="Fountains of Knowledge, Shaping Minds Towards Enlightment.">
    <meta name="title" content="Medhavi University MEDIA COVERAGE - Explore Our Latest MEDIA COVERAGE">
    <meta name="keywords"
        content="Medhavi University, MEDIA COVERAGE, Television Commercial, University Ad, Education, Higher Education, University">
@endsection
@section('title')
    {{ env('APP_NAME') }} MEDIA COVERAGE - Explore Our Latest MEDIA COVERAGE
@endsection
@push('styles')
    <style>
        section.upoming-event .rbt-card-upcoming .rbt-card-img a img {
            height: auto !important;
        }

        .medhavi_event_wrap {
            width: 430px;
            max-width: 100%;
        }

        section.upoming-event .rbt-card-upcoming {
            padding: 12px 12px 25px 12px;
        }

        .flex1 {
            display: flex !important;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ asset('frontend_assets/images/banner/inner-page-banner.jpg') }}); background-size: cover;
background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="title">Upcoming Events </h1>
                        <!-- <p>Fountains of Knowledge, Shaping <br> Minds Towards Enlightment.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=       Upcoming Event List Area Start =-->
    <!--=====================================-->

    <section class="upoming-event position-relative">
        <section class="container-fluid custom-width__2">
            <div class="row g-5 flex1">
                @foreach ($events as $item)
                    <div class="medhavi_event_wrap">
                        <div class="rbt-card-upcoming rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ $item->url }}">
                                    <img src="{{ Storage::url($item->thumbnail) }}" alt="Card image">
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h4 class="rbt-card-title">
                                    <a href="{{ $item->url }}">
                                        {{ $item->title }}
                                    </a>
                                </h4>

                                <div class="location__date d-flex align-items-center">
                                    <div class="location_bx">
                                        <div class="icon">
                                            <img src="{{ asset('frontend_assets/images/icons/marker.png') }}"
                                                alt="">
                                        </div>
                                        <span class="text">{{ $item->address }}</span>
                                    </div>
                                    <div class="date_bx">
                                        <div class="icon">
                                            <img src="{{ asset('frontend_assets/images/icons/calendar.png') }}"
                                                alt="">
                                        </div>
                                        <span class="text">{{($item->start_date) ?  \Carbon\Carbon::parse($item->start_date)->format('jS') : '' }}{{($item->end_date) ? '' : \Carbon\Carbon::parse($item->start_date)->format('M')}} {{($item->start_date && $item->end_date) ? '-' : ''}}
                                            {{($item->end_date) ? \Carbon\Carbon::parse($item->end_date)->format('jS M') : '' }}</span>
                                    </div>
                                </div>
                                <p class="rbt-card-subtext">
                                    {{ $item->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection

@push('scripts')
@endpush
