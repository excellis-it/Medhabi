@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - We are International
@endsection
@push('styles')
@endpush

@section('content')
<section class="hero--Inner-page-banner" style="
background-image: url({{asset('frontend_assets/images/VKS_3063.JPG')}});
background-size: cover;
background-position: center;
">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-7">
  <div class="page-title">
    <h1 class="title">
      From The <br />
      Chancellor's Desk
    </h1>
    <p>
      A message from our visionary leader
    </p>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--=       From the Chancellor’s Desk Area Start =-->
<!--=====================================-->

<section class="chancellor_desk">
<div class="container-fluid">
<div class="row align-items-lg-start">
<div class="col-lg-6 pl--140">
  <div class="chancellor__img">
    <img src="{{asset('frontend_assets/images/banner/leadership - pravesh-dudani.jpg')}}" alt="" />
  </div>
</div>
<div class="col-lg-6 pl--62">
  <h3 class="chancellor_title">MR. PRAVESH DUDANI</h3>
  <p class="chancellor_para">
    Mr. Pravesh Dudani is the Founder and chancellor of Medhavi Skills University, Sikkim, and the Managing
    Director of the sponsoring body of the University- Medhavi Foundation. Mr. Dudani is an IIT Kharagpur and
    Stanford University alumni and brings 15+ years of education skills and leadership experience to MSU. Mr.
    Dudani founded the Medhavi Foundation in 2012 with the vision of bridging the gap between the
    employability of rural youths and manpower requirements in industry.

  </p>
  <p class="chancellor_para">Mr. Dudani is the pillar of cultivating transformative changes. Under his
    forward-thinking
    leadership,
    the Medhavi Foundation has partnered with the National Skills Development Corporation (NSDC) and various
    state skill missions and Government departments to implement NSQF (National Skills Qualification
    Framework) aligned with skill training initiative and manpower resource betterment. It mandates and has
    supported 1,00,000+ beneficiaries since 2012 via various short-term, long-term, and Recognition of Prior
    Learning (RPL) training initiatives. The foundation has also become a registered TPA (Third Party
    Aggregator) with MSDE to promote Apprenticeship adoption under NAPS (National Apprenticeship Promotion
    Scheme) and caters to 300+ organizations across India.</p>

  <p class="chancellor_para moretext"> In his previous
    entrepreneurial venture, he co-founded the remarkable
    iDreamCareer.com (iDC), which is
    India’s leading and largest career-planning service provider catering to 50,000 students globally. Mr.
    Dudani excels in his discipline to make a strong educational infrastructure. In IDreamCareer.com, there
    is
    an investment by the Times of India Group. After graduating from IIT Kharagpur, Mr. Dudani worked with
    the
    different educational institutions to stand for knowledge, innovation, and community engagement.</p>

  <p class="chancellor_para moretext">
    Mr. Dudani worked with the Educomp Solutions Ltd as head. In this organization, Mr. Dudani has taken
    over
    the K12 assessment space to provide education to more than 500 schools. After that, Mr. Pravesh Dudani
    has
    worked with the IndiaCan Education Pvt. Ltd for vocational education. His diversity of thought and
    knowledge has made him remarkable in the education sector. In the space of vocational education and
    university education, this is a milestone to adapt new modes of learning and collaboration. He is a
    person
    in education with excellence. Mr. Dudani has attended the Tata Jagriti Yatra and actively participated
    in
    social causes and initiatives. Mr. Dudani is recognised as one of the top 14 entrepreneurs in India by
    CNBC TV 18 for its award show “Masterpreneurs”. He was also one of the top 50 global change leaders at
    Stanford University for Social Entrepreneurship in 2015. He is a person who incorporates creative
    solutions, transformative initiatives, innovation, and change. His meaningful contribution to education
    and the youth development has manifested collective growth and better careers.  </p>

  <a class="moreless-button" href="javascript:void(0);">Read more</a>

</div>
</div>
</div>
<div class="chancellor__element">
<img src="{{asset('frontend_assets/images/banner/chancellor__img.png')}}" alt="">
</div>
</section>

<!--=====================================-->
<!--=       Video Section Area Start =-->
<!--=====================================-->

<section class="video_sec reduce-padding">
<div class="container">
<div class="row">
<h2 class="title text-center">Watch the videos</h2>
<p class="text-center">
  Our curriculum at MSU is meticulously crafted to ensure
  employability and real-world success.
</p>
</div>
</div>
<div class="owl-carousel video-section">
<div class="item">
<div>
  <video class="js-player" crossorigin playsinline
    poster="{{asset('frontend_assets/images/banner/chancellor-video-thumb-1.jpg')}}"></video>
  <a href="https://www.youtube.com/watch?v=ybH6mOHnYiY"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
<div class="item">
<div>
  <video class="js-player" crossorigin playsinline
    poster="{{asset('frontend_assets/images/banner/chancellor-video-thumb-2.jpg')}}"></video>
  <a href="https://www.youtube.com/watch?v=uLcDOfBndJQ"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
<div class="item">
<div>
  <video class="js-player" crossorigin playsinline
    poster="{{asset('frontend_assets/images/banner/chancellor-video-thumb-3.jpg')}}"></video>
  <a href="https://www.youtube.com/watch?v=WbD83zsJh64"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
<div class="item">
<div>
  <video class="js-player" crossorigin playsinline
    poster="{{asset('frontend_assets/images/banner/chancellor-video-thumb-4.jpg')}}"></video>
  <a href="https://www.youtube.com/watch?v=oY8SbgjGmCk"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
<div class="item">
<div>
  <video class="js-player" crossorigin playsinline
    poster="{{asset('frontend_assets/images/banner/chancellor-video-thumb-5.jpg')}}"></video>
  <a href="https://www.youtube.com/watch?v=IjTpe1FDDj0"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--=       Video Section Area Start =-->
<!--=====================================-->

<section class="featured__section position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-5">
  <h2 class="title">Featured On</h2>
  <p class="sub_para">
    By choosing dual degree programs, it means you can graduate with two degrees at the end of your studies.
  </p>
</div>
</div>
<div class="row row__spacing">
<div class="col-lg-4 col-md-6">
  <div class="rbt-card-blog rbt-hover">
    <div class="rbt-card-img">
      <a
        href="https://www.hindustantimes.com/brand-stories/the-indian-air-force-and-medhavi-skills-university-sign-a-historic-mou-101690893756600.html">
        <img src="{{asset('frontend_assets/images/events/news-1-1.jpg')}}" alt="Card image">
      </a>
      <!-- <img class="media__icon" src="assets/images/icons/news-media-logo.png" alt=""> -->
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        Hindustan Times
      </h4>
      <a
        href="https://www.hindustantimes.com/brand-stories/the-indian-air-force-and-medhavi-skills-university-sign-a-historic-mou-101690893756600.html">
        <p class="rbt-card-subtext">The Indian Air Force and Medhavi Skills University Sign a Historic MoU
        </p>
      </a>
    </div>
  </div>


</div>
<div class="col-lg-4 col-md-6">

  <div class="rbt-card-blog rbt-hover m-auto">
    <div class="rbt-card-img">
      <a
        href="https://indiaeducationdiary.in/nsdc-medhavi-skills-university-partner-to-develop-promote-long-term-degree-diploma-skill-courses/">
        <img src="{{asset('frontend_assets/images/events/news-1-2.jpg')}}" alt="Card image">
      </a>
      <!-- <img class="media__icon" src="assets/images/icons/news-media-logo.png" alt=""> -->
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        India Education
      </h4>
      <a
        href="https://indiaeducationdiary.in/nsdc-medhavi-skills-university-partner-to-develop-promote-long-term-degree-diploma-skill-courses/">
        <p class="rbt-card-subtext">NSDC, Medhavi Skills University partner to develop, promote long-term
          degree & diploma skill courses
        </p>
      </a>
    </div>
  </div>


</div>
<div class="col-lg-4 col-md-6">

  <div class="rbt-card-blog rbt-hover">
    <div class="rbt-card-img">
      <a
        href="https://www.aninews.in/news/business/business/inifd-west-delhi-celebrates-grand-launch-of-inifd-with-medhavi-skills-university-and-nsdc-paving-the-way-for-a-new-era-in-design-education20230803115152">
        <img src="{{asset('frontend_assets/images/events/news-1-3.jpg')}}" alt="Card image">
      </a>
      <!-- <img class="media__icon" src="assets/images/icons/news-media-logo.png" alt=""> -->
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        Ani News
      </h4>
      <a
        href="https://www.aninews.in/news/business/business/inifd-west-delhi-celebrates-grand-launch-of-inifd-with-medhavi-skills-university-and-nsdc-paving-the-way-for-a-new-era-in-design-education20230803115152">
        <p class="rbt-card-subtext">INIFD West Delhi Celebrates Grand Launch of INIFD with Medhavi Skills
          University and NSDC
        </p>
      </a>

    </div>
  </div>


</div>
</div>
</div>
</section>
@endsection

@push('scripts')
<script>
    // Video Slider Js
    $(".owl-carousel").owlCarousel({
      stagePadding: 200,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      loop: true,
      margin: 10,
      navText: [
        "<span class='ri-arrow-left-s-line prev_btn'></span>",
        "<span class='ri-arrow-right-s-line next_btn'></span>",
      ],
      items: 1,
      nav: true,
      responsive: {
        0: {
          items: 1,
          stagePadding: 10,
          nav: false,
          autoplay: false,
          autoplayTimeout: 2000
        },
        600: {
          items: 1,
          stagePadding: 100,
        },
        1000: {
          items: 1,
          stagePadding: 200,
        },
        1200: {
          items: 1,
          stagePadding: 250,
        },
        1400: {
          items: 1,
          stagePadding: 300,
        },
        1600: {
          items: 1,
          stagePadding: 350,
        },
        1800: {
          items: 1,
          stagePadding: 400,
        },
      },
    });
  </script>
@endpush
