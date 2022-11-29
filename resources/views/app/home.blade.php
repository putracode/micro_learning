<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Micro Learning</title>
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

  <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>MICRO LEARNING</h1>
          <h2>Pembelajaran Micro Learning SBU Jakban</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            @guest
              <a href="/login" class="btn-get-started scrollto">Get Started</a>
            @endguest
            @auth
              <a href="/pembelajaran" class="btn-get-started scrollto">Pilih Materi</a>
            @endauth
            @guest  
              <a href="https://youtu.be/kth3y5WK8O8" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Tutorial</span></a>
            @endguest
            @auth  
              <a href="https://youtu.be/Ajqc3o366wI" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              <a href="https://youtu.be/Ajqc3o366wI" class="glightbox btn-watch-video d-none"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            @endauth
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/arsha/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Micro Learning</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
              
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links offset-lg-6">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Microlearning</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer> --}}
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>

</html>