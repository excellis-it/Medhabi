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
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style=" background-image: url({{ $school['banner_image'] ? Storage::url($school['banner_image']) : asset('frontend_assets/images/banner/MEDIA.jpg') }}); background-size: cover; background-position: center; ">
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

    <!--=====================================-->
    <!--=        Program Levels       =-->
    <!--=====================================-->
    <section class="program-level-sec">
        <div class="container-fluid custom-width__2">
            <div class="program-level-sec-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="heading-1">
                            <h2>{{ $school['section_1_title'] ? $school['section_1_title'] : 'Program Levels' }}</h2>
                            <p>{{ $school['section_1_description']
                                ? $school['section_1_description']
                                : 'Our working community creates the ideal atmosphere for
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                career growth and personal expression.' }}

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
                                                $count ++;
                                            @endphp
                                            <button class="nav-link {{ ($count == 1) ? 'active' : '' }}" id="{{ $id }}-tab" data-bs-toggle="tab"
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
                                <div class="tab-pane fade show {{ $count_i == 1 ? 'active' : '' }}" id="nav-{{ $id }}"
                                    aria-labelledby="{{ $id }}-tab">
                                    <div class="lab-sec-img-div">
                                        <div class="row g-5">
                                            @foreach ($value as $course)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="lab-sec-img-wrap">
                                                    <div class="lab-sec-img">
                                                        <img src="{{ $course['course']['banner_image'] ? Storage::url($course['course']['banner_image']) : asset('frontend_assets/images/banner/ABOUT MEDIA.jpg') }}"
                                                            alt="" />
                                                        <div class="lab-sec-text">
                                                            <a href="{{ route('course', $course['course']['slug']) }}">
                                                                <h4> {{ $course['course']['name'] }} </h4>
                                                            </a>
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
    <section class="about-faculty-sec">
        <div class="about-faculty-bg">
            <img src="{{ $school['section_2_image'] ? Storage::url($school['section_2_image']) : asset('frontend_assets/images/banner/ABOUT MEDIA.jpg') }}"
                alt="" />
        </div>
        <div class="container-fluid custom-width__2">
            <div class="about-faculty-sec-wrap">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="about-faculty-text">
                            <div class="heading-white">
                                <h2>{{ $school['section_2_title'] ? $school['section_2_title'] : 'School of Modern Media and Entertainment' }}
                                </h2>
                                <p>{{ $school['section_2_description']
                                    ? nl2br($school['section_2_description'])
                                    : 'The School of Modern Media and Entertainment welcomes the students to come together to
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ignite their passion and dreams. It is a discipline that is aimed to transform the
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    career and the future of the students. Our students are taught to critically analyze
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    information,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    question
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    sources and uphold the principles of objectivity and fairness of journalism. As this era
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    is
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    dominated by the digital media, Medhavi Skills University ensures that digital
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    storytelling,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    social media management, multimedia production and other new-age learning modules are
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    incorporated into the practical curriculum in order to make the students at par with the
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    current
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    rapidly evolving industry. Guidance from industry experienced faculties,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    hands-on-experience
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    and practical new-age learning gives the students a rounded learning experience. The
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    programs
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    are carefully designed to align the outcomes with the extensive practicum. In this
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ever-evolving
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    landscape of information, the School of Modern Media and Entertainment is the maker of
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    future media personalities.' }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=     What Our Students Are Saying =-->
    <!--=====================================-->
    @if (count($testimonials) > 0)
        <section class="what__our__students__says position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="title">
                            {{ $school['section_3_title'] ? $school['section_3_title'] : 'What Our Students Are Saying' }}
                        </h2>
                        <p class="section_para">
                            {{ $school['section_3_description']
                                ? $school['section_3_description']
                                : 'Our vibrant campus provides an enriching society, in a diversified
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                community of endless creativity and vibrant festivities.' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="student-says owl-carousel">
                            @foreach ($testimonials as $testimonial)
                                <div class="item">
                                    <div class="student__talk_bx">
                                        <div class="student_profile d-flex align-items-center">
                                            <div class="profile__photo">
                                                <img src="{{ $testimonial->image ? Storage::url($testimonial->image) : asset('frontend_assets/images/banner/core-4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="profile__name">
                                                <h4>{{ $testimonial->name }}</h4>
                                                <p>{{ $testimonial->type }}</p>
                                            </div>
                                        </div>

                                        <div class="content__student">
                                            <p class="para">{{ $testimonial->description }}</p>
                                        </div>
                                        <div class="quote_icon">
                                            <img src="{{ asset('frontend_assets/images/icons/fade-quote.png') }}"
                                                alt="">
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endif


    @if (count($achievements) > 0 && count($key_milestones) > 0)
        <section class="trusted__section position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title text-center">
                            {{ $school['section_4_title'] ? $school['section_4_title'] : 'We Are New Age & Trusted' }}</h2>
                    </div>
                </div>
                <div class="row g-md-5 g-4">
                    @if (count($achievements) > 0)
                        @foreach ($achievements as $achievement)
                            @php
                                $text = $achievement['title'];
                                $parts = explode(' ', $text);

                                $number = substr($parts[0], 0, -2) ?? '';
                                $ordinal = substr($parts[0], -2) == 'th' ? 'th' : 'st';
                                $preposition = $parts[1] ?? '';
                                // after the first two words show the rest of the words
                                unset($parts[0], $parts[1]);
                                $country = implode(' ', $parts);
                            @endphp
                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="trusted__bx">
                                    <h3>
                                        <span class="large_text">{{ $number ?? '' }}<sup>{{ $ordinal ?? '' }}</sup>
                                        </span>{{ $preposition ?? '' }}
                                        <span class="blue-color">{{ $country ?? '' }}</span>
                                    </h3>
                                    <p>{{ $achievement['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="row top__spacing g-5">
                    @if (count($key_milestones) > 0)
                        @foreach ($key_milestones as $milestone)
                            <div class="col-lg-2 col-md-4 col-6">
                                <div class="static____counterbx">
                                    <div class="icon">
                                        <div class="icon_counter">
                                            <img src="{{ Storage::url($milestone['logo']) }}" alt="" />
                                        </div>
                                        <h3 class="heading-counter">{{ $milestone['title'] }}</h3>
                                    </div>

                                    <p class="counter__para">{{ $milestone['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif

    <!--=====================================-->
    @if (count($partnerships) > 0)
        <section class="our-partnership pt-0">
            <div class="container-fluid custom-width__2">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="title">
                            {{ $school['section_5_title'] ? $school['section_5_title'] : 'Our Partnership' }}
                        </h2>
                        <p class="partnership_para">
                            {{ $school['section_5_description']
                                ? nl2br($school['section_5_description'])
                                : "The partnership between Medhavi Skills university and its partners is instrumental in addressing the
                                                                                                                                                                                                            evolving needs of the industry by providing access to a pool of well-trained and adept
                                                                                                                                                                                                            professionals. The
                                                                                                                                                                                                            symbiotic relationship between MSU and industry partners becomes a catalyst for economic
                                                                                                                                                                                                            development,
                                                                                                                                                                                                            driving innovation, productivity, and overall progress in the nation's workforce." }}

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
