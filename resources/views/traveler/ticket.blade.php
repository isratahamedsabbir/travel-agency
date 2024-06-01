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
<!-- Registration Start -->
<div class="container-fluid">
	<div class="container py-5">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header bg-primary text-center p-4">
					<h1 class="text-white m-0">Buy Air Ticket</h1>
				</div>
				<div class="card-body rounded-bottom bg-white p-5">
					<form action="{{ url('ticket/insert/function') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control p-4" name="name" placeholder="Your name" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" class="form-control p-4" name="email" placeholder="Your email" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Mobile</label>
									<input type="text" class="form-control p-4" name="mobile" placeholder="Your mobile" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Adult</label>
									<input type="number" class="form-control p-4" name="adult" placeholder="0" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Child</label>
									<input type="number" class="form-control p-4" name="child" placeholder="0" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Travel Date</label>
									<input type="date" class="form-control p-4" name="travel_date" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Return Date</label>
									<input type="date" class="form-control p-4" name="return_date" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Form</label>
									<input type="text" class="form-control p-4" name="form" placeholder="form" required="required" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">To</label>
									<input type="text" class="form-control p-4" name="to" placeholder="to" required="required" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Message</label>
									<textarea class="form-control p-4" name="message">sir, </textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<button class="btn btn-primary btn-block py-3" type="submit" name="submit" value="insert">Buy Ticket</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->

@include('traveler/inc/mobile')


@include('traveler/inc/gallery')
@endsection
    

