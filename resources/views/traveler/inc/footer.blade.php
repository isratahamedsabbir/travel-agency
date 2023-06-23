 <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
	<div class="row pt-5">
		<div class="col-lg-3 col-md-6 mb-5">
			<a href="" class="navbar-brand">
				<h1 class="text-primary"><span class="text-white">{{ $setting->first_name }}</span>{{ $setting->last_name }}</h1>
			</a>
			<p>{{ $setting->description }}</p>
			<h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
			<div class="d-flex justify-content-start">
				<a class="btn btn-outline-primary btn-square mr-2 d-none" href="#"><i class="fab fa-twitter"></i></a>
				<a class="btn btn-outline-primary btn-square mr-2" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-outline-primary btn-square mr-2 d-none" href="#"><i class="fab fa-linkedin-in"></i></a>
				<a class="btn btn-outline-primary btn-square d-none" href="#"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
			<div class="d-flex flex-column justify-content-start">
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
				<a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
			<div class="d-flex flex-column justify-content-start">
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
				<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
				<a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 mb-5">
			<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
			<p><i class="fa fa-map-marker-alt mr-2"></i>{{ $setting->address }}</p>
			<p><i class="fa fa-phone-alt mr-2"></i>{{ '+088'.$setting->mobile }}</p>
			<p><i class="fa fa-envelope mr-2"></i>{{ $setting->email }}</p>
			<h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
			<div class="w-100">
				<div class="input-group">
					<input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
					<div class="input-group-append">
						<button class="btn btn-primary px-3">Subscribe</button>
					</div>
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