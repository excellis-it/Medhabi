@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $school['seo_description'] ?? '' }}">
    <meta name="title" content="{{ $school['seo_title'] ?? '' }}">
    <meta name="keywords" content="{{ $school['seo_keyword'] ?? '' }}">
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $school['seo_title'] != null ? $school['seo_title'] : $school['name'] }}
@endsection
@push('styles')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5HHK5ZC');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="p:domain_verify" content="c711886600acc8f58440b8a66c9756ce" />

    <!-- Global site tag (gtag.js) - Google Ads: 10779528309 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10779528309"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10779528309');
    </script>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="
background-image: url({{ $school['banner_image'] ? Storage::url($school['banner_image']) : asset('frontend_assets/images/banner/MEDIA.jpg') }});
background-size: cover;
background-position: center;
">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-title">
                        <h1 class="title">
                            {{ $school['banner_title'] ? $school['banner_title'] : 'School of Modern Media and Entertainment' }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-section position-relative">
        <div class="container-fluid custom-width__2 p-0">
            <div class="row">
                <div class="text-10">
                    <h2 class="title">
                        <p>
                            {!! $school['section_1_description']
                                ? nl2br($school['section_1_description'])
                                : 'The School of Modern Media and Entertainment welcomes the students to come together to learn, create, and innovate. We offer a range of courses that are designed to provide students with the skills and knowledge they need to succeed in the media and entertainment industry. Our courses are taught by industry professionals who are experts in their field, ensuring that students receive the best possible education. We are committed to providing our students with a supportive and inclusive learning environment, where they can develop their talents and achieve their full potential.' !!}
                        </p>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Border Text      =-->
    <!--=====================================-->
    <section class="border-text">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <span class="line-text">WATCH VIDEO</span>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Overlap Video      =-->
    <!--=====================================-->
    <section class="overlap-video-2">
        <div class="container-fluid custom-width__2">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="video-bx-1">
                        <img src="{{ $school['section_2_image'] ? Storage::url($school['section_2_image']) : asset('frontend_assets/images/video/overlap-video-2.jpg') }}"
                            alt="">
                        <a href="{{ $school['section_2_url'] ? $school['section_2_url'] : 'https://www.youtube.com/watch?v=7e90gBu4pas' }}"
                            class="video-play-btn video-popup-activation popup-youtube">
                            <i class="icon-18"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="medhavi-edge">
        <div class="container-fluid custom-width__2">
            <div class="row justify-content-center">
                <h2 class="edge-title yellow-text text-center">
                    {{ $school['medhavi_edge_title'] ? $school['medhavi_edge_title'] : 'Medhavi Edge' }}</h2>
            </div>

            <div class="row g-5">
                @if ($school->medhaviEdges->count() > 0)
                    @foreach ($school->medhaviEdges as $medhaviEdge)
                        <div class="col-lg-6 col-md-6">
                            <div class="edge-bx">
                                <div class="inner-bx">
                                    <div class="edge-img">
                                        <img src="{{ $medhaviEdge->image ? Storage::url($medhaviEdge->image) : asset('frontend_assets/images/icons/edge-icon/design.png') }}"
                                            alt="">
                                    </div>
                                    <div class="edge-content">
                                        <h3 class="edge-sub-title">{{ $medhaviEdge->title }}</h3>
                                        <p class="edge-sub-para">
                                            {{ $medhaviEdge->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    {{-- @dd($school_courses) --}}
    <!--=====================================-->
    <!--=        Program Levels       =-->
    <!--=====================================-->
    <section class="program-level-sec">
        <div class="container-fluid custom-width__2">
            <div class="program-level-sec-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading-1">
                            <h2> {{ $school['program_levels_title'] ? $school['program_levels_title'] : 'Program Levels' }}
                            </h2>
                            <p>
                                {!! $school['program_levels_description']
                                    ? nl2br($school['program_levels_description'])
                                    : 'The School of Modern Media and Entertainment offers a range of programs at different levels to cater to the diverse needs of students. Our programs are designed to provide students with the skills and knowledge they need to succeed in the media and entertainment industry. Whether you are looking to start your career or advance your skills, we have a program that is right for you.' !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="prg-tab">
                            <div class="prg-tab-wrap">
                                <nav>
                                    <div class="nav nav-tabs justify-content-lg-end" id="nav-tab" role="tablist">
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach ($school_courses as $key => $item)
                                            @php
                                                $id = str_replace(' ', '-', strtolower($key));
                                                $count++;
                                            @endphp
                                            <button class="nav-link {{ $count == 1 ? 'active' : '' }}"
                                                id="{{ $id }}-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-{{ $id }}" type="button" role="tab"
                                                aria-controls="nav-{{ $id }}" aria-selected="false">
                                                {{ $key }}
                                            </button>
                                        @endforeach

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prg-tab">
                    <div class="prg-tab-wrap">
                        <div class="tab-content" id="nav-tabContent">
                            @php
                                $count_i = 0;
                            @endphp
                            @foreach ($school_courses as $key => $value)
                                @php
                                    $id = str_replace(' ', '-', strtolower($key));
                                    $count_i++;
                                @endphp
                                <div class="tab-pane fade show {{ $count_i == 1 ? 'active' : '' }}"
                                    id="nav-{{ $id }}" aria-labelledby="{{ $id }}-tab">
                                    <div class="lab-sec-img-div">
                                        <div class="row g-5">
                                            @foreach ($value as $course)
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="lab-sec-img-wrap">
                                                        <div class="lab-sec-img">
                                                            <img src="{{ $course['course']['banner_image'] ? Storage::url($course['course']['banner_image']) : asset('frontend_assets/images/banner/ABOUT MEDIA.jpg') }}"
                                                                alt="" />
                                                            <div class="lab-sec-text">
                                                                @if ($course['course']['slug'])
                                                                    <a
                                                                        href="{{ route('course', ['slug' => $course['course']['slug']]) }}">
                                                                        <h4> {{ $course['course']['name'] }} </h4>
                                                                    </a>
                                                                    @else
                                                                    <h4> {{ $course['course']['name'] }} </h4>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--=====================================-->
    <!--=     What Our Students Are Saying =-->
    <!--=====================================-->

    <section class="what__our__students__says position-relative">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">{{ $school['expert_speak_title'] ? $school['expert_speak_title'] : 'What Our Students Are Saying' }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="student-says owl-carousel">
                        @if ($school->experSpeaks->count() > 0)
                            @foreach ($school->experSpeaks as $expertSpeak)
                            <div class="item">
                                <div class="faculty-img">
                                    <img src="{{ Storage::url($expertSpeak->image) }}" alt="">
                                </div>
                            </div>
                            @endforeach

                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--=====================================-->
    <!--=       Medhavi Event Area Start      =-->
    <!--=====================================-->


    <!--=====================================-->
    <!--=       We Are New Age & Trusted Area Start      =-->
    <!--=====================================-->

    <section class="academic bg-pattern">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="title text-center text-white">{{ $school['gallery_title'] ? $school['gallery_title'] : 'We Are New Age & Trusted' }}</h2>
                    <p class="text-center container-fluid custom-width__2 text-white">
                        {!! $school['gallery_description']
                            ? nl2br($school['gallery_description'])
                            : 'description.' !!}
                    </p>
                </div>
                <!-- <h2 class="title text-center">Job-Ready Academic Curriculum</h2>
                <p class="text-center">
                  Future-Forward Learning: Elevate Your Future with Our Academic
                  Edge
                </p> -->

            </div>
        </div>
        @if ($school->gallery->count() > 0)
        <div class="academic-swiper">
            <div class="swiper-wrapper">
                @foreach ($school->gallery as $galleryImage)
                <div class="swiper-slide swiper-slide--{{ $loop->iteration }}">
                    <div class="img-gradient">
                        <img src="{{ Storage::url($galleryImage->image) }}" alt="" />
                    </div>
                    <div>
                        <h3>{{ $galleryImage->title }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    @endif

    </section>





    <!--=====================================-->
    <!--=       Our Partnerships Area Start      =-->
    <!--=====================================-->

    <section class="our-partnership">
        <div class="container-fluid custom-width__2">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h2 class="title">{{ $school['our_partners_title'] ? $school['our_partners_title'] : 'Our Partnerships' }}</h2>
                    <p class="partnership_para">
                        {!! $school['our_partners_description']
                            ? nl2br($school['our_partners_description'])
                            : 'description.' !!}
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="partner_box_bg">
                        @foreach ($partnerships as $partnership)
                            <div class="partner__bx">
                                <div class="partner__img">
                                    <img src="{{ Storage::url($partnership['logo']) }}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="view_all_button_bg text-center mt-5">
                        <a href="javascript:void(0);" id="view-all-partnership"> <!-- added ID to the anchor tag -->
                            <div class="view_all_button">View All</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @if (count($achievements) > 0 && count($key_milestones) > 0)
    <section class="stats-section">
        <div class="container-fluid custom-width__2">
            <div class="stats-bx">
                <div class="row gx-5 gy-5">
                    @if (count($achievements) > 0)
                        @foreach ($achievements as $key => $achievement)
                            @php
                                $text = $achievement['title'];
                                $parts = explode(' ', $text);

                                $number = substr($parts[0], 0, -2) ?? '';
                                $ordinal = in_array(substr($parts[0], -2), ['th', 'st', 'nd', 'rd']) ? substr($parts[0], -2) : '';
                                $preposition = $parts[1] ?? '';
                                // after the first two words show the rest of the words
                                unset($parts[0], $parts[1]);
                                $country = implode(' ', $parts);
                            @endphp
                            <div class="col-lg-3 col-md-6">
                                <div class="{{ $key % 2 == 0 ? 'stats-bx-alternate' : 'stats-bx-alternate-blue' }}">
                                    <h3 class="{{ $key % 2 == 0 ? 'alternate-black' : 'alternate-white' }}">{{ $number ?? '' }}{{ $ordinal ?? '' }} <span
                                            class="small-text"> {{ $country ?? '' }}</span> </h3>
                                    <p class="{{ $key % 2 == 0 ? 'stats-para-text' : 'stats-para-text-white' }}">{{ $achievement['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="number-stats">
                    <div class="row gy-lg-0 gy-md-5 gy-5">
                        @if (count($key_milestones) > 0)
                            @foreach ($key_milestones as $milestone)
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="number-stat-bx">
                                        <h4 class="heading">{{ $milestone['title'] }}</h4>
                                        <p class="stats-text">{{ $milestone['description'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var visibleRows = 9;
            showRows(visibleRows);

            // Handle the "View All" button click
            $(document).on("click", '#view-all-partnership', function(e) {
                e.preventDefault();
                // Show all rows
                showAllRows();
            });

            function showRows(rowsToShow) {
                var items = $('.partner__bx');
                items.hide();
                items.slice(0, rowsToShow).show();
                if (items.length > rowsToShow) {
                    $('#view-all-partnership').show();
                }
            }

            function showAllRows() {
                var items = $('.partner__bx');
                items.show();
                $('#view-all-partnership').hide(); // Hide the "View All" button once all items are shown
            }
        });
    </script>
@endpush
