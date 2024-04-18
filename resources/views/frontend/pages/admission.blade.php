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
        .diploma-slider-img-wrap {
            height: 720px;
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
                padding: 20px 0 0;
                margin-bottom: 40px;
            }

            .diploma-slider-img-wrap {
                height: 680px;
            }

            a.cta_btn {
                font-size: 16px;
            }
        }
    </style>

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
background-image: url({{ isset($program['banner_image']) ? Storage::url($program['banner_image']) : asset('frontend_assets/images/banner/MASTER’S-PROGRAM.jpg') }});
background-size: cover;
background-position: center;
">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-md-7">
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


    <section class="abt-bachelors">
        <div class="container-fluid  custom-width__2">
            <div class="row">
                <div class="text-11">
                    {{ isset($program['section_1_description']) ? $program['section_1_description'] : 'Overview Description' }}
                </div>
            </div>
        </div>
    </section>




    <!--=====================================-->
    <!--=  Diploma Sec Start =-->
    <!--=====================================-->
    <!-- <section class="diploma-sec">
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
        <div class="item">
          <div class="item diploma-slider-wrap rbt-hover">
            <div class="diploma-slider-img-wrap">
              <div class="diploma-slider-img">
                <img src="assets/images/m-u/bachelors-programs/study-1.jpg" alt="">
              </div>
              <div class="diploma-slider-text">
                <h3>1 year Diploma programs</h3>
                <p>Designed with a focus on efficiency and practicality, these programs provide a streamlined path for individuals seeking specialized expertise in a specific field. Participants can delve deep into industry-relevant subjects, gaining a competitive edge in a relatively short span.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item diploma-slider-wrap rbt-hover">
            <div class="diploma-slider-img-wrap">
              <div class="diploma-slider-img">
                <img src="assets/images/m-u/bachelors-programs/study-2.jpg" alt="">
              </div>
              <div class="diploma-slider-text">
                <h3>2 year programs</h3>
                <p>These immersive courses epitomize a transformative journey toward professional excellence. They are designed to empower individuals with the skills, knowledge, and hands-on experience required to thrive in today's dynamic job market.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item diploma-slider-wrap rbt-hover">
            <div class="diploma-slider-img-wrap">
              <div class="diploma-slider-img">
                <img src="assets/images/m-u/bachelors-programs/study-3.jpg" alt="">
              </div>
              <div class="diploma-slider-text">
                <h3>3 year programs</h3>
                <p>remains relevant and aligned with the latest trends and demands. Students are immersed in a transformative journey that blends theoretical knowledge with hands-on practical applications.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item diploma-slider-wrap rbt-hover">
            <div class="diploma-slider-img-wrap">
              <div class="diploma-slider-img">
                <img src="assets/images/m-u/bachelors-programs/study-1.jpg" alt="">
              </div>
              <div class="diploma-slider-text">
                <h3>3.5 year programs</h3>
                <p>Specially curated for students from diverse academic disciplines so that they can pursue courses without prior expertise. Crafted with precision, these programs offer a bridge to knowledge, allowing students to explore and excel in fields beyond the constraints of their primary disciplines.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="item diploma-slider-wrap rbt-hover">
            <div class="diploma-slider-img-wrap">
              <div class="diploma-slider-img">
                <img src="assets/images/m-u/bachelors-programs/study-1.jpg" alt="">
              </div>
              <div class="diploma-slider-text">
                <h3>4 year programs</h3>
                <p>Dynamic programs where each academic year is strategically structured to build a strong foundation. The first two years, delve into core concepts and fundamental principles. The subsequent years focus on specialized coursework, allowing students to deepen their expertise in specific areas of interest.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </section> -->

    <!--=====================================-->
    <!--=  Enriching  Sec Start =-->
    <!--=====================================-->
    <section class="enriching-sec">
        <div class="container-fluid custom-width__2">
            <div class="enriching-sec-wrap">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="heading-1 text-center">
                            <h2 class="text-white">
                                {{ isset($program['section_2_title'])
                                    ? $program['section_2_title']
                                    : 'Enriching
                                    Programs' }}
                            </h2>
                            <p class="text-white">
                                {{ isset($program['section_2_description'])
                                    ? $program['section_2_description']
                                    : 'Enriching Programs
                                    Description' }}
                            </p>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-8 col-lg-6 col-md-6">
                            <div class="search-div">
                                <div class="search-form">
                                    <input type="text" class="form-control" id="searchInput"
                                        placeholder="Search Programs" />
                                    <span><i class="ri-search-line"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="search-div select-department-div">
                                <div class="select-department-1">
                                    <select class="form-select form-select-lg maincls" aria-label="Large select example"
                                        id="program_type">
                                        <option
                                            value="{{ isset($program['programType']) ? $program['programType']['id'] : '' }}">
                                            {{ isset($program['programType']) ? $program['programType']['name'] : '' }}
                                        </option>
                                    </select>
                                </div>
                                <div class="select-department-1 select-department-2">
                                    <select id="course_type" class="form-select form-select-lg maincls"
                                        aria-label="Large select example">
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


    <!--=====================================-->
    <!--=  Enriching-Program  Sec Start =-->
    <!--=====================================-->
    @if (count($application_process) > 0)
        <section class="enchanting-program">
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
                                        <h4>{{ $process['process_desc'] }}
                                        </h4>
                                    </div>
                                    <div class="arw-icon">
                                        <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs/arw-icon.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center mt-lg-5">
                    <a target="_blank" class="cta_btn"
                        href="https://application.msu.edu.in/campus-programme-registration">apply
                        now!</a>
                </div>
            </div>
        </section>
    @endif
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
                                            <h4 class="heading">{{ $milestone['title'] }}+</h4>
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
