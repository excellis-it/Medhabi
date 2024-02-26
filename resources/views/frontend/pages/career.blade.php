@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - Careers
@endsection
@push('styles')
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ isset($career['banner_image']) ? Storage::url($career['banner_image']) : asset('frontend_assets/images/banner/career-banner.jpg') }}); background-size: cover;
background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1 class="title">{{ isset($career['banner_title']) ? $career['banner_title'] : 'Career at MSU' }}
                        </h1>
                        <p>{{ isset($career['banner_description']) ? $career['banner_description'] : 'An Enriching Atmosphere of Collective Growth' }}
                        </p>
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
                <h2 class="title text-center">
                    {{ isset($career['section_1_title']) ? $career['section_1_title'] : 'Working With MSU' }}</h2>
                <p class="text-center subpara">
                    {{ isset($career['section_1_description'])
                        ? $career['section_1_description']
                        : 'Our working community creates the ideal atmosphere for career growth
                                                                                                                                                                                                and personal expression. From our professional ethics to our flexible dynamic working cultures,
                                                                                                                                                                                                we believe Our Growth Is Found In Your Growth. Be a part of the PU
                                                                                                                                                                                                Family where there is YOU in everything WE do.' }}
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
                            <img src="{{ isset($career['section_1_image']) ? Storage::url($career['section_1_image']) : asset('frontend_assets/images/banner/career-video.jpg') }}"
                                alt="Thumb">
                            <a href="{{ isset($career['section_1_url']) ? $career['section_1_url'] : 'Worhttps://www.youtube.com/watch?v=PICj5tr9hcc' }}"
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
    @if (count($jobs) > 0)
        <section class="our__current__opening position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title">
                            {{ isset($career['section_2_title']) ? $career['section_2_title'] : 'Our Current Openings' }}
                        </h2>
                        <p class="subpara">
                            {{ isset($career['section_2_description'])
                                ? $career['section_2_description']
                                : 'Our working community creates the ideal atmosphere for career growth and
                                                                                                                                                                                                                                                        personal expression.' }}
                        </p>
                    </div>
                    <div class="col-lg-6"></div>

                    <div class="col-lg-12">
                        <div class="input-group">
                            <button class="search-btn" type="button"><i class="icon-2"></i></button>
                            <input type="text" class="form-control" placeholder="Search" id="search-job">
                        </div>
                    </div>
                </div>
                <div class="row" id="search-filter">
                    @include('frontend.pages.filter.career-job-list-filter')
                </div>
            </div>
        </section>
    @endif


    <!--=====================================-->
    <!--=      Our Philosphy, Our Philosphy,  Our Mission Area Start =-->
    <!--=====================================-->

    <section class="our_vision position-relative">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-md-6 mb--10">
                    <div class="rbt-card bg-philosophy"
                        style="background-image: url('{{ isset($career['section_3_image_1']) ? Storage::url($career['section_3_image_1']) : asset('frontend_assets/images/banner/philosophy.jpg') }}');">

                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a
                                    href="#">{{ isset($career['section_3_title_1']) ? $career['section_3_title_1'] : 'Our Philosphy' }}</a>
                            </h3>
                            <p class="rbt-card-text">
                                {{ isset($career['section_3_description_1'])
                                    ? $career['section_3_description_1']
                                    : 'The purest form of knowledge is attained by sharing it, it
                                                                                                                                                                                                                                                                                                                        gives us the strength to travel from darkness to light.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb--10">
                    <div class="rbt-card bg-vision"
                        style="background-image: url({{ isset($career['section_3_image_2']) ? Storage::url($career['section_3_image_2']) : asset('frontend_assets/images/banner/our-vision.jpg') }});">
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a
                                    href="#">{{ isset($career['section_3_title_2']) ? $career['section_3_title_2'] : 'Our Vision' }}</a>
                            </h3>
                            <p class="rbt-card-text">
                                {{ isset($career['section_3_description_2'])
                                    ? $career['section_3_description_2']
                                    : 'To make successful academic quests through entrepreneurship,
                                                                                                                                                                                                                                                                                                                        research, modernization and partnerships, thus making PU the finest educational
                                                                                                                                                                                                                                                                                                                        destination.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb--10">
                    <div class="rbt-card bg-mission"
                        style="background-image: url({{ isset($career['section_3_image_3']) ? Storage::url($career['section_3_image_3']) : asset('frontend_assets/images/banner/our-mision.jpg') }});">
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a
                                    href="#">{{ isset($career['section_3_title_3']) ? $career['section_3_title_3'] : 'Our Mission' }}</a>
                            </h3>
                            <p class="rbt-card-text">
                                {{ isset($career['section_3_description_3'])
                                    ? $career['section_3_description_3']
                                    : 'Bridging the gap between academia and career, by paying
                                                                                                                                                                                                                                                                                                                        emphasis on development programs for both students and staff.' }}
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
                    <h2 class="title">{{ isset($career['section_4_title']) ? $career['section_4_title'] : 'Why MSU?' }}
                    </h2>
                    <p class="subpara">
                        {{ isset($career['section_4_description'])
                            ? $career['section_4_description']
                            : 'Our vibrant campus provides an enriching society, in a diversified community
                                                                                                                                                                                                                                        of endless creativity and vibrant festivities.' }}
                    </p>

                    <ul class="list-unstyled why__msu_pointers">
                        @if (count($careerModules) > 0)
                            @foreach ($careerModules as $item)
                                <li>
                                    <div class="pointer_Wrap d-flex align-items-center">
                                        <div class="icons"><img src="{{ Storage::url($item->image) }}" alt="">
                                        </div>
                                        <p class="content__msu">{{ $item->description }}
                                        </p>
                                    </div>

                                </li>
                            @endforeach
                        @endif
                    </ul>


                </div>
                <div class="col-lg-7">
                    <div class="msu_img">
                        <img src="{{ isset($career['section_4_image']) ? Storage::url($career['section_4_image']) : asset('frontend_assets/images/banner/why-msu-char.png') }}"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="msu_behind-element">
                <img src="{{ asset('frontend_assets/images/banner/why-msu-char-behind-elemet.png') }}" alt="">
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=      Our Core Values Area Start =-->
    <!--=====================================-->
    @if (count($our_core_values) > 0)
        <section class="our__core_values position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <h2 class="title text-center">
                        {{ isset($career['section_5_title']) ? $career['section_5_title'] : 'Our Core Values' }}</h2>
                    <p class="text-center section_para">
                        {{ isset($career['section_5_description'])
                            ? $career['section_5_description']
                            : 'Our vibrant campus provides an enriching society, in a
                                                                                                                                                                                                            diversified community of endless creativity and vibrant festivities.' }}
                    </p>
                </div>
                <div class="row row-cols-xl-5 row-cols-lg-4  row-cols-sm-2 row-cols-1 g-4">
                    @foreach ($our_core_values as $our_core_value)
                        <div class="col">
                            <div class="core__value__card">
                                <div class="overlap__img">
                                    <img src="{{ Storage::url($our_core_value['image']) }}" alt="">
                                </div>
                                <div class="card__data">
                                    <div class="content_end">
                                        <h3>{{ $our_core_value['name'] }}</h3>
                                        <p>{{ $our_core_value['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    <!--=====================================-->
    <!--=     We Grow Together Area Start =-->
    <!--=====================================-->

    <section class="e__learning position-relative"
        style="background-image: url({{ isset($career['section_6_image']) ? Storage::url($career['section_6_image']) : asset('frontend_assets/images/banner/e-library.png') }}); background-position: center; background-size: cover;">

        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="e-learning__title text-white">
                        {{ isset($career['section_6_title']) ? $career['section_6_title'] : 'We Grow Together' }}</h2>
                    <p class="e-learning__para text-white">
                        {{ isset($career['section_6_description'])
                            ? $career['section_6_description']
                            : 'We believe that every staff member of Parul University
                                                                                                                                                                                                                        stands as a significant pillar that holds together the institution of education. As a result
                                                                                                                                                                                                                        of this, we believe in promoting and developing strength within all the pillars,
                                                                                                                                                                                                                        to stand strong together through various training and team building adventures, which help
                                                                                                                                                                                                                        refresh our staff members while at the same time growing together as a team.' }}
                    </p>
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
                            {{ isset($career['section_7_title']) ? $career['section_7_title'] : 'What Our Students Are Saying' }}
                        </h2>
                        <p class="section_para">
                            {{ isset($career['section_7_description'])
                                ? $career['section_7_description']
                                : 'Our vibrant campus provides an enriching society, in a diversified
                                                                                                                                                                                                                                                        community of endless creativity and vibrant festivities.' }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
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


    <!--=====================================-->
    <!--=      Frequently Asked Question Area Start =-->
    <!--=====================================-->
    @if (count($faqs) > 0)
        <section class="first-faq-block position-relative">
            <div class="container-fluid custom-width__2">
                <div class="row">
                    <h2 class="title text-center">
                        {{ isset($career['section_8_title']) ? $career['section_8_title'] : 'Frequently Asked Questions' }}
                    </h2>
                    <p class="text-center section_para">
                        {{ isset($career['section_8_description'])
                            ? $career['section_8_description']
                            : "Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                                                                                                                                                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s" }}
                    </p>


                    <div class="col-xl-10 col-lg-10 col-md-12 m-auto align-items-center justify-content-center">
                        <div class="faq-inner">
                            <div class="accordion" id="accordionExample_getstarted">
                                @foreach ($faqs as $key => $faq)
                                    <div class="accordion-item">
                                        <div class="accordian-wrapper">
                                            <div class="faq-boxes">
                                                <h2 class="accordion-header" id="heading-{{ $key + 1 }}">
                                                    <button id="button-{{ $key + 1 }}" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-1" aria-expanded="true"
                                                        aria-controls="collapse-1">
                                                        <h3>Q. {{ $faq->question }}</h3>
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $key + 1 }}"
                                                    class="accordion-collapse collapse show" accesskey=""
                                                    aria-labelledby="heading-{{ $key + 1 }}"
                                                    data-bs-parent="#accordionExample_getstarted">
                                                    <div class="accordion-body">
                                                        <p>{{ $faq->answer }}
                                                        </p>
                                                    </div>
                                                </div>
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
    @endif
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#search-job').on('keyup', function() {
                var value = $(this).val();

                $.ajax({
                    type: 'get',
                    url: '{{ route('frontend.career.job.search') }}',
                    data: {
                        'search': value
                    },
                    success: function(response) {
                        $('#search-filter').html(response.data);
                    }
                });
            });
        });
    </script>
@endpush
