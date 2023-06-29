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
@section('style')
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('simple calendar jquery/css/simple-calendar.css' ) }}">
<link rel="stylesheet" href="{{ asset('simple calendar jquery/css/demo.css' ) }}">
<style>
.bg-registration{
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('uploads/'.$umrah->bg_img) }}), no-repeat center center;
  	background-size: cover;
}
</style>
@endsection
@section('content')
<!-- Registration Start -->
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
	<div class="container py-5">
		<div class="row align-items-center">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="mb-4">
					<h1 class="text-white">Umrah<span class="text-primary"> {{ $umrah->title }}</span></h1>
				</div>
				<span class="text-white">{!!$umrah->description!!}</span>
			</div>
			<div class="col-lg-5">
				<div class="card border-0">
					<div class="card-body rounded-bottom bg-white p-5">
						<img src="{{ asset('uploads/'.$umrah->thumb) }}" style="width:100%;"/>
						<div id="container" class="calendar-container"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->
@include('traveler\inc\mobile')
@include('traveler\inc\gallery')
@endsection
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{ asset('simple calendar jquery/js/jquery.simple-calendar.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#container").simpleCalendar({
			fixedStartDay: false
		});
	});
</script>
@endsection
    

