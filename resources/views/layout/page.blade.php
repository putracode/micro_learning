<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.jpg" rel="icon">
  {{-- <link href="/arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/arsha/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/arsha/assets/css/style.css" rel="stylesheet">
  @yield('styles')
  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /* .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #37517E !important;
    } */
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/"><img src="/img/putih.png" alt="" ></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/arsha/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            @auth              
            <li><a class="nav-link scrollto {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a></li>
              <li class="dropdown"><a href="#"><span>Pembelajaran</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/pembelajaran">Materi Pembelajaran</a></li>
                  <li><a href="/list-pembelajaran">List Pembelajaran</a></li>
                  <li><a href="/dashboard-penilaian">Dashboard Penilaian</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  @can('internal')
                    <li><a href="/galeri">Galeri</a></li>
                  @endcan
                  <li><a href="/tentang-aplikasi">Tentang Aplikasi</a></li>
                </ul>
              </li>
            @endauth
            @guest
              <li><a class="getstarted scrollto" href="/login">Get Started</a></li>
            @endguest
            @auth
  
  
  
              <li class="dropdown"><a class="getstarted scrollto dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="/login">{{ auth()->user()->name }}</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @can('admin')
                      
                  <li><a class="dropdown-item" href="/admin/dashboard">Dashboard @if ($permohonan >= 1)
                    <span class="badge badge-center rounded-pill bg-info">!</span>
                  @endif</a></li>
                  @endcan
                  <li><form action="/logout" method="post" class="m-0 dropdown-item">
                    @csrf
                    
                    <button type="submit" class="dropdown-item m-0 p-0 ms-1"><span style="color: red; font-size: 14px;">Logout</span></button>
                  </form></li>
                </ul>
              </li>
              
  
            @endauth
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main" style="background-color: #EFF2F6;">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        {{-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol> --}}
        <h2>@yield('title')</h2>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        @yield('content')
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layout.partials.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/arsha/assets/vendor/aos/aos.js"></script>
  <script src="/arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/arsha/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/arsha/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/arsha/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/arsha/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/arsha/assets/js/main.js"></script>
  @yield('script')
</body>

</html>