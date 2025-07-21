<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--=== Meta Tags ===-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=== Link of CSS ===-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<!--=== Title & Favicon ===-->
<title>{{ $web_title }}</title>
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">

</head>

<body>
    <!-- Preloader -->
    <!-- <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="pre-box-one">
                        <div class="pre-box-two"></div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Preloader -->

    <!-- Header -->
    <div class="header-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="left">
                        <ul>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <a href="#">{{ $web_address }}</a>
                            </li>
                            <li>
                                <i class="icofont-ui-call"></i>
                                <a href="tel:0123456987">+91 {{ $web_phone }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="right">
                        <ul>
                            <li>
                                <span>Follow Us:</span>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>

                        </ul>

                        <div class="header-search">

                                <a href="{{ route('login') }}" target="_blank">
                                   <div class="btn btn-danger">Login</div>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Navbar -->
    <div class="navbar-area sticky-top">
        <style>
            #logo-img{
                    border:1px solid rgb(255, 0, 0);
                    border-radius: 20px 0px;
                    padding: 20px;
                }
        </style>
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('assets/img/newlogo.jpg') }}" class="logo-one" alt="Logo" width="310" id="logo-img">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <div class="row d-flex align-items-center m-0 p-0">
                    <!-- <div class="col-md-2">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="assets/img/ministry_logo2.jpeg" class="logo-one" alt="Logo" width="130">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड</h2>

                        <h2 style="text-align: right;width: 94%;font-size: 30px;">पंजीकृत कॉरपोरेट कार्य मंत्रालय, भारत सरकार</h2>
                    </div>
                    <div class="col-md-2">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="assets/img/logo.png" class="logo-one" alt="Logo" width="100">
                        </a>
                    </div> -->


                    <div class="col-md-12">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="assets/img/newlogo.jpg" class="logo-one" alt="Logo" id="logo-img">
                        </a>
                    </div>
                </div>

                <nav class="navbar navbar-expand-md navbar-light">

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <!-- Home -->
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">Home</a>
                            </li>

                            <!-- About Us Dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">About Us <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('overview') }}" class="nav-link">Overview</a></li>
                                    <li class="nav-item"><a href="{{ route('our_company') }}" class="nav-link">Company Values</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('mission') }}" class="nav-link">Mission</a></li>
                                    <li class="nav-item"><a href="{{ route('vision') }}" class="nav-link">Vision</a></li>
                                </ul>
                            </li>

                            <!-- Services -->
                            <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link">Services</a>
                            </li>

                            <!-- Download Application Forms -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Download Forms <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ asset('assets/membership_form.pdf') }}" class="nav-link" target="_blank">Membership Form</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ asset('assets/application.pdf') }}" class="nav-link" target="_blank">Job Application
                                            Form</a></li>
                                </ul>
                            </li>

                            <!-- Certificates -->
                            <li class="nav-item">
                                <a href="{{ asset('assets/certificates.pdf') }}" class="nav-link" target="_blank">Certificates</a>
                            </li>

                            <!-- Latest News -->
                            <li class="nav-item">
                                <a href="latest_news.php" class="nav-link">Latest News</a>
                            </li>

                            <!-- Gallery -->
                            <li class="nav-item">
                                <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                            </li>

                            <!-- Contact -->
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                            </li>



                            <!-- Recruitment -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">More <i
                                        class="icofont-simple-down"></i></a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a href="{{ route('instruction_to_applicants') }}"
                                            class="nav-link">Instruction To Applicants</a></li>
                                    <li class="nav-item"><a href="{{ route('required_documents') }}"
                                            class="nav-link">Required Documents</a></li>
                                    <!-- Apply & Results -->
                                    <li class="nav-item">
                                        <a href="portal/Apply/index.php" class="nav-link">Apply Online</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://shagungraminhealth.com/portal/Apply/admit_cards.php"
                                            class="nav-link">Download Admit Card</a>
                                    </li>
                                    <li class="nav-item" style="background: red;">
                                        <a href="portal/Apply/answer_keys.php" class="nav-link text-white">Download
                                            Answer
                                            Keys</a>
                                    </li>
                                    <li class="nav-item" style="background: red;">
                                        <a href="https://shagungraminhealth.com/portal/Apply/exam_results.php"
                                            class="nav-link text-white">Download Exam Result</a>
                                    </li>
                                    <!-- Locations -->
                                    <li class="nav-item">
                                        <a href="{{ route('locations') }}" class="nav-link">Locations</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <!-- End Navbar -->
@yield('content')
@include('layouts.footer')
