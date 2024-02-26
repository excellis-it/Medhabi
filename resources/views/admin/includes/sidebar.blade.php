<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"><span class="logo-name"><img src="{{asset('frontend_assets/images/logo/medhavi-logo.png')}}" /></span> </a>
            <a href="{{ route('admin.dashboard') }}"><span class="logo-fm"><img src="{{asset('frontend_assets/images/logo/medhavi-logo.png')}}" /></span> </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown {{ Request::is('admin/dashboard*') ? 'active' : ' ' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ph-gauge"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/profile*') || Request::is('admin/password*') || Request::is('admin/detail*') ? 'active' : ' ' }}" >
                    <i class="ph-identification-card"></i>
                    <span>Manage Account</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/profile*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin.profile') }}">My Profile</a></li>
                    <li class="{{ Request::is('admin/password*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin.password') }}">Change Password</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/jobs*') ? 'active' : ' ' }}">
                    <i class="ph ph-briefcase"></i>
                    <span> Jobs</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/jobs') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('jobs.index') }}"> Job List</a></li>
                    <li class="{{ Request::is('admin/jobs/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('jobs.create') }}">Job Create</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/blogs*') ? 'active' : ' ' }}">
                    <i class="ph ph-instagram-logo"></i>
                    <span> Blogs</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/blogs') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('blogs.index') }}"> Blog List</a></li>
                    <li class="{{ Request::is('admin/blogs/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('blogs.create') }}">Blog Create</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/faq*') ? 'active' : ' ' }}">
                    <i class="ph ph-question"></i>
                    <span> FAQS</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/faq') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('faq.index') }}"> FAQS List</a></li>
                    <li class="{{ Request::is('admin/faq/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('faq.create') }}">FAQS Create</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/testimonials*') ? 'active' : ' ' }}">
                    <i class="ph ph-hand-fist"></i>
                    <span> Testimonials</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/testimonials') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('testimonials.index') }}"> Testimonials List</a></li>
                    <li class="{{ Request::is('admin/testimonials/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('testimonials.create') }}">Testimonials Create</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/our-core-values*') ? 'active' : ' ' }}">
                    <i class="ph ph-books"></i>
                    <span> Our Core Values</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/our-core-values') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('our-core-values.index') }}"> Our Core Values List</a></li>
                    <li class="{{ Request::is('admin/our-core-values/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('our-core-values.create') }}">Our Core Values Create</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/our-core-values*') ? 'active' : ' ' }}">
                    <i class="ph ph-users-three"></i>
                    <span> Our Partnership</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/our-partnerships') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('our-partnerships.index') }}"> Our Partnership List</a></li>
                    <li class="{{ Request::is('admin/our-partnerships/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('our-partnerships.create') }}">Our Partnership Create</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/testimonials*') ? 'active' : ' ' }}">
                    <i class="ph ph-newspaper"></i>
                    <span>Pages</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/career') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('career.index') }}">Career </a></li>
                </ul>
            </li>

            {{-- <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/customers*') ? 'active' : ' ' }}">
                    <i class="ph ph-user-list"></i>
                    <span> User Management</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/customers/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('customers.create') }}">Create  User</a></li>
                    <li class="{{ Request::is('admin/customers') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('customers.index') }}"> User List</a></li>
                </ul>
            </li> --}}

            {{-- <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-file"></i>
                    <span>B2B Markup Management</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="admin-markup.html">Admin Markup</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>B2B Deposits</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Manage / Add Deposits</a></li>
                    <li><a class="nav-link" href="">Manage New Deposits
                            Request</a></li>
                    <li><a class="nav-link" href="">Approved Deposits Request</a>
                    </li>
                    <li><a class="nav-link" href="">Deposit History</a></li>
                    <li><a class="nav-link" href="">Refund Deposit</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-ticket"></i>
                    <span>All Cancel Ticket</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-user-circle"></i>
                    <span>Regional Manager</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Itinerary</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Upload Ticket</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Customer Database</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>My Operator Log Details</span>
                </a>
            </li> --}}
        </ul>
    </aside>
</div>
