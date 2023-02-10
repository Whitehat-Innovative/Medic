

    <!doctype html>
    <html class="no-js " lang="en">

    <!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 16:12:25 GMT -->
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Zolive Hospital :: </title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- Custom Css -->
        <link rel="stylesheet" href="/adminassets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/adminassets/css/main.css">
        <link rel="stylesheet" href="/adminassets/css/authentication.css">
        <link rel="stylesheet" href="/adminassets/css/color_skins.css">
    </head>

    <body class="theme-cyan authentication sidebar-collapse">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-translate n_logo">
                <a class="navbar-brand" href="{{route('welcome')}}" title="" target="_blank">Zolive</a>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link btn btn-white btn-round" href="{{route('login')}}">SIGN IN</a>
                    </li>
                    @if (Route::has('register'))

                    <li class="nav-item">
                        <a class="nav-link btn btn-white btn-round" href="{{route('register')}}">SIGN UP</a>
                    </li>

                    @endif



                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

        {{$slot}}

    <!-- Jquery Core Js -->
<script src="/adminassets/bundles/libscripts.bundle.js"></script>
<script src="/adminassets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
</script>
@include('sweetalert::alert')
</body>

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2023 16:12:25 GMT -->
</html>
