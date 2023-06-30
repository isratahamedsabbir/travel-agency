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
@include('traveler\inc\carousel')

<!-- Destination Start -->
<div class="container-fluid py-5">
	<div class="container pt-5 pb-3">
		<div class="text-center mb-3 pb-3">
			<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
			<h1>{{__('data.destination')}}</h1>
		</div>
		<div class="row">
			@foreach($visa as $visa_key => $visa_value)
				<div class="col-lg-4 col-md-6 mb-4">
					<div class="destination-item position-relative overflow-hidden mb-2">
						<img class="img-fluid" src="{{ asset('uploads/'.$visa_value->thumb) }}" alt="">
						<span class="destination-overlay text-white">
							<h5 class="text-white">{{ $visa_value->name }}</h5>
							<!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $visa_value->id }}">Read More</button>
						</span>
					</div>
				</div>
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal{{ $visa_value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {!!$visa_value->description!!}
                        </div>
                        </div>
                    </div>
                </div>
			@endforeach
		</div>
	</div>
</div>
<!-- Destination Start -->
@include('traveler\inc\testimonial')
@include('traveler\inc\gallery')
@endsection
    

