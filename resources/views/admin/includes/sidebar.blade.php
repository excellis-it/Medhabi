<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"><span class="logo-name"><img
                        src="{{ asset('frontend_assets/images/logo/medhavi-logo.png') }}" /></span> </a>
            <a href="{{ route('admin.dashboard') }}"><span class="logo-fm"><img
                        src="{{ asset('frontend_assets/images/logo/medhavi-logo.png') }}" /></span> </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            {{-- <li class="dropdown {{ Request::is('admin/dashboard*') ? 'active' : ' ' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ph-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li> --}}
            <li class="dropdown">
                <a href="javascript:void(0);"
                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/profile*') || Request::is('admin/password*') || Request::is('admin/detail*') ? 'active' : ' ' }}">
                    <i class="ph-identification-card"></i>
                    <span>Manage Account</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/profile*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('admin.profile') }}">My Profile</a></li>
                    <li class="{{ Request::is('admin/password*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('admin.password') }}">Change Password</a></li>
                </ul>
            </li>

            {{--  --}}
            <li class="dropdown">
                <a href="javascript:void(0);"
                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/menus*') ? 'active' : ' ' }}">
                    <i class="ph ph-list"></i>
                    <span> Menu</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/menus') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('menus.index') }}"> Menu List</a></li>
                    <li class="{{ Request::is('admin/menus/create') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('menus.create') }}">Menu Create</a></li>
                </ul>
            </li>

            {{-- static pages --}}
            <li class="dropdown">
                <a href="javascript:void(0);"
                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/static-pages*') ? 'active' : ' ' }}">
                    <i class="ph ph-copy-simple"></i>
                    <span> Static Pages</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/static-pages') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('static-pages.index') }}"> Page List</a></li>
                    <li class="{{ Request::is('admin/static-pages/create') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('static-pages.create') }}">Page Create</a></li>
                </ul>
            </li>

            {{-- dynamic page --}}
            <li class="dropdown {{ Request::is('admin/pages*') ? 'active' : ' ' }}">
                <a href="javascript:void(0);"
                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages*') ? 'active' : ' ' }}">
                    <i class="ph ph-newspaper"></i>
                    <span>Dynamic Pages</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/career*') ? 'active' : ' ' }}"> <a
                            href="javascript:void(0);"
                            class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages/career*') ? 'active' : ' ' }}">
                            <span>Career</span>
                        </a>
                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                            <li class="{{ Request::is('admin/pages/career*') ? 'active' : ' ' }}">
                                <a href="{{ route('career.index') }}"
                                    class="">
                                    <span>CMS</span>
                                </a>
                            </li>
                            <li class="dropdown {{ Request::is('admin/pages/career*') ? 'active' : ' ' }}">
                                <a href="javascript:void(0);"
                                    class="menu-toggle nav-link has-dropdown ">
                                    <span>Elements</span>
                                </a>
                                <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                    <li class="dropdown {{ Request::is('admin/pages/career/our-core-values*') ? 'active' : ' ' }}">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown ">
                                            {{-- <i class="ph ph-books"></i> --}}
                                            <span> Our Core Values</span>
                                        </a>
                                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                            <li
                                                class="dropdown {{ Request::is('admin/pages/career/our-core-values') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('our-core-values.index') }}"> Our
                                                    Core Values List</a>
                                            </li>
                                            <li
                                                class="dropdown {{ Request::is('admin/pages/career/our-core-values/create') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('our-core-values.create') }}">Our
                                                    Core Values Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown {{ Request::is('admin/pages/career/jobs*') ? 'active' : ' ' }}">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown ">
                                            {{-- <i class="ph ph-briefcase"></i> --}}
                                            <span> Jobs</span>
                                        </a>
                                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                            <li class="dropdown {{ Request::is('admin/pages/career/jobs') ? 'active' : ' ' }}"><a
                                                    class="nav-link" href="{{ route('jobs.index') }}"> Job List</a>
                                            </li>
                                            <li
                                                class="dropdown {{ Request::is('admin/pages/career/jobs/create') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('jobs.create') }}">Job Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown {{ Request::is('admin/pages/career/faq*') ? 'active' : ' ' }}">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown ">
                                            {{-- <i class="ph ph-question"></i> --}}
                                            <span> FAQS</span>
                                        </a>
                                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                            <li class="dropdown {{ Request::is('admin/pages/career/faq') ? 'active' : ' ' }}"><a
                                                    class="nav-link" href="{{ route('faq.index') }}"> FAQS List</a>
                                            </li>
                                            <li
                                                class="dropdown {{ Request::is('admin/pages/career/faq/create') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('faq.create') }}">FAQS Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown {{ Request::is('admin/pages/career/testimonials*') ? 'active' : ' ' }}">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown ">
                                            {{-- <i class="ph ph-hand-fist"></i> --}}
                                            <span> Testimonials</span>
                                        </a>
                                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2 ">
                                            <li
                                                class="dropdown {{ Request::is('admin/pages/career/testimonials') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('testimonials.index') }}">
                                                    Testimonials List</a>
                                            </li>
                                            <li
                                                class="drpodown {{ Request::is('admin/pages/career/testimonials/create') ? 'active' : ' ' }}">
                                                <a class="nav-link"
                                                    href="{{ route('testimonials.create') }}">Testimonials Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="dropdown {{ Request::is('admin/pages/blogs*') ? 'active' : ' ' }}">
                        <a href="javascript:void(0);"
                            class="menu-toggle nav-link has-dropdown ">
                            {{-- <i class="ph ph-instagram-logo"></i> --}}
                            <span> Blogs</span>
                        </a>
                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                            <li class="dropdown {{ Request::is('admin/pages/blogs') ? 'active' : ' ' }}"><a
                                    class="nav-link" href="{{ route('blogs.index') }}"> Blog List</a></li>
                            <li class="dropdown {{ Request::is('admin/pages/blogs/create') ? 'active' : ' ' }}"><a
                                    class="nav-link" href="{{ route('blogs.create') }}">Blog Create</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/schools*') ? 'active' : ' ' }}"> <a
                            href="javascript:void(0);"
                            class="menu-toggle nav-link has-dropdown ">
                            <span>Schools</span>
                        </a>
                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                            <li class="{{ Request::is('admin/pages/schools*') ? 'active' : ' ' }}"><a
                                    class="nav-link " href="{{ route('schools.index') }}">CMS </a></li>

                            <li class="dropdown {{ Request::is('admin/pages/schools*') ? 'active' : ' ' }}">
                                <a href="javascript:void(0);"
                                    class="menu-toggle nav-link has-dropdown ">
                                    <span>Elements</span>
                                </a>
                                <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                    <li class="{{ Request::is('admin/pages/schools/courses/*') ? 'active' : ' ' }}"><a
                                        class="nav-link" href="{{ route('courses.index') }}">Courses </a></li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages/galaries*') ? 'active' : ' ' }}">
                                            <span> Galary</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="{{ Request::is('admin/pages/galaries*') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('galaries.index') }}"> Our
                                                    Galary List</a>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                         
                                    <li class="dropdown">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown {{ Request::is('admin/our-core-values*') ? 'active' : ' ' }}">
                                            <span> Our Partnership</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="{{ Request::is('admin/our-partnerships') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('our-partnerships.index') }}"> Our
                                                    Partnership List</a>
                                            </li>
                                            <li
                                                class="{{ Request::is('admin/our-partnerships/create') ? 'active' : ' ' }}">
                                                <a class="nav-link" href="{{ route('our-partnerships.create') }}">Our
                                                    Partnership Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                        class="dropdown {{ Request::is('admin/achievement-and-key-milestones*') ? 'active' : ' ' }}">
                                        <a href="{{ route('achievement-and-key-milestones.index') }}">

                                            <span>Achievement and Key Milestone</span>
                                        </a>
                                    </li>
                                    <li class="dropdown {{ Request::is('admin/pages/career/testimonials*') ? 'active' : ' ' }}">
                                        <a href="javascript:void(0);"
                                            class="menu-toggle nav-link has-dropdown ">

                                            <span> Testimonials</span>
                                        </a>
                                        <ul class="dropdown-menu keep-open">
                                            <li class="{{ Request::is('admin/pages/career/testimonials') ? 'active' : ' ' }}"><a
                                                    class="nav-link" href="{{ route('testimonials.index') }}">
                                                    Testimonials List</a></li>
                                            <li
                                                class="{{ Request::is('admin/pages/career/testimonials/create') ? 'active' : ' ' }}">
                                                <a class="nav-link"
                                                    href="{{ route('testimonials.create') }}">Testimonials Create</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                {{-- <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/courses/*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('courses.index') }}">Courses </a></li>
                </ul> --}}
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/tvc/*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('tvc.index') }}">TVC </a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/media/*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('media.index') }}">Media Coverage</a></li>
                </ul>

                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/events/*') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('events.index') }}">Upcoming Events </a></li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/pages/schools/*') ? 'active' : ' ' }}"> <a
                            href="javascript:void(0);"
                            class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages/*') ? 'active' : ' ' }}">
                            <span>Admission Program</span>
                        </a>
                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                            <li class="{{ Request::is('admin/pages/program-types-cms*') ? 'active' : ' ' }}"><a
                                    class="nav-link" href="{{ route('program-types-cms.index') }}">CMS </a></li>

                            <li class="dropdown">
                                <a href="javascript:void(0);"
                                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages*') ? 'active' : ' ' }}">
                                    <span>Elements</span>
                                </a>
                                <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                    <li class="dropdown {{ Request::is('admin/pages/schools/courses*') ? 'active' : ' ' }}">
                                        <a
                                            class="menu-toggle nav-link has-dropdown" href="javascript:void(0);">
                                            <span>Courses</span>
                                        </a>
                                        <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                            <li class="dropdown {{ Request::is('admin/pages/schools/courses*') ? 'active' : ' ' }}">
                                                <a
                                                    class="nav-link" href="{{ route('courses.index') }}">
                                                    <span>CMS</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/pages/schools/*') ? 'active' : ' ' }}">
                                                    <span>Elements</span>
                                                </a>
                                                <ul class="dropdown-menu sidebar-menu sidebar-menu-2">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);"
                                                            class="menu-toggle nav-link has-dropdown {{ Request::is('admin/admissions*') ? 'active' : ' ' }}">
                                                            {{-- <i class="ph ph-graduation-cap"></i> --}}
                                                            <span>Admission</span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="{{ Request::is('admin/admissions/program-types') ? 'active' : ' ' }}">
                                                                <a class="nav-link" href="{{ route('program-types.index') }}">Program Types </a>
                                                            </li>
                                                            <li class="{{ Request::is('admin/admissions/course-types') ? 'active' : ' ' }}">
                                                                <a class="nav-link" href="{{ route('course-types.index') }}">Course Types </a>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li
                                        class="dropdown {{ Request::is('admin/achievement-and-key-milestones*') ? 'active' : ' ' }}">
                                        <a href="{{ route('achievement-and-key-milestones.index') }}">

                                            <span>Achievement and Key Milestone</span>
                                        </a>
                                    </li>
                                    <li class="dropdown {{ Request::is('admin/applicationProcess*') ? 'active' : ' ' }}">
                                        <a href="{{ route('application-process.index') }}">
                                            <span>Application Process</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);"
                    class="menu-toggle nav-link has-dropdown {{ Request::is('admin/testimonials*') ? 'active' : ' ' }}">
                    <i class="ph ph-facebook-logo"></i>
                    <span> Social Media</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/social-media') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('social-media.index') }}"> Social Media List</a></li>
                    <li class="{{ Request::is('admin/social-media/create') ? 'active' : ' ' }}"><a class="nav-link"
                            href="{{ route('social-media.create') }}">Social Media Create</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
