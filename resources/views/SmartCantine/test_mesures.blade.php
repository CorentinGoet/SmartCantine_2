<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <title>SmartCantine</title>
    <meta name="description" content="Website for SmartCantine project" />
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="project iot noise" name="keywords">
    <!--<link rel="stylesheet" href={{asset('css/mycss.css')}}> -->
    <!-- Favicons -->
    <link href={{asset("/img/favicon.png")}} rel="icon">
    <link href={{asset("/img/apple-touch-icon.png")}} rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{asset("css/style_template.css")}}" rel="stylesheet">
    <!-- =======================================================-->
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="social-links d-none d-md-flex align-items-center">

      </div>
    </div>
  </section>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="{{url("project")}}">SmartCantine<span>.</span></a></h1>


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/project#hero')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/project#about')}}">About</a></li>
                @if(Route::has('login'))
                    @auth
                    <li><a class="nav-link scrollto" href="{{url('/mesures/1')}}">Mesures</a></li>
                    @else
                    <li><a class="nav-link scrollto" href="{{url('/login')}}">Login</a></li>
                    @endauth
                @endif

    </div>


       
  </header><!-- End Header -->



  


  <main id="main">
    <div>

        <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
            <div class="container my-auto">
                <div class="row justify-content-center">

                    <div class="col-xl-12 col-lg-7">
                        <!-- Bar Chart -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h2 class="m-0 font-weight-bold text-primary">Niveau sonore</h2>

                            </div>
                            <div class="card-body">
                                <div class="line-chart">
                                    <canvas id="graph"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2>Mesures</h2>
                </div>
                <div class="card-body">
                <table class="table-responsive">
                    <thead>
                    <tr>
                        <th>Cantine</th><th>Capteur</th><th>Type</th><th>ID</th><th>Niveau Sonore</th><th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($cantine->capteurs as $capteur)
                            @foreach($capteur->mesures as $mesure)
                                <tr>
                                    <td>{{$cantine->getId()}}</td>
                                    <td>{{$capteur->getId()}}</td>
                                    <td>{{$capteur->getType()}}</td>
                                    <td>{{$mesure->getId()}}</td>
                                    <td>{{$mesure->getNoiseLevel()}}</td>
                                    <td>{{$mesure->getDateMesure()}}</td>
                                </tr>
                            @endforeach

                            @empty
                                <p>Vous n'avez pas de mesures disponibles.</p>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>

            </div>
        </div>
    </div>

</div>

<script>
    let graph_labels = @json($graph_data['labels']);
    let graph_values = @json($graph_data['values']);
</script>
<script src={{asset("js/chart.js/Chart.min.js")}}></script>
<script src="{{asset("js/my_line_graph.js")}}"></script>
    
  </main>

  <!-- ======= Footer ======= -->
 <footer id="footer">

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

          <div class="col-lg-3 col-md-6 img-logo">
            <img src="assets/img/ensta-logoh-noir.png" class="img-fluid" alt="">
          </div>

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
  <script src={{asset("assets/vendor/purecounter/purecounter.js")}}></script>
  <script src={{asset("assets/vendor/aos/aos.js")}}></script>
  <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("assets/vendor/glightbox/js/glightbox.min.js")}}></script>
  <script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
  <script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>
  <script src={{asset("assets/vendor/waypoints/noframework.waypoints.js")}}></script>
  <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>
  <!-- Template Main JS File -->
  <script src={{asset("assets/js/main.js")}}></script>

</body>
</html>
