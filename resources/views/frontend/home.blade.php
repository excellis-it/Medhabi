@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - Blogs
@endsection
@push('styles')
@endpush

@section('content')
    <div class="video-banner">
        <video autoplay muted loop>
            <source src="{{ asset('frontend_assets/images/banner/banner-video.mp4') }}" type="video/mp4" />
        </video>

        <div class="color-overlay"></div>
        <!-- <div class="container-fluid custom-width__2">
                      <div class="row align-items-center">
                          <div class="col-lg-12">
                              <div class="banner-content">
                                  <h1 class="title text-white">
                                      Welcome to Medhavi Skills University, a beacon <br>
                                      of knowledge and innovation in Sikkim.
                                  </h1>
                              </div>
                          </div>
                      </div>
                  </div> -->
    </div>

    <!--=====================================-->
    <!--=       Who We Are Area Start      =-->
    <!--=====================================-->

    <section class="who-we-are">
        <div class="top-part position-relative">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="banner-who">
                            <img class="top_img" src="{{ asset('frontend_assets/images/banner/2nd-sec-img.jpg') }}"
                                alt="" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="title">
                            New-Age Skills University For An Evolving Education System
                        </h2>
                        <p>
                            At Medhavi Skills University, we ardently embrace the dynamic
                            shifts characterizing the 21st century landscape. Our
                            meticulously crafted courses are tailored to empower students
                            with the requisite skills and knowledge essential for thriving
                            in an ever-evolving global workplace. Connect with us today
                            and become a catalyst in shaping the future of education.
                        </p>
                        <a class="arrow-btn" href="">who we are <i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="{{ asset('frontend_assets/images/gallery/1_particle.png') }}" alt="" />
            </div>
            <div class="shape">
                <img src="{{ asset('frontend_assets/images/banner/bottom-right-partclel.png') }}" alt="" />
            </div>
        </div>
        @if (count($schools) > 0)
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
        @endif

        <div class="bottom-part">
            <div class="shape-2">
                <img src="{{ asset('frontend_assets/images/gallery/2_particle.png') }}" alt="" />
            </div>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <h2 class="title">
                            Discover, Dream, Explore: Your World Awaits
                        </h2>
                        <p>
                            Our university campus is nestled in the enchanting heart of
                            the mountains in Sikkim, where education transcends
                            traditional boundaries and takes on a truly transformative
                            journey. Choosing a university is not just about acquiring
                            knowledge; it's about embracing a holistic learning experience
                            that encompasses nature's grandeur, cultural richness, and
                            academic excellence.
                        </p>
                        <a class="arrow-btn" href="">our city<i class="ri-arrow-right-s-line"></i></a>
                    </div>
                    <div class="col-lg-8">
                        <div class="banner-who">
                            <img class="bottom_img" src="{{ asset('frontend_assets/images/banner/3rd-sec-img.jpg') }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-3">
                <img src="{{ asset('frontend_assets/images/gallery/3_particle.png') }}" alt="" />
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Medhavi Event Area Start      =-->
    <!--=====================================-->

    <section class="medhavi_event">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-6 pr--30">
                    <div class="rbt-card left-card">
                        <div class="life__medhavi owl-carousel">
                            <div class="life__item">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets/images/banner/event-1.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="#">Life at Medhavi</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        The most vibrant campus to give you the most vibrant
                                        experience
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="#">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="life__item">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets/images/banner/Life-at-medhavi.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="#">Life at Medhavi</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        The most vibrant campus to give you the most vibrant
                                        experience
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="#">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="life__item">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets/images/banner/Life-at-medhavi-2.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="#">Life at Medhavi</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        The most vibrant campus to give you the most vibrant
                                        experience
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="#">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tab-padding-none">
                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list mt--md-0">
                        <div class="featured__medhavi owl-carousel">
                            <div class="featured__item">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets/images/banner/small-event-2.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('event') }}">Event & News</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Explore, Engage, Excel: Unleashing Opportunities in
                                        Every Event
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('event') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured__item">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets/images/banner/1.jpg') }}" alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('event') }}">Event & News</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Explore, Engage, Excel: Unleashing Opportunities in
                                        Every Event
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('event') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured__item">
                                <div class="rbt-card-img">
                                    <a href="{{ route('event') }}">
                                        <img src="{{ asset('frontend_assets/images/banner/2.jpg') }}" alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('event') }}">Event & News</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Elevate Your Experience: More Than Just Campus Events
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('event') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list mt--30 mt--md-0">
                        <div class="featuredstories__medhavi owl-carousel">
                            <div class="featuredstories__item">
                                <div class="rbt-card-img">
                                    <a href="{{ route('tvc') }}">
                                        <img src="{{ asset('frontend_assets/images/banner/Events.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('tvc') }}">Featured stories</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Epic Journeys, Unforgettable Stories.
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('tvc') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featuredstories__item">
                                <div class="rbt-card-img">
                                    <a href="{{ route('tvc') }}">
                                        <img src="{{ asset('frontend_assets/images/banner/Events-1.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('tvc') }}">Featured stories</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Epic Journeys, Unforgettable Stories
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('tvc') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="featuredstories__item">
                                <div class="rbt-card-img">
                                    <a href="{{ route('tvc') }}">
                                        <img src="{{ asset('frontend_assets/images/banner/Events-2.jpg') }}"
                                            alt="Card image" />
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h3 class="rbt-card-title">
                                        <a href="{{ route('tvc') }}">Featured stories</a>
                                    </h3>
                                    <p class="rbt-card-text">
                                        Epic Journeys, Unforgettable Stories
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('tvc') }}">view More <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Job Ready Area Start      =-->
    <!--=====================================-->

    <section class="academic bg-pattern">
        <div class="container-fluid">
            <div class="row">
                <h2 class="title text-center">Job-Ready Academic Curriculum</h2>
                <p class="text-center">
                    Future-Forward Learning: Elevate Your Future with Our Academic
                    Edge
                </p>
            </div>
        </div>

        <div class="academic-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide--one">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/gal-1.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Systematic Learning</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--two">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/Profession.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Professional Orientation</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--three">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/gal-3.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Industry Anchored Programmes</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--four">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/REAL.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Real world Skills & intelligence</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--five">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/gal-5.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Skill Certifications</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--six">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/FEED.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Feedback Driven Growth</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--seven">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/employ.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Employment Readiness</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--eight">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/Entre.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Skill-driven Entrepreneurship</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--nine">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/gal-5.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Assured employability</h3>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide--ten">
                    <div class="img-gradient">
                        <img src="{{ asset('frontend_assets/images/banner/PRACTICE.jpg') }}" alt="" />
                    </div>
                    <div>
                        <h3>Practice driven pedagogy </h3>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       International Countdown Area Start      =-->
    <!--=====================================-->

    <section class="international-countdown bg-background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main__countdown_bx">
                        <h3 class="sub__title">We Are International</h3>

                        <nav class="international__tab">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">
                                    <div class="country-box">
                                        <div class="country__flag__icon">
                                            <img src="{{ asset('frontend_assets/images/icons/germany.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="country__flag__name">
                                            <h5>Germany</h5>
                                        </div>
                                    </div>
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab"
                                    aria-controls="nav-profile" aria-selected="false">
                                    <div class="country-box">
                                        <div class="country__flag__icon">
                                            <img src="{{ asset('frontend_assets/images/icons/australia.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="country__flag__name">
                                            <h5>Australia</h5>
                                        </div>
                                    </div>
                                </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab"
                                    aria-controls="nav-contact" aria-selected="false">
                                    <div class="country-box">
                                        <div class="country__flag__icon">
                                            <img src="{{ asset('frontend_assets/images/icons/japan.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="country__flag__name">
                                            <h5>Japan</h5>
                                        </div>
                                    </div>
                                </button>
                                <button class="nav-link" id="nav-uk-tab" data-bs-toggle="tab" data-bs-target="#nav-uk"
                                    type="button" role="tab" aria-controls="nav-uk" aria-selected="false">
                                    <div class="country-box">
                                        <div class="country__flag__icon">
                                            <img src="{{ asset('frontend_assets/images/icons/england.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="country__flag__name">
                                            <h5>United Kingdom</h5>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="img-static">
                                    <div class="content">
                                        <a href="#">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image"
                                                src="{{ asset('frontend_assets/images/banner/germany-country.jpg') }}"
                                                alt="" />
                                            <div class="content-details">
                                                <h3 class="content-title">
                                                    Meet SHINE by Medhavi Skills University
                                                </h3>
                                                <p class="content-text">
                                                    Empowering the youth for global success! Our
                                                    revolutionary program offers skill-integrated
                                                    education, strategic partnerships in countries
                                                    like Germany, Japan, UK, Australia, and
                                                    comprehensive training in languages and technical
                                                    competencies. Join us on the journey to
                                                    international opportunities!
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="img-static">
                                    <div class="content">
                                        <a href="#">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image"
                                                src="{{ asset('frontend_assets/images/banner/australia-country.jpg') }}"
                                                alt="" />
                                            <div class="content-details">
                                                <h3 class="content-title">
                                                    Meet SHINE by Medhavi Skills University
                                                </h3>
                                                <p class="content-text">
                                                    Empowering the youth for global success! Our
                                                    revolutionary program offers skill-integrated
                                                    education, strategic partnerships in countries
                                                    like Germany, Japan, UK, Australia, and
                                                    comprehensive training in languages and technical
                                                    competencies. Join us on the journey to
                                                    international opportunities!
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="img-static">
                                    <div class="content">
                                        <a href="#">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image"
                                                src="{{ asset('frontend_assets/images/banner/japan-country.jpg') }}"
                                                alt="" />
                                            <div class="content-details">
                                                <h3 class="content-title">
                                                    Meet SHINE by Medhavi Skills University
                                                </h3>
                                                <p class="content-text">
                                                    Empowering the youth for global success! Our
                                                    revolutionary program offers skill-integrated
                                                    education, strategic partnerships in countries
                                                    like Germany, Japan, UK, Australia, and
                                                    comprehensive training in languages and technical
                                                    competencies. Join us on the journey to
                                                    international opportunities!
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-uk" role="tabpanel" aria-labelledby="nav-uk-tab">
                                <div class="img-static">
                                    <div class="content">
                                        <a href="#">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image"
                                                src="{{ asset('frontend_assets/images/banner/kuk-country.jpg') }}"
                                                alt="" />
                                            <div class="content-details">
                                                <h3 class="content-title">
                                                    Meet SHINE by Medhavi Skills University
                                                </h3>
                                                <p class="content-text">
                                                    Empowering the youth for global success! Our
                                                    revolutionary program offers skill-integrated
                                                    education, strategic partnerships in countries
                                                    like Germany, Japan, UK, Australia, and
                                                    comprehensive training in languages and technical
                                                    competencies. Join us on the journey to
                                                    international opportunities!
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Student Talk Area Start      =-->
    <!--=====================================-->

    <section class="slider-container">
        <div class="container-fluid">
            <div class="row">
                <div class="slider-images d-none d-lg-flex">
                    <div class="slider-img blue-bg">
                        <img class="img-1" src="{{ asset('frontend_assets/images/banner/1-student.png') }}"
                            alt="1" />
                        <div class="details">
                            <h3>Arti Lepcha</h3>
                            <span class="dept">MBA, 1st Sem </span>
                            <p>
                                Enrolling in this new university is the most important
                                decision I have ever taken. Now, I am confident to keep my
                                step in the corporate world. I have experienced a refreshing
                                approach to developing my skills and values.
                            </p>
                        </div>
                    </div>
                    <div class="slider-img yellow-bg">
                        <img class="img-2" src="{{ asset('frontend_assets/images/banner/student2.0.png') }}"
                            alt="1" />
                        <div class="details">
                            <h3>Sushmita Chettri</h3>
                            <span class="dept">(B Sc. – Hospitality and Hotel Management)</span>
                            <p>
                                I am genuinely thankful to MSU as it has provided me with
                                opportunities to explore myself in various fields.
                                Currently, I am at ITC Sonar Kolkata for my On-the-Job
                                Training after completion of 1st Year.
                            </p>
                        </div>
                    </div>
                    <div class="slider-img dark-blue-bg">
                        <img class="img-3" src="{{ asset('frontend_assets/images/banner/3-student.png') }}"
                            alt="1" />
                        <div class="details">
                            <h3>Shabina Mishra</h3>
                            <span class="dept">MBA, 1st Sem </span>
                            <p>
                                My two years at Medhavi are exciting and the best days of my
                                life. In this era of constant change and growth, I have some
                                dedicated faculty members who have supported me in shaping
                                my future.
                            </p>
                        </div>
                    </div>
                    <div class="slider-img active light-blue-bg">
                        <img class="img-4" src="{{ asset('frontend_assets/images/banner/4-student.png') }}"
                            alt="1" />
                        <div class="details">
                            <h3>Romela Darjee</h3>
                            <span class="dept">(BEMT 1ST SEMESTER)</span>
                            <p>
                                “Thank you to this place, where I met my dreams and passion.
                                Choosing this new-age university is the best decision I have
                                ever made. My experience at Medhavi is memorable and great.
                            </p>
                        </div>
                    </div>
                    <div class="slider-img extra-light-bg">
                        <img class="img-5" src="{{ asset('frontend_assets/images/banner/5-student.png') }}"
                            alt="1" />
                        <div class="details">
                            <h3>Suraj Tamang</h3>
                            <span class="dept">BRIT, 3rd Sem</span>
                            <p>
                                Being at Medhavi Skills not only allowed me to secure a Job,
                                but it also provided me with the best career development
                                opportunities which equipped me with the best competencies
                                and skill sets to secure a good placement, with a great
                                package at my dream company.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mobile_student_talk_slider owl-carousel d-block d-lg-none">
                    <div class="item h-720">
                        <div class="student__talk__box bg__blue">
                            <div class="content_box_student">
                                <h3>Arti Lepcha</h3>
                                <span class="dept">MBA, 1st Sem </span>
                                <p>
                                    Enrolling in this new university is the most important
                                    decision I have ever taken. Now, I am confident to keep my
                                    step in the corporate world. I have experienced a
                                    refreshing approach to developing my skills and values.
                                </p>
                            </div>

                            <div class="student__img__absolute">
                                <img src="{{ asset('frontend_assets/images/banner/1-student.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="student__talk__box bg__yellow">
                            <div class="content_box_student">
                                <h3>Sushmita Chettri</h3>
                                <span class="dept">(B Sc. – Hospitality and Hotel Management)</span>
                                <p>
                                <p>
                                    I am genuinely thankful to MSU as it has provided me with
                                    opportunities to explore myself in various fields.
                                    Currently, I am at ITC Sonar Kolkata for my On-the-Job
                                    Training after completion of 1st Year.
                                </p>
                            </div>

                            <div class="student__img__absolute">
                                <img class="yellow-img" src="{{ asset('frontend_assets/images/banner/student2.0.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="student__talk__box bg__darkblue">
                            <div class="content_box_student">
                                <h3>Shabina Mishra</h3>
                                <span class="dept">MBA, 1st Sem </span>
                                <p>
                                    My two years at Medhavi are exciting and the best days of
                                    my life. In this era of constant change and growth, I have
                                    some dedicated faculty members who have supported me in
                                    shaping my future.
                                </p>
                            </div>

                            <div class="student__img__absolute">
                                <img class="bluee-img" src="{{ asset('frontend_assets/images/banner/3-student.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="student__talk__box bg__sky__blue">
                            <div class="content_box_student">
                                <h3>Romela Darjee</h3>
                                <span class="dept">(BEMT 1ST SEMESTER)</span>
                                <p>
                                    “Thank you to this place, where I met my dreams and
                                    passion. Choosing this new-age university is the best
                                    decision I have ever made. My experience at Medhavi is
                                    memorable and great.
                                </p>
                            </div>

                            <div class="student__img__absolute">
                                <img class="blueee-img" src="{{ asset('frontend_assets/images/banner/4-student.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="student__talk__box bg__gray__blue">
                            <div class="content_box_student">
                                <h3>Suraj Tamang</h3>
                                <span class="dept">BRIT, 3rd Sem</span>

                                <p>
                                    Being at Medhavi Skills not only allowed me to secure a
                                    Job, but it also provided me with the best career
                                    development opportunities which equipped me with the best
                                    competencies and skill sets to secure a good placement,
                                    with a great package at my dream company.
                                </p>
                            </div>

                            <div class="student__img__absolute">
                                <img class="last-img" src="{{ asset('frontend_assets/images/banner/5-student.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Campus Gallery Area Start      =-->
    <!--=====================================-->

    <section class="hero-slider hero-style-campus">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        style="
                background-image: url({{ asset('frontend_assets/images/banner/campus-1.jpg') }});
                background-repeat: no-repeat;
                background-position: top;
              ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h3>Campus Life: Beyond The Classroom</h3>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>
                                            Experience campus life at MSU beyond academics. Engage
                                            in diverse clubs, activities, and a community that
                                            fosters personal growth and lifelong friendships.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        style="
                background-image: url({{ asset('frontend_assets/images/banner/campus-2.jpg') }});
                background-repeat: no-repeat;
                background-position: top;
              ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h3>Campus Life: Beyond The Classroom</h3>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>
                                            Experience campus life at MSU beyond academics. Engage
                                            in diverse clubs, activities, and a community that
                                            fosters personal growth and lifelong friendships.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        style="
                background-image: url({{ asset('frontend_assets/images/banner/campus-3.jpg') }});
                background-repeat: no-repeat;
                background-position: top;
              ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h3>Campus Life: Beyond The Classroom</h3>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>
                                            Experience campus life at MSU beyond academics. Engage
                                            in diverse clubs, activities, and a community that
                                            fosters personal growth and lifelong friendships.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image"
                        style="
                background-image: url({{ asset('frontend_assets/images/banner/campus-4.jpg') }});
                background-repeat: no-repeat;
                background-position: top;
              ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h3>Campus Life: Beyond The Classroom</h3>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-text">
                                        <p>
                                            Experience campus life at MSU beyond academics. Engage
                                            in diverse clubs, activities, and a community that
                                            fosters personal growth and lifelong friendships.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Industry Collaborations Area Start      =-->
    <!--=====================================-->
    <section class="industry_collab">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <h2 class="title text-center">Industry Collaborations</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="nav-digital-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital"
                                aria-selected="true">
                                Digital
                            </button>
                            <button class="nav-link active" id="nav-industry-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-industry" type="button" role="tab"
                                aria-controls="nav-industry" aria-selected="false">
                                Industry
                            </button>
                            <button class="nav-link reverse-radius" id="nav-knowledge-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-knowledge" type="button" role="tab"
                                aria-controls="nav-knowledge" aria-selected="false">
                                Knowledge
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                            <div class="home__logo owl-carousel">
                                @if (count($partnerships['digital']) > 0)
                                    @foreach ($partnerships['digital'] as $partner)
                                        <div class="item">
                                            <div class="brand-grid">
                                                <img src="{{ Storage::url($partner->logo) }}" alt="Brand Logo" />
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="nav-industry" role="tabpanel"
                            aria-labelledby="nav-industry-tab">
                            <div class="profile__logo owl-carousel">
                                @if (count($partnerships['industry']) > 0)
                                    @foreach ($partnerships['industry'] as $partner)
                                        <div class="item">
                                            <div class="brand-grid">
                                                <img src="{{ Storage::url($partner->logo) }}" alt="Brand Logo" />
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-knowledge" role="tabpanel"
                            aria-labelledby="nav-knowledge-tab">
                            <div class="contact__logo owl-carousel">
                                @if (count($partnerships['knowledge']) > 0)
                                    @foreach ($partnerships['knowledge'] as $partner)
                                        <div class="item">
                                            <div class="brand-grid">
                                                <img src="{{ Storage::url($partner->logo) }}" alt="Brand Logo" />
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

    <!--=====================================-->
    <!--=       Follow Medhavi Area Start      =-->
    <!--=====================================-->
    @if (count($social_media) > 0)
        <section class="follow_medhavi pt-0">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <h2 class="title text-center">Follow @medhaviskills</h2>
                </div>
                <div class="row">
                    @foreach ($social_media as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="instagram-grid">
                            <div class="icon_content d-flex align-items-center">
                                <div class="img-circle">
                                    <img src="{{ Storage::url($item->university_logo) }}"
                                        alt="" />
                                </div>
                                <div class="univ_name">
                                    <h5>{{ $item->university_name }}</h5>
                                    <p>{{ $item->user_name }}</p>
                                </div>
                            </div>
                            <a target="_blank"
                                href="{{ $item->link }}">
                                <img src="{{ Storage::url($item->image) }}"
                                    alt="instagram" />
                                <span class="user-info">
                                    <span class="icon"><i class="{{ $item->icon }}"></i></span>
                                </span>
                            </a>
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
                    <h2 class="title">Latest News</h2>
                    <p class="section_text">
                        Ignite Your Insight: Dive into the Pulse of Progress with Our
                        Dynamic Latest News Section
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
                                        href="{{ route('blog.details', $blogs[0]->slug) }}">VIEW
                                        MORE <i class="ri-arrow-right-s-line"></i></a>
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
                    </div>
                </div>
            </div>
        </section>
    @endif


    <!--=====================================-->
    <!--=       CTA Medhavi Area Start      =-->
    <!--=====================================-->

    <section class="cta_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Apply for Admissions</h2>
                    <p>
                        Apply now for admission to MSU - 2024 batch. Join us and shape
                        your future today!
                    </p>
                    <a target="_blank" class="cta_btn" href="https://apply.msu.edu.in/">apply now!</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
