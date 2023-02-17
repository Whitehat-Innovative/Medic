<!doctype html>
<html lang="en">


<!-- Mirrored from peacefulqode.com/themes/medicate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 06:26:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zolive Hospital</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="/assets/rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/assets/rev/fonts/font-awesome/css/font-awesome.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/assets/rev/css/rs6.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Progressbar CSS -->
    <link rel="stylesheet" href="/assets/css/progressbar.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/animations.min.css">
    <!-- Magnefic Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="/assets/fonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/themify-icons/themify-icons.css">
    <!--  Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--  Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>
    <!--loading start-->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="/assets/images/logo.png" class="img-fluid" style="width:200px; height:auto;" alt="loading">
        </div>
    </div>
    <!--loading End-->

    <!--=================================
      header start-->
    <header id="pq-header" class="pq-header-default ">
        <div class="pq-top-header">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 text-right">
                        <div class="pq-header-social text-right">
                            {{-- <ul>
                                <li><a href="/assets/#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="/assets/#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="/assets/#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="/assets/#"><i class="fab fa-pinterest"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pq-header-contact ">
                            <ul>
                                <li>
                                    <a href="tel:+23408164924608"><i class="fas fa-phone"></i>
                                        <span> 0816 492 4608</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+23409030337346"><i class="fas fa-phone"></i>
                                        <span> 0903 033 7346</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://egbuchulemo@gmail.com"><i
                                            class="fas fa-envelope"></i><span><span class="__cf_email__"
                                                data-cfemail="066f68606946766367656360736a726e636b63752865696b">egbuchulemo@gmail.com</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-bottom-header pq-has-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="{{route('welcome')}}">
                                <img class="img-fluid logo" src="/assets/images/logo.png" alt="medicate">
                            </a>
                            <a class="navbar-brand" href="{{ route('login') }}">ADMIN
                                {{-- <img class="img-fluid logo" src="/assets/images/logo.png" alt="medicate"> --}}
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="pq-menu-contain" class="pq-menu-contain">
                                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item current-menu-item">
                                            <a href="{{ route('welcome') }}">Home</a>

                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{ route('about') }}">About</a>

                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{ route('services') }}">Services</a>

                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{ route('gallery') }}">Our Gallery</a>

                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{ route('user.research') }}">Research</a>

                                        </li>
                                        <li class="menu-item ">
                                            <a href="{{ route('contact') }}">Contact
                                                Us</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="pq-menu-search-block">
                                <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="ti-search"></i></a>
                                <div class="pq-search-form">
                                    <form role="search" method="get" class="search-form"
                                        action="https://google.com/search">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search …"
                                                value="" name="s">
                                        </label>
                                        <button type="submit" class="search-submit"><span
                                                class="screen-reader-text">Search</span></button>
                                    </form>
                                </div>
                            </div>
                            <a href="{{ route('appointment') }}" class="pq-button">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Appointments</span>
                                    <i class="ion ion-plus-round"></i>
                                </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>


        </div>

    </header>
    <!--==============
        Header end
        =================-->

        @yield('content')



    <!-- =========================
     Footer start
     ============================== -->

    <footer id="pq-footer">
        <div class="pq-footer-style-1">
            <div class="pq-subscribe align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="pq-subscribe-bg">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="pq-subscribe-block"> <img src="/assets/images/Subscribe.png"
                                                class="pq-subscribe-img img-fluid" alt="medicate-subscribe-image">
                                            <div class="pq-subscribe-details">
                                                <h5>Latest Updates Subscribe To Our Newsletter</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 align-self-center">
                                        <div class="pq-subscribe-from">
                                            <form id="form" class="form">
                                                <div class="form-fields">
                                                    <input class="w-100 pq-bg-transparent" type="email"
                                                        name="EMAIL" placeholder="Enter Your Email" required="">
                                                    <input class="" type="submit" value="Sign up">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="pq-footer-block">
                                <img src="/assets/images/logo.png" class="pq-footer-logo img-fluid"
                                    alt="medicate-footer-logo">
                                <p>Happiness is very contributory to longetivity....always be happy not minding the day's challenges.
                                    Always remember to keep drugs out the reach of children.
                                </p>

                                <div class="pq-footer-social">
                                    <ul>
                                        <li><a href="https://wa.me/23408039207136"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li><a href="https://"> <i class="fab fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Our Tags</h4>
                                <div class="menu-useful-links-container">
                                    <ul id="menu-useful-links" class="menu">
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="{{route('services')}}">Our Services</a></li>
                                        <li><a href="{{route('blog')}}">Our Blog</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('donate')}}">Donate</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Recent Posts</h4>
                                <div class="pq-footer-recent-post">
                                    <div class="pq-footer-recent-post-media">
                                        <a href="/assets/get-the-exercise-limited-mobility.html"> <img
                                                src="/assets/images/footer-image/1.jpg" alt=""></a>
                                    </div>
                                    <div class="pq-footer-recent-post-info">
                                        <a href="/assets/get-the-exercise-limited-mobility.html" class="pq-post-date">
                                            <i class="far fa-calendar-alt"></i>December <span>12</span>, 2021 </a>
                                        <h6><a href="/assets/get-the-exercise-limited-mobility.html">Get the Exercise
                                                Limited Mobility</a></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3  col-md-6">
                            <div class="pq-footer-block">
                                <h4 class="footer-title">Contact Us</h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="pq-contact">
                                            <li> <a href="tel:+23408164924608"><i class="fas fa-phone"></i>
                                                    <span> +234 0816-492-4608</span>
                                                </a> </li>
                                            <li> <a
                                                    href="https://egbuchulemo@gmail.com"><i
                                                        class="fas fa-envelope"></i><span>inf<span
                                                            class="__cf_email__"
                                                            data-cfemail="4e210e3e2b2f2d2b283b223a262b232b3d602d2123">egbuchulemo@gmail.com</span></span></a>
                                            </li>
                                            <li> <i class="fas fa-map-marker"></i> <span>
                                                    9 Rumuolukwu, Eneka, Rivers State. <br> 58 Airport Road, Rumuodomaya, Rivers State. </span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!--Footer End-->

    <!--Back To Top start-->
    <div id="back-to-top">
        <a class="topbtn" id="top" href="/assets/#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back To Top End-->
    <!--jquery js-->
    <script data-cfasync="false" src="/assets/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="/assets/js/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--owl-carousal-->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!--progress-bar js-->
    <script src="/assets/js/progressbar.js"></script>
    <!--isotope js-->
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <!--countTo js-->
    <script src="/assets/js/jquery.countTo.min.js"></script>
    <!--Maginfic-Popup js-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Animation JS -->
    <script src="/assets/js/wow.min.js"></script>
    <!-- Rev-Slider -->
    <script src="/assets/rev/js/rbtools.min.js"></script>
    <script src="/assets/rev/js/rs6.min.js"></script>
    <script src="/assets/js/rev-custom.js"></script>
    <!--custom js-->
    <script src="/assets/js/custom.js"></script>


    <script>
        jQuery(window).on('load', function(e) {
            jQuery(".pq-applyform .form-btn").click(function() {
                var first_name = jQuery('#first-name').val();
                var doctor_name = jQuery('#doctor-name').val();
                var disease_name = jQuery('#disease-name').val();
                var email = jQuery('#e-mail').val();

                var result;

                jQuery('.pq-applyform .pq-message').remove();
                jQuery('.pq-applyform .pq-thank-you-message').remove();

                if (first_name == '' || first_name == undefined) {
                    jQuery(
                            "<span class='pq-name-error-message pq-message'>Please fill the field</span>")
                        .insertAfter('.pq-applyform .name-field');
                    result = false;
                } else {
                    jQuery('.pq-name-error-message').remove();
                    result = true;
                }

                if (email == '' || email == undefined) {
                    jQuery(
                            "<span class='pq-email-error-message pq-message'>Please fill the field</span>")
                        .insertAfter('.pq-applyform .e-mail-field');
                    result = false;
                } else {
                    jQuery('.pq-email-error-message').remove();
                    result = true;
                }

                if (doctor_name == '' || doctor_name == undefined) {
                    jQuery(
                            "<span class='pq-doctor-name-error-message pq-message'>Please fill the field</span>"
                            )
                        .insertAfter('.pq-applyform .doctor-name-field');
                    result = false;
                } else {
                    jQuery('.pq-doctor-name-error-message').remove();
                    result = true;
                }

                if (disease_name == '' || disease_name == undefined) {
                    jQuery(
                            "<span class='pq-disease-name-error-message pq-message'>Please fill the field</span>"
                            )
                        .insertAfter('.pq-applyform #disease-name');
                    result = false;
                } else {
                    jQuery('.pq-disease-name-error-message').remove();
                    result = true;
                }

                if (result == true) {
                    var email = jQuery("#email").text();
                    event.preventDefault();
                    jQuery.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: {
                            'email': email
                        },
                        success: function() {
                            jQuery(
                                    "<span class='pq-thank-you-message pq-text-white ms-5'> Thank You For Filling The form</span>"
                                    )
                                .insertAfter('.pq-applyform .pq-button');
                        }
                    });
                }
            });
        });
    </script>

    @include('sweetalert::alert')
</body>


<!-- Mirrored from peacefulqode.com/themes/medicate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jan 2023 06:28:27 GMT -->

</html>
