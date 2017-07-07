<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}"rel="stylesheet">
        <!--external css-->
        <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        <link rel="public/site/stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('js/gritter/css/jquery.gritter.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('lineicons/style.css') }}">    

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">

        <script src="{{ asset('js/chart-master/Chart.js') }}"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
 
        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.php?action=home" class="logo"><b>BET322</b></a>
                <!--logo end-->
                
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">

                        <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="logout"><a href="{{ route('login') }}">Login</a></li>
                            <li class="logout"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    </ul>
                </div>
               
            </header>
        </section>
                @yield('sidebar');
                @yield('content');
    </body>
 </html>

            <!--header end-->

    