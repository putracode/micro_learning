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

    <title>Dashboard - @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="/sneat/assets/img/favicon/favicon.ico" /> --}}
    <link href="/img/favicon.jpg" rel="icon">

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

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/sneat/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="/img/logo.png" alt="" style="background-size: cover; width:10rem;">
              </span>
              {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
            </a>

            {{-- <h5 class="fw-bold text-primary">DASHBOARD ADMIN</h5> --}}
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Dashboard</span>
            </li>
            <li class="menu-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
              <a href="/admin/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pembelajaran</span>
            </li>
            <!-- Layouts -->
            <li class="menu-item {{ Request::is('admin/list-pembelajaran*') ? 'active' : '' }}">
              <a href="/admin/list-pembelajaran" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Analytics">List Pembelajaran</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Layouts">Materi Bidang</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/p/aklik" class="menu-link">
                    <div data-i18n="Without menu">Bidang Aktivasi Publik</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/aklis" class="menu-link">
                    <div data-i18n="Without navbar">Bidang Aktivasi Listrik</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/na3p" class="menu-link">
                    <div data-i18n="Container">Bidang NA3P</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/pemeliharaan" class="menu-link">
                    <div data-i18n="Fluid">Bidang Pemeliharaan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/retail" class="menu-link">
                    <div data-i18n="Blank">Bidang Retail</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/spap" class="menu-link">
                    <div data-i18n="Blank">Bidang SPAP</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/sarju" class="menu-link">
                    <div data-i18n="Blank">Bidang Sarju</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Layouts">Materi Umum</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/admin/p/foc" class="menu-link">
                    <div data-i18n="Without menu">FOC</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/admin/p/fot" class="menu-link">
                    <div data-i18n="Without navbar">FOT</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{ Request::is('admin/dashboard-penilaian*') ? 'active' : '' }}">
              <a href="/admin/dashboard-penilaian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-reader"></i>
                <div data-i18n="Analytics">Dashboard Penilaian</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Halaman</span>
            </li>
            <li class="menu-item {{ Request::is('admin/gallery*') ? 'active' : '' }}">
              <a href="/admin/gallery" class="menu-link">
                <i class="menu-icon tf-icons bx bx-image"></i>
                <div data-i18n="Analytics">Galeri</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pengguna</span>
            </li>
            <li class="menu-item {{ Request::is('admin/user*') ? 'active' : '' }}">
              <a href="/admin/user" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Analytics">Daftar User</div>
              </a>
            </li>
            <li class="menu-item {{ Request::is('admin/permohonan-user*') ? 'active' : '' }}">
              <a href="/admin/permohonan-user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                <div data-i18n="Analytics">Permohonan User</div>
                <span class="badge badge-center rounded-pill bg-info ms-2">{{ $permohonan }}</span>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
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
                      <img src="/sneat/assets/img/avatars/avatars5.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/sneat/assets/img/avatars/avatars5.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/">
                        <i class="bx bx-home me-2"></i>
                        <span class="align-middle">Homepage</span>
                      </a>
                    </li>
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
                @if (session()->has('success'))    
                  <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
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
      <div class="layout-overlay layout-menu-toggle"></div>
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
        function buttonConfirm(id){
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
                setTimeout(function () {
                    window.location.href = "/admin/" + url + "/" + id; 
                }, 500);
                
            } 
            });
        }
    </script>
  </body>
</html>
