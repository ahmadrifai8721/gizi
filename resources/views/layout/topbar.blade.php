<!-- ========== Topbar Start ========== -->
<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="gap-1 d-flex align-items-center gap-lg-2">

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="{{ route('home') }}" class="logo-light">
                    <span class="logo-lg">
                        <img src="{{ url('/') }}/assets/images/logo.png" alt="logo" style="height: 50px">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('/') }}/assets/images/logo-sm.png" alt="small logo">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="{{ route('home') }}" class="logo-dark">
                    <span class="logo-lg">
                        <img src="{{ url('/') }}/assets/images/logo-dark.png" alt="dark logo" style="height: 50px">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('/') }}/assets/images/logo-dark-sm.png" alt="small logo">
                    </span>
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
            </button>

            <!-- Horizontal Menu Toggle Button -->
            <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

        </div>

        <ul class="gap-3 topbar-menu d-flex align-items-center">

            <li class="d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <i class="ri-settings-3-line font-22"></i>
                </a>
            </li>

            <li class="d-none d-sm-inline-block">
                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="Theme Mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li>


            <li class="d-none d-md-inline-block">
                <a class="nav-link" href="" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line font-22"></i>
                </a>
            </li>

            <li class="dropdown">
                <a class="px-2 nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{ url('/') }}/assets/images/users/avatar-1.jpg" alt="user-image" width="32"
                            class="rounded-circle">
                    </span>
                    <span class="gap-1 d-lg-flex flex-column d-none">
                        <h5 class="my-0">{{ Auth::user()->name }}</h5>
                        {{-- <h6 class="my-0 fw-normal">Founder</h6> --}}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="m-0 text-overflow">Welcome !</h6>
                    </div>
                    {{--
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-lifebuoy me-1"></i>
                        <span>Support</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-lock-outline me-1"></i>
                        <span>Lock Screen</span>
                    </a>
                    --}}

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- ========== Topbar End ========== -->
