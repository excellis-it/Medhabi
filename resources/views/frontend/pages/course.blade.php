@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $course['seo_description'] ?? '' }}">
    <meta name="title" content="{{ $course['seo_title'] ?? '' }}">
    <meta name="keywords" content="{{ $course['seo_keyword'] ?? '' }}">
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $course['seo_title'] != null ? $course['seo_title'] : $course['name'] }}
@endsection
@push('styles')
    <style>
        html {
            scroll-padding-top: 50px;
        }

        .duration-list-text p {
            line-height: 27px;
        }

        .program-icon-list ul {
            grid-template-columns: 1fr 1fr 1fr 1fr !important;
        }

        @media screen and (min-width: 800px) {
            .program-icon-sec .program-icon-list {
                justify-content: center !important;
            }
        }
    </style>
@endpush

@section('content')
    <!--=====================================-->
    <!--=       Hero Inner Page Banner Area Start =-->
    <!--=====================================-->
    <section class="hero--Inner-page-banner"
        style="
                  background-image: url('{{ $course['banner_image'] != null ? Storage::url($course['banner_image']) : 'assets/images/m-u/bachelors-programs-details/bsc-1.jpg' }}');
                  background-size: cover;
                  background-position: center;
                ">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-md-7">
                    <div class="page-title">
                        <h1 class="title">{{ $course['name'] ? $course['name'] : 'Course Name' }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=      About-b.sc Image Sec        =-->
    <!--=====================================-->
    <section class="program-icon-sec">
        <div class="container-fluid">
            <div class="program-icon-sec-wrap">
                <div class="program-icon-list">
                    <ul>
                        <li>
                            <a href="#About-Course">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-1.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="program-icon-text">
                                        <h4>Program Details</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#program-outcome">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-2.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Program Outcome</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#eligibility">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-3.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Eligibility</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#e-brochure">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-8.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>E-Brochure</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      About-b.sc         	=-->
    <!--=====================================-->
    <section class="about-bsc" id="About-Course">
        <div class="about-bsc-bg">
            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/abt-bsc-bg.jpg') }}"
                alt="" />
        </div>
        <div class="container-fluid custom-width__2">
            <div class="about-bsc-wrap">
                <div class="heading-white">
                    <h2>{{ $course['section_1_title'] ? $course['section_1_title'] : 'About Course' }}</h2>
                    <p>
                        {{ $course['section_1_description'] ? $course['section_1_description'] : 'The scope of agriculture has existed from time immemorial, beyond the scope of civilization as a whole thus placing agriculture on a position of great social and economic significance.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      About-b.sc Image Sec        =-->
    <!--=====================================-->
    <section class="abt-bsc-img-div-main">
        <div class="container-fluid">
            <div class="abt-bsc-img-wrap">
                <div class="row">
                    <div class="col-lg-6 padding-set-right">
                        <div class="abt-bsc-img-div">
                            <div class="abt-bsc-img">
                                <img src="{{ $course['section_2_left_image'] != null ? Storage::url($course['section_2_left_image']) : asset('frontend_assets/images/m-u/bachelors-programs-details/bsc-1.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 padding-set-left">
                        <div class="bsc-text-bg">
                            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/bsc-text-bg.png') }}"
                                alt="" />
                            <div class="bsc-text">
                                <h3>
                                    CHOOSE TO TAKE
                                    THE RIGHT
                                    STEP TOWARDS
                                    A CAREER
                                    THAT GIVS YOU
                                    MORE!
                                </h3>
                                {{-- <ul>
                                    <li><a href="">Choose To Take</a></li>
                                    <li><a href="">The Right</a></li>
                                    <li><a href="">Step Towards</a></li>
                                    <li><a href="">A Career</a></li>
                                    <li><a href="">That Gives You</a></li>
                                    <li><a href="">More!</a></li>
                                </ul> --}}
                                <div class="apply-btn">
                                    <a class="" href="https://application.msu.edu.in/">Apply Now!</a>
                                </div>
                            </div>
                            <div class="choose-img">
                                <img src="{{ $course['section_2_right_image'] != null ? Storage::url($course['section_2_right_image']) : asset('frontend_assets/images/m-u/bachelors-programs-details/choose-img.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Why Study Sec        =-->
    <!--=====================================-->
    <section class="why-study-sec" id="program-outcome">
        <div class="container-fluid custom-width__2">
            <div class="why-study-sec-wrap">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-12">
                        <div class="heading-1">
                            <h2>{{ $course['section_3_title'] ? $course['section_3_title'] : 'Job Opportunities' }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-start justify-content-between">
                    <div class="col-lg-6">
                        <div class="why-study-left">
                            <div class="heading-1">
                                <!-- <p>
                                                                        The scope of agriculture has existed from time immemorial,
                                                                        beyond the scope of civilization as a whole thus placing
                                                                        agriculture on a position of great social and economic
                                                                        significance.
                                                                      </p> -->
                            </div>
                            <div class="why-study-list">
                                <div class="accordion" id="accordionExample">

                                    {{-- <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Full-Stack Developer
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    To maintain web applications by working both on front-end and back-end
                                                    technologies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="collapsed accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Web Developer
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    To build and maintain websites both on the client side and the user
                                                    side.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="collapsed accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Front-End Developer
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    To specialize in development of user interfaces and experiences using
                                                    technologies like HTML, CSS and JavaScript.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="collapsed accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                Back-End Developer
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    To specialize in server-side development and deal with databases, server
                                                    logic and APIs.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="collapsed accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Software Developer
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse "
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    To design, code, test and maintain software applications.
                                                </p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @foreach ($job_oppotunities as $job_oppotunitie)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="collapsed accordion-button" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $job_oppotunitie->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="collapse{{ $job_oppotunitie->id }}">
                                                    {{ $job_oppotunitie->name }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $job_oppotunitie->id }}"
                                                class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                        {{ $job_oppotunitie->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="why-study-right">
                            <div class="why-study-right-text">
                                <div class="heading-1">
                                    <!-- <p>
                                                                          The scope of commercial agriculture has grown to
                                                                          establish its roots within the various avenues of the
                                                                          industry thus creating a wide pool of career
                                                                          opportunities for the students who pursue this program.
                                                                        </p> -->
                                </div>
                            </div>
                            <div class="why-study-right-img">
                                <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/agriculture.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Duration Sec        =-->
    <!--=====================================-->
    <section class="duration-sec">
        <div class="duration-bg">
            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/event-banner.jpg') }}"
                alt="" />
        </div>
        <div class="container-fluid custom-width__2">
            <div class="duration-sec-wrap">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="heading-1 text-center">
                            <h2>{{ $course['section_4_title'] != null ? $course['section_4_title'] : 'Duration' }}</h2>
                            <!-- <p>
                                                                      The scope of agriculture has existed from time immemorial,
                                                                      beyond the scope of civilization as a whole thus placing
                                                                      agriculture on a position of great social and economic
                                                                      significance.
                                                                    </p> -->
                        </div>
                    </div>
                </div>
                <div class="duration-list-div">
                    <!-- <div class="duration-list-div-wrap d-flex align-items-center">
                                                                  <div class="duration-list-icon">
                                                                    <img src="assets/images/m-u/bachelors-programs-details/prg-3.png" alt="" />
                                                                  </div>
                                                                  <div class="duration-list-text">
                                                                    <h4>AFFILIATION</h4>
                                                                    <p>Constituent College of Parul University</p>
                                                                  </div>
                                                                </div> -->
                    <div id="eligibility" class="duration-list-div-wrap bg-blue d-flex align-items-start">
                        <div class="duration-list-icon">
                            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-3.1.png') }}"
                                alt="" />
                        </div>
                        <div class="duration-list-text duration-list-text-white">
                            <h4>{{ $course['section_4_step_1_title'] != null ? $course['section_4_step_1_title'] : 'ELIGIBILITY CRITERIA' }}
                            </h4>
                            <p>
                                {{ $course['section_4_step_1_description'] != null ? $course['section_4_step_1_description'] : '' }}
                            </p>
                            <!-- <div class="knw-btn knw-btn-white">
                                                                      <a href="" class="knw-btn">Know More</a>
                                                                    </div> -->
                        </div>
                    </div>
                    <div class="duration-list-div-wrap d-flex align-items-center">
                        <div class="duration-list-icon">
                            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-3.png') }}"
                                alt="" />
                        </div>
                        <div class="duration-list-text">
                            <h4>{{ $course['section_4_step_2_title'] != null ? $course['section_4_step_2_title'] : 'ADMISSION PROCESS' }}
                            </h4>
                            <p>
                                {{ $course['section_4_step_2_description'] != null ? $course['section_4_step_2_description'] : '' }}
                            </p>
                            <div class="knw-btn">
                                <a href="https://application.msu.edu.in" class="knw-btn">Apply Now!</a>
                            </div>
                        </div>
                    </div>
                    <div id="e-brochure" class="duration-list-div-wrap d-flex align-items-center">
                        <div class="duration-list-icon">
                            <img src="{{ asset('frontend_assets/images/m-u/bachelors-programs-details/prg-3.png') }}"
                                alt="" />
                        </div>
                        <div class="duration-list-text">
                            <h4>{{ $course['section_4_step_3_title'] != null ? $course['section_4_step_3_title'] : 'E-BROCHURE' }}
                            </h4>
                            <p>
                                {{ $course['section_4_step_3_description'] != null ? $course['section_4_step_3_description'] : '' }}
                            </p>
                            <div class="knw-btn">
                                <a class="knw-btn" href="{{ route('download.brochure', $course['slug']) }}">Download Our
                                    E-Brochure!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($schools) > 0)
        <section class="who-we-are">
            <div class="middle-part position-relative">
                <div class="university__name owl-carousel">

                    @foreach ($schools as $school)
                        @php
                            //   get the short name of the school
                            $name = explode(' ', $school->name);
                            // get last two words
                            $parts = array_slice($name, -2);
                            // and get other words
                            $name2 = array_diff($name, $parts);
                            //  dd($name2);
                            $new = '';
                            foreach ($name as $n) {
                                if (preg_match('/[A-Z]/', $n[0])) {
                                    $new .= $n[0];
                                }
                            }
                        @endphp
                        <div class="item">
                            <div class="rbt-card left-card">
                                <div class="rbt-card-img">
                                    <a href="{{ route('school', $school->slug) }}">
                                        <img src="{{ $school->banner_image ? Storage::url($school->banner_image) : 'assets/images/banner/SHST.webp' }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('school', $school->slug) }}">{{ $new }}</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        <span>{{ implode(' ', $name2) }}</span>
                                    </p>
                                    <p class="rbt-card-text-1"><span> {{ implode(' ', $parts) }}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!--=====================================-->
    <!--=       Lastest News Area Start      =-->
    <!--=====================================-->
    @if (count($blogs) > 0)
        <section class="lastest_news">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <h2 class="title">
                        {{ $course['section_5_title'] != null ? $course['section_5_title'] : 'Latest News' }}</h2>
                    <p class="section_text">
                        {{ $course['section_5_description'] != null ? $course['section_5_description'] : 'Latest News' }}
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30 pr--30 tab-spacing">
                        <div class="rbt-card variation-02 height-330 rbt-hover">
                            <div class="rbt-card-img">
                                <a href="{{ route('blog.details', $blogs[0]->slug) }}">
                                    <img src="{{ Storage::url($blogs[0]->image) }}" alt="Card image" />
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h3 class="rbt-card-title">
                                    <a href="{{ route('blog.details', $blogs[0]->slug) }}">{{ $blogs[0]->name }}</a>
                                </h3>
                                <p class="rbt-card-text">
                                    {{ $blogs[0]->short_description }}
                                </p>
                                <div class="rbt-card-bottom-left">
                                    <a class="transparent-button"
                                        href="{{ route('blog.details', $blogs[0]->slug) }}">VIEW MORE <i
                                            class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30 mt--md-20 ">
                        @foreach ($blogs as $key => $blog)
                            @if ($key > 0)
                                <div
                                    class="rbt-card card-list variation-02 rbt-hover {{ $key != 1 ? 'mt--30 mt--md-20' : '' }} ">
                                    <div class="rbt-card-img">
                                        <a href="{{ route('blog.details', $blog->slug) }}">
                                            <img src="{{ Storage::url($blog->image) }}" alt="Card image" />
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <h5 class="rbt-card-title">
                                            <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->name }}</a>
                                        </h5>
                                        <div class="rbt-card-bottom">
                                            <a class="transparent-button"
                                                href="{{ route('blog.details', $blog->slug) }}">VIEW MORE <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Start Single Card  -->
                        {{-- <div class="rbt-card card-list variation-02 rbt-hover">
                            <div class="rbt-card-img">
                                <a
                                    href="https://www.msu.edu.in/impact-of-industry-integrated-education-on-students-career-success/">
                                    <img src="assets/images/banner/lastest-news-3.jpg" alt="Card image" />
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">
                                    <a
                                        href="https://www.msu.edu.in/impact-of-industry-integrated-education-on-students-career-success/">Impact
                                        Of Industry-Integrated Education On Students’
                                        Career Success</a>
                                </h5>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button"
                                        href="https://www.msu.edu.in/impact-of-industry-integrated-education-on-students-career-success/">VIEW
                                        MORE <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30 mt--md-20">
                            <div class="rbt-card-img">
                                <a
                                    href="https://www.msu.edu.in/the-role-of-medhavi-skills-university-in-imparting-job-oriented-skills/">
                                    <img src="assets/images/banner/he-role.jpg" alt="Card image" />
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">
                                    <a
                                        href="https://www.msu.edu.in/the-role-of-medhavi-skills-university-in-imparting-job-oriented-skills/">The
                                        Role of Medhavi Skills University in Imparting
                                        Job-oriented Skills
                                    </a>
                                </h5>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button"
                                        href="https://www.msu.edu.in/the-role-of-medhavi-skills-university-in-imparting-job-oriented-skills/">VIEW
                                        MORE <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="rbt-card card-list variation-02 rbt-hover mt--30 mt--md-20">
                            <div class="rbt-card-img">
                                <a
                                    href="https://www.msu.edu.in/the-impact-of-medhavi-skills-university-on-skill-development-in-india/">
                                    <img src="assets/images/banner/the-impact.jpg" alt="Card image" />
                                </a>
                            </div>
                            <div class="rbt-card-body">
                                <h5 class="rbt-card-title">
                                    <a
                                        href="https://www.msu.edu.in/the-impact-of-medhavi-skills-university-on-skill-development-in-india/">The
                                        Impact of Medhavi Skills University on Skill
                                        Development in India
                                    </a>
                                </h5>
                                <div class="rbt-card-bottom">
                                    <a class="transparent-button"
                                        href="https://www.msu.edu.in/the-impact-of-medhavi-skills-university-on-skill-development-in-india/">VIEW
                                        MORE <i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Single Card  -->
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection

@push('scripts')
@endpush
