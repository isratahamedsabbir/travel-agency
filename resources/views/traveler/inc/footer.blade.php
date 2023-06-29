 <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
	<div class="text-center">
		<a href="#" class="navbar-brand"><h1 class="text-primary"><span class="text-white">{{ $setting->first_name }}</span>{{ $setting->last_name }}</h1></a>
	</div>
	<div class="row pt-5">
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">About</h5>
			<p>{{ $setting->description }}</p>
			<h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
			<div class="d-flex justify-content-start">
				<a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
				<a class="btn btn-outline-primary btn-square mr-2" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
				<a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
			<div class="d-flex flex-column justify-content-start">
				@foreach($service as $service_key => $service_value)
					<p><i class="fa fa-angle-right mr-2"></i> {{ $service_value->name }}</p>
				@endforeach	
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
			<div class="d-flex flex-column justify-content-start">
				<a href="{{ url('frontend/hotel') }}" class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i> {{ __('data.hotel') }}</a>
				<a href="{{ url('frontend/visa') }}" class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i> {{ __('data.visa') }}</a>
				<a href="{{ url('frontend/ticket') }}" class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i> {{ __('data.air ticket') }}</a>
				<a href="{{ url('frontend/umrah') }}" class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i> {{ __('data.umrah') }}</a>
				<a href="{{ url('frontend/contact') }}" class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i> {{ __('data.contact') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
			<p><i class="fa fa-map-marker-alt mr-2"></i>{{ $setting->address }}</p>
			@php
				$email_array = explode(", ", $setting->email);
				$mobile_array = explode(", ", $setting->mobile);
			@endphp
			@foreach($email_array as $email_value)
				<p><i class="fa fa-box mr-2"></i> {{ $email_value }}</p>
			@endforeach
			@foreach($mobile_array as $mobile_value)
				<p><i class="fa fa-phone-alt mr-2"></i> {{ $mobile_value }}</p>
			@endforeach
			<h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
			<div class="w-100">
				<div class="input-group">
					<form action="{{ url('subscriber/insert/function') }}" method="post">
						@csrf
						<input type="email" name="email" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
						<div class="input-group-append">
							<button type="submit" class="btn btn-primary px-3" name="submit" value="insert">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
	<div class="row">
		<div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
			<p class="m-0 text-white-50">Copyright &copy; <a href="https://profile.elementfx.com/">Extra</a>. All Rights Reserved.</a>
			</p>
		</div>
		<div class="col-lg-6 text-center text-md-right">
			<p class="m-0 text-white-50">Designed by <a href="https://profile.elementfx.com/">Sabbir</a>
			</p>
		</div>
	</div>
</div>
<!-- Footer End -->