@php
    use App\Helpers\Helper;
@endphp
<footer class="edu-footer footer-lighten bg-image footer-style-1">
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="edu-footer-widget position-relative">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo-light" src="{{ asset('frontend_assets/images/logo/medhavi-logo.png') }}"
                                    alt="Medhavi Logo" />
                                <div class="logo-bg"></div>
                            </a>
                        </div>
                        <p class="description">
                            At Medhavi Skills University, we embrace the fast-paced
                            changes of the 21st century.
                        </p>
                    </div>
                </div>
                @foreach (Helper::getFooterMenu() as $menu)
                    <div class="col-lg-2 col-sm-6 col-6 col-md-4">
                        <div class="edu-footer-widget explore-widget">
                            <h4 class="widget-title">{{ $menu->name }}</h4>
                            <div class="inner">
                                <ul class="footer-link link-hover">
                                    @if ($menu->name == 'Schools')
                                        @if (Helper::getAllSchoolPage()->isNotEmpty())
                                            @foreach (Helper::getAllSchoolPage() as $school)
                                                <li>
                                                    <a
                                                        href="{{ route('school', $school->slug) }}">{{ $school->name }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endif

                                    @if ($menu->name == 'Admissions')
                                        @if (Helper::getPrograms()->isNotEmpty())
                                            @foreach (Helper::getPrograms() as $admission)
                                                <li>
                                                    <a
                                                        href="{{ route($admission->slug. '.admission') }}">{{ $admission->name }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endif
                                    @if ($menu->children->isNotEmpty())
                                        @foreach ($menu->children as $item)
                                            <li>
                                                @if ($item->name == 'Careers')
                                                    <a href="{{ route('careers') }}">{{ $item->name }}</a>
                                                @else
                                                    @if ($item->is_custom_link == 1)
                                                        <a target="_blank"
                                                            href="{{ $item->slug == null ? 'javascript:void(0);' : $item->slug }}">{{ $item->name }}
                                                        </a>
                                                    @else
                                                        <a target="_blank"
                                                            href="{{ $item->slug == null ? 'javascript:void(0);' : route($item->slug . '.page', [$item->slug => $item->slug]) }}">{{ $item->name }}
                                                        </a>
                                                    @endif
                                                @endif

                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-2 col-sm-6 col-6 col-md-4">
                    <div class="edu-footer-widget explore-widget">
                        <h4 class="widget-title">About</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="../why-medhavi-skills-university.html">Why MSU</a></li>
                                <li><a href="../who-we-are.html">Who We Are </a></li>
                                <li><a href="../leadership.html">Leadership</a></li>
                                <li><a href="../recognition.html">Recognition</a></li>
                                <li><a href="../awards.html">Awards</a></li>
                                <li><a href="../infrastructure.html">Infrastructure</a></li>
                                <li><a href="../guidelines.html">Guidelines</a></li>
                                <li><a href="../reports.html">Reports</a></li>
                                <li><a href="../medhavi-foundation.html">Medhavi Foundation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-6 col-md-4">
                    <div class="edu-footer-widget about-link-widget">
                        <h4 class="widget-title">Academics</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="../skills-in-higher-education.html">Skills in Higher Education</a></li>
                                <li><a href="../we-believe.html">We Believe</a></li>
                                <li><a href="../learning-ecosystem.html">Learning Ecosystem</a></li>
                                <li><a href="../design-your-own-degree.html">Design Your Own Degree</a></li>
                                <li><a href="../evaluation.html">Evaluation</a></li>
                                <li><a href="../experts-and-mentors.html">Experts & Mentors</a></li>
                                <li><a href="../academic-bank-of-credits.html">Academic Bank of Credits</a></li>
                                <li><a href="../assets/images/Academic-Calender-2023-24.pdf">Academic Calendar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="edu-footer-widget study-link-widget">
                        <h4 class="widget-title">Admissions</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="../undergraduate.html">Undergraduate</a></li>
                                <li><a href="../postgraduate.html">Postgraduate</a></li>
                                <li><a href="../prospectus.html">Prospectus 2024</a></li>
                                <li><a href="../eligibility-selection-criterion.html">Eligibility Selection
                                        Criterion</a></li>
                                <li><a href="../admission-process.html">Admission Process</a></li>
                                <li><a href="../scholarship-financial-aid.html">Scholarship & Financial Aid</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-12 order-lg-1 order-2">
                    <div class="edu-footer-widget university-link-widget">
                        <h4 class="widget-title">Schools</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="../school/school-of-health-science-and-technology.html">Health Science &
                                        Technology</a></li>
                                <li><a href="../school/school-of-computer-science-and-engineering.html">Computer
                                        Science
                                        Engineering</a></li>
                                <li><a href="../school/school-of-management-and-commerce.html"> Management &
                                        Commerce</a></li>
                                <li><a href="../school/school-of-modern-media-entertainment.html"> Modern Media &
                                        Entertainment</a></li>
                                <li><a href="../school/school-of-hospitality-and-tourism.html">Hospitality &
                                        Tourism</a></li>
                                <li><a href="../school/school-of-design.html"> Design</a></li>
                                <li><a href="../school/school-of-applied-science-technology.html"> Applied Science &
                                        Technology</a></li>
                                <li><a href="../school/school-of-beauty-wellness.html"> Beauty & Wellness
                                    </a></li>
                                <li><a href="../school/school-of-indigenous-knowledge-research-application.html">
                                        Knowledge, Research & Applications</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 order-lg-2 order-1">
                    <div class="edu-footer-widget policies-link-widget">
                        <h4 class="widget-title">Important Links</h4>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li>
                                    <a target="_blank" href="../contact-us.html">Contact Us
                                    </a>
                                </li>
                                <li><a href="../club-societies.html">Clubs & Societies
                                    </a></li>
                                <li>
                                    <a href="../event-fest.html">Events & Fests</a>
                                </li>
                                <li>
                                    <a target="_blank" href="../news.html">News</a>
                                </li>
                                <li>
                                    <a target="_blank" href="../terms-and-conditions.html">Terms & Conditions</a>
                                </li>
                                <li><a href="../in-the-media.html">In The Media</a></li>
                                <li><a href="../happenings/upcoming-events.html">Upcoming Events
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="middle_footer">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="contact__Bx d-flex align-items-center">
                        <div class="img-icon">
                            <img src="{{ asset('frontend_assets/images/icons/call.svg') }}" alt="" />
                        </div>
                        <div class="contact__details">
                            <p>Phone:</p>
                            <a href="tel:+919874875876">+91 9874875876</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact__Bx d-flex align-items-center tab-border-none">
                        <div class="img-icon">
                            <img src="{{ asset('frontend_assets/images/icons/call.svg') }}" alt="" />
                        </div>
                        <div class="contact__details">
                            <p>Email:</p>
                            <a href="mailto:contact@msu.edu.in">contact@msu.edu.in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__Bx d-flex align-items-center">
                        <div class="img-icon">

                            <img src="{{ asset('frontend_assets/images/icons/call.svg') }}" alt="" />
                        </div>
                        <div class="contact__details">
                            <p>Location</p>
                            <a href="mailto:contact@msu.edu.in">East Sikkim, West Sikkim</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="contact__Bx">
                        <div class="contact__details">
                            <p>Follow us on</p>
                            <ul class="social-share icon-transparent">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/medhaviskillsuniversity"
                                        class="color-fb"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/medhaviskills" class="color-twitter"><i
                                            class="ri-twitter-x-line"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/medhaviskillsuniversity/"
                                        class="color-ig"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a target="_blank"
                                        href="https://www.linkedin.com/company/medhavi-skills-university/"
                                        class="color-link"><i class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner text-start">
                        <p>
                            ©Copyright 2024. All Rights Reserved by Medhavi Skill
                            University.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner text-end">
                        <p>
                            Designed By <a target="_blank" href="https://pixelstreet.in">Pixel Street</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
