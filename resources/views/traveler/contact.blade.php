@extends('traveler/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link href="{{ asset('traveler/img/favicon.ico' ) }}" rel="icon">
    <title>Starlight Responsive Bootstrap 4 Admin Template</title>
@endsection
@section('content')
@include('traveler\inc\contact')
@include('traveler\inc\mobile')
@include('traveler\inc\gallery')
@endsection
    

