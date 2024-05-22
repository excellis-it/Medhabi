<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Science Technology - MEDHAVI SKILLS UNIVERSITY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admission_assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admission_assets/css/responsive.css')}}">

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
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=5688131151219687&ev=PageView&noscript=1" /></noscript>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11072902457"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-11072902457');
    </script>
</head>

<body class="site-wrapper">
    <!-- <button onclick="goToTop()" id="goToTopBtn"><i class="ri-arrow-up-fill"></i></button> -->

    <div class="site-content-wrapper">
        <div class="header" id="stickyHeader">
            <header>
                <div class="header-wrapper">
                    <div class="header-content">
                        <div class="logo">
                        <img src="{{asset('admission_assets/imgs/logo.png')}}" alt="">
                        </div>
                        <!-- <nav class="nav">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#course">Courses</a></li>
                                <li><a href="#scholarship">Scholarship</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                            </ul>
                        </nav> -->
                        <div class="header-button">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply
                                Now</button>
                        </div>

                    </div>
                </div>
            </header>
        </div>
        <style>
            @media (max-width:768px) {
                .headline h1 {
                    font-size: 40px !important;
                }
            }
        </style>
        <div class="main-content">
            <main>
                <section class="hero-section" id="home">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12 hero">
                                <div class="headline">
                                    <div class="head">
                                        <span>#</span>
                                        <h2> SkillUp <br> Success</h2>
                                    </div>
                                    <h1 style="font-size: 46px;"><span>in</span> Applied Science Technology</h1>
                                    <ul>
                                        <li>B.Sc. in Biotechnology</li>
                                        <li>B.Sc. in Food Technology</li>
                                    </ul>

                                    <div class="admissionopen">
                                        <p>Admissions Open For 2024</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col--xxl-6 col-lg-6 col-md-6 col-12 d-flex align-items-center justify-content-end">
                                <div class="form-wrapper">
                                    <h2
                                        style="color: #fff; font-weight: 600; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                                        Enquiry Form</h2>
                                    <form action="#" method="POST" id="leadForm">
                                        <div class="form-row">
                                            <input class="input" type="text" name="name" placeholder="Name *" required>
                                        </div>
                                        <div class="form-row">
                                            <input class="input" pattern="[6789][0-9]{9}" type="tel" name="phone"
                                                placeholder="Phone *" required>
                                        </div>
                                        <div class="form-row">
                                            <input class="input" type="email" name="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                title="Please enter a valid email address." required
                                                placeholder="Email *">
                                        </div>
                                        <div class="form-row">
                                            <select class="input" name="program" id="program">
                                                <option value="-1" disabled selected>Select Program</option>
                                                <option value="BSc in Biotechnology">B.Sc. in Biotechnology</option>
                                                <option value="BSc in Food Technology">B.Sc. in Food Technology</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
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
                                        <div class="form-row">
                                            <select class="input" name="city" onchange="cityChanged(this)">
                                                <option value="-1" selected disabled>Your City</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <input class="input othercity" type="text" name="Other_City"
                                                placeholder="Enter Your City">
                                        </div>
                                        <div class="form-row">
                                            <input type="submit" value="Submit" class="submitBtn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="banner-numbers">
                    <div class="banner-numbers-wrapper">
                        <div class="banner-no-box-wrapper">
                            <div class="banner-no-box">
                                <div class="banner-box-img">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h5>Location:</h5>
                                <p>Sikkim</p>
                            </div>
                            <div class="banner-no-box">
                                <div class="banner-box-img">
                                    <i class="ri-git-repository-line"></i>
                                </div>
                                <h5>Course Type:</h5>
                                <p>Bachelors</p>
                            </div>
                            <div class="banner-no-box">
                                <div class="banner-box-img">
                                    <i class="ri-survey-line"></i>
                                </div>
                                <h5>Intake In:</h5>
                                <p>2024</p>
                            </div>
                            <div class="banner-no-box">
                                <div class="banner-box-img">
                                    <i class="ri-hourglass-fill"></i>
                                </div>
                                <h5>Duration:</h5>
                                <p>2-Years Full Time</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="fix-numbers-wrapper">
                                <!-- <div class="fix-no-box">
                                    <h5><span class="count-element">3500</span>+</h5>
                                    <p>Trainees</p>
                                </div> -->
                                <div class="fix-no-box">
                                    <h5><span class="count-element">50</span>+</h5>
                                    <p>Programmes</p>
                                </div>
                                <div class="fix-no-box">
                                    <h5><span class="count-element">3500</span>+</h5>
                                    <p>Industry Partners</p>
                                </div>
                                <div class="fix-no-box">
                                    <h5><span class="count-element">2</span></h5>
                                    <p>Campuses</p>
                                </div>
                                <div class="fix-no-box">
                                    <h5><span class="count-element">15</span>+</h5>
                                    <p>Schools & Centers</p>
                                </div>
                                <div class="fix-no-box">
                                    <h5><span class="count-element">100</span>+</h5>
                                    <p>Industry Experts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Approvals / Awards -->
                <section class="section2">
                    <div class="container">
                        <div class="row">
                            <h2 class="section-heading">Interested in a technology career but unsure where to start?
                            </h2>
                            <div class="col-xxl-5 col-lg-5 col-md-5 col-12 box-col">
                                <div class="fix-box-wrapper">
                                    <div class="fix-box">
                                        <h5><span>1st</span> in India</h5>
                                        <p>To feature Learn and Earn during Degree</p>
                                    </div>
                                    <div class="fix-box">
                                        <h5><span>1st</span> in India</h5>
                                        <p>To promote NEP2020 with Industry Integration</p>
                                    </div>
                                    <div class="fix-box">
                                        <h5><span>1st</span> in NE India</h5>
                                        <p>To promote Overseas Mobility</p>
                                    </div>
                                    <div class="fix-box">
                                        <h5><span>2nd</span> NE in India</h5>
                                        <p>To be the Awarding Body of UGC & NCVET, MSDE, Gol</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-lg-7 col-md-7 col-12 ">
                                <div class="awards-wrapper">
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/1.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/9.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/5.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/2.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/3.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/4.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>

                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/6.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/7.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>
                                    <div class="award-box">
                                        <img src="{{asset('admission_assets/imgs/awards/8.png')}}" alt="">
                                        <img src="{{asset('admission_assets/imgs/decoration.png')}}" alt="" class="decoration">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About Course -->
                <section class="section3" id="course">
                    <div class="container">
                        <div class="row">
                            <h2 class="section-heading">About the Programme - Applied Science Technology</h2>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12">
                                <div class="content-wrapper">
                                    <p>Medhavi Skills University in Sikkim offers a specialised Bachelor of Science
                                        (BSc) program in Biotechnology and Food Technology, designed to provide students
                                        with comprehensive knowledge and practical skills in these fields.
                                    </p>
                                    <p>The Biotechnology program covers a wide range of topics, including genetic
                                        engineering, bioinformatics, and bioprocess engineering, preparing students for
                                        careers in pharmaceuticals, agriculture, and healthcare. The Food Technology
                                        program focuses on food processing, preservation, and quality control, preparing
                                        students for roles in the food industry.</p>
                                    <p> Both programs combine rigorous academic coursework with hands-on projects,
                                        ensuring that graduates are well-equipped to excel in their respective
                                        industries and contribute to scientific advancements.</p>
                                </div>
                            </div>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12 specialization">
                                <h3>Specialization:</h3>
                                <ul>
                                    <li>
                                        <p><b>B. Sc. in Biotechnology: </b>A bachelor's degree program that focuses on the application of biological organisms, systems, and processes in technology and engineering.</p>
                                    </li>
                                    <li>
                                        <p><b>B. Sc. in Food Technology:</b> A bachelor's degree program that focuses on the science and technology involved in the processing, preservation, packaging, distribution, and use of safe and nutritious food.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="cta-button">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Placement Partners -->
                <section class="placement-partners">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-heading">Placement Partners</h2>
                            </div>
                            <div class="col-12">
                                <div class="c-logos-container">
                                    <div class="c-logos-slider">
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/clogos/d7-min.jpg')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/clogos/d6-min.jpg')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/1.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/2.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/3.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/4.png')}}" alt="" style="height: 100%;">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/5.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/6.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/7.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/8.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/9.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/10.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/11.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters//12.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters//13.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/14.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/15.png')}}" alt="">
                                        </div>
                                        
                                    </div>
                                    <div class="c-logos-slider">
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/clogos/d7-min.jpg')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/clogos/d6-min.jpg')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/1.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/2.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/3.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/4.png')}}" alt="" style="height: 100%;">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/5.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/6.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/7.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/8.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/9.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/10.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/11.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters//12.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters//13.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/14.png')}}" alt="">
                                        </div>
                                        <div class="c-logo">
                                            <img src="{{asset('admission_assets/imgs/recruiters/15.png')}}" alt="">
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Admission process -->
                <section class="admission-process">
                    <div class="container">
                        <div class="row">
                            <h2 class="section-heading">Admission Process</h2>
                            <div class="col-12 hiw-sec mb-5">
                                <div class="hiw-box-wrapper">
                                    <div class="hiw-box">
                                        <div class="hiw-box-no">
                                            <p>01</p>
                                        </div>
                                        <div class="hiw-box-txt">
                                            <h4>Application</h4>
                                        </div>
                                    </div>
                                    <div class="hiw-box hiw-box-3">
                                        <div class="hiw-box-no">
                                            <p>02</p>
                                        </div>
                                        <div class="hiw-box-txt">
                                            <h4>Registration Fee Payment</h4>
                                        </div>
                                    </div>
                                    <div class="hiw-box hiw-box-2">
                                        <div class="hiw-box-no">
                                            <p>03</p>
                                        </div>
                                        <div class="hiw-box-txt">
                                            <h4>Medhavi Aptitude & Scholarship Test</h4>
                                        </div>
                                    </div>
                                    <div class="hiw-box hiw-box-4">
                                        <div class="hiw-box-no">
                                            <p>04</p>
                                        </div>
                                        <div class="hiw-box-txt">
                                            <h4> Get Your Admission Offer Letter</h4>
                                        </div>
                                    </div>
                                    <div class="hiw-box hiw-box-3">
                                        <div class="hiw-box-no">
                                            <p>05</p>
                                        </div>
                                        <div class="hiw-box-txt">
                                            <h4>Enrollment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-button">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- About -->
                <section class="about" id="about">
                    <div class="container">
                        <div class="row">
                            <h2 class="section-heading">About Medhavi Skills University</h2>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12 about-img-wrapper m1">
                                <div class="about-img">
                                    <div class="img-abs"></div>
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lTWke3-IGz4"
                                        title="Medhavi Skills University | A Peek Into Campus Infrastructure"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12 about-img-wrapper">
                                <p class="mb-4">Medhavi Skills University (MSU) in Sikkim, established by the Medhavi
                                    Skills University, Sikkim Act, 2021, and recognized by UGC, is pioneering in
                                    integrating skilling with higher education. As a leader in the Eastern and
                                    North-Eastern regions, MSU champions industry-aligned, competency-driven curricula
                                    underpinned by Outcome Based Education (OBE).</p>
                                <p class="mb-2"> Our innovative approach supports post-pandemic educational reforms,
                                    aligns with the National Education Policy 2020, and fosters employability through
                                    practical and technological integration.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Why Us -->
                <section class="why-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-heading">Why Choose Us?</h2>
                                <div class="content-wrapper">
                                    <div class="whyus-card-wrapper">
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w1.png')}}" alt="">
                                            </div>
                                            <h5>Experiential Learning:</h5>
                                            <p>Upto 70% Practical based Learning</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w2.png')}}" alt="">
                                            </div>
                                            <h5>Industry Experienced Faculties:</h5>
                                            <p>80% of Faculties are from best-in-class industries</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w3.png')}}" alt="">
                                            </div>
                                            <h5>Industry on Campus:</h5>
                                            <p>Run & Learn Business, on job learning inside the campus</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w4.png')}}" alt="">
                                            </div>
                                            <h5>Stress Free Evaluation:</h5>
                                            <p>No memorization tests. We assess your understanding and application
                                                skills.</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w5.png')}}" alt="">
                                            </div>
                                            <h5>Skill Certifications:</h5>
                                            <p>Get Certifications from industry/professional/ sectoral awarding bodies
                                            </p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w6.png')}}" alt="">
                                            </div>
                                            <h5>Design your own Degree:</h5>
                                            <p>Choose your Foundation, Major, Minor & Skill Electives</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w7.png')}}" alt="">
                                            </div>
                                            <h5>Digital Learning Space:</h5>
                                            <p>Digital Classroom, assessment, fee payment, results, everything!</p>
                                        </div>
                                        <div class="whyus-card">
                                            <div class="whyus-img">
                                                <img src="{{asset('admission_assets/imgs/icons/w8.png')}}" alt="">
                                            </div>
                                            <h5>Industry as Campus:</h5>
                                            <p>Industry immersion on-site at partner companies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Scholarship -->
                <section class="scholarship" id="scholarship">
                    <div class="container">
                        <div class="row">
                            <div class="heading">
                                <h2 class="section-heading">Scholarships and Financial Aid</h2>
                                <h5>*Applicable for all Indian States and UTs **National and State Level Scholarship for
                                    North East</h5>
                            </div>
                            <div class="col-12">
                                <table>
                                    <thead>
                                        <th>Scholarships Schemes (Central/State Govt.)</th>
                                        <th>Scholarships %</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Umbrella scheme for Education of ST Children, PMS for student AP
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>Arunachal Pradesh State Stipend Scheme</td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Post Matric scholarship schemes for Minorities CS
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Financial support to the students of NER for Higher Professional Course
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Post Matric scholarship schemes for ST Students-Sikkim
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                PM Yashasvi post matric scholarship for OBC, EBC AND DNT students-Sikkim
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Centrally sponsored post matric scholarship for SC students- Sikkim
                                            </td>
                                            <td>upto 70% of Tuition Fees</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Ishan Uday Scholarship
                                            </td>
                                            <td>As per merit </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12">
                                <h5>Scholarship Based on Medhavi Aptitude & Scholarship Test </h5>
                                <table>
                                    <thead>
                                        <th>Score in Scholarship Test</th>
                                        <th>Scholarships %</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Above 90%</td>
                                            <td>25% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>80% – 90%</td>
                                            <td>20% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>70% – 80%</td>
                                            <td>15% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>60% – 70%</td>
                                            <td>10% Scholarship</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col--xxl-6 col-lg-6 col-md-6 col-12">
                                <h5>Chancellor’s Scholarship </h5>
                                <table>
                                    <thead>
                                        <th>Category</th>
                                        <th>Scholarships %</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>National Level Rank Holders (Co/Extra-curricular)</td>
                                            <td>upto 100% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>Ward of War Widows/War disabled</td>
                                            <td>upto 100% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>Ward of in-Service & Ex-servicemen of the Armed Forces</td>
                                            <td>upto 50% Scholarship</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-12">
                                <h5>Scholarship for Sikkim based Residents</h5>
                                <table>
                                    <thead>
                                        <th>Category</th>
                                        <th>Scholarships %</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                School Topper Scholarship
                                                (to be recommended by Principals)
                                            </td>
                                            <td>upto 50% Scholarship</td>
                                        </tr>
                                        <tr>
                                            <td>For Certificate of Identity (CoI) Holders</td>
                                            <td>upto 25% Scholarship</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- scholarship -->


                <!-- Gallery -->
                <section class="gallery-section" id="gallery">
                    <div class="container-fluid">
                        <div class="row">
                            <h2 class="section-heading">Life @ Medhavi</h2>
                            <div class="col-12">
                                <div class='gallery'>
                                    <div class='item nohover' data-pos='0'><img src="{{asset('admission_assets/imgs/icons/3-min.JPG')}}">
                                    </div>
                                    <div class='item' data-pos='1'><img src="{{asset('admission_assets/imgs/gallery/4.jpg')}}"></div>
                                    <div class='item' data-pos='2'><img src="{{asset('admission_assets/imgs/gallery/8.jpg')}}"></div>
                                    <div class='item' data-pos='3'><img src="{{asset('admission_assets/imgs/gallery/9.jpg')}}"></div>
                                    <div class='item' data-pos='4'><img src="{{asset('admission_assets/imgs/gallery/lifeatmsu1.jpg')}}"></a>
                                    </div>
                                    <div class='item' data-pos='5'><img src="{{asset('admission_assets/imgs/gallery/lifeatmsu2.jpg')}}"></a>
                                    </div>
                                    <div class='item' data-pos='6'><img src="{{asset('admission_assets/imgs/gallery/lifeatmsu3.jpg')}}"></a>
                                    </div>
                                    <div class='item' data-pos='7'><img src="{{asset('admission_assets/imgs/gallery/lifeatmsu4.jpg')}}"></a>
                                    </div>
                                    <div class='item' data-pos='8'><img src="{{asset('admission_assets/imgs/gallery/5.jpg')}}"></a>
                                    </div>
                                    <div class='item' data-pos='9'><img src="{{asset('admission_assets/imgs/icons/1-min.JPG')}}"></a>
                                    </div>
                                    <div class='item' data-pos='10'><img src="{{asset('admission_assets/imgs/icons/2-min.JPG')}}"></a>
                                    </div>
                                    <div class='item' data-pos='11'><img src="{{asset('admission_assets/imgs/icons/6-min.JPG')}}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <style>
                    .gallery-section .row>* {
                        padding: 0;
                    }
                </style>

                <!-- Testimonials -->
                <section class="testimonials-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="gtco-testimonials">
                                    <h2 class="section-heading">Testimonials</h2>
                                    <div class="owl-carousel owl-carousel1 owl-theme">
                                        <div>
                                            <div class="card text-center">
                                                <div class="testi-img-wrapper">
                                                    <img src="{{asset('admission_assets/imgs/t2.png')}}" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal2"
                                                        data-video="https://www.youtube.com/embed/wiSSg5gZc6U"><i
                                                            class="ri-play-circle-fill"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="card text-center">
                                                <div class="testi-img-wrapper">
                                                    <img src="{{asset('admission_assets/imgs/t1.png')}}" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal2"
                                                        data-video="https://www.youtube.com/embed/Nz30UUHUa48"><i
                                                            class="ri-play-circle-fill"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="card text-center">
                                                <div class="testi-img-wrapper">
                                                    <img src="{{asset('admission_assets/imgs/t3.png')}}" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal2"
                                                        data-video="https://www.youtube.com/embed/gmANB93LpHo"><i
                                                            class="ri-play-circle-fill"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="card text-center">
                                                <div class="testi-img-wrapper">
                                                    <img src="{{asset('admission_assets/imgs/t4.png')}}" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal2"
                                                        data-video="https://www.youtube.com/embed/wLA1kvv4BSg"><i
                                                            class="ri-play-circle-fill"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="card text-center">
                                                <div class="testi-img-wrapper">
                                                    <img src="{{asset('admission_assets/imgs/t5.png')}}" alt="">
                                                </div>
                                                <div class="video-play-btn">
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal2"
                                                        data-video="https://www.youtube.com/embed/GhDGNXYxJ2o"><i
                                                            class="ri-play-circle-fill"></i></button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="cta_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>Apply for Admissions</h2>
                                <p>
                                    Apply now for admission to MSU - 2024 batch. Join us and shape
                                    your future today!
                                </p>
                                <button class="cta-btn" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
            <!-- Footer -->
            <footer class="footer">
                <div class="footer-wrapper">
                    <div class="copyright">
                        <p>© 2024 Medhavi Skills University.</p>
                        <p>All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Popup Form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index: 9999999999999999999999;">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #012D47;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #fff;">Enquiry Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <style>
                    .modal-body form {
                        width: 100%;
                    }

                    .btn-close {
                        color: #fff !important;
                        background-color: white !important;
                    }
                </style>
                <div class="modal-body">
                    <div class="form-wrappers">
                        <form action="#" method="POST" id="leadForm2">
                            <div class="form-row">
                                <input class="input" type="text" name="name" placeholder="Name *" required>
                            </div>
                            <div class="form-row">
                                <input class="input" pattern="[6789][0-9]{9}" type="tel" name="phone"
                                    placeholder="Phone *" required>
                            </div>
                            <div class="form-row">
                                <input class="input" type="email" name="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                    title="Please enter a valid email address." required placeholder="Email *">
                            </div>
                            <div class="form-row">
                                <select class="input" name="program" id="program">
                                    <option value="-1" disabled selected>Select Program</option>
                                    <option value="BSc in Biotechnology">B.Sc. in Biotechnology</option>
                                    <option value="BSc in Food Technology">B.Sc. in Food Technology</option>
                                </select>
                            </div>
                            <div class="form-row">
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
                            <div class="form-row">
                                <select class="input" name="city" onchange="cityChanged(this)">
                                    <option value="-1" selected disabled>Your City</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <input class="input othercity" type="text" name="Other_City"
                                    placeholder="Enter Your City">
                            </div>
                            <div class="form-row">
                                <input type="submit" value="Submit" class="submitBtn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup Video -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="z-index: 9999999999999999999999;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Testimonials</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" style="height: 400px;">
                    <iframe id="video-player" width="100%" src="" height="100%" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>







    <script src="{{asset('admission_assets/js/form.js')}}"></script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("goToTopBtn").style.display = "block";
            } else {
                document.getElementById("goToTopBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function goToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
    <script src="{{asset('admission_assets/js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admission_assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('admission_assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('admission_assets/js/jquery.validate.min.js')}}"></script>

    <script>
        $('.count-element').each(function () {
            $(this).appear(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }, { accX: 0, accY: 0 });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        (function () {
            "use strict";

            var carousels = function () {
                $(".owl-carousel1").owlCarousel({
                    loop: true,
                    center: true,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        680: {
                            items: 2,
                            nav: false,
                            loop: false
                        },
                        1000: {
                            items: 3,
                            nav: true
                        }
                    }
                });
            };

            (function ($) {
                carousels();
            })(jQuery);
        })();
    </script>
    <script>
        var scroll = new SmoothScroll('body', {
            speed: 1000, // Animation duration in milliseconds
            easing: 'easeInOutCubic' // Easing function
        });
    </script>


</body>

</html>