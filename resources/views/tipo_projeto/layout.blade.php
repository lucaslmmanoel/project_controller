<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Project Controller
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/paper-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/demo.css')}}" rel="stylesheet"/>
</head>

<body>
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="../assets/img/logo-small.png" alt="um logo legal aqui">
                </div>
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                PROJCTRL
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="nc-icon nc-bank"></i>
                        <p>Gerência</p>
                    </a>
                </li>
                <li>
                    <a href="./user.html">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Funcionários</p>
                    </a>
                </li>
                <li>
                    <a href="./tables">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Projetos</p>
                    </a>
                </li>
                </li>
                <li>
                    <a href="./tipo_projeto">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Tipo de Projetos</p>
                    </a>
                </li>
                <li>
                    <a href="./typography.html">
                        <i class="nc-icon nc-bank"></i>
                        <p>Lorem</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#">Project Controller</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Pesquise aqui...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#pablo">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="#pablo">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    @yield('content')

    <!--   Core JS Files   -->
        <script src="{{asset('js/jquery.min.js')}}" defer></script>
        <script src="{{asset('js/popper.min.js')}}" defer></script>
        <script src="{{asset('js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('js/bootstrap.min.js')}}" defer></script>
        <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" defer></script>
        <!-- Chart JS -->
        <script src="{{asset('js/chartjs.min.js')}}" defer></script>
        <script src="{{asset('js/demo.js')}}" defer></script>
        <!--  Notifications Plugin    -->
        <script src="{{asset('js/bootstrap-notify.js')}}" defer></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{asset('js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript" defer></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
</body>

</html>
