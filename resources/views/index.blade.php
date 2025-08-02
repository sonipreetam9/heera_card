<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dental Card </title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16" />
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Dental Card - Dentist & Dental Clinic Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ============================ -->
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" /> --}}


    <link href="{{ asset('assets/index/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('assets/index/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/index/css/swiper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/index/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/index/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        <div id="de-loader"></div>

        <!-- header begin -->
        <header class="transparent scroll-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.html">
                                        <img class="logo-main" src="{{ asset('assets/index/images/logo.jpg') }}"
                                            alt="" height="80" width="80" style="border-radius: 10px" />
                                        <img class="logo-scroll" src="{{ asset('assets/index/images/logo.jpg') }}"
                                            alt="" height="80" width="80" style="border-radius: 10px" />
                                        <img class="logo-mobile" src="{{ asset('assets/index/images/logo.jpg') }}"
                                            alt="" height="70" width="70" style="border-radius: 10px" />
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainemenu begin -->
                                <ul id="mainmenu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                                <!-- mainmenu end -->
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="{{ route('login') }}" class="btn-main fx-slide"><span>Log In</span></a>
                                    <span id="menu-btn"></span>
                                </div>

                                <div id="btn-extra">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section class="jarallax text-light">
                <img src="{{ asset('assets/index/images/background/2.webp') }}" class="jarallax-img" alt="" />
                <div class="container relative z-1">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-6">
                            <div class="h-100 relative">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    SWASTH MUSKAN
                                </div>
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">
                                    Welcome to SWASTH MUSKAN, your key to unlocking a healthier,
                                    happier Smile!
                                </h1>

                                <div class="abs ol-lg-12 pos-sm-relative bottom-0">
                                    <div class="d-flex align-items-center justify-content-between pb-4 mb-4 c wow fadeInUp"
                                        data-wow-delay=".9s">
                                        <a class="btn-main wow fadeInUp" data-wow-delay=".6s" href="#">Get Started
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative">
                                <img src="{{ asset('assets/index/images/banner1.jpg') }}" class="w-100 rounded-1"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="w-100 pb-5 wow scaleIn">
                                    <img src="{{ asset('assets/index/images/about.avif') }}" class="w-100 rounded-1"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="me-lg-3">
                                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">
                                    Swasth Muskan
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">About us</h2>
                                <p class="wow fadeInUp" data-wow-delay=".4s">
                                    "Welcome to SWASTH MUSKAN, your key to unlocking a
                                    healthier, happier smile! Swasth Muskan is designed to
                                    provide you with access to quality dental care, discounts,
                                    and benefits that make maintaining good oral health easier
                                    and more affordable. With our card, you'll enjoy:
                                </p>
                                <ul class="ul-check text-dark cols-2 fw-600 mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li>Access to a network of trusted dental professionals</li>
                                    <li>Discounts on dental services and treatments</li>
                                    <li>Savings on dental products and procedures</li>
                                    <li>Priority appointments and personalized care</li>
                                </ul>

                                <a class="btn-main fx-slide wow fadeInUp" data-wow-delay=".8s"
                                    href="#contact"><span>Book Appointment</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color-op-1">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".0s">
                                <h3 class="fs-40 mb-0">
                                    <span class="timer" data-to="1000" data-speed="3000">0</span>+
                                </h3>
                                Happy Patients
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".2s">
                                <h3 class="fs-40 mb-0">
                                    <span class="timer" data-to="250" data-speed="3500">0</span>+
                                </h3>
                                Card Approved
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <div class="de_count wow fadeInRight" data-wow-delay=".6s">
                                <h3 class="fs-40 mb-0">
                                    <span class="timer" data-to="10" data-speed="3000">0</span>+
                                </h3>
                                Years of Working
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="w-100 pe-5 pb-5 wow scaleIn">
                                    <img src="{{ asset('assets/index/images/aim.jpg') }}" class="w-100 rounded-1"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                Swasth Muskan
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                The aim of “Swasth Muskan” is to:
                            </h2>
                            <!-- <p class="wow fadeInUp" data-wow-delay=".4s">
                  Choosing the right dental provider matters. We combine expert
                  care, advanced technology, and a warm atmosphere to ensure
                  every visit is comfortable, efficient, and tailored to your
                  unique needs.
                </p> -->

                            <div class="border-bottom mb-4"></div>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Improve oral health:</h5>
                                            <p class="mb-0">
                                                By providing access to regular dental check-ups,
                                                treatments, and preventive care.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Increase Accessibility:</h5>
                                            <p class="mb-0">
                                                Make dental care more accessible and affordable for
                                                individuals and families.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Reduce financial burden:</h5>
                                            <p class="mb-0">
                                                Offer discounts, savings, and financial assistance for
                                                dental care services.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Promote preventive care:</h5>
                                            <p class="mb-0">
                                                Encourage regular dental check-ups and cleanings to
                                                prevent oral health issues.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h-100">
                                        <div class="relative wow fadeInUp">
                                            <h5>Enhance overall health:</h5>
                                            <p class="mb-0">
                                                Recognize the importance of oral health in overall
                                                well-being and quality of life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" id="features">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s"></div>

                            <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                Key features of Swasth Muskan
                            </h2>
                            <!-- <p class="wow fadeInUp" data-wow-delay=".4s">
                  Choosing the right dental provider matters. We combine expert
                  care, advanced technology, and a warm atmosphere to ensure
                  every visit is comfortable, efficient, and tailored to your
                  unique needs.
                </p> -->

                            <div class="wow fadeInUp" data-wow-delay=".4s">
                                <ul>
                                    <li>
                                        It provides a cover of Rs 1.5 lac per individual per year.
                                    </li>
                                    <li>
                                        ⁠Benefits of the scheme are portable only on tied-up
                                        dental clinics.
                                    </li>
                                    <li>Card holder’s will have access to free OPD.</li>
                                    <li>Certain dental procedures will be free of cost.</li>
                                    <li>
                                        ⁠While for other complex procedure, card holder will have
                                        pay30%- 40% , rest will be taken care of.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="w-80 pe-5 pb-5 wow scaleIn">
                                    <img src="{{ asset('assets/index/images/features.jpg') }}"
                                        class="w-100 rounded-1" style="margin-top: 20px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>


    <section class="bg-color-op-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="spacer-double"></div>
                    <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Our Happy Customers
                    </h2>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme wow fadeInUp four-cols-center-dots text-center">
                    <div class="item">
                        <div class="gradient-white-top p-40 py-4 rounded-1">
                            <blockquote>
                                <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                <div class="de_testi_by">

                                    <div>Rajesh Kumar<span>Customer</span></div>
                                </div>
                                <p class="mt-4 mb-0 text-dark op-6">
                                    "Main pehli baar dental card use kiya scaling ke liye – mujhe 50% discount mila!
                                    Doctor ne bahut ache se samjhaya aur pura treatment safe aur clean environment mein
                                    hua. SWASTH MUSKAN card dikhaaya aur discount turant apply ho gaya. Bahut hi
                                    faaydemand
                                    card hai."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gradient-white-top p-40 py-4 rounded-1">
                            <blockquote>
                                <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                <div class="de_testi_by">

                                    <div>Pooja Rani<span>Customer</span></div>
                                </div>
                                <p class="mt-4 mb-0 text-dark op-6">
                                    "Pehle daant ka treatment mehnga lagta tha, lekin card milne ke baad sab affordable
                                    ho gaya. Mere root canal ka half price mein kaam ho gaya. Staff bhi friendly tha.
                                    Mujhe dental card system kaafi pasand aaya!"
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gradient-white-top p-40 py-4 rounded-1">
                            <blockquote>
                                <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                <div class="de_testi_by">

                                    <div>Sunita Devi<span>Customer</span></div>
                                </div>
                                <p class="mt-4 mb-0 text-dark op-6">
                                    "Mere bete ko toothache tha, clinic pe le gaye to unhone card offer bataya. Card
                                    bana liya aur treatment pe 50% off mila. Bina card ke mehnga padta, lekin SWASTH
                                    MUSKAN
                                    waale card ne kaafi madad ki."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gradient-white-top p-40 py-4 rounded-1">
                            <blockquote>
                                <i class="fs-32 icofont-quote-left absolute start-0 mt-2 p-0 id-color"></i>
                                <div class="de_testi_by">

                                    <div>Amit Singh<span>Customer</span></div>
                                </div>
                                <p class="mt-4 mb-0 text-dark op-6">
                                    "Main ek regular patient hoon. Har 6 mahine mein cleaning aur check-up ke liye aata
                                    hoon. Dental card se paisa bhi bacha aur priority appointment bhi mila."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- content end -->

    <!-- footer begin -->
    <footer class="section-dark" id="contact">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-sm-6">
                    <img src="{{ asset('assets/index/images/logo-white.webp') }}" class="logo-footer"
                        alt="" />
                    <div class="spacer-20"></div>
                    <p>
                        "Welcome to SWASTH MUSKAN, your key to unlocking a healthier, happier smile! Swasth Muskan is
                        designed to provide you with access to quality dental care, discounts, and benefits that make
                        maintaining good oral health easier and more affordable.
                    </p>

                    <div class="social-icons mb-sm-30">
                        <a href="https://www.facebook.com/share/19Le9vcYkn/?mibextid=wwXIfr" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/swasthmuskan?igsh=MTI2d2dobTAwYXYzMA%3D%3D&utm_source=qr"
                            target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/917082774640" target="_blank"><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="widget">
                                <h5>Quick Links</h5>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                    <div class="widget">
                        <h5>Contact Us</h5>
                        {{-- <div class="fw-bold text-white">
                            <i class="icofont-location-pin me-2 id-color"></i>
                            Location
                        </div>
                        Sirsa, Haryana, India

                        <div class="spacer-20"></div>

                        <div class="fw-bold text-white">
                            <i class="icofont-phone me-2 id-color"></i>Call Us
                        </div>
                        +91 {{ $web_phone }} --}}

                        <div class="spacer-20"></div>

                        <div class="fw-bold text-white">
                            <i class="icofont-envelope me-2 id-color"></i>Send a Message
                        </div>
                        <a href="mailto:Officialswasthmuskan@gmail.com">Officialswasthmuskan@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                Copyright 2025 - Design and Created by <a href="https://starnexttechnologies.com/"
                                    target="_blank"> &nbsp;Starnext Technologies Pvt. Ltd.</a>
                            </div>
                            <ul class="menu-simple">
                                <li><a href="{{ route('terms.conditions') }}">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="{{ asset('assets/index/images/logo-white.webp') }}" class="w-150px" alt="" />

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            {{-- <div>
                <i class="icofont-location-pin me-2 op-5"></i>Sirsa, Haryana, India
            </div> --}}
            <div>
                <i class="icofont-envelope me-2 op-5"></i>Officialswasthmuskan@gmail.com
            </div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>
                Welcome to SWASTH MUSKAN, your key to unlocking a healthier, happier smile! Swasth Muskan is designed to
                provide you with access to quality dental care, discounts, and benefits that make maintaining good oral
                health easier and more affordable.
            </p>

            <div class="social-icons">
                <a href="https://www.facebook.com/share/19Le9vcYkn/?mibextid=wwXIfr" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/swasthmuskan?igsh=MTI2d2dobTAwYXYzMA%3D%3D&utm_source=qr"
                    target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/917082774640" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets/index/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/index/js/designesia.js') }}"></script>
    <script src="{{ asset('assets/index/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/index/js/custom-swiper-1.js') }}"></script>
    <script src="{{ asset('assets/index/js/custom-marquee.js') }}"></script>
</body>

</html>
