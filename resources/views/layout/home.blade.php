
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/sneat/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>home</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/sneat/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/libs/apex-charts/apex-charts.css" />

    @yield('styles')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/sneat/assets/vendor/js/helpers.js"></script>

    {{-- Light Gallery --}}
    

    <script src="/sneat/assets/js/config.js"></script>
    
    <style>
      .w3-animate-left{position:relative;animation:animateleft 0.3s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}

      .w3-animate-right{position:relative;animation:animateright 0.3s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
      
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu" id="layout">
      <div class="layout-container">
        <!-- Menu -->
        {{-- background-image: url('/img/sidebar.png'); background-size: cover; background-repeat: no-repeat; background-position: center; --}}
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="display: none; background-image: url('/img/sidebar.png'); background-size: cover; background-repeat: no-repeat; background-position: center; z-index: 1100;">
          <div class="app-brand demo">
            <a href="/home" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="/img/logo.png" alt="" style="background-size: cover; width:10rem;">
              </span>
              {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
            </a>
            {{-- <h5 class="fw-bold text-primary">DASHBOARD ADMIN</h5> --}}
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block" id="panah">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase" >
              <span class="menu-header-text">Main Menu</span>
            </li>
            <li class="menu-item {{ Request::is('home') ? 'active' : '' }}">
              <a href="/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics">Beranda</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pembelajaran</span>
            </li>

            <li class="menu-item {{ Request::is('home/pembelajaran*') ? 'active' : '' }}">
              <a href="/home/pembelajaran" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Analytics">Pembelajaran</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('home/list-pembelajaran*') ? 'active' : '' }}">
              <a href="/home/list-pembelajaran" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Analytics">List Pembelajaran</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('home/dashboard-penilaian*') ? 'active' : '' }}">
              <a href="/home/dashboard-penilaian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-reader"></i>
                <div data-i18n="Analytics">Dashboard Penilaian</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Tentang Kami</span>
            </li>

            <li class="menu-item {{ Request::is('home/gallery*') ? 'active' : '' }}">
              <a href="/home/gallery" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Analytics">Galeri</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('home/tentang-aplikasi*') ? 'active' : '' }}">
              <a href="/home/tentang-aplikasi" class="menu-link">
                <i class="menu-icon tf-icons bx bx-world"></i>
                <div data-i18n="Analytics">Tentang Aplikasi</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page ">
          <!-- Navbar -->
          {{-- background-image: url('/img/navbar.png'); background-size: cover; background-repeat: no-repeat; background-position: center; --}}
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar" style="z-index: 1098;"
          >
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0" id="pagar">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">


                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    
                    <div class="avatar avatar-online">
                      
                      <img src="/sneat/assets/img/avatars/avatar5.png" alt class="w-px-40 h-auto rounded-circle" />
                      
                    </div>
                    
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/sneat/assets/img/avatars/avatar5.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">{{ auth()->user()->role }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    @can('admin')
                    <li>
                      <a class="dropdown-item" href="/admin/dashboard">
                        <i class="bx bxs-dashboard me-1"></i>
                        <span class="align-middle">Dashboard</span>
                      </a>
                    </li>
                    @endcan
                    <li>
                      <form action="/logout" method="post" class="form-class m-0">
                        @csrf
                        
                        <button type="submit" class="dropdown-item "><i class="bx bx-power-off me-2"></i><span class="align-middle">Logout</span></button>
                      </form>
                    </li>
                  </ul>
                  
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle" id="abuabu"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/sneat/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/sneat/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/sneat/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    @yield('script')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    

    <script>
      function buttonConfirm(id) {
          // let id = $('#confirmbutton').attr('data-id')
          let url = $('#confirmbutton').attr('data-name')
          swal({
                  title: "Apa Kamu Yakin?",
                  text: "Setelah dihapus, Anda tidak dapat memulihkan data ini",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                      swal("Data berhasil di hapus!", {
                          icon: "success",
                          timer: 1000,
                      });
                      setTimeout(function() {
                          window.location.href = "/admin/" + url + "/" + id;
                      }, 500);

                  }
              });
      }
    </script>
    <script>
        let pagar = document.querySelector('#pagar');
        let panah = document.querySelector('#panah');
        let layout = document.querySelector('#layout');
        let layoutmenu = document.querySelector('#layout-menu');
        let abuabu = document.querySelector('#abuabu');

        abuabu.addEventListener('click', function(){
            layout.classList.toggle('layout-without-menu');
            layoutmenu.classList.toggle('d-block');
            layoutmenu.classList.toggle('w3-animate-left');
        })
        panah.addEventListener('click', function() {
            layout.classList.toggle('layout-without-menu');
            layoutmenu.classList.toggle('d-block');
            layoutmenu.classList.toggle('w3-animate-left');
            // layoutmenu.classList.toggle('w3-animate-right');
            // pagar.style.display = "block";
        })
        pagar.addEventListener('click', function() {
            layout.classList.toggle('layout-without-menu');
            layoutmenu.classList.toggle('d-block');
            layoutmenu.classList.toggle('w3-animate-left');
            // layoutmenu.classList.toggle('w3-animate-right');
            // pagar.style.display = "none";
        })
    </script>
    
    
  </body>
</html>
