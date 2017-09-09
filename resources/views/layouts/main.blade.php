<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
    @yield('style')
</head>
<body>
    <div id="app">
        <div class="header"></div>
        <div class="content col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <div class="top row">
                <div class="col-md-1 col-sm-2 col-xs-3" style="text-align: right; padding-top: 10px">
                    <img src="{{ url('img/icon-soict.png') }}">
                </div>
                <div class="col-md-6" style="padding-top: 75px">
                    <div class="institute-name" style="font-size: 1.3em">VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</div>
                    <div class="manage-system">HỆ THỐNG QUẢN LÝ THỰC TẬP</div>
                </div>
            </div>

      {{--   <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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
                </div>
        </nav> --}}

            <nav class="navbar navbar-default mega-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav menu-list">
                        <li class="dropdown list-category">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Trang chủ<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li><a href="#">Cushion</a></li>
                                <li><a href="#">Bath</a></li>
                                <li><a href="#">Air Conditioner</a></li>
                                <li><a href="#">Radiator</a></li>
                                <li><a href="#">Washing Machine</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li class="dropdown list-category">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" 
                                role="button" aria-haspopup="true" aria-expanded="false">Gioi</a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li><a href="#">Cushion</a></li>
                                <li><a href="#">Bath</a></li>
                                <li><a href="#">Air Conditioner</a></li>
                                <li><a href="#">Radiator</a></li>
                                <li><a href="#">Washing Machine</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
        <div class="footer"></div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    @yield('script')
</body>
</html>
