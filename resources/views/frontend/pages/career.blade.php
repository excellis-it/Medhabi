@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - Careers
@endsection
@push('styles')
@endpush

@section('content')
<section class="hero--Inner-page-banner" style="background-image: url({{isset($career['banner_image']) ? Storage::url($career['banner_image']) : asset("frontend_assets/images/banner/career-banner.jpg")}}); background-size: cover;
background-position: center;">
<div class="container-fluid custom-width__2">
    <div class="row">
        <div class="col-lg-7">
            <div class="page-title">
                <h1 class="title">{{ isset($career['banner_title']) ? $career['banner_title'] : 'Career at MSU' }}</h1>
                <p>{{ isset($career['banner_description']) ? $career['banner_description'] : 'An Enriching Atmosphere of Collective Growth' }}</p>
            </div>
        </div>
    </div>
</div>
</section>


<!--=====================================-->
<!--=      Working With MSU Area Start =-->
<!--=====================================-->

<section class="worling__with__msu position-relative bg__dark__blue">
<div class="container">
    <div class="row">
        <h2 class="title text-center">Working With MSU</h2>
        <p class="text-center subpara">Our working community creates the ideal atmosphere for career growth
            and personal expression. From our professional ethics to our flexible dynamic working cultures,
            we believe Our Growth Is Found In Your Growth. Be a part of the PU
            Family where there is YOU in everything WE do.
        </p>
    </div>
</div>
</section>
<!--=====================================-->
<!--=       Video Overlap Area Start =-->
<!--=====================================-->
<div class="video-area-2">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="video-gallery-2">
                <div class="thumbnail">
                    <img src="assets/images/banner/career-video.jpg" alt="Thumb">
                    <a href="https://www.youtube.com/watch?v=PICj5tr9hcc"
                        class="video-play-btn video-popup-activation">
                        <i class="icon-18"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!--=====================================-->
<!--=      Our Current Openings Area Start =-->
<!--=====================================-->

<section class="our__current__opening position-relative">
<div class="container-fluid custom-width__2">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h2 class="title">Our Current Openings</h2>
            <p class="subpara">Our working community creates the ideal atmosphere for career growth and
                personal expression.
            </p>
        </div>
        <div class="col-lg-6"></div>

        <div class="col-lg-12">
            <div class="input-group">
                <button class="search-btn" type="button"><i class="icon-2"></i></button>
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </div>


        <div class="col-lg-4 col-md-12">
            <div class="advance-tab-button advance-tab-button-1">
                <ul class="nav nav-tabs tab-button-list flex-column" id="aboutmyTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link tab-button active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                            <div class="tab">
                                <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6>
                                <h4 class="title">Assistant Professor</h4>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link tab-button" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" role="tab" aria-controls="profile"
                            aria-selected="false">
                            <div class="tab">
                                <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6>
                                <h4 class="title">Assistant Professor</h4>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link tab-button" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact" role="tab" aria-controls="contact"
                            aria-selected="false">
                            <div class="tab">
                                <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6>
                                <h4 class="title">Assistant Professor</h4>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link tab-button" id="fourth-tab" data-bs-toggle="tab"
                            data-bs-target="#fourth" role="tab" aria-controls="contact"
                            aria-selected="false">
                            <div class="tab">
                                <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6>
                                <h4 class="title">Assistant Professor</h4>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link tab-button" id="fifith-tab" data-bs-toggle="tab"
                            data-bs-target="#fifith" role="tab" aria-controls="contact"
                            aria-selected="false">
                            <div class="tab">
                                <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6>
                                <h4 class="title">Assistant Professor</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="tab-content">
                <div class="tab-pane fade advance-tab-content-1 active show" id="home" role="tabpanel"
                    aria-labelledby="home-tab">

                    <div class="career_tab_content">
                        <h3 class="tab_career_title">Careers</h3>
                        <p class="tab_career_title">Training - Skilling – Industry Practice</p>

                        <ul class="list-unstyled careers__pointers">
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-adaptation.svg" alt="">
                                    </div>
                                    <p>Eligibility:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>M Sc./Ph.D with Relevant Academic & Industry Experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-open-sign.svg" alt="">
                                    </div>
                                    <p>Opening:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>2</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-placeholder.svg" alt="">
                                    </div>
                                    <p>Location:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>Singtam (East Sikkim)</p>
                                </div>
                            </li>
                        </ul>

                        <a class="cta_btn" href="">apply now!</a>

                    </div>


                </div>
                <div class="tab-pane fade advance-tab-content-1" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="career_tab_content">
                        <h3 class="tab_career_title">Careers</h3>
                        <p class="tab_career_title">Training - Skilling – Industry Practice</p>

                        <ul class="list-unstyled careers__pointers">
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-adaptation.svg" alt="">
                                    </div>
                                    <p>Eligibility:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>M Sc./Ph.D with Relevant Academic & Industry Experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-open-sign.svg" alt="">
                                    </div>
                                    <p>Opening:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>2</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-placeholder.svg" alt="">
                                    </div>
                                    <p>Location:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>Singtam (East Sikkim)</p>
                                </div>
                            </li>
                        </ul>

                        <a class="cta_btn" href="">apply now!</a>

                    </div>
                </div>
                <div class="tab-pane fade advance-tab-content-1" id="contact" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <div class="career_tab_content">
                        <h3 class="tab_career_title">Careers</h3>
                        <p class="tab_career_title">Training - Skilling – Industry Practice</p>

                        <ul class="list-unstyled careers__pointers">
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-adaptation.svg" alt="">
                                    </div>
                                    <p>Eligibility:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>M Sc./Ph.D with Relevant Academic & Industry Experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-open-sign.svg" alt="">
                                    </div>
                                    <p>Opening:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>2</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-placeholder.svg" alt="">
                                    </div>
                                    <p>Location:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>Singtam (East Sikkim)</p>
                                </div>
                            </li>
                        </ul>

                        <a class="cta_btn" href="">apply now!</a>

                    </div>
                </div>
                <div class="tab-pane fade advance-tab-content-1" id="fourth" role="tabpanel"
                    aria-labelledby="fourth-tab">
                    <div class="career_tab_content">
                        <h3 class="tab_career_title">Careers</h3>
                        <p class="tab_career_title">Training - Skilling – Industry Practice</p>

                        <ul class="list-unstyled careers__pointers">
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-adaptation.svg" alt="">
                                    </div>
                                    <p>Eligibility:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>M Sc./Ph.D with Relevant Academic & Industry Experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-open-sign.svg" alt="">
                                    </div>
                                    <p>Opening:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>2</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-placeholder.svg" alt="">
                                    </div>
                                    <p>Location:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>Singtam (East Sikkim)</p>
                                </div>
                            </li>
                        </ul>

                        <a class="cta_btn" href="">apply now!</a>

                    </div>
                </div>
                <div class="tab-pane fade advance-tab-content-1" id="fifith" role="tabpanel"
                    aria-labelledby="fifith-tab">
                    <div class="career_tab_content">
                        <h3 class="tab_career_title">Careers</h3>
                        <p class="tab_career_title">Training - Skilling – Industry Practice</p>

                        <ul class="list-unstyled careers__pointers">
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/001-adaptation.svg" alt="">
                                    </div>
                                    <p>Eligibility:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>M Sc./Ph.D with Relevant Academic & Industry Experience</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/002-open-sign.svg" alt="">
                                    </div>
                                    <p>Opening:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>2</p>
                                </div>
                            </li>
                            <li>
                                <div class="left__bx d-flex align-items-center">
                                    <div class="icon">
                                        <img src="assets/images/icons/003-placeholder.svg" alt="">
                                    </div>
                                    <p>Location:</p>
                                </div>
                                <div class="contentWrapRight">
                                    <p>Singtam (East Sikkim)</p>
                                </div>
                            </li>
                        </ul>

                        <a class="cta_btn" href="">apply now!</a>

                    </div>
                </div>
            </div>

        </div>
    </div>



</div>
</section>

<!--=====================================-->
<!--=      Our Philosphy, Our Philosphy,  Our Mission Area Start =-->
<!--=====================================-->

<section class="our_vision position-relative">
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-lg-4 col-md-6 mb--10">
            <div class="rbt-card bg-philosophy">
                <div class="rbt-card-body">
                    <h3 class="rbt-card-title"><a href="#">Our Philosphy</a></h3>
                    <p class="rbt-card-text"> The purest form of knowledge is attained by sharing it, it
                        gives us the strength to travel from darkness to light. </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb--10">
            <div class="rbt-card bg-vision">
                <div class="rbt-card-body">
                    <h3 class="rbt-card-title"><a href="#">Our Vision</a></h3>
                    <p class="rbt-card-text"> To make successful academic quests through entrepreneurship,
                        research, modernization and partnerships, thus making PU the finest educational
                        destination.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb--10">
            <div class="rbt-card bg-mission">
                <div class="rbt-card-body">
                    <h3 class="rbt-card-title"><a href="#">Our Mission</a></h3>
                    <p class="rbt-card-text"> Bridging the gap between academia and career, by paying
                        emphasis on development programs for both students and staff.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!--=====================================-->
<!--=      Why MSU Area Start =-->
<!--=====================================-->

<section class="why__msu position-relative">
<div class="container-fluid custom-width__2">
    <div class="row">
        <div class="col-lg-5">
            <h2 class="title">Why MSU?</h2>
            <p class="subpara">Our vibrant campus provides an enriching society, in a diversified community
                of endless creativity and vibrant festivities.
            </p>

            <ul class="list-unstyled why__msu_pointers">
                <li>
                    <div class="pointer_Wrap d-flex align-items-center">
                        <div class="icons"><img src="assets/images/icons/icon-1.png" alt=""></div>
                        <p class="content__msu">MSU believes in the strength of diversity and treats all its
                            employees with equal respect and dignity, enabling a comfort level at workplace.
                        </p>
                    </div>

                </li>
                <li>
                    <div class="pointer_Wrap d-flex align-items-center">
                        <div class="icons"><img src="assets/images/icons/icon-2.png" alt=""></div>
                        <p class="content__msu">We are constantly moving and crossing barriers. This has
                            created plenty of positions and duties for personal growth.
                        </p>
                    </div>

                </li>
                <li>
                    <div class="pointer_Wrap d-flex align-items-center">
                        <div class="icons"><img src="assets/images/icons/icon-3.png" alt=""></div>
                        <p class="content__msu">With the ever-changing global trends, we believe in capacity
                            building and skill development platform which makes our staff even more
                            competent in the world around.
                        </p>
                    </div>
                </li>
                </li>
                <li>
                    <div class="pointer_Wrap d-flex align-items-center">
                        <div class="icons"><img src="assets/images/icons/icon-4.png" alt=""></div>
                        <p class="content__msu">With our State-of-the-Art laboratories and facilities, we
                            seek to provide the most cutting-edge research and innovation.
                        </p>
                    </div>
                </li>
                </li>
                <li>
                    <div class="pointer_Wrap d-flex align-items-center">
                        <div class="icons"><img src="assets/images/icons/icon-5.png" alt=""></div>
                        <p class="content__msu">Our Strategic global partnerships, create avenues of
                            international corporation through faculty exchange programs and collaborative
                            research projects.
                        </p>
                    </div>
                </li>
            </ul>


        </div>
        <div class="col-lg-7">
            <div class="msu_img">
                <img src="assets/images/banner/why-msu-char.png" alt="">
            </div>
        </div>
    </div>

    <div class="msu_behind-element">
        <img src="assets/images/banner/why-msu-char-behind-elemet.png" alt="">
    </div>
</div>
</section>


<!--=====================================-->
<!--=      Our Core Values Area Start =-->
<!--=====================================-->

<section class="our__core_values position-relative">
<div class="container-fluid custom-width__2">
    <div class="row">
        <h2 class="title text-center">Our Core Values</h2>
        <p class="text-center section_para">Our vibrant campus provides an enriching society, in a
            diversified community of endless creativity and vibrant festivities.
        </p>
    </div>
    <div class="row row-cols-xl-5 row-cols-lg-4  row-cols-sm-2 row-cols-1 g-4">
        <div class="col">
            <div class="core__value__card">
                <div class="overlap__img">
                    <img src="assets/images/banner/core-1.jpg" alt="">
                </div>
                <div class="card__data">
                    <div class="content_end">
                        <h3>Global involvement</h3>
                        <p>Partnerships with international universities, encouraging exchange visits and
                            collaborations with MNCs connects us globally. This instills a competent spirit,
                            resulting in setting up of new benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="core__value__card">
                <div class="overlap__img">
                    <img src="assets/images/banner/core-2.jpg" alt="">
                </div>
                <div class="card__data">
                    <div class="content_end">
                        <h3>Respect</h3>
                        <p>Partnerships with international universities, encouraging exchange visits and
                            collaborations with MNCs connects us globally. This instills a competent spirit,
                            resulting in setting up of new benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="core__value__card">
                <div class="overlap__img">
                    <img src="assets/images/banner/core-3.jpg" alt="">
                </div>
                <div class="card__data">
                    <div class="content_end">
                        <h3>Innovation </h3>
                        <p>Partnerships with international universities, encouraging exchange visits and
                            collaborations with MNCs connects us globally. This instills a competent spirit,
                            resulting in setting up of new benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="core__value__card">
                <div class="overlap__img">
                    <img src="assets/images/banner/core-4.jpg" alt="">
                </div>
                <div class="card__data">
                    <div class="content_end">
                        <h3>Growth</h3>
                        <p>Partnerships with international universities, encouraging exchange visits and
                            collaborations with MNCs connects us globally. This instills a competent spirit,
                            resulting in setting up of new benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="core__value__card">
                <div class="overlap__img">
                    <img src="assets/images/banner/core-5.jpg" alt="">
                </div>
                <div class="card__data">
                    <div class="content_end">
                        <h3>Community</h3>
                        <p>Partnerships with international universities, encouraging exchange visits and
                            collaborations with MNCs connects us globally. This instills a competent spirit,
                            resulting in setting up of new benchmarks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--=====================================-->
<!--=     We Grow Together Area Start =-->
<!--=====================================-->

<section class="e__learning position-relative"
style="background-image: url(./assets/images/banner/e-library.png); background-position: center; background-size: cover;">

<div class="container-fluid custom-width__2">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="e-learning__title text-white">We Grow Together</h2>
            <p class="e-learning__para text-white">We believe that every staff member of Parul University
                stands as a significant pillar that holds together the institution of education. As a result
                of this, we believe in promoting and developing strength within all the pillars,
                to stand strong together through various training and team building adventures, which help
                refresh our staff members while at the same time growing together as a team.</p>
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
            <h2 class="title">What Our Students Are Saying</h2>
            <p class="section_para">Our vibrant campus provides an enriching society, in a diversified
                community of endless creativity and vibrant festivities.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="student-says owl-carousel">
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="student__talk_bx">
                        <div class="student_profile d-flex align-items-center">
                            <div class="profile__photo">
                                <img src="assets/images/banner/core-4.jpg" alt="">
                            </div>
                            <div class="profile__name">
                                <h4>John Doe</h4>
                                <p>Student</p>
                            </div>
                        </div>

                        <div class="content__student">
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s</p>
                        </div>
                        <div class="quote_icon">
                            <img src="assets/images/icons/fade-quote.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>



<!--=====================================-->
<!--=      Frequently Asked Question Area Start =-->
<!--=====================================-->

<section class="first-faq-block position-relative">
<div class="container-fluid custom-width__2">
    <div class="row">
        <h2 class="title text-center">Frequently Asked Questions</h2>
        <p class="text-center section_para">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </p>


        <div class="col-xl-10 col-lg-10 col-md-12 m-auto align-items-center justify-content-center">
            <div class="faq-inner">
                <div class="accordion" id="accordionExample_getstarted">
                    <div class="accordion-item">
                        <div class="accordian-wrapper">
                            <div class="faq-boxes">
                                <h2 class="accordion-header" id="heading-1">
                                    <button id="button-1" class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                        aria-expanded="true" aria-controls="collapse-1">
                                        <h3>Q. Are there any transport facilities available for the staff
                                            members?</h3>
                                    </button>
                                </h2>
                                <div id="collapse-1" class="accordion-collapse collapse show" accesskey=""
                                    aria-labelledby="heading-1"
                                    data-bs-parent="#accordionExample_getstarted">
                                    <div class="accordion-body">
                                        <p>For the teaching and non teaching staff, the University provides
                                            transportation facilities in form of cars, buses and couches
                                            which provide transportation to and from the campus. The bus
                                            routes are strategically
                                            outlined in such a way that allows the highest form of
                                            convenience to the staff members in areas within Vadodara, along
                                            with cities surrounding Vadodara.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="accordion-item">
                        <div class="accordian-wrapper">

                            <div class="faq-boxes">
                                <h2 class="accordion-header" id="heading-2">
                                    <button id="button-2" class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                        aria-expanded="false" aria-controls="collapse-2">
                                        <h3>Q. Are there any transport facilities available for the staff
                                            members?</h3>
                                    </button>
                                </h2>
                                <div id="collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="heading-2"
                                    data-bs-parent="#accordionExample_getstarted">
                                    <div class="accordion-body">
                                        <p>For the teaching and non teaching staff, the University provides
                                            transportation facilities in form of cars, buses and couches
                                            which provide transportation to and from the campus. The bus
                                            routes are strategically
                                            outlined in such a way that allows the highest form of
                                            convenience to the staff members in areas within Vadodara, along
                                            with cities surrounding Vadodara.</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="accordion-item">

                        <div class="accordian-wrapper">
                            <div class="faq-boxes">
                                <h2 class="accordion-header" id="heading-3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                        aria-expanded="false" aria-controls="collapse-3">
                                        <h3>Q. Are there any transport facilities available for the staff
                                            members?</h3>
                                    </button>
                                </h2>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="heading-3"
                                    data-bs-parent="#accordionExample_getstarted">
                                    <div class="accordion-body">
                                        <p>For the teaching and non teaching staff, the University provides
                                            transportation facilities in form of cars, buses and couches
                                            which provide transportation to and from the campus. The bus
                                            routes are strategically
                                            outlined in such a way that allows the highest form of
                                            convenience to the staff members in areas within Vadodara, along
                                            with cities surrounding Vadodara.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
@endsection

@push('scripts')
@endpush
