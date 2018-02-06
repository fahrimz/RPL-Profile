<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RPL-Profile') }}</title>

    {{-- Custom --}}
    @if(Auth::check())
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('light/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('light/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    @endif

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app @if(Auth::check()) ? 'wrapper' : '' @endif">
    @if(Auth::check())
        @include('layouts.navbar-admin');
    @else
        @include('layouts.navbar');
    @endif
    @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('light/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    
    {{-- Custom --}}
    {{-- @if(Auth::check()) --}}
    <script src="{{ asset('light/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('light/js/plugins/bootstrap-switch.js') }}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{ asset('light/js/light-bootstrap-dashboard.js?v=2.0.1') }}" type="text/javascript"></script>
    {{-- @endif --}}
</body>
</html>