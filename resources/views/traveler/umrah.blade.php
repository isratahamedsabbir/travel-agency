@extends('traveler/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $setting->title }}">
    <meta name="twitter:description" content="{!!$setting->description!!}">
    <meta name="twitter:image" content="{{asset('uploads/'.$setting->icon)}}">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="{{ $setting->title }}">
    <meta property="og:description" content="{!!$setting->description!!}">
    <meta property="og:image" content="{{asset('uploads/'.$setting->icon)}}">
    <meta property="og:image:secure_url" content="{{asset('uploads/'.$setting->icon)}}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta content="" name="{{ $setting->keywords }}">
    <meta content="" name="{!!$setting->description!!}">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link href="{{asset('uploads/'.$setting->icon)}}" rel="icon">
    <title>{{ $setting->title }}</title>
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
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <img src="{{ asset('add.gif') }}" width="100%" height="200px"/>
    </div>
</div>
<!-- Registration Start -->
<div class="container-fluid bg-registration py-5">
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
@include('traveler/inc/mobile')
@include('traveler/inc/gallery')
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
    

