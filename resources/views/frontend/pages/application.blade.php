
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="icon" type="image/svg+xml" href="{{asset('landing_assets/images/application/Medhavi Skills University ICO 1.png')}}" />
    <style>
        html {
            scroll-behavior: smooth;
            scroll-margin-top: 20px;
        }

        body {
            padding: 0;
            margin: 0;
            min-height: 100vh;
            overflow-x: hidden;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        * {
            position: relative;
            box-sizing: border-box;
        }

        :root {
            --px: 30px;
            --logo: #0B7EAE;
        }

        .px-base {
            padding-left: var(--px);
            padding-right: var(--px);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            height: 80px;
            z-index: 100;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
            background-color: white;
        }

        .logo img {
            height: 70px;
        }

        .navs {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        .navs svg {
            fill: var(--logo);
            height: 25px;
        }

        .navs p a {
            display: flex;
            align-items: center;
            gap: 5px;
            color: black;
        }

        .navs a {
            text-decoration: none;
            color: var(--logo);
        }

        .navs a .btn {
            transition: 0.3s;
            padding: 5px 20px;
            border: 1px solid var(--logo);
            border-radius: 5px;
        }

        .navs a .btn:hover {
            background-color: var(--logo);
            color: white;
        }

        .menu {
            display: none;
        }

        .navs2 {
            position: absolute;
            width: 100%;
            align-items: flex-start;
            background: white;
            flex-flow: column;
            gap: 0;
            padding: 30px;
            left: 0;
            top: -95px;
            z-index: -1;
            transition: 0.3s;
        }

        .navs2.active {
            top: 80px;
        }

        .navs2 p {
            margin: 0 0 15px;
        }

        .header {
            background: url('{{asset('landing_assets/images/application/banner.jpg')}}');
            height: calc(100vh - 60px);
            background-size: cover;
            background-position: bottom center;
        }

        .links {
            padding: 30px var(--px);
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 50;
            backdrop-filter: blur(0px) saturate(147%);
            -webkit-backdrop-filter: blur(0px) saturate(147%);
            background-color: rgba(255, 255, 255, 0.4);
        }

        .links a {
            border-radius: 5px;
            background-color: var(--logo);
            color: white;
            padding: 20px 50px;
            max-width: 400px;
            text-decoration: none;
            transition: 0.3s;
            text-align: center;
        }

        .links a:hover {
            filter: brightness(1.5);
        }

        .steps {
            text-align: center;
            background: rgb(0, 55, 75);
            color: white;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .steps h2 {
            font-size: 30px;
            text-transform: uppercase;
        }

        .registerStaps {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .registerStaps>div {
            display: flex;
            align-items: center;
            gap: 5px;
            flex-flow: column;
            width: 140px;
        }

        .registerStaps img {
            width: 100px;
        }

        .steps .title {
            font-weight: bold;
        }

        .instructions {
            background-color: #ECF8FF;
            color: #0B7EAE;
            border-radius: 5px;
            padding: 15px;
            margin: 30px auto;
            width: 700px;
            max-width: 100%;
        }

        ul li {
            margin-bottom: 15px;
        }

        ol {
            margin-left: 30px;
        }

        ol li {
            margin-bottom: 7px;
        }

        footer {
            padding: 30px var(--px);
            background: rgb(0, 55, 75);
            color: white
        }

        footer .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        footer a {
            text-decoration: none;
            color: inherit;
        }

        .socials {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
            width: 300px;
        }

        footer .contact {
            width: 300px;
        }

        footer .title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
        }

        footer p:not(.title) {
            margin: 0;
        }

        footer .row2 {
            margin-top: 30px;
        }

        @media screen and (max-width: 950px) {
            .menu {
                display: block;
                cursor: pointer;
                width: 20px;
            }

            .navs1 {
                display: none;
            }

            .header {
                height: 450px;
            }
        }

        @media screen and (max-width: 700px) {
            .links {
                row-gap: 10px;
            }

            .links a {
                padding: 10px 25px;
            }

            :root {
                --px: 15px;
                --logo: #0B7EAE;
            }
        }
    </style>

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


</head>

<body>
    <div class="navbar px-base">
        <div class="logo">
            <a href="https://www.msu.edu.in/"> <img src="{{asset('landing_assets/images/application/logo.png')}}" alt="">
            </a>
        </div>
        <div class="navs navs1">
            <p>
                <a href="mailto:admissions@msu.edu.in" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    admissions@msu.edu.in
                </a>
            </p>
            <p>
                <a href="tel:+918000211062" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                    +91 9874875876
                </a>
            </p>
            <div class="contactBtn">
                <a href="contact-us.html">
                    <div class="btn">
                        Contact Us
                    </div>
                </a>
            </div>
        </div>
        <div class="navs2 navs">
            <p>
                <a href="mailto:admissions@msu.edu.in" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    admissions@msu.edu.in
                </a>
            </p>
            <p>
                <a href="tel:+918000211062" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                    +91 9874875876
                </a>
            </p>
            <div class="contactBtn">
                <a href="contact-us.html">
                    <div class="btn">
                        Contact Us
                    </div>
                </a>
            </div>
        </div>
        <svg class="menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
        </svg>
    </div>
    <div class="header">
        <div class="links">
            <!-- <a target="_blank" href="https://application.msu.edu.in/international-programmes-registration">
                Apply Now For International Programme
            </a> -->
            <a target="_blank" href="https://application.msu.edu.in/campus-programme-registration">
                Apply Now For Campus Programme
            </a>
            <a target="_blank" href="https://apply.msu.edu.in/medhavi-wise">
                Apply Now For WISE Programme
            </a>
        </div>
    </div>
    <div class="steps px-base">
        <h2>Steps to follow</h2>
        <div class="registerStaps">
            <div>
                <p class="title">Step 1</p>
                <img src="{{asset('landing_assets/images/application/register1.png')}}" alt="">
                <p>Register Yourself</p>
            </div>
            <div>
                <p class="title">Step 2</p>
                <img src="{{asset('landing_assets/images/application/register2.png')}}" alt="">
                <p>Verify Mobile</p>
            </div>
            <div>
                <p class="title">Step 3</p>
                <img src="{{asset('landing_assets/images/application/register3.png')}}" alt="">
                <p>Fill Application Form Online</p>
            </div>
            <div>
                <p class="title">Step 4</p>
                <img src="{{asset('landing_assets/images/application/register4.png')}}" alt="">
                <p>Pay Application Fee</p>
            </div>
            <div>
                <p class="title">Step 5</p>
                <img src="{{asset('landing_assets/images/application/register5.png')}}" alt="">
                <p>Submit Application</p>
            </div>
        </div>
    </div>
    <div class="instructions">
        <h2>Instructions</h2>
        <ul>
            <li>
                The online application is for admission to programmes offered in Medhavi Skills University (Sikkim).
            </li>
            <li>
                Application Form Fee is Non-Refundable.
            </li>
            <li>
                We strongly recommend you use a valid Email ID to register. However, In case you do not have an Email ID
                available, please type @gmail.com instead. e.g. your.mail@gmail.com
            </li>
            <li>
                Medhavi Skills University (Sikkim) Query Management System:Applicants are strongly advised to use the
                Medhavi Skills University (Sikkim) Query Management System(Medhavi Skills University (Sikkim)-QMS),
                rather than an email, to get a quick response.
            </li>
        </ul>
        <ol>
            <li>
                Click on [Any Queries? Ask US] in your dashboard
            </li>
            <li>
                Select the query category and submit your query
            </li>
        </ol>
    </div>
    <footer>
        <div class="row">
            <div class="logo">
                <img src="{{asset('landing_assets/images/application/logo.png')}}" alt="">
            </div>
            <div class="contact">
                <p class="title">
                    Contact Us
                </p>
                <p>
                    <a href="tel:+918000211062" target="_blank">
                        +91 9874875876
                    </a>
                </p>
                <p>
                    <a href="mailto:contact@msu.edu.in" target="_blank">
                        contact@msu.edu.in
                    </a>
                </p>
            </div>
        </div>
        <div class="row row2">
            <p>© 2024 Medhavi Skill University. All Rights Reserved.
                <br>*Medhavi Foundation is the sponsoring body of Medhavi Skills University
            </p>
            <div class="socials">
                <a href="https://www.facebook.com/medhaviskillsuniversity" target="_blank">
                    <img src="{{asset('landing_assets/images/application/facebook.png')}}" alt="">
                </a>
                <a href="https://twitter.com/medhaviskills" target="_blank">
                    <img src="{{asset('landing_assets/images/application/twitter.png')}}" alt="">
                </a>
                <a href="https://www.instagram.com/medhaviskillsuniversity/" target="_blank">
                    <img src="{{asset('landing_assets/images/application/instagram.png')}}" alt="">
                </a>
                <a href="https://www.linkedin.com/company/medhavi-skills-university/" target="_blank">
                    <img src="{{asset('landing_assets/images/application/linkedin.png')}}" alt="">
                </a>
            </div>
        </div>
    </footer>
</body>
<script>
    document.querySelector('.menu').addEventListener('click', () => {
        document.querySelector('.navs2').classList.toggle('active')
    })
</script>

</html>
