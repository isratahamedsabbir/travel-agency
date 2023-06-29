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
@include('traveler\inc\carousel')
@include('traveler\inc\about')


<!-- Service Start -->
<div class="container-fluid py-5">
	<div class="container pt-5 pb-3">
		<div class="text-center mb-3 pb-3">
			<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
			<h1>{{__('data.service')}}</h1>
		</div>
		<div class="row">
		@foreach($service as $service_key => $service_value)
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-item bg-white text-center mb-2 py-5 px-4">
					{!!$service_value->icon!!}
					<h5 class="mb-2">{{ $service_value->name }}</h5>
					<p class="m-0">{{ $service_value->title }}</p>
				</div>
			</div>
		@endforeach	
		</div>
	</div>
</div>
<!-- Service End -->


<!-- Packages Start -->
<div class="container-fluid py-5">
	<div class="container pt-5 pb-3">
		<div class="text-center mb-3 pb-3">
			<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
			<h1>{{__('data.packages')}}</h1>
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
										<a href="{{ url('payment/'.$package_value->id) }}" class="btn btn-primary">Buy Now</a>
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


@include('traveler\inc\contact')


@include('traveler\inc\testimonial')


<!-- Blog Start -->
<div class="container-fluid py-5">
	<div class="container pt-5 pb-3">
		<div class="text-center mb-3 pb-3">
			<h1>{{__('data.memberships')}}</h1>
		</div>
		<div class="row pb-3">
			@foreach($membership as $membership_key => $membership_value)
				<div class="col-lg-4 col-md-6 mb-4 pb-2">
					<div class="blog-item">
						<div class="position-relative">
							<img class="img-fluid w-100" src="{{ asset('uploads/'.$membership_value->image ) }}" alt="">
							<div class="blog-date">
								<h6 class="font-weight-bold mb-n1">*</h6>
							</div>
						</div>
						<div class="bg-white p-4">
							<div class="d-flex mb-2">
								<a class="text-primary text-uppercase text-decoration-none" href="">Code</a>
								<span class="text-primary px-2">|</span>
								<a class="text-primary text-uppercase text-decoration-none" href="">{{ $membership_value->code }}</a>
							</div>
							<a class="h5 m-0 text-decoration-none" href="">{{ $membership_value->title }}</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Blog End -->
@include('traveler/inc/gallery')
@endsection
    

