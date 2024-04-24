@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description" content="{{ $course['seo_description'] ?? '' }}">
    <meta name="title" content="{{ $course['seo_title'] ?? '' }}">
    <meta name="keywords" content="{{ $course['seo_keyword'] ?? '' }}">
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

        @media screen and (min-width: 800px) {
            .program-icon-sec .program-icon-list {
                justify-content: center !important;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="
background-image: url({{ $course['banner_image'] != null ? Storage::url($course['banner_image']) : 'assets/images/m-u/bachelors-programs-details/bsc-1.jpg' }});
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
    <!--=      Shot Desc Sec        =-->
    <!--=====================================-->

    <section class="short-desc">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        {!! $course['section_1_description']
                            ? nl2br($course['section_1_description'])
                            : 'The scope of agriculture has existed from time immemorial, beyond the scope of civilization as a whole thus placing agriculture on a position of great social and economic significance.' !!}
                    </p>
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
                            <a href="#duration">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/duration-tab-icon.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="program-icon-text">
                                        <h4>Duration & Eligibility</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#industry-led">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-2.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Industry Led Learning</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#academic-framework">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-3.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Academic Framework</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#programme-outcome">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-4.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Program Outcomes </h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#learning-by-doing">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-5.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Learning by Doing</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#industry-partners">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-6.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Industry Partner</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#program-explore">
                                <div class="program-icon-box">
                                    <div class="program-icon">
                                        <img src="{{ asset('frontend_assets/images/icons/tab-icon-7.png') }}"
                                            alt="" />
                                        <div class="program-icon-text">
                                            <h4>Programs to Explore</h4>
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


    <!-- +++++++++++ Duration Tab +++++++++++++++++ -->
    <section class="duration-section" id="duration">
        <div class="container-fluid custom-width__2">
            <div class="row gx-5 gy-5">
                <div class="col-lg-6 col-md-6">
                    <div class="duration-detail-bx">
                        <div class="header-bar">
                            <h3>Duration</h3>
                        </div>
                        <div class="duration-content">
                            <h4 class="title-duration">
                                {{ $course['duration_title'] ? $course['duration_title'] : '3 Years' }}</h4>
                            <p class="small-text-4">
                                {{ $course['duration_description'] ? nl2br($course['duration_description']) : 'The scope of agriculture has existed from time immemorial, beyond the scope of civilization as a whole thus placing agriculture on a position of great social and economic significance.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="eligibility-bx">
                        <div class="header-bar">
                            <h3>Eligibility</h3>
                        </div>
                        <div class="elegibility-content">
                            <h4 class="title-elegibility">
                                {{ $course['eligibility_title'] ? $course['eligibility_title'] : 'Eligibility' }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- +++++++++++ Industry Led Tab +++++++++++++++++ -->

    <section class="industry-led" id="industry-led">
        <div class="container-fluid custom-width__2">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="title industry-led-title">
                        {{ $course['industry_led_learning_title'] ? $course['industry_led_learning_title'] : 'Industry Learning' }}
                    </h2>
                    <p class="industry-led-para-section">
                        {{ $course['industry_led_learning_description'] ? nl2br($course['industry_led_learning_description']) : 'The scope of agriculture has existed from time immemorial, beyond the scope of civilization as a whole thus placing agriculture on a position of great social and economic significance.' }}
                    </p>
                </div>
            </div>

            <div class="row custom-margin-top">
                @if (isset($course->courseIndustryLearnings) && $course->courseIndustryLearnings()->count() > 0)
                    @foreach ($course->courseIndustryLearnings as $courseIndustryLearning)
                        <div class="col-lg-4 col-md-6">
                            <div class="indst-learning-outer-bx br-blue bb-blue pt-0">
                                <div class="indst-learning-inner-bx height-auto">
                                    <div class="icon">
                                        <img class="non-hover-visible"
                                            src="{{ Storage::url($courseIndustryLearning->image) }}" alt="">
                                        <img class="on-hover-visible"
                                            src="{{ Storage::url($courseIndustryLearning->image) }}" alt="">
                                    </div>
                                    <div class="led-learning-content">
                                        <h3 class="inner-led-title">
                                            {{ $courseIndustryLearning->title }}
                                        </h3>
                                        <p class="inner-led-para">
                                            {{ $courseIndustryLearning->description }}
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


    <!-- +++++++++++ Academic Framework Tab +++++++++++++++++ -->

    <section class="academic-framework" id="academic-framework">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="academic-bx">
                        <div class="header-bar">
                            <h3>{{ $course['academic_framework_title'] ? $course['academic_framework_title'] : 'Academic Framework' }}
                            </h3>
                        </div>

                        <div class="academic-content">
                            <p class="academic-text">
                                {{ $course['academic_framework_description'] ? nl2br($course['academic_framework_description']) : 'The scope of agriculture has existed from time immemorial, beyond the scope of civilization as a whole thus placing agriculture on a position of great social and economic significance.' }}
                            </p>


                            <div class="academic-pointers">
                                <div class="row">
                                    @if (isset($course->courseAcademicFrameworks) && $course->courseAcademicFrameworks()->count() > 0)
                                        @foreach ($course->courseAcademicFrameworks as $courseAcademicFramework)
                                            <div class="col-lg-6">
                                                <div class="main-academic-bx">
                                                    <div class="academic-icon">
                                                        <img src="{{ Storage::url($courseAcademicFramework->image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="academic-content-inner">
                                                        <h4 class="academic-title">
                                                            {{ $courseAcademicFramework->title }}
                                                        </h4>
                                                        <p class="academic-para">
                                                            {{ $courseAcademicFramework->description }}
                                                        </p>

                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- +++++++++++ PROGRAMme OUTCOMES Tab +++++++++++++++++ -->

    <section class="programme-outcome" id="programme-outcome">
        <div class="container-fluid custom-width__2">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="title programme-title">
                        {{ $course['programme_outcomes_title'] ? $course['programme_outcomes_title'] : 'Program Outcomes' }}
                    </h2>
                </div>
            </div>

            <div class="tab-outcomme">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tab-bx-programme">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Programme Specific
                                        Outcomes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Generic Programme Outcomes
                                    </button>
                                </li>
                            </ul>
                            {{-- @dd($course->courseProgramOutcomesSpecifics()) --}}

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="content-programme">
                                        @if (isset($course->courseProgramOutcomesSpecifics) && $course->courseProgramOutcomesSpecifics()->count() > 0)
                                            @foreach ($course->courseProgramOutcomesSpecifics as $courseProgramOutcomesSpecific)
                                                <div class="programme-pointer">
                                                    <div class="left-content">
                                                        <p class="left-title">
                                                            {{ $courseProgramOutcomesSpecific->title ?? 'sfd' }}</p>
                                                    </div>
                                                    <div class="right-content">
                                                        <p class="right-para">
                                                            {!! $courseProgramOutcomesSpecific->description != null
                                                                ? nl2br($courseProgramOutcomesSpecific->description)
                                                                : '' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="content-programme">
                                        @if (isset($course->courseProgramOutcomesGenerics) && $course->courseProgramOutcomesGenerics()->count() > 0)
                                            @foreach ($course->courseProgramOutcomesGenerics as $courseProgramOutcomesGeneric)
                                                <div class="programme-pointer">
                                                    <div class="left-content">
                                                        <p class="left-title">
                                                            {{ $courseProgramOutcomesGeneric->title ?? '' }}</p>
                                                    </div>
                                                    <div class="right-content">
                                                        <p class="right-para">
                                                            {!! $courseProgramOutcomesGeneric->description != null ? nl2br($courseProgramOutcomesGeneric->description) : '' !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>


    </section>

    <!-- +++++++++++  Learning by Doing Tab +++++++++++++++++ -->


    <section class="learning-by-doing" id="learning-by-doing">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="learning-by-doing-bx">
                        <div class="header-bar">
                            <h3>{{ $course['learning_by_doing_title'] ? $course['learning_by_doing_title'] : 'Learning by Doing' }}
                            </h3>
                        </div>
                        <div class="learning-by-doing-content">

                            <div class="learning-by-doing-slider owl-carousel">
                                @if (isset($course->courseLearningDoings) && $course->courseLearningDoings()->count() > 0)
                                    @foreach ($course->courseLearningDoings as $courseLearningDoing)
                                        <div class="item">
                                            <div class="doing-img-bx">
                                                <img src="{{ Storage::url($courseLearningDoing->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- +++++++++++  Industry partner Sldier Tab +++++++++++++++++ -->
    @if (count($our_partnerships) > 0)
        <section class="industry-partners" id="industry-partners">
            <div class="container-fluid custom-width__2">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="title text-white">
                            {{ $course['industry_partners_title'] ? $course['industry_partners_title'] : 'Industry Partners' }}
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="learning-by-doing-bx">
                            <div class="industry-partners-content">

                                <div class="industry-partners-slider owl-carousel">
                                    @foreach ($our_partnerships as $our_partnership)
                                        <div class="item">
                                            <div class="industry-img-bx">
                                                <img src="{{ Storage::url($our_partnership->logo) }}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endif




    <!-- +++++++++++  Programs to Explore Slider Tab +++++++++++++++++ -->
    @if (count($other_courses) > 0)
        <section class="program-explore" id="program-explore">
            <div class="container-fluid custom-width__2">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="title">
                            {{ $course['programs_to_explore_title'] ? $course['programs_to_explore_title'] : 'Programs to Explore' }}
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="program-explore-slider owl-carousel">
                            @foreach ($other_courses as $other_course)
                                @if ($other_course->slug != null)
                                    <div class="item">
                                        <div class="program-explore-img-bx">
                                            <img src="{{ Storage::url($other_course->banner_image) }}" alt="">
                                            <div class="explore-content">
                                                <h3 class="explore-title">
                                                    {{ $other_course->name }}
                                                </h3>
                                                <a class="explore-new-btnn"
                                                    href="{{ route('course', $other_course->slug) }}">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endif
    <!-- Program Explore Section End -->

@endsection

@push('scripts')
@endpush
