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
                        <p>
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
                    {!! isset($program['section_1_description']) ? nl2br($program['section_1_description']) : 'Overview Description' !!}
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

    <!--=====================================-->
    <!--=        Sticky Floating Menu Start       	=-->
    <!--=====================================-->

    <!-- FAB Vertical -->
    <div class="fab fabVertical active">
      <div class="fabNav fabNav--left">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModaltds" class="fabItem ic-facebook">
          <span class="fabTooltip">Enquiry</span>
          <i class="flaticon-paper-plane"></i>
        </a>
        <a href="https://wa.me/+919874875876" class="fabItem ic-facebook">
          <span class="fabTooltip">Whatsapp</span>
          <i class="flaticon-whatsapp"></i>
        </a>
        <a href="tel:+919874875876" class="fabItem ic-tw">
          <span class="fabTooltip">Call</span>
          <i class="flaticon-callback"></i>
        </a>
      </div>
      <div class="fabTrigger">
        <a href="">
          <span class="icon"></span>
        </a>
      </div>
    </div>

  <div class="modal popup-form fade" id="exampleModaltds" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <a href="javscript:void(0);" class="modal-close" data-bs-toggle="modal" data-bs-target="#exampleModaltds"><img
            src="{{asset('frontend_assets/images/close.svg')}}" alt="Modal Close" width="16" /></a>
        <div class="modal-body">
          <h3>Enquiry Form</h3>
          <div class="reservation__wrapper reservation__wrapper--3">
            <div class="reservation__form_3 reservation__form--3 mt-none-30 text-center">
              <form action="{{asset('frontend_assets/email-php/enquiry-popup.php')}}" method="post" id="leadForm">
                <div class="row">
                  <div class="col-xl-12 col-lg-12">
                    <div class="form-row">
                      <input type="text" name="name" required placeholder="Name">
                    </div>
                    <div class="form-row mt-10">
                      <input type="text" name="phone" required placeholder="Phone">
                    </div>
                    <div class="form-row mt-10">
                      <input type="email" name="email" required placeholder="Email">
                    </div>
                    <div class="form-row mt-10">
                      <select class="input" name="state" onchange="stateChanged(this)">
                        <option value="-1" selected disabled>Your State</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                        </option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar
                          Haveli and Daman and Diu
                        </option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Ladakh">Ladakh</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                      </select>
                    </div>
                    <div class="form-row mt-10">
                      <select class="input" name="city" onchange="cityChanged(this)">
                        <option value="-1" selected disabled>Your City</option>
                      </select>
                    </div>
                    <div class="form-row mt-10">
                      <button type="submit" name="submit" class="site-btn-db-form mt-10">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
