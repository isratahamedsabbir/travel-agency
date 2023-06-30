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
<!-- Registration Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header bg-primary text-center p-4">
					<h1 class="text-white m-0">complete Your Order</h1>
				</div>
				<div class="card-body rounded-bottom bg-white p-5">
					<form action="{{ url('payment/offline/function') }}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Title</label>
									<input type="text" class="form-control p-4" name="title" value="{{ $package->title }}" required="required" />
								</div>
							</div>
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
									<label for="">Phone</label>
									<input type="text" class="form-control p-4" name="phone" placeholder="Your mobile" required="required" />
								</div>
							</div>
							<div class="col-md-6 d-none">
								<div class="form-group">
									<label for="">Category</label>
									<input type="text" class="form-control p-4" name="category" value="{{App\Models\Category::find($package->category)->id}}" required="required" />
								</div>
							</div>
							<div class="col-md-6 d-none">
								<div class="form-group">
									<label for="">Sub Category</label>
									<input type="text" class="form-control p-4" name="subcategory" value="{{App\Models\Subcategory::find($package->subcategory)->id}}" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Price</label>
									<input type="text" class="form-control p-4" value="{{ $package->price }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Discount</label>
									<input type="text" class="form-control p-4"  value="{{ $package->discount }}" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="">Total Price</label>
									<input type="text" class="form-control p-4" name="amount" value="{{ $package->price - $package->discount }}" required="required" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="country">Country</label>
									<select class="form-control" name="country" id="countries" required>
										<option value="">Choose...</option>
										@foreach($country as $country_value)
											<option value="{{ $country_value->id }}">{{ $country_value->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="cities">City</label>
									<select class="form-control" id="cities" name="city" required></select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="postcode">Postcode</label>
									<input type="text" class="form-control p-4" name="postcode" value="" required="required" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="">Address</label>
									<textarea class="form-control p-4" name="address"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div>
									<button class="btn btn-primary btn-block py-3" type="submit" name="submit" value="insert">Payment</button>
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


@include('traveler\inc\gallery')
@endsection
@section('script')
<script>
$(document).ready(function(){
    $('#countries').change(function(){
        var country_id = $('#countries').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type : 'POST',
            url : '/dashboard/ajax/get/cities/data',
            data : {country_id:country_id},
            success : function(data){
                $('#cities').html(data);
            }
        });
    });
});
</script>
@endsection

