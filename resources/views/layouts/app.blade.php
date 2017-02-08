<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ elixir('images/favicon.png') }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ elixir('css/login.css') }}" rel="stylesheet"/>
    <link href="{{ elixir('css/style.css') }}" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="menuclic" class="fix-sidebar">
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
               data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href="/">
                    <b>
                        <img src="/images/logo-white.png" alt="home"
                             style="height: 60px; margin-left: 10px; margin-top: -4px" class="hidden-xs"/>
                        <img src="/images/logo-white-xs.png" alt="home" style="height: 55px; margin-top: 5px"
                             class="visible-xs"/>
                    </b>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Buscar..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                        <span class="fa fa-user"></span>
                        <b class="hidden-xs">{{ \Illuminate\Support\Facades\Session::get('user')->name }}</b>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <a href="/profile">
                                <span class="fa fa-user"></span> Mi Perfil
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="/logout">
                                <i class="fa fa-power-off"></i> Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/">
                        <i class="fa fa-dashboard"></i>
                        <span class="hide-menu"> Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/places">
                        <i class="fa fa-coffee"></i>
                        <span class="hide-menu"> Lugares</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">@yield('main-title')</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            @yield('content')
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> {{ date('Y') }} &copy; Menuclic.com </footer>
    </div>
</div>
<script src="{{ elixir('js/all.js') }}" type="application/javascript"></script>
</body>