<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Data -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Thank You</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend_assets/images/icons/favicon.ico')}}" />
  <!-- CSS
	============================================ -->
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/icomoon.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/RemixIcon_Fonts_v4.0.0/fonts/remixicon.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/medhavi-floating-menu-icons/font/flaticon_mycollection.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/magnifypopup.min.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/owl.carousel.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/odometer.min.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/sal.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/animation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/jqueru-ui-min.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/swiper.min.css')}}" />
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <!-- Site Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend_assets/css/main.css')}}" />

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
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11072902457"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-11072902457');
  </script>
  <!-- Event snippet for Lead conversion page -->
  <script>
    gtag('event', 'conversion', { 'send_to': 'AW-10779528309/szZdCLjo5KkZEPWYipQo' });
  </script>


</head>

<body class="sticky-header">
  <div id="main-wrapper" class="main-wrapper">
    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->

        <!-- Start Header Area  -->
        @include('frontend.includes.header')
        <!-- End Header Area  -->
    <!--=====================================-->
    <!--=       Hero Inner Page Banner Area Start =-->
    <!--=====================================-->
    <section class="hero--Inner-page-banner" style="
          background-image: url({{asset('frontend_assets/images/ADP_7676.JPG')}});
          background-size: cover;
          background-position: center;
        ">
      <div class="container-fluid custom-width__2">
        <div class="row">
          <div class="col-md-6">
            <div class="page-title">
              <h1 class="title">Thank You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=====================================-->
    <!--=        Section Para      =-->
    <!--=====================================-->

    <section class="prospectus-pdf-section position-relative">
      <div class="container-fluid custom-width__2">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="pdf-bx">
              <p>Your interest has been saved successfully with us. </p>
              <p>Our admission team will get in touch with you shortly.</p>
              <p>Be ready for an amazing journey ahead.</p>

              <!-- <a target="_blank" class="arrow-btn-pdf"
                href="assets/images/Prospectus-pdf/MSU BROCHURE 2024_Digital.pdf">Download Brochure 2024</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="stats-section">
      <div class="container-fluid custom-width__2">
        <div class="stats-bx">
          <div class="row gx-5 gy-5">
            <div class="col-lg-3 col-md-6">
              <div class="stats-bx-alternate">
                <h3 class="alternate-black">1st <span class="small-text">in India</span> </h3>
                <p class="stats-para-text">to features Learn & Earn during Degree</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-bx-alternate-blue">
                <h3 class="alternate-white">1st <span class="small-text">in India</span> </h3>
                <p class="stats-para-text-white">to promote NEP2020 with Industry Intergration</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-bx-alternate">
                <h3 class="alternate-black">1st <span class="small-text">in India</span> </h3>
                <p class="stats-para-text">to promote Overseas Mobility</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="stats-bx-alternate-blue">
                <h3 class="alternate-white">1st <span class="small-text">in India</span> </h3>
                <p class="stats-para-text-white">to be the Awarding Body of UGC & NCVET, MSDE, Gol</p>
              </div>
            </div>
          </div>

          <div class="number-stats">
            <div class="row gy-lg-0 gy-md-5 gy-5">
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">3500+</h4>
                  <p class="stats-text">Trainees</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">50+</h4>
                  <p class="stats-text">Programmes</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">100+</h4>
                  <p class="stats-text">Industry/Skill Partners</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">2</h4>
                  <p class="stats-text"> Campuses</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">15+</h4>
                  <p class="stats-text">Schools & Centers</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6">
                <div class="number-stat-bx">
                  <h4 class="heading">100+</h4>
                  <p class="stats-text">Industry Experts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        @include('frontend.includes.footer')
        <!-- End Footer Area  -->
  </div>

  <div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <!-- JS
	============================================ -->
  <!-- Modernizer JS -->
  <script src="{{asset('frontend_assets/js/vendor/modernizr.min.js')}}"></script>
  <!-- Jquery Js -->
  <script src="{{asset('frontend_assets/js/vendor/jquery.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/sal.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/magnifypopup.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/backtotop.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/owl.carousel.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/odometer.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/isotop.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/imageloaded.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/jquery-ui.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/swiper.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/smooth-scroll.min.js')}}"></script>
  <script src="{{asset('frontend_assets/js/vendor/isInViewport.jquery.min.js')}}"></script>

  <!-- Site Scripts -->
  <script src="{{asset('frontend_assets/js/hamburger.js')}}"></script>
  <script src="{{asset('frontend_assets/js/app.js')}}"></script>
  <script>
    function redirectToURL() {
      setTimeout(function () {
        window.location.href = "https://application.msu.edu.in/campus-programme-registration";
      }, 5000); // 5000 milliseconds = 5 seconds
    }
    redirectToURL();
  </script>
</body>

</html>