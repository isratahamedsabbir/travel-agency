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
@section('content')
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <img src="{{ asset('add.gif') }}" width="100%" height="200px"/>
    </div>
</div>
<!-- Packages Start -->
<div class="container-fluid">
	<div class="container pt-5 pb-3">
		<div class="text-center mb-3 pb-3">
			<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
			<h1>Pefect Tour Packages</h1>
		</div>
		<div class="row">
			@foreach($package as $package_key => $package_value)
				<div class="col-lg-4 col-md-6 mb-4">
						<div class="package-item bg-white mb-2">
							<img class="img-fluid" src="{{ asset('uploads/'.$package_value->thumb) }}" alt="">
							<div class="p-4">
								<div class="d-flex justify-content-between mb-3">
									<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ App\Models\Category::find($package_value->category)->name }}</small>
									<small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ App\Models\Subcategory::find($package_value->subcategory)->name }}</small>
									<small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ naturalDate($package_value->created_at) }}</small>
								</div>
								<a class="h5 text-decoration-none" href="{{ url('package/single/'.$package_value->id) }}">{{ $package_value->title }}</a>
								<div class="border-top mt-4 pt-4">
									<div class="d-flex justify-content-between">
										<a href="{{ url('payment/online/page/'.$package_value->id) }}" class="btn btn-primary">Online</a>
										<a href="{{ url('payment/offline/page/'.$package_value->id) }}" class="btn btn-primary">Offline</a>
										<h5 class="m-0">{{ $package_value->price }} TK</h5>
									</div>
								</div>
							</div>
						</div>
				</div>
			@endforeach
		</div>
		{{ $package->links() }}
	</div>
</div>
<!-- Packages End -->
@include('traveler/inc/gallery')
@endsection
    

