<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Dashboard | TG - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($small_logo) }}" />
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css')}}" />

    {{--
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <!-- jsvectormap css -->
    <link href="{{ asset('software/assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Swiper slider css -->
    <link href="{{ asset('software/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('software/assets/js/layout.js') }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset('software/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ asset('software/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('software/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom Css-->
    <link href="{{ asset('software/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ route('dashboard') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset($small_logo) }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset($small_logo) }}" alt="" height="17">
                                </span>
                            </a>

                            <a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset($small_logo) }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset($small_logo) }}" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>


                    </div>

                    <div class="d-flex align-items-center">





                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('software/assets/images/users/avatar-1.jpg') }}"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{
                                            Auth::user()->name }} {{ Auth::user()->nickname }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }} !</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>

                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>

                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="{{ route('super.dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset($small_logo) }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset($small_logo) }}" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset($small_logo) }}" alt="" height="22">
                    </span>
                    <span class="logo-lg" >
                        <img src="{{ asset($small_logo) }}" alt="Logo" width="70">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                <i class="mdi mdi-view-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>






                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Employee</span></li>

                       <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('add.employee') ? 'active' : '' }}"
                                href="{{ route('add.employee') }}">
                                <i class="mdi mdi-plus"></i> <span>Add Employee</span>
                            </a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('employee.list') ? 'active' : '' }}"
                                href="{{ route('employee.list') }}">
                                <i class="mdi mdi-form-select"></i> <span>All Employee</span>
                            </a>
                        </li>



                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">User</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('profile') ? 'active' : '' }}"
                                href="{{ route('profile') }}">
                                <i class="mdi mdi-account-circle-outline"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link {{ request()->routeIs('logout') ? 'active' : '' }}"
                                href="{{ route('logout') }}">
                                <i class="mdi mdi-logout"></i> <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <div class="main-content">
            @yield('software')
            @include('software.layouts.footer')
