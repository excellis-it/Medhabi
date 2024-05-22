@extends('frontend.layouts.master')
@section('meta_title')
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Medhavi Skills University - Best University in Sikkim | Best College in Sikkim" />
    <meta property="og:description"
        content="Medhavi Skill University - The top university in Sikkim. Enroll for a full-time campus program at the leading University in Sikkim, India. We offer the most in-demand programs in B.Sc., BBA, BCA, MBA, PG Diploma, MA, M.Com, B.Com, and many more. Shape your future with the most advanced Skill university in Sikkim." />
    <meta property="og:url" content="https://www.msu.edu.in/" />
    <meta property="og:site_name" content="Medhavi Skills University" />
    <meta property="article:publisher" content="https://www.facebook.com/medhaviskillsuniversity" />
    <meta property="article:modified_time" content="2024-02-07T13:23:00+00:00" />
    <meta property="og:image" content="https://www.msu.edu.in/wp-content/uploads/2023/08/MSU-1.png" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@medhaviskills" />
@endsection
@section('title')
    {{ env('APP_NAME') }} - Best University in Sikkim | Best College in Sikkim
@endsection
@push('styles')
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
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
    "@type": "CollegeOrUniversity",
    "url": "https://msu.edu.in/",
    "name": "Medhavi Skills University",
    "logo": "https://www.msu.edu.in/wp-content/uploads/2022/08/MSU_Revised-Logo.png",
    "description": "Medhavi Skills University, Sikkim is a new private skills university in Sikkim, India. This university is located at the Singtam area of Sikkim and aims to provide an outcome-driven, inclusive ecosystem for skill-integrated higher education. It is the first university in India to offer fully learn-and-earn degree programs.",
    "contactPoint": [
    {"@type": "ContactPoint", "telephone": "+91 9874875876 ", "contactType": "customer service" }
    ],
    "sameAs": [
    "https://en.wikipedia.org/wiki/Medhavi_Skills_University,_Sikkim",
    "https://en.wikiversity.org/wiki/Medhavi_Skills_University",
    "https://www.facebook.com/medhaviskillsuniversity",
    "https://www.instagram.com/medhaviskillsuniversity/",
    "https://twitter.com/medhaviskills",
    "https://www.youtube.com/@medhaviskillsuniversity"
    ]
  }
</script>

    <script type="application/ld+json">

  {
    "@context": {
      "@vocab": "http://schema.org/"
    },
    "@type": "ItemList",
    "itemListElement": [
      {
        "result": {
          "@id": "https://www.msu.edu.in/",
          "name": "Medhavi Skills University",
          "description": "Private university in Sikkim, INDIA",
          "detailedDescription": {
            "articleBody": "Medhavi Skills University, Sikkim is a new private skills university in Sikkim, India. This university is located at the Singtam area of Sikkim and aims to provide an outcome-driven, inclusive ecosystem for skill-integrated higher education. It is the first university in India to offer fully learn-and-earn degree programs. It partners with the National Skill Development Corporation (NSDC), National Council for Vocational Education and Training (NCVET), and Ministry of Skill Development and Entrepreneurship (MSDE) to fulfill the motto of this university. ",
            "url": "https://en.wikipedia.org/wiki/Medhavi_Skills_University,_Sikkim",
            "license": "https://en.wikipedia.org/wiki/Medhavi_Skills_University,_Sikkim"
          },
          "url": "https://www.msu.edu.in/",
          "image": {
            "contentUrl": "https://www.msu.edu.in/wp-content/uploads/2022/08/MSU_Revised-Logo.png",
            "url": "https://en.wikipedia.org/wiki/File:Medhavi_Skills_University_Logo.png"
          },
          "identifier": [
            {
              "@type": "PropertyValue",
              "propertyID": "googleKgMID",
              "value": "/m/06pwq"
            },
            {
              "@type": "PropertyValue",
              "propertyID": "googlePlaceID",
              "value": "ChIJq6q64cOh5jkRC0Lj94a_OG4"
            },
            {
              "@type": "PropertyValue",
              "propertyID": "wikidataQID",
              "value": "Q41506"
            }
          ],
          "@type": [
            "Place",
            "Organization",
            "MovieTheater",
            "Corporation",
            "EducationalOrganization",
            "Thing",
            "CollegeOrUniversity"
          ]
        }
      }
    ]
  }
  </script>
@endpush

@section('content')
<div class="video-banner">
    <video autoplay muted loop playsinline>
      <source src="{{asset('frontend_assets/images/banner/banner-video.mp4')}}" type="video/mp4" />
    </video>

    <div class="color-overlay"></div>
  </div>

  <section class="number-section position-relative">
    <div class="container-fluid">
      <div class="stats-bx-new">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-lg-center">
          <div class="col">
            <div class="static-stats-bx">
              <h3 class="stat-title">12+</h3>
              <p class="stat-para">
                Years of Evolution <br />
                in Skilling & <br />
                Employment
              </p>
            </div>
          </div>
          <div class="col">
            <div class="static-stats-bx br-left">
              <h3 class="stat-title">
                1st <span class="stats-small">in India</span>
              </h3>
              <p class="stat-para">
                to pioneer RPL-linked Higher Education - National Credit.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="static-stats-bx br-left br-md-none">
              <h3 class="stat-title">100%</h3>
              <p class="stat-para">
                Opportunity to <br />
                LEARN & WORK during <br />
                Degree
              </p>
            </div>
          </div>
          <div class="col">
            <div class="static-stats-bx br-left">
              <h3 class="stat-title">
                1st <span class="stats-small">in India</span>
              </h3>
              <p class="stat-para">
                to promote NEP2020 in Industry-led format
              </p>
            </div>
          </div>
          <div class="col">
            <div class="static-stats-bx br-left br-md-none">
              <h3 class="stat-title">150+</h3>
              <p class="stat-para">
                Industry & Skill <br />
                Partners
              </p>
            </div>
          </div>

          <!-- <ul>
            <li>
              <div class="static-stats-bx">
                <h3 class="stat-title">12+</h3>
                <p class="stat-para">Years of Evolution <br>
                  in Skilling & <br>
                  Employment</p>
              </div>
            </li>
            <li>
              <div class="static-stats-bx br-left">
                <h3 class="stat-title">1st <span class="stats-small">in India</span></h3>
                <p class="stat-para">to pioneer RPL-linked
                  Higher Education as per
                  National Credit Framework.</p>
              </div>
            </li>
            <li>
              <div class="static-stats-bx br-left">
                <h3 class="stat-title">100%</h3>
                <p class="stat-para">Opportunity to <br>
                  LEARN & WORK during <br>
                  Degree</p>
              </div>
            </li>
            <li>
              <div class="static-stats-bx br-left">
                <h3 class="stat-title">1st <span class="stats-small">in India</span></h3>
                <p class="stat-para">to promote NEP2020
                  in Industry-led format</p>
              </div>
            </li>
            <li>
              <div class="static-stats-bx br-left">
                <h3 class="stat-title">80%</h3>
                <p class="stat-para">Industry & Skill <br>
                  Partners</p>
              </div>
            </li>

          </ul> -->
        </div>
      </div>
    </div>
  </section>

  <!--=====================================-->
  <!--=       Who We Are Area Start      =-->
  <!--=====================================-->

  <section class="who-we-are">
    <div class="top-part position-relative">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="banner-who" style="padding-left: 0">
              <img class="top_img" src="{{asset('frontend_assets/images/we-are-new-age-&-industry-led.png')}}" alt="" />
            </div>
          </div>
          <div class="col-lg-5">
            <!-- <h2 class="title">
              New-Age Skills University For An Evolving Education System
            </h2>
            <p>
              At Medhavi Skills University, we ardently embrace the dynamic shifts characterizing the 21st century landscape. Our meticulously crafted courses are tailored to empower students with the requisite skills and knowledge essential for thriving in an ever-evolving global workplace. Connect with us today and become a catalyst in shaping the future of education.
            </p> -->
            <h2 class="title">We are New Age & Industry-Led!</h2>
            <p>
              Medhavi Skills University is India's first Skills University
              to offer Industry Immersive degree programmes within the
              holistic development framework of NEP2020. Our outcome focused
              skill-integrated model of higher education backed by leading
              industry and sectoral partners in India and the world, assures
              employability with a global outlook and holistic development.
              Our flexible academic framework, maverick mentors and
              progressive pedagogies intrinsically focus on application and
              professional practice alongside the conceptual understanding.
              Our meticulously crafted courses are tailored to empower
              students with the requisite skills and knowledge essential for
              thriving in an ever-evolving global workplace.
            </p>
            <a class="arrow-btn" href="who-we-are.html">who we are <i class="ri-arrow-right-s-line"></i></a>
          </div>
        </div>
      </div>
      <!-- <div class="shape-1">
        <img src="{{asset('frontend_assets/images/gallery/1_particle.png')}}" alt="" />
      </div> -->
      <!-- <div class="shape">
        <img src="{{asset('frontend_assets/images/banner/bottom-right-partclel.png')}}" alt="" />
      </div> -->
    </div>

    <div class="middle-part position-relative">
      <div class="university__name owl-carousel">
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-health-science-and-technology.html">
                <img src="{{asset('frontend_assets/images/banner/SHST.webp')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-health-science-and-technology.html">SHST</a>
              </h3>
              <p class="rbt-card-text">
                <span>School of Health Science </span>
              </p>
              <p class="rbt-card-text-1"><span> and Technology </span></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-Beauty-and-Wellness.html">
                <img src="{{asset('frontend_assets/images/banner/SBW.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-beauty-wellness.html">SBW</a>
              </h3>
              <p class="rbt-card-text"><span>School of Beauty </span></p>
              <p class="rbt-card-text-1"><span> and Wellness</span></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-indigenous-knowledge-research-application.html">
                <img src="{{asset('frontend_assets/images/banner/SIKRA.webp')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-indigenous-knowledge-research-application.html">SIKRA</a>
              </h3>
              <p class="rbt-card-text">
                <span>School of Indigenous Knowledge </span>
              </p>
              <p class="rbt-card-text-1">
                <span> Research, and Applications</span>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-modern-media-entertainment.html">
                <img src="{{asset('frontend_assets/images/banner/SMME.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-modern-media-entertainment.html">SMME</a>
              </h3>
              <p class="rbt-card-text">
                <span>School of Modern Media </span>
              </p>
              <p class="rbt-card-text-1">
                <span> and Entertainment </span>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-design.html">
                <img src="{{asset('frontend_assets/images/banner/SD.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-design.html">SD</a>
              </h3>
              <p class="rbt-card-text"><span>School of </span></p>
              <p class="rbt-card-text-1"><span> Design</span></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-applied-science-technology.html">
                <img src="{{asset('frontend_assets/images/banner/SAST.webp')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-applied-science-technology.html">SAST</a>
              </h3>
              <p class="rbt-card-text"><span>School of Applied </span></p>
              <p class="rbt-card-text-1">
                <span> Science and Technology</span>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-computer-science-and-engineering.html">
                <img src="{{asset('frontend_assets/images/banner/SCSE.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-computer-science-and-engineering.html">SCSE</a>
              </h3>
              <p class="rbt-card-text"><span>School of Computer </span></p>
              <p class="rbt-card-text-1">
                <span> Science Engineering </span>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-hospitality-and-tourism.html">
                <img src="{{asset('frontend_assets/images/banner/SHT.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-hospitality-and-tourism.html">SHT</a>
              </h3>
              <p class="rbt-card-text">
                <span>School of Hospitality </span>
              </p>
              <p class="rbt-card-text-1"><span> and Tourism </span></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="rbt-card left-card">
            <div class="rbt-card-img">
              <a href="./school/school-of-management-and-commerce.html">
                <img src="{{asset('frontend_assets/images/banner/smc.jpg')}}" alt="Card image" />
              </a>
            </div>
            <div class="rbt-card-body">
              <h3 class="rbt-card-title">
                <a href="./school/school-of-management-and-commerce.html">SMC</a>
              </h3>
              <p class="rbt-card-text">
                <span>School of Management </span>
              </p>
              <p class="rbt-card-text-1"><span> and Commerce </span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-part">
      <!-- <div class="shape-2">
        <img src="{{asset('frontend_assets/images/gallery/2_particle.png')}}" alt="" />
      </div> -->
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <!-- <h2 class="title">
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
            </p> -->
            <h2 class="title padding-left-set">
              Learning with Industry <br> Leading in Skills
            </h2>
            <p class="learning-industry padding-left-set pad-right-none">
              21st Century Industry and Workspace is changing at a faster
              and unexpected way. Disruptive Technologies have dramatically
              transformed the way the work used to work. Specially, the last
              decade has been highly impactful in accelerating this
              transformation due to the evolution of technologies like
              High-Speed Internet, Mobile Technology, IoT, Cloud Technology,
              Big Data, Artificial Intelligence etc. The inquisitiveness of
              human mind and the path breaking innovations have started to
              redefine the Workspace and the Social behavior e.g.; Chatbots
              handling the customer service seamlessly, Robots synchronously
              participating in the large-scale Manufacturing, Ecommerce
              dominating the retail space, Artificial Intelligence
              redefining the role of human functionality etc.
            </p>
            <p class="learning-industry moretext-1 padding-left-set pad-right-none">
              To deliver to the demand of industrial mobility, the future
              workforce in the higher education eco-system needs to be
              groomed differently. Medhavi Skills University is committed to
              cater to the need of the hour to prepare the youth to tackle
              the agility and volatility of the future workspace through
              skills-integrated higher education Degree programmes. To this
              purpose, co-working with leading Industry Partners to design
              and implement demand driven programmes embedding Learning with
              industry. We envision each Medhavian to be the leading face of
              tomorrow’s workspace in different sectors. MSU is the first of
              its kind pioneering university model, where
              corporates/industries are the stakeholders and influencers in
              curriculum design, programme delivery, practical skills
              training, on-job-training, apprenticeship, etc.
            </p>

            <a class="moreless-button-1 padding-left-set arrow-btn" href="javascript:void(0);">Read more</a>

            <!-- <a class=" padding-left" href=""></a> -->
            <!-- <a class="arrow-btn">our city</a> -->
          </div>
          <div class="col-lg-7">
            <div class="banner-who">
              <img style="border-radius: 100px 0px 0px 0px" class="bottom_img"
                src="{{asset('frontend_assets/images/learning-with-industry--leading-in-skills.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="shape-3">
        <img src="{{asset('frontend_assets/images/gallery/3_particle.png')}}" alt="" />
      </div> -->
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
                  <a href="sports.html">
                    <img src="{{asset('frontend_assets/images/banner/life-at-medhavi-2.webp')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="sports.html">Learning at Medhavi</a>
                  </h3>
                  <p class="rbt-card-text">
                    The most vibrant campus to give you the most vibrant
                    experience
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="life-at-msu.html">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="life__item">
                <div class="rbt-card-img">
                  <a href="event-fest.html">
                    <img src="{{asset('frontend_assets/images/banner/life-at-medhavi.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="event-fest.html">Life at Medhavi</a>
                  </h3>
                  <p class="rbt-card-text">
                    The most vibrant campus to give you the most vibrant
                    experience
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="life-at-msu.html">view More <i class="ri-arrow-right-s-line"></i></a> -->
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
                  <a href="news.html">
                    <img src="{{asset('frontend_assets/images/banner/news-1.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="news.html">Events</a>
                  </h3>
                  <p class="rbt-card-text">
                    India Skills Competition (Eastern Region) at MSU Sikkim
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="happenings/upcoming-events.html">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featured__item">
                <div class="rbt-card-img">
                  <a href="news.html">
                    <img src="{{asset('frontend_assets/images/banner/news-2.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="news.html">Events</a>
                  </h3>
                  <p class="rbt-card-text">
                    Celebrating the Strength and Care of the Women Power at MSU
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="happenings/upcoming-events.html">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featured__item">
                <div class="rbt-card-img">
                  <a href="news.html">
                    <img src="{{asset('frontend_assets/images/banner/news-3.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="news.html">Events</a>
                  </h3>
                  <p class="rbt-card-text">
                    Expression 2024 Finale: Tribal Rain Live Performance at MSU Sikkim
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="happenings/upcoming-events.html">view More <i class="ri-arrow-right-s-line"></i></a> -->
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
                  <a href="media-coverage.html">
                    <img src="{{asset('frontend_assets/images/London-Wellness.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="media-coverage.html">Featured Stories</a>
                  </h3>
                  <p class="rbt-card-text">
                    Financial Express | MSU partners with London Wellness
                    Academy
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="media-coverage.html ">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featuredstories__item">
                <div class="rbt-card-img">
                  <a href="media-coverage.html">
                    <img src="{{asset('frontend_assets/images/IAF8.jpg')}}" alt="Card image" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="media-coverage.html">Featured Stories</a>
                  </h3>
                  <p class="rbt-card-text">
                    Hindustan Times | The Indian Air Force & MSU Sign a
                    Historic MoU
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="#">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featuredstories__item">
                <div class="rbt-card-img">
                  <a href="media-coverage.html">
                    <img src="{{asset('frontend_assets/images/inifd.jpg')}}" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="media-coverage.html">Featured Stories</a>
                  </h3>
                  <p class="rbt-card-text">
                    Ani News | INIFD Celebrates Grand Launch of INIFD with
                    MSU & NSDC
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="#">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featuredstories__item">
                <div class="rbt-card-img">
                  <a href="media-coverage.html">
                    <img src="{{asset('frontend_assets/images/nwwa.jpg')}}" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="media-coverage.html">Featured Stories</a>
                  </h3>
                  <p class="rbt-card-text">
                    Elets Technomedia | Medhavi Skills University signs MoU
                    with NWWA
                  </p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="#">view More <i class="ri-arrow-right-s-line"></i></a> -->
                  </div>
                </div>
              </div>
              <div class="featuredstories__item">
                <div class="rbt-card-img">
                  <a href="media-coverage.html">
                    <img src="{{asset('frontend_assets/images/Shine-scaled.jpg')}}" />
                  </a>
                </div>
                <div class="rbt-card-body">
                  <h3 class="rbt-card-title">
                    <a href="media-coverage.html">Featured Stories</a>
                  </h3>
                  <p class="rbt-card-text">APN News | MSU Pioneers SHINE</p>
                  <div class="rbt-card-bottom">
                    <!-- <a class="transparent-button" href="#">view More <i class="ri-arrow-right-s-line"></i></a> -->
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
  <!--=       Awards and Recognitions Start      =-->
  <!--=====================================-->

  <section class="awards__section position-relative">
    <div class="container-fluid custom-width__2">
      <div class="row">
        <div class="awarddiv-icon">
          <h2 class="title text-center">Awards and Recognitions</h2>
          <p class="text-center">
            Empowering Excellence: Where Talents Shine and Achievements
            Spark Success
          </p>
        </div>
      </div>

      <div class="accredation__slider owl-carousel">
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/A.webp')}}" alt="" />

            <div class="accredation__content_bx">
              <h3 class="img__title">
                Certification of Appreciation from ASSOCHAM
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/B.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                Best Skill University of the year - 2023 awarded by Brand
                Honchos
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/C.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                Best Skill Development Programme Initiative of the year -
                2023 awarded by Brand Honchos
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/D.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                Best Training Partner - STT, 2020-21 awarded by RCPSDC
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/E.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                Best Skills University in North East India, 2023 awarded by
                CEGR
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/F.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                MSU has been formally recognized as an awarding body by
                NCVET
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/G.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                The Economic Times for Best Education Brands 2023
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/awards/H.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                ArdorComm - The New Normal - Education Leadership Summit &
                Awards 2023
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--=====================================-->
  <!--=       Job Ready Area Start      =-->
  <!--=====================================-->




  <section class="logo-section position-relative">
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-lg-2 col-md-2 col-6 text-lg-center">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/gs.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/gs-2.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6 text-lg-center">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/ugc.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/ugc-2.jpg')}}" alt="" />
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-6 text-lg-center">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/ncvet.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/ncvet-2.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6 text-lg-center">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/Training.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/Training-2.jpg')}}" alt="" />
          </div>
        </div>
      </div>

      <div class="row justify-content-md-center logo-nomarg">
        <div class="col-lg-2 col-md-2 col-6">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/nsdc.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/nsdc-2.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/iso.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/iso-2.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/naps.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/naps-2.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/nats.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/nats-2.jpg')}}" alt="" />
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-6">
          <div class="image-wrapper">
            <img class="no-color-logo" src="{{asset('frontend_assets/images/award-logo/aiu.jpg')}}" alt="" />
            <img class="color-logo" src="{{asset('frontend_assets/images/award-logo/aiu-2.jpg')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="academic bg-pattern">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h2 class="title text-center">Job-Ready Academic Curriculum</h2>
          <p class="text-center container-fluid custom-width__2">
            At MSU, we ardently embrace the dynamic shifts characterizing
            the Education in 21st century. Our Strategically structured
            academic framework blended with several unique features are
            designed to create a productive learning trajectory for an
            enriching experience while assuring the requisite skills and
            knowledge to be attained for an ever-evolving career and life.
          </p>
        </div>
        <!-- <h2 class="title text-center">Job-Ready Academic Curriculum</h2>
        <p class="text-center">
          Future-Forward Learning: Elevate Your Future with Our Academic
          Edge
        </p> -->
      </div>
    </div>

    <div class="academic-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/ADP_7385.JPG')}}" alt="" />
          </div>
          <div>
            <h3>Systematic Learning</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-2.webp')}}" alt="" />
          </div>
          <div>
            <h3>Professional Orientation</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--three">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-3.webp')}}" alt="" />
          </div>
          <div>
            <h3>Industry Anchored Programmes</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--four">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-4.webp')}}" alt="" />
          </div>
          <div>
            <h3>Real world Skills & intelligence</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--five">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-5.webp')}}" alt="" />
          </div>
          <div>
            <h3>Skill Certifications</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--six">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-6.webp')}}" alt="" />
          </div>
          <div>
            <h3>Feedback Driven Growth</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--seven">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-7.webp')}}" alt="" />
          </div>
          <div>
            <h3>Employment Readiness</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--eight">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-8.webp')}}" alt="" />
          </div>
          <div>
            <h3>Skill-driven Entrepreneurship</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--nine">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-9.webp')}}" alt="" />
          </div>
          <div>
            <h3>Assured employability</h3>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--ten">
          <div class="img-gradient">
            <img src="{{asset('frontend_assets/images/banner/job-ready-10.webp')}}" alt="" />
          </div>
          <div>
            <h3>Practice driven pedagogy</h3>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!--=====================================-->
  <!--=       We Are New Age & Trusted Area Start      =-->
  <!--=====================================-->


  <section class="international-countdown bg-background">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="main__countdown_bx">
            <h3 class="sub__title">We Are International</h3>
            <nav class="international__tab">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                  <div class="country-box">
                    <div class="country__flag__icon">
                      <img src="{{asset('frontend_assets/images/icons/germany.svg')}}" alt="" />
                    </div>
                    <div class="country__flag__name">
                      <h5>Germany</h5>
                    </div>
                  </div>
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                  type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                  <div class="country-box">
                    <div class="country__flag__icon">
                      <img src="{{asset('frontend_assets/images/icons/australia.svg')}}" alt="" />
                    </div>
                    <div class="country__flag__name">
                      <h5>Australia</h5>
                    </div>
                  </div>
                </button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                  <div class="country-box">
                    <div class="country__flag__icon">
                      <img src="{{asset('frontend_assets/images/icons/japan.svg')}}" alt="" />
                    </div>
                    <div class="country__flag__name">
                      <h5>Japan</h5>
                    </div>
                  </div>
                </button>
                <button class="nav-link" id="nav-uk-tab" data-bs-toggle="tab" data-bs-target="#nav-uk" type="button"
                  role="tab" aria-controls="nav-uk" aria-selected="false">
                  <div class="country-box">
                    <div class="country__flag__icon">
                      <img src="{{asset('frontend_assets/images/icons/england.svg')}}" alt="" />
                    </div>
                    <div class="country__flag__name">
                      <h5>United Kingdom</h5>
                    </div>
                  </div>
                </button>
              </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="img-static">
                  <div class="content">
                    <a href="#">
                      <!-- <div class="content-overlay"></div> -->
                      <img class="content-image" src="{{asset('frontend_assets/images/banner/germany-country.jpg')}}" alt="" />
                      <div class="content-details">
                        <h3 class="content-title">
                          Meet SHINE by Medhavi Skills University
                        </h3>
                        <p class="content-text">
                          Empowered with wide range of facilities to nurture
                          the experiences and perspectives of students, and
                          staff– MSU is all about a happening place to
                          discover the self beyond academics. Become a part
                          of a community nestled in the lap of nature- where
                          you lead, learn, and live through an exciting
                          campus life involving Sports, Clubs, Societies,
                          Events and Celebrations.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="img-static">
                  <div class="content">
                    <a href="#">
                      <!-- <div class="content-overlay"></div> -->
                      <img class="content-image" src="{{asset('frontend_assets/images/banner/australia-country.jpg')}}" alt="" />
                      <div class="content-details">
                        <h3 class="content-title">
                          Meet SHINE by Medhavi Skills University
                        </h3>
                        <p class="content-text">
                          Empowered with wide range of facilities to nurture
                          the experiences and perspectives of students, and
                          staff– MSU is all about a happening place to
                          discover the self beyond academics. Become a part
                          of a community nestled in the lap of nature- where
                          you lead, learn, and live through an exciting
                          campus life involving Sports, Clubs, Societies,
                          Events and Celebrations.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="img-static">
                  <div class="content">
                    <a href="#">
                      <!-- <div class="content-overlay"></div> -->
                      <img class="content-image" src="{{asset('frontend_assets/images/banner/japan-country.jpg')}}" alt="" />
                      <div class="content-details">
                        <h3 class="content-title">
                          Meet SHINE by Medhavi Skills University
                        </h3>
                        <p class="content-text">
                          Empowered with wide range of facilities to nurture
                          the experiences and perspectives of students, and
                          staff– MSU is all about a happening place to
                          discover the self beyond academics. Become a part
                          of a community nestled in the lap of nature- where
                          you lead, learn, and live through an exciting
                          campus life involving Sports, Clubs, Societies,
                          Events and Celebrations.
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
                      <img class="content-image" src="{{asset('frontend_assets/images/banner/kuk-country.jpg')}}" alt="" />
                      <div class="content-details">
                        <h3 class="content-title">
                          Meet SHINE by Medhavi Skills University
                        </h3>
                        <p class="content-text">
                          Empowered with wide range of facilities to nurture
                          the experiences and perspectives of students, and
                          staff– MSU is all about a happening place to
                          discover the self beyond academics. Become a part
                          of a community nestled in the lap of nature- where
                          you lead, learn, and live through an exciting
                          campus life involving Sports, Clubs, Societies,
                          Events and Celebrations.
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


  <section class="slider-container">
    <div class="container-fluid">
      <div class="row">
        <div class="slider-images d-none d-lg-flex">
          <div class="slider-img blue-bg">
            <img class="img-5" src="{{asset('frontend_assets/images/banner/02.png')}}" alt="1" />
            <a href="{{asset('frontend_assets/images/banner/keshav-adhikari.mp4')}}"
              class="video-play-btn video-popup-activation popup-youtube">
              <i class="icon-18"></i>
            </a>
            <div class="details">
              <h3>Keshav Adhikari</h3>
              <span class="dept">BSc. Optometry</span>
            </div>
          </div>
          <div class="slider-img yellow-bg">
            <img class="img-2" src="{{asset('frontend_assets/images/banner/05.png')}}" alt="1" />
            <a href="{{asset('frontend_assets/images/banner/pranitha-pradhan.mp4')}}"
              class="video-play-btn video-popup-activation popup-youtube">
              <i class="icon-18"></i>
            </a>
            <div class="details">
              <h3>Pranitha Pradhan</h3>
              <span class="dept">DMLT</span>
            </div>
          </div>
          <div class="slider-img dark-blue-bg">
            <img class="img-3" src="{{asset('frontend_assets/images/banner/04.png')}}" alt="1" />
            <a href="{{asset('frontend_assets/images/banner/tripti.mp4')}}" class="video-play-btn video-popup-activation popup-youtube">
              <i class="icon-18"></i>
            </a>
            <div class="details">
              <h3>Tripti</h3>
              <span class="dept">BCA </span>
            </div>
          </div>
          <div class="slider-img active light-blue-bg">
            <img class="img-4" src="{{asset('frontend_assets/images/banner/03.png')}}" alt="1" />
            <a href="{{asset('frontend_assets/images/banner/suraj-tamang.mp4')}}"
              class="video-play-btn video-popup-activation popup-youtube">
              <i class="icon-18"></i>
            </a>
            <div class="details">
              <h3>Suraj Tamang</h3>
              <span class="dept">BSc. Radiology</span>
            </div>
          </div>
          <div class="slider-img extra-light-bg">
            <img class="img-1" src="{{asset('frontend_assets/images/banner/01.png')}}" alt="1" />

            <a href="{{asset('frontend_assets/images/banner/ajay-limbu.mp4')}}" class="video-play-btn video-popup-activation popup-youtube">
              <i class="icon-18"></i>
            </a>
            <div class="details">
              <h3>Ajay Limboo</h3>
              <span class="dept">BSc. Optometry</span>
            </div>
          </div>
        </div>

        <div class="mobile_student_talk_slider owl-carousel d-block d-lg-none">
          <div class="item h-720">
            <div class="student__talk__box bg__blue">
              <div class="content_box_student">
                <h3>Keshav</h3>
                <span class="dept">BSc. Optometry</span>
              </div>
              <a href="{{asset('frontend_assets/images/banner/keshav-adhikari.mp4')}}"
                class="video-play-btn video-popup-activation popup-youtube">
                <i class="icon-18"></i>
              </a>
              <div class="student__img__absolute">
                <img class="last-img" src="{{asset('frontend_assets/images/banner/02.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="student__talk__box bg__yellow">
              <div class="content_box_student">
                <h3>Pranitha</h3>
                <span class="dept">DMLT</span>
              </div>
              <a href="{{asset('frontend_assets/images/banner/pranitha-pradhan.mp4')}}"
                class="video-play-btn video-popup-activation popup-youtube">
                <i class="icon-18"></i>
              </a>
              <div class="student__img__absolute">
                <img class="yellow-img" src="{{asset('frontend_assets/images/banner/05.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="student__talk__box bg__darkblue">
              <div class="content_box_student">
                <h3>Tripti</h3>
                <span class="dept">BCA </span>
              </div>
              <a href="{{asset('frontend_assets/images/banner/tripti.mp4')}}" class="video-play-btn video-popup-activation popup-youtube">
                <i class="icon-18"></i>
              </a>
              <div class="student__img__absolute">
                <img class="bluee-img" src="{{asset('frontend_assets/images/banner/04.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="student__talk__box bg__sky__blue">
              <div class="content_box_student">
                <h3>Suraj Tamang</h3>
                <span class="dept">BSc. Radiology</span>
              </div>
              <a href="{{asset('frontend_assets/images/banner/suraj-tamang.mp4')}}"
                class="video-play-btn video-popup-activation popup-youtube">
                <i class="icon-18"></i>
              </a>
              <div class="student__img__absolute">
                <img class="blueee-img" src="{{asset('frontend_assets/images/banner/03.png')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="student__talk__box bg__gray__blue">
              <div class="content_box_student">
                <h3>Ajay Limboo</h3>
                <span class="dept">BSc. Optometry</span>
              </div>
              <a href="{{asset('frontend_assets/images/banner/ajay-limbu.mp4')}}"
                class="video-play-btn video-popup-activation popup-youtube">
                <i class="icon-18"></i>
              </a>
              <div class="student__img__absolute">
                <img src="{{asset('frontend_assets/images/banner/01.png')}}" alt="" />
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
  <section class="campus_life">
    <div class="container-fluid p-0">
      <section class="hero-slider hero-style-campus">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-inner slide-bg-image" style="
                    background-image: url({{asset('frontend_assets/images/banner/campus-1.jpg')}});
                    background-repeat: no-repeat;
                    background-position: top;
                  ">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      <div data-swiper-parallax="300" class="slide-title">
                        <!-- <h3>Campus Life: Beyond The Classroom</h3> -->
                      </div>
                      <div data-swiper-parallax="400" class="slide-text">
                        <h2 class="title text-white">
                          Campus Life
                        </h2>
                        <p>
                          Experience campus life at MSU beyond academics.
                          Engage in diverse clubs, activities, and a
                          community that fosters personal growth and
                          lifelong friendships.
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
              <div class="slide-inner slide-bg-image" style="
                    background-image: url({{asset('frontend_assets/images/banner/campus-2.jpg')}});
                    background-repeat: no-repeat;
                    background-position: top;
                  ">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      <div data-swiper-parallax="300" class="slide-title">
                        <!-- <h3>Campus Life: Beyond The Classroom</h3> -->
                      </div>
                      <div data-swiper-parallax="400" class="slide-text">
                        <h2 class="title text-white">
                          Campus Life
                        </h2>
                        <p>
                          Experience campus life at MSU beyond academics.
                          Engage in diverse clubs, activities, and a
                          community that fosters personal growth and
                          lifelong friendships.
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
              <div class="slide-inner slide-bg-image" style="
                    background-image: url({{asset('frontend_assets/images/banner/campus-3.webp')}});
                    background-repeat: no-repeat;
                    background-position: top;
                  ">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      <div data-swiper-parallax="300" class="slide-title">
                        <!-- <h3>Campus Life: Beyond The Classroom</h3> -->
                      </div>
                      <div data-swiper-parallax="400" class="slide-text">
                        <h2 class="title text-white">
                          Campus Life
                        </h2>
                        <p>
                          Experience campus life at MSU beyond academics.
                          Engage in diverse clubs, activities, and a
                          community that fosters personal growth and
                          lifelong friendships.
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
              <div class="slide-inner slide-bg-image" style="
                    background-image: url({{asset('frontend_assets/images/banner/campus-4.webp')}});
                    background-repeat: no-repeat;
                    background-position: top;
                  ">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-6">
                      <div data-swiper-parallax="300" class="slide-title">
                        <!-- <h3>Campus Life: Beyond The Classroom</h3> -->
                      </div>
                      <div data-swiper-parallax="400" class="slide-text">
                        <h2 class="title text-white">
                          Campus Life
                        </h2>
                        <p>
                          Experience campus life at MSU beyond academics.
                          Engage in diverse clubs, activities, and a
                          community that fosters personal growth and
                          lifelong friendships.
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
    </div>
  </section>

  <!--=====================================-->
  <!--=       Industry Collaborations Area Start      =-->
  <!--=====================================-->
  <section class="industry_collab">
    <div class="container-fluid custom-width__2">
      <div class="row">
        <h2 class="title text-center">Recent Collaborations</h2>
      </div>

      <div class="industry___slider owl-carousel">
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with AEQUS Aerospace.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with AEQUS Aerospace</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with B4M Entertainment.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with B4M Entertainment</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with Center of Excellence in Maritime & Ship Building (CEMS).jpg')}}"
              alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                MoU with Center of Excellence in Maritime & Ship Building
                (CEMS)
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with Delhi School of Communication.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                MoU with Delhi School of Communication
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with ICPA (Institute of Certified Public Accountants).jpg')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                MoU with ICPA (Institute of Certified Public Accountants)
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with Indian Air Force.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with Indian Air Force</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with INIFD.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with INIFD</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with Institute of Gems & Jewellery (IGJ).webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">
                MoU with Institute of Gems & Jewellery (IGJ)
              </h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with JBM Group.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with JBM Group</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with NSDC.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with NSDC</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with SHINE.jpg')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with SHINE</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="award__img">
            <img src="{{asset('frontend_assets/images/mou/MoU with TAFE Queensland Australia.webp')}}" alt="" />
            <div class="accredation__content_bx">
              <h3 class="img__title">MoU with TAFE Queensland Australia</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-30">
        <h2 class="title text-center">Industry & Skill Partners</h2>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link" id="nav-digital-tab" data-bs-toggle="tab" data-bs-target="#nav-digital"
                type="button" role="tab" aria-controls="nav-digital" aria-selected="true">
                Technology
              </button>
              <button class="nav-link active" id="nav-industry-tab" data-bs-toggle="tab"
                data-bs-target="#nav-industry" type="button" role="tab" aria-controls="nav-industry"
                aria-selected="false">
                Industry
              </button>
              <button class="nav-link reverse-radius" id="nav-knowledge-tab" data-bs-toggle="tab"
                data-bs-target="#nav-knowledge" type="button" role="tab" aria-controls="nav-knowledge"
                aria-selected="false">
                Skilling
              </button>
              <button class="nav-link reverse-radius" id="nav-government-tab" data-bs-toggle="tab"
                data-bs-target="#nav-government" type="button" role="tab" aria-controls="nav-government"
                aria-selected="false">
                Government
              </button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
              <div class="home__logo owl-carousel">
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/technology-partners/tech-1.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/technology-partners/tech-2.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/technology-partners/tech-3.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/technology-partners/tech-4.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/technology-partners/tech-5.png')}}" alt="Brand Logo" />
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="nav-industry" role="tabpanel"
              aria-labelledby="nav-industry-tab">
              <div class="profile__logo owl-carousel">
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/ZICA.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/lcbs-Black.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/logo-igj-1196116_2.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/raddison-blue.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/OM.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/DSC-Logo.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/Westin.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>

                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/B-4-M-LOGO.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/Crowne_Plaza_logo_logotype.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/Holiday_Inn_Express_Blue_Logo.svg_.png')}}"
                      alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/450-x-200-logo.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/skilling-9.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/skilling-10.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/logo-13.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/HOLIDAY_INN_EXPRESS.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d29-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/holiday-inn.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d34.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d16.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d33-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d32-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d31-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d30-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>

                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d28-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d26-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>

                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d25-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d24-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d23-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d22-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d21-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d20-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d19-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d18-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d17-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d15-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d14-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d13-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d12-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d11-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d10-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d9-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d8-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d7-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d6-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d5-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d4-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d3-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/d1-min.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/TRENDS-1.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/pantaloons-logo-1.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/Reliance-Retail-Logo-1.png')}}" alt="Brand Logo" />
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-knowledge" role="tabpanel" aria-labelledby="nav-knowledge-tab">
              <div class="contact__logo owl-carousel">
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-2.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/industry-partners/ZICA.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-3.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-4.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-5.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-6.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-7.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-9.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Skilling-partners/skilling-10.png')}}" alt="Brand Logo" />
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-government" role="tabpanel" aria-labelledby="nav-government-tab">
              <div class="contact__logo owl-carousel">
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-1.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-2.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-3.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-4.jpg')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-5.png')}}" alt="Brand Logo" />
                  </div>
                </div>
                <div class="item">
                  <div class="brand-grid">
                    <img src="{{asset('frontend_assets/images/Government-partners/govt-6.jpg')}}" alt="Brand Logo" />
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
  <!--=       Follow Medhavi Area Start      =-->
  <!--=====================================-->
  <section class="follow_medhavi">
    <div class="container-fluid custom-width__2">
      <div class="row">
        <h2 class="title text-center">Follow @medhaviskills</h2>
      </div>
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="instagram-grid">
            <div class="icon_content d-flex align-items-center">
              <div class="img-circle">
                <img src="{{asset('frontend_assets/images/icons/university_icon.png')}}" alt="" />
              </div>
              <div class="univ_name">
                <h5>Medhavi Skills University</h5>
                <p>@medhaviskills</p>
              </div>
            </div>
            <a target="_blank"
              href="https://www.instagram.com/p/Cs790NFOvtA/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==">
              <img src="{{asset('frontend_assets/images/instagram/insta-post.jpg')}}" alt="instagram" />
              <span class="user-info">
                <span class="icon"><i class="ri-instagram-line"></i></span>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="instagram-grid">
            <div class="icon_content d-flex align-items-center">
              <div class="img-circle">
                <img src="{{asset('frontend_assets/images/icons/university_icon.png')}}" alt="" />
              </div>
              <div class="univ_name">
                <h5>Medhavi Skills University</h5>
                <p>@medhaviskills</p>
              </div>
            </div>
            <a target="_blank" href="https://www.facebook.com/photo?fbid=388997956839176&set=a.188942733511367">
              <img src="{{asset('frontend_assets/images/instagram/fb-post.jpg')}}" alt="instagram" />
              <span class="user-info">
                <span class="icon"><i class="ri-facebook-fill"></i></span>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="instagram-grid">
            <div class="icon_content d-flex align-items-center">
              <div class="img-circle">
                <img src="{{asset('frontend_assets/images/icons/university_icon.png')}}" alt="" />
              </div>
              <div class="univ_name">
                <h5>Medhavi Skills University</h5>
                <p>@medhaviskills</p>
              </div>
            </div>
            <a target="_blank" href="https://x.com/medhaviskills/status/1745031460099354860?s=20">
              <img src="{{asset('frontend_assets/images/instagram/twitter-post.jpg')}}" alt="instagram" />
              <span class="user-info">
                <span class="icon"><i class="ri-twitter-x-line"></i></span>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="instagram-grid">
            <div class="icon_content d-flex align-items-center">
              <div class="img-circle">
                <img src="{{asset('frontend_assets/images/icons/university_icon.png')}}" alt="" />
              </div>
              <div class="univ_name">
                <h5>Medhavi Skills University</h5>
                <p>@medhaviskills</p>
              </div>
            </div>
            <a target="_blank"
              href="https://www.linkedin.com/posts/medhavi-skills-university_our-bhhm-stars-in-5-star-hyatt-regency-activity-7151806110293757952-MUEP?utm_source=share&utm_medium=member_desktop">
              <img src="{{asset('frontend_assets/images/instagram/linkedin-post.jpg')}}" alt="instagram" />
              <span class="user-info">
                <span class="icon"><i class="ri-linkedin-fill"></i></span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="cta_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Apply for Admissions</h2>
          <p>
            Apply now for admission to MSU - 2024 batch. Join us and shape
            your future today!
          </p>
          <a target="_blank" class="cta_btn" href="https://www.msu.edu.in/application">apply
            now!</a>
        </div>
      </div>
    </div>
  </section>

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
@endpush
