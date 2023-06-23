<!doctype html>
<html lang="">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
    <!-- vendor css -->
    <link href="{{ asset('starlight/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('starlight/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('starlight/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('starlight/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('starlight/css/starlight.css') }}">
	@yield('style')
</head>
<body>
	@include('starlight/inc/left')
    @include('starlight/inc/head')
    @include('starlight/inc/right')
    @yield('content')
	<script src="{{ asset('starlight/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('starlight/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('starlight/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('starlight/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('starlight/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('starlight/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('starlight/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('starlight/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('starlight/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('starlight/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('starlight/lib/flot-spline/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('starlight/js/starlight.js') }}"></script>
    <script src="{{ asset('starlight/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('starlight/js/dashboard.js') }}"></script>
	@yield('script')
</body>
</html>
