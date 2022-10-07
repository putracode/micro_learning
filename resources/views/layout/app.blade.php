<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="/voler/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/voler/dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="/voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/voler/dist/assets/css/app.css">
    <link rel="shortcut icon" href="/voler/dist/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    @yield('css')
    <style>*{
        /* border: 1px solid; */
        /* font-family: 'Poppins', sans-serif; */
        font-family: 'Roboto', sans-serif;

    }</style>
</head>

<body >
    <div id="app">
        <div id="sidebar" class="activ">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="/img/logo.png" alt="" srcset="" style="width: 195px; height: 175px;">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class='sidebar-title m-0'>Main Menu</li>

                        <li class="sidebar-item {{ Request::is('home') ? 'active' : '' }}">
                            <a href="/home" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Beranda</span>
                            </a>

                        </li>

                        <li class="sidebar-item {{ Request::is('list-pembelajaran') ? 'active' : '' }}">
                            <a href="/home/list-pembelajaran" class='sidebar-link'>
                                <i data-feather="book-open" width="20"></i>
                                <span>List Pembelajaran</span>
                            </a>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="book" width="20"></i>
                                <span>Pembelajaran</span>
                            </a>

                            <ul class="submenu ">
                                <li>
                                    <a href="/home/p/bidang-aktivasi-publik">Bidang Aktivasi Publik (AKLIK)</a>
                                </li>
                                <li>
                                    <a href="/home/p/bidang-aktivasi-listrik">Bidang Aktivasi Listrik (AKLIS)</a>
                                </li>
                                <li>
                                    <a href="/home/p/bidang-NA3P">Bidang NA3P</a>
                                </li>
                                <li>
                                    <a href="/home/p/bidang-pemeliharaan">Bidang Pemeliharaan</a>
                                </li>
                                <li>
                                    <a href="/home/p/bidang-retail">Bidang Retail</a>
                                </li>
                                <li>
                                    <a href="/home/p/bidang-SPAP">Bidang SPAP</a>
                                </li>
                                <li>
                                    <a href="/home/bidang-sarju">Bidang Sarju</a>
                                </li>
                            </ul>
                        </li>

                        <li class='sidebar-title'>Hasil Pembelajaran</li>

                        <li class="sidebar-item">
                            <a href="/home/dashboard-penilaian" class='sidebar-link'>
                                <i data-feather="archive" width="20"></i>
                                <span>Dashboar Penilaian</span>
                            </a>
                        </li>

                        <li class='sidebar-title'>Tentang Kami</li>

                        <li class="sidebar-item">
                            <a href="/home/gallery" class='sidebar-link'>
                                <i data-feather="image" width="20"></i>
                                <span>Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Request::is('tentang-aplikasi') ? 'active' : '' }}">
                            <a href="/home/tentang-aplikasi" class='sidebar-link'>
                                <i data-feather="globe" width="20"></i>
                                <span>Tentang Aplikasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        {{-- style="background-image: url('/img/bgc.jpg'); background-size: cover; background-repeat: no-repeat" --}}
        <div id="main" >
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    {{-- <img src="/voler/dist/assets/images/avatar/avatar-s-1.png" alt="" srcset=""> --}}
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, {{ auth()->user()->name }}
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                @can('admin')
                                <a class="dropdown-item" href="/admin/dashboard"><i data-feather="grid"
                                        class="mr-1"></i>Dashboard</a>
                                <div class="dropdown-divider"></div>
                                @endcan
                                <form action="/logout" method="post" class="form-class">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i data-feather="log-out"
                                            class="mr-1"></i>Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <section class="section">
                    @yield('content')
                </section>
            </div>

            {{-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
    <script src="/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="/voler/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/voler/dist/assets/js/app.js"></script>

    <script src="/voler/dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/voler/dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/voler/dist/assets/js/pages/dashboard.js"></script>

    <script src="/voler/dist/assets/js/main.js"></script>
</body>

</html>
