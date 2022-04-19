<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SmartCantine</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================

    ======================================================== -->

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SmartCantine</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset("img/favicon.png")}}" rel="icon">
    <link href={{asset("img/apple-touch-icon.png")}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href={{asset('css/login.css')}}>


    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("css/style_template.css")}}" rel="stylesheet">


    <!-- =======================================================
        * Template Name: BizLand - v3.7.0
        * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
<!-- Scripts
    <script src={{asset("/js/main.js")}}></script> -->
</head>
<body>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{url("project")}}">SmartCantine<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>

                @if(Route::has('login'))
                    @auth
                        <li><a class="nav-link scrollto" href="{{url('/mesures/1')}}">Mesures</a></li>

                    @else
                        <li><a class="nav-link scrollto" href="{{url('/login')}}">Login</a></li>
        @endauth
        @endif


    </div>

</header><!-- End Header -->

        <section id="hero1" class="form-structor">
            <div class="container1" data-aos="zoom-out" data-aos-delay="100">

                <div class="login slide-up">

                    <div class="center">
                        <h2 class="form-title" id="login"><span></span>Log in</h2>
                        <div class="form-holder">
                            <form method="POST" action={{route('login') }}>
                                @csrf
                                <input name="email" id="email" type="email" class="input" placeholder="Email" />
                                <input name="password"  type="password" class="input" placeholder="Password" />

                            <div>
                                <button class="btn" value="submit">Log in</button>
                            </div>
                            </form>

                        </div>



                    </div>
                </div>
            </div>
            <!--       <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </section><!-- End Hero -->

    <main id="main">



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!--   <div class="footer-newsletter">
             <div class="container">
               <div class="row justify-content-center">
                 <div class="col-lg-6">
                   <h4>Join Our Newsletter</h4>
                   <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                   <form action="" method="post">
                     <input type="email" name="email"><input type="submit" value="Subscribe">
                   </form>
                 </div>
               </div>
             </div>
           </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SmartCantine<span>.</span></h3>
                        <p>
                            ENSTA Bretagne <br>
                            2 rue François Verny <br>
                            Brest, 29200<br>
                            France <br><br>
                            <strong>Email:</strong> Smartcantine.ensta@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        </ul>
                    </div>


                    <!--<div class="col-lg-3 col-md-6 footer-links">
                      <h4>Our Social Networks</h4>
                      <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                      <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>

                      </div>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                <div class="credits">

                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






    <!-- Vendor JS Files -->
    <script src={{asset("vendor/purecounter/purecounter.js")}}></script>
    <script src={{asset("vendor/aos/aos.js")}}></script>
    <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("vendor/glightbox/js/glightbox.min.js")}}></script>
    <script src={{asset("vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
    <script src={{asset("vendor/swiper/swiper-bundle.min.js")}}></script>
    <script src={{asset("vendor/waypoints/noframework.waypoints.js")}}></script>
    <script src={{asset("vendor/php-email-form/validate.js")}}></script>

    <!-- Template Main JS File -->
    <script src={{asset("js/main.js")}}></script>

</body>

</html>
