<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

  
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/chart-morris/css/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
   
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
               <a class="b-brand">
                   <div class="b-bg b-brand">
                       <i class="feather icon-shopping-cart"></i>
                   </div>
                   <span class="b-title">S I T O M I</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <br><br><br><br>
            <div class="pro-head">
                <li class="nav-item pcoded-menu-caption">
                    @if (auth()->user()->image == NULL)
                        <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" width="50" height="50" class="img-radius" alt="User-Profile-Image">
                    @endif
                    @if (auth()->user()->image != NULL)
                        <img src="/assets/images/user/{{ auth()->user()->image }}" width="50" height="50" class="img-radius" alt="User-Profile-Image">
                    @endif
                    &nbsp &nbsp<span>{{ auth()->user()->nama_pengguna }}</span>
                </li>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Dashboard</label>
                    </li>
                    <li data-username="dashboard" class="nav-item {{ ($title === "Dashboard") ? 'active' : ''}}">
                        <a href="/dashboard_kasir" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li data-username="pembelian manual" class="nav-item {{ ($title === "Pembelian Manual") ? 'active' : ''}}"><a href="/pembelian_manual" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Pembelian Manual</span></a></li>
                    <li data-username="pesanan" class="nav-item {{ ($title === "Daftar Pesanan") ? 'active' : ''}} {{ ($title === "Pesanan") ? 'active' : ''}}">
                        <a href="/daftar_pesanan_kasir" class="nav-link "><span class="pcoded-micon"><i class="feather icon-trending-up"></i></span><span class="pcoded-mtext">Pesanan</span></a>
                    </li>
                    <li data-username="daftar obat" class="nav-item {{ ($title === "Daftar Obat") ? 'active' : ''}}">
                        <a href="/daftar_obat_kasir" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Daftar Obat</span></a>
                    </li>
                    <li data-username="Keluar" class="nav-item disabled"><a href="/" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Keluar</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="Dashboard Admin.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                @if (auth()->user()->image == NULL)
                                    <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                @endif
                                @if (auth()->user()->image != NULL)
                                    <img src="/assets/images/user/{{ auth()->user()->image }}" class="img-radius" alt="User-Profile-Image">
                                @endif
                                <span>{{ auth()->user()->nama_pengguna }}</span>
                                <a href="/" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="/profile/{{ auth()->user()->id_pengguna }}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                @yield('container')
                </div>
            </div>
        </div>            
    </div>

    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

</body>
</html>