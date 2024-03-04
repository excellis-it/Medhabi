@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $program['seo_description'] ?? '' }}">
    <meta name="title" content="{{ $program['seo_title'] ?? '' }}">
    <meta name="keywords" content="{{ $program['seo_keyword'] ?? '' }}">
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $program['seo_title'] != null ? $program['seo_title'] : $program['name'] }}
@endsection
@push('styles')
    <style>
        .enriching-list ul li {
            font-size: 14px;
            line-height: 27px;
            text-transform: capitalize;
        }

        .diploma-slider-img-wrap {
            height: 562px;
        }

        @media screen and (max-width: 1400px) {
            .search-form span {
                top: 10px;
            }

            .search-form .form-control::placeholder,
            .enriching-sec .select-department-1 .form-select {
                font-size: 14px;
            }

            .diploma-sec {
                padding: 60px 0 0;
                margin-bottom: 60px;
            }

            p {
                line-height: 27px;
            }
        }

        @media (max-width: 1200px) {
            .diploma-slider-img-wrap {
                height: 539px;
            }
        }


        @media screen and (max-width: 1000px) {
            .right-foundation-sec.overview-section .circle-img-4 {
                display: none;
            }
        }

        @media screen and (max-width: 767px) {
            .enriching-sec .select-department-1 .form-select {
                border-radius: 10px;
            }

            .diploma-sec {
                padding: 60px 0 0;
                margin-bottom: 40px;
            }

            .diploma-slider-img-wrap {
                height: auto;
            }

            a.cta_btn {
                font-size: 16px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ isset($program['banner_image']) ? Storage::url($program['banner_image']) : asset('frontend_assets/images/banner/program-banner.jpg') }}); background-size: cover;
background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="title">
                            {{ isset($program['banner_title']) ? $program['banner_title'] : 'PROGRAMS' }}
                        </h1>
                        <p>{{ isset($program['banner_description']) ? $program['banner_description'] : 'PROGRAMS DESCRIPTION' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--= Overview Area Start =-->
    <!--=====================================-->
    <section class="right-foundation-sec overview-section">
        <div class="container-fluid custom-width__2">
            <div class="right-foundation-sec-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6 pr--15">
                        <div class="right-foundation-text pe-lg-5">
                            <div class="heading-1">
                                <h2>{{ isset($program['section_1_title']) ? $program['section_1_title'] : 'Overview' }}</h2>
                                <p>
                                    {{ isset($program['section_1_description']) ? $program['section_1_description'] : 'Overview Description' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pr--15">
                        <div class="right-foundation-img">
                            <img src="{{ isset($program['section_1_image']) ? Storage::url($program['section_1_image']) : asset('frontend_assets/images/banner/overview.jpg') }}"
                                alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="circle-img-4">
            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs/circle.png') }}" alt="">
        </div>
    </section>



    <!--=====================================-->
    <!--= Right Foundation Area Start =-->
    <!--=====================================-->
    <section class="right-foundation-sec">
        <div class="container-fluid custom-width__2">
            <div class="right-foundation-sec-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6 pr--15">
                        <div class="right-foundation-img">
                            <img src="{{ isset($program['section_2_image']) ? Storage::url($program['section_2_image']) : asset('frontend_assets/images/banner/overview.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pr--15">
                        <div class="right-foundation-text ps-lg-5">
                            <div class="heading-1">
                                <h2>{{ isset($program['section_2_title']) ? $program['section_2_title'] : 'Why should you choose skills university after 12th' }}
                                </h2>
                                <p>
                                    {{ isset($program['section_2_description']) ? $program['section_2_description'] : 'Why should you choose skills university after 12th Description' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-img">
            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs/circle.png') }}" alt="">
        </div>
    </section>


    <!--=====================================-->
    <!--=  Diploma Sec Start =-->
    <!--=====================================-->
    @if (isset($program->bachelorDurations) && count($program->bachelorDurations) > 0)
        <section class="diploma-sec">
            <div class="container-fluid  custom-width__2">
                <div class="diploma-sec-wrap">
                    <div class="diploma-sec-head">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="heading-1">
                                    <h2>Bachelors- Durations</h2>
                                    <p>By choosing dual degree programs, it means you can graduate with two degrees at
                                        the end of your studies.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="diploma-slider-div">
                        <div class="diploma__slider owl-carousel">
                            @foreach ($program->bachelorDurations as $duration)
                            <div class="item">
                                <div class="item diploma-slider-wrap rbt-hover">
                                    <div class="diploma-slider-img-wrap">
                                        <div class="diploma-slider-img">
                                            <img src="{{ Storage::url($duration['duration_image']) }}" alt="">
                                        </div>
                                        <div class="diploma-slider-text">
                                            <h3> {{ $duration['duration_title'] ?? 'Bachelors- Durations' }}</h3>
                                            <p>{{ $duration['duration_desc'] ?? 'Bachelors- Durations Description' }}</p>
                                        </div>
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

    <!--=====================================-->
    <!--=  Enriching  Sec Start =-->
    <!--=====================================-->
    @if (count($courses) > 0)
        <section class="enriching-sec pt-0">
            <div class="container-fluid  custom-width__2">
                <div class="enriching-sec-wrap">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-12">
                            <div class="heading-1 text-center">
                                <h2>{{ isset($program['section_4_title']) ? $program['section_4_title'] : 'Enriching Programs' }}
                                </h2>
                                <p>
                                    {{ isset($program['section_4_description']) ? $program['section_4_description'] : 'Enriching Programs Description' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-9 col-lg-6 col-md-6">
                                <div class="search-div">
                                    <div class="search-form">
                                        <input type="text" class="form-control" id="searchInput"
                                            placeholder="Search Programs">
                                        <span><i class="ri-search-line"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="search-div select-department-div">
                                    <div class="select-department-1">
                                        <select class="form-select form-select-lg maincls"
                                            aria-label="Large select example" id="program_type">
                                            <option
                                                value="{{ isset($program['programType']) ? $program['programType']['id'] : '' }}">
                                                {{ isset($program['programType']) ? $program['programType']['name'] : '' }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="select-department-1 select-department-2">
                                        <select id="course_type" class="form-select form-select-lg maincls"
                                            aria-label="Large select example" id="pgrm">
                                            <option value="" selected disabled>Programs</option>
                                            @if (isset($program['programType']['courseTypes']) && count($program['programType']['courseTypes']) > 0)
                                                @foreach ($program['programType']['courseTypes'] as $course)
                                                    <option value="{{ $course['id'] }}">{{ $course['name'] }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="enriching-list-div" id="filter-data">
                        @include('frontend.pages.filter.course-list')

                    </div>
                </div>
            </div>
        </section>
    @endif




    <!--=====================================-->
    <!--=       We Are New Age & Trusted Area Start      =-->
    <!--=====================================-->
    <br><br>
    @if (count($achievements) > 0 && count($key_milestones) > 0)
        <section class="trusted__section position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title text-center">
                            We Are New Age & Trusted
                        </h2>
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
    <!--=  Enriching-Program  Sec Start =-->
    <!--=====================================-->
    @if (count($application_process) > 0)
        <section class="enchanting-program pt-0">
            <div class="container">
                <div class="enchanting-program-wrap">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-10">
                            <div class="heading-1 text-center">
                                <h2>How to apply</h2>
                                <p>By choosing dual degree programs, it means you can graduate with two degrees at the
                                    end of your studies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="enchanting-pr-div-wrap">
                    <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-1">
                        @foreach ($application_process as $process)
                            <div class="col">
                                <div class="enchanting-pr-img-div rbt-hover">
                                    <div class="enchanting-pr-img">
                                        <img src="{{ Storage::url($process['process_image']) }}" alt="">
                                    </div>
                                    <div class="enchanting-pr-text">
                                        <h4>{{ $process['process_desc'] }}</h4>
                                        </h4>
                                    </div>
                                    <div class="arw-icon">
                                        <img src="{{ asset('frontend_assets/images/arrow-icon.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="text-center mt-lg-5">
                    <a target="_blank" class="cta_btn"
                        href="https://application.msu.edu.in/">{{ $process['button_text'] }}</a>
                </div>
            </div>
        </section>
    @endif

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            function loadMoreBlogs(program_type, course_type, search) {
                $.ajax({
                    url: "{{ route('course.list-filter') }}",
                    type: 'GET',
                    data: {
                        program_type: program_type,
                        course_type: course_type,
                        search: search
                    },
                    success: function(response) {
                        if (response.status == true) {
                            $('#filter-data').html(response.data);
                        }
                    }
                });
            }

            $('#program_type').on('change', function() {
                var program_type = $(this).val();
                var course_type = $('#course_type').val();
                var search = $('#searchInput').val();
                loadMoreBlogs(program_type, course_type, search);
            });

            $('#course_type').on('change', function() {
                course_type = $(this).val();
                var program_type = $('#program_type').val();
                var search = $('#searchInput').val();
                loadMoreBlogs(program_type, course_type, search);
            });

            $('#searchInput').on('keyup', function() {
                search = $(this).val();
                var program_type = $('#program_type').val();
                var course_type = $('#course_type').val();
                loadMoreBlogs(program_type, course_type, search);
            });
        });
    </script>
@endpush
