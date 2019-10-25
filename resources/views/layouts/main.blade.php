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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables/media/css/jquery.dataTables.css') }}">
    @yield('style')
</head>
<body>
    <div id="app">
        <div class="header"></div>
        <div class="content col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            @include('elements.header')
            @include('elements.menu')
            @yield('content')
        </div>
        <div class="footer"></div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    @yield('script')
</body>
</html>
