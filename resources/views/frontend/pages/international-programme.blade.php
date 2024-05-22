@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - We are International
@endsection


@push('styles')
@endpush




@section('content')

<!-- Meta Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '5688131151219687');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=5688131151219687&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

<section class="hero--Inner-page-banner" style="
background-image: url({{asset('frontend_assets/images/banner/INTERNATIONAL-PATHWAY.jpg')}});
background-size: cover;
background-position: center;">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-7">
  <div class="page-title">
    <h1 class="title">International Pathway Programs - SHINE</h1>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= Work As A Nurse In Germany! Area Start =-->
<!--=====================================-->

<section class="nurse-in-germany">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-6">
  <h2 class="title red-color">Work As A Nurse In Germany!</h2>
  <span class="subtitle">Unleash Your Potential With</span>
  <h5 class="yellow-bg">
    <span>Post Basic Diploma In</span>
  </h5>
  <h4 class="black-bg">
    <span>HEALTHCARE MANAGEMENT</span>
  </h4>
  <h5 class="yellow-bg">
    <span>Cum</span>
  </h5>
  <h4 class="blue-bg">
    <span>INTERNATIONAL PLACEMENT</span>
  </h4>

  <p class="section-para">
    Guaranteed Overseas Job From Day 1 <br />
    Starting Salary (2400 – 3300 Euros Per Month) <br />
    (2,14,000 – 2,94,000 INR Per Month)
  </p>
  <a class="cta_btn" href="">apply now!</a>
  <p class="link">
    Already Registered? <a href="#">Click Here To Login.</a>
  </p>
</div>

<div class="col-lg-6">
  <div class="right__img">
    <img src="{{asset('frontend_assets/images/banner/nurse-in-ger.png')}}" alt="" />
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= Work As A Nurse In Germany! Area End =-->
<!--=====================================-->

<!--=====================================-->
<!--= Opportunities Images Area Start =-->
<!--=====================================-->

<section class="opportunities-bg"></section>

<!--=====================================-->
<!--=  Opportunities Images Area End =-->
<!--=====================================-->

<!--=====================================-->
<!--= Germany – The Land Of Opportunities Start =-->
<!--=====================================-->

<section class="germany__opportunites">
<div class="container-fluid custom-width__2">
<div class="row">
<h2 class="title text-center">
  Germany – The Land Of Opportunities
</h2>
<p class="text-center oppor-para">
  Germany – The Land Of Opportunities- Embrace the German Advantage and give wings to your dreams
</p>
</div>

<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-5 justify-content-center">
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/strong.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Strong</h5>
      <p>A dynamic economy</p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/diverse.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Diverse</h5>
      <p>
        Become part of a <br />
        diverse society
      </p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/lower.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Lower</h5>
      <p>On unemployment rate</p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/stable.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Stable</h5>
      <p>A good home for your ideas</p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/flexi89ble.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Flexible</h5>
      <p>On working hourse</p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/open-minded.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Open-minded</h5>
      <p>
        Your cultural background will help you attract international
        customers
      </p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/helpful.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Helpful</h5>
      <p>
        You will recive <br />
        professional support & funding
      </p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/attractive.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Attractive</h5>
      <p>
        Career opportunities to professionals from around the world
      </p>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid">
    <div class="icon__1">
      <img src="{{asset('frontend_assets/images/icons/best.png')}}" alt="" />
    </div>
    <div class="content__1">
      <h5 class="title">Best</h5>
      <p>Worker’s benefits</p>
    </div>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--=  Germany – The Land Of Opportunities End =-->
<!--=====================================-->

<!--=====================================-->
<!--= The Office of International Affairs Area Start =-->
<!--=====================================-->

<section class="germany_stable position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-8">
  <h2 class="title">
    Germany does have a stable healthcare system; nevertheless,
    nursing professionals remain to be in high demand
  </h2>

  <ul class="demand__list">
    <li>
      <p>The overall population is statistically aging globally</p>
    </li>
    <li>
      <p>Guaranteed Work Placement</p>
    </li>
    <li>
      <p>
        The health sector is one of the most important employment
        sectors
      </p>
    </li>
    <li>
      <p>Work-life balance</p>
    </li>
    <li>
      <p>Friendly Work Environment</p>
    </li>
    <li>
      <p>Attractive allowance and social benefits</p>
    </li>
    <li>
      <p>Career advancement and self-improvement</p>
    </li>
    <li>
      <p>Financial support for your specialisation courses</p>
    </li>
    <li>
      <p>Advance your career in over 200 different fields</p>
    </li>
    <li>
      <p>International culture and exposure</p>
    </li>
    <li>
      <p>
        Highly reliable work councils/unions to protect employees
      </p>
    </li>
    <li>
      <p>
        Highly reliable work councils/unions to protect employees
      </p>
    </li>
    <li>
      <p>Paid holidays and sick leaves</p>
    </li>
    <li>
      <p>Maternity/ parental leave</p>
    </li>
  </ul>
</div>
<div class="col-lg-4">
  <div class="char_img">
    <img src="{{asset('frontend_assets/images/banner/stable-right-char.png')}}" alt="" />
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= The Office of International Affairs Area End =-->
<!--=====================================-->

<!--=====================================-->
<!--= Work Options in Start =-->
<!--=====================================-->

<section class="work__options">
<div class="container-fluid custom-width__2 text-center">
<div class="row">
<h2 class="title text-center">Work Options in</h2>
<p class="text-center oppor-para">
  Lorem Ipsum is simply dummy text of the printing and typesetting
  industry.
</p>
</div>

<div class="grid-view row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-5 mt-lg-0">
<div class="col">
  <div class="categorie-grid categorie-style-3 color-extra07-style">
    <div class="icon__2">
      <img src="{{asset('frontend_assets/images/icons/hospital.png')}}" alt="" />
    </div>
    <div class="content_2">
      <h5 class="title">Hospitals And Clinics</h5>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid categorie-style-3 color-extra06-style">
    <div class="icon__2">
      <img src="{{asset('frontend_assets/images/icons/nursing.png')}}" alt="" />
    </div>
    <div class="content_2">
      <h5 class="title">Nursing Homes</h5>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid categorie-style-3 color-extra03-style">
    <div class="icon__2">
      <img src="{{asset('frontend_assets/images/icons/disabled.png')}}" alt="" />
    </div>
    <div class="content_2">
      <h5 class="title">Disabled People’s Dormitories</h5>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid categorie-style-3 color-extra01-style">
    <div class="icon__2">
      <img src="{{asset('frontend_assets/images/icons/our-patient.png')}}" alt="" />
    </div>
    <div class="content_2">
      <h5 class="title">Outpatient Social Services</h5>
    </div>
  </div>
</div>
<div class="col">
  <div class="categorie-grid categorie-style-3 color-extra05-style">
    <div class="icon__2">
      <img src="{{asset('frontend_assets/images/icons/vocational_center.png')}}" alt="" />
    </div>
    <div class="content_2">
      <h5 class="title">
        Rehabilitation <br />
        Centers & Even <br />
        Vocational Schools
      </h5>
    </div>
  </div>
</div>
</div>

<a class="cta_btn" href="">view in details</a>
</div>
</section>

<!--=====================================-->
<!--= Work Options in End =-->
<!--=====================================-->

<!--=====================================-->
<!--= We are verified by Start =-->
<!--=====================================-->

<section class="verified__sec">
<div class="container-fluid p-0">
<div class="row p-0 align-items-center">
<div class="col-lg-6 p-lg-0">
  <div class="flag__bx">
    <h4 class="flag__title">Why Work As A Nurse In Germany?</h4>
    <div class="benefit-opt grid-2">
      <div class="benefit-opt-left element-center">
        <div class="benefit-single benefit-one">
          <h4 class="heading-4">1.3 Million</h4>
          <p>employed in the nursing sector</p>
        </div>
      </div>
      <div class="benefit-opt-right">
        <div class="benefit-wrap">
          <div class="benefit-single benefit-two">
            <h4 class="heading-4">36,000</h4>
            <p>(approx.) job vacancies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-6 p-lg-0">
  <div class="verified__bx">
    <h4 class="verified__title">We are verified by</h4>

    <div class="logo__grid grid-4">
      <div class="logo--one">
        <img src="{{asset('frontend_assets/images/logo/nsdc.jpg')}}" alt="" />
      </div>
      <div class="logo--two">
        <img src="{{asset('frontend_assets/images/logo/mizoram.jpg')}}" alt="" />
      </div>
      <div class="logo--three">
        <img src="{{asset('frontend_assets/images/logo/skkim23.jpg')}}" alt="" />
      </div>
      <div class="logo--four">
        <img src="{{asset('frontend_assets/images/logo/skill-india.jpg')}}" alt="" />
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= We are verified by End =-->
<!--=====================================-->



<!--=====================================-->
<!--=  Advantages of Choosing SHINE  Start =-->
<!--=====================================-->


<section class="choosing__shine">
<div class="container-fluid ">
<div class="row">
<h2 class="title text-center"> Advantages of Choosing SHINE </h2>
<p class="text-center eligiibility-para">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
  industry's standard dummy text ever since the 1500s
</p>
</div>
<div class="row">
<ul class="ps-timeline">
  <li>

    <div class="ps-bot">
      <p>Well Defined Career Paths</p>
    </div>
    <span class="ps-sp-top"><img src="{{asset('frontend_assets/images/icons/path.jpg')}}" alt=""></span>
  </li>
  <li>
    <div class="ps-top">
      <p>Opportunity to Apply for PR As
        Per Their Regulations</p>
    </div>
    <span class="ps-sp-bot"><img src="{{asset('frontend_assets/images/icons/apply-pr.jpg')}}" alt=""></span>
  </li>
  <li>
    <div class="ps-bot">
      <p>Opportunity to Earn Additional
        income (Night Shift, Holiday, Over Time,
        Other Duty ETC)</p>
    </div>
    <span class="ps-sp-top"><img src="{{asset('frontend_assets/images/icons/duty-etc.jpg')}}" alt=""></span>
  </li>
  <li>
    <div class="ps-top">
      <p>Your Spouse Can Work & Your Children Will
        Be Eligible For Free Education</p>
    </div>
    <span class="ps-sp-bot"><img src="{{asset('frontend_assets/images/icons/free-education.jpg')}}" alt=""></span>
  </li>
  <li>
    <div class="ps-bot">
      <p>Attractive Salary</p>
    </div>
    <span class="ps-sp-top"><img src="{{asset('frontend_assets/images/icons/att-sal.jpg')}}" alt=""></span>
  </li>
</ul>
</div>



</div>
</section>






<!--=====================================-->
<!--= Advantages of Choosing SHINE  End =-->
<!--=====================================-->


<!--=====================================-->
<!--= Eligibility For Selection Start =-->
<!--=====================================-->

<section class="eligibility__selection position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<h2 class="title text-center">Eligibility For Selection</h2>
<p class="text-center eligiibility-para">
  You will be eligible for joining the program if you meet the following criteria
</p>
</div>

<div class="row g-5">
<div class="col-lg-6 col-md-6">
  <div class="categorie-grid categorie-style-5 rbt-hover">
    <div class="icon">
      <img src="{{asset('frontend_assets/images/icons/nurse.png')}}" alt="" />
    </div>
    <div class="content__3">
      <h5 class="title">
        Qualified & Registered (Central & State Govt.) Nurse
      </h5>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="categorie-grid categorie-style-5 rbt-hover">
    <div class="icon">
      <img src="{{asset('frontend_assets/images/icons/clinical-exp.png')}}" alt="" />
    </div>
    <div class="content__3">
      <h5 class="title">
        Clinical Experience is an Added Advantage
      </h5>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="categorie-grid categorie-style-5 rbt-hover">
    <div class="icon">
      <img src="{{asset('frontend_assets/images/icons/physically.png')}}" alt="" />
    </div>
    <div class="content__3">
      <h5 class="title">
        Physically and Mentally <br />
        Healthy
      </h5>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="categorie-grid categorie-style-5 rbt-hover">
    <div class="icon">
      <img src="{{asset('frontend_assets/images/icons/clean.png')}}" alt="" />
    </div>
    <div class="content__3">
      <h5 class="title">
        Clean Record with no Criminal Background
      </h5>
    </div>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= Eligibility For Selection End =-->
<!--=====================================-->

<!--=====================================-->
<!--=       Road to Success Area Start =-->
<!--=====================================-->

<!-- <section class="road__to_succes position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<h2 class="title text-center">Road to Success</h2>
<p class="text-center">
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
  industry's standard dummy text ever since the 1500s
</p>
</div>
</div>
</section> -->





<!--=====================================-->
<!--=       International Language Area Start =-->
<!--=====================================-->

<section class="international__lang bg-gray">
<div class="container-fluid custom-width__2">
<div class="row">
<h2 class="title text-center">International Programs</h2>
<p class="text-center">
  Our curriculum at MSU is meticulously crafted to ensure
  employability and real-world success.
</p>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
  <div class="rbt-card-lang rbt-hover">
    <div class="rbt-card-img">
      <a href="#">
        <img src="{{asset('frontend_assets/images/banner/ger-lang.jpg')}}" alt="Card image" />
      </a>
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        <a href="#">German Language</a>
      </h4>
      <p class="rbt-card-subtext">cum International Placement</p>
      <p class="rbt-card-para">
        Earn Attractive Salary
        <span class="red-color">2300 to 4600 Euros per month</span>
        ( Rs. 2,14,000 to Rs. 2,94,000 INR per month )
      </p>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="rbt-card-lang rbt-hover">
    <div class="rbt-card-img">
      <a href="#">
        <img src="{{asset('frontend_assets/images/banner/jpn-lang.jpg')}}" alt="Card image" />
      </a>
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        <a href="#">Japanese language</a>
      </h4>
      <p class="rbt-card-subtext">cum International Placement</p>
      <p class="rbt-card-para">
        Earn Attractive Salary
        <span class="red-color">1.51 Lakh to 1.91 Lakh Japanese Yen per month</span>
        ( Rs 84K to 1.07 Lakhs INR per month)
      </p>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="rbt-card-lang rbt-hover">
    <div class="rbt-card-img">
      <a href="#">
        <img src="{{asset('frontend_assets/images/banner/eng-lang.jpg')}}" alt="Card image" />
      </a>
    </div>
    <div class="rbt-card-body">
      <h4 class="rbt-card-title">
        <a href="#">English Language</a>
      </h4>
      <p class="rbt-card-subtext">cum International Placement</p>
      <p class="rbt-card-para">
        Earn Attractive Salary
        <span class="red-color">2000 GBP to 2700 GBP</span>
        ( 2.05 Lakhs to 2.77 Lakhs INR per month )
      </p>
    </div>
  </div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--=       International Language Area End =-->
<!--=====================================-->

<!--=====================================-->
<!--= About Medhavi Skills University Area Start =-->
<!--=====================================-->

<section class="abt_medhavi position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-7">
  <h2 class="title text-white">About Medhavi Skills University</h2>
  <p class="text-white">
    Chartered under the Sikkim Act, 2021, and recognised by the UGC
    in March 2022, Medhavi Skills University holds the distinction
    of being India’s pioneering skills university that is fully
    compliant with NEP2020. With NCVET approval to operate as an
    Awarding Body, MSU is reshaping higher education by integrating
    industry-specific training with academic learning, in line with
    the New National Credit Framework (NCrF). MSU is not just about
    providing degrees; we are committed to equipping our students
    with real-world experience and creating an industry-ready
    workforce from day one. Our mission is to foster a
    quality-centric, outcome-driven, inclusive ecosystem for
    skill-integrated higher education.
  </p>
  <a href="https://www.youtube.com/watch?v=Edmmm4StYH0"
    class="video-play-btn video-popup-activation popup-youtube">
    <i class="icon-18"></i>
  </a>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--= About Medhavi Skills University Area End =-->
<!--=====================================-->

<!--=====================================-->
<!--= The Office of International Affairs Area Start =-->
<!--=====================================-->

<section class="oia_section position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<h2 class="title text-center">
  The Office of International Affairs (OIA)
</h2>
<p class="text-center oia_para">
  The Office of International Affairs (OIA) is dedicated to
  advancing its mission of fostering a more equitable and
  interconnected global community by promoting the principles of
  active Global Citizenship.
</p>
</div>

<div class="row align-items-center">
<div class="col-lg-7">
  <div class="oia-left_lest">
    <ul class="oia__list">
      <li>
        <p>
          The primary responsibility of the OIA is to support the
          University and its affiliated centers in implementing
          their comprehensive internationalization strategy.
        </p>
      </li>
      <li>
        <p>
          Acting as a vital conduit between the University and
          various external stakeholders across national borders, the
          OIA strives to extend educational and employment avenues
          for every student at Medhavi.
        </p>
      </li>
      <li>
        <p>
          OIA will also maintain healthy relationships with Indian
          central and state governments, Indian missions abroad and
          diplomatic entities in India to promote inward and outward
          student/labour mobility.
        </p>
      </li>
      <li>
        <p>
          By championing these efforts, we aim to create an
          environment that embraces diversity and inclusivity and
          encourages meaningful engagement with our global partners.
        </p>
      </li>
      <li>
        <p>
          The OIA plays a crucial role in facilitating various
          functions and activities under three Strategic Business
          Units:
        </p>
      </li>
    </ul>
  </div>
</div>
<div class="col-lg-5">
  <div class="oia-right">
    <div class="oia-opt grid-2">
      <div class="oia-opt-right">
        <div class="oia-wrap">
          <div class="oia-single oia-two mb-30">
            <i><img src="{{asset('frontend_assets/images/icons/placement.png')}}" alt="no image" /></i>
            <h4 class="heading-4 mb-0">
              International Work Placements
            </h4>
          </div>
          <div class="oia-single oia-two">
            <i><img src="{{asset('frontend_assets/images/icons/recruitment.png')}}" alt="no image" /></i>
            <h4 class="heading-4 mb-0">
              International Student Recruitment
            </h4>
          </div>
        </div>
      </div>
      <div class="oia-opt-left element-center">
        <div class="oia-single oia-one">
          <i><img src="{{asset('frontend_assets/images/icons/placement-1.png')}}" alt="no image" /></i>
          <h4 class="heading-4 mb-0">
            International Study Placements
          </h4>
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
