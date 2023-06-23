<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
				<div class="d-inline-flex align-items-center">
					<p><i class="fa fa-envelope mr-2"></i>{{ $setting->email }}</p>
					<p class="text-body px-3">|</p>
					<p><i class="fa fa-phone-alt mr-2"></i>{{ '+088'.$setting->mobile }}</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-primary px-3" href="{{ $setting->facebook }}">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-primary px-3 d-none" href="{{ $setting->twitter }}">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="text-primary px-3 d-none" href="{{ $setting->linkedin }}">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a class="text-primary px-3 d-none" href="{{ $setting->instagram }}">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="text-primary pl-3 d-none" href="{{ $setting->youtube }}">
						<i class="fab fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
	<div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
		<nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
			<a href="" class="navbar-brand">
				<h1 class="m-0 text-primary"><span class="text-dark">{{ $setting->first_name }}</span>{{ $setting->last_name }}</h1>
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
				<div class="navbar-nav ml-auto py-0">
					<a href="index.html" class="nav-item nav-link active">Home</a>
					<a href="about.html" class="nav-item nav-link">About</a>
					<a href="service.html" class="nav-item nav-link">Services</a>
					<a href="package.html" class="nav-item nav-link">Tour Packages</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
						<div class="dropdown-menu border-0 rounded-0 m-0">
							<a href="blog.html" class="dropdown-item">Blog Grid</a>
							<a href="single.html" class="dropdown-item">Blog Detail</a>
							<a href="destination.html" class="dropdown-item">Destination</a>
							<a href="guide.html" class="dropdown-item">Travel Guides</a>
							<a href="testimonial.html" class="dropdown-item">Testimonial</a>
						</div>
					</div>
					<a href="contact.html" class="nav-item nav-link">Contact</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
	<div id="header-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="w-100" src="{{ asset('traveler/img/carousel-1.jpg' ) }}" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
						<h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
						<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="w-100" src="{{ asset('traveler/img/carousel-2.jpg' ) }}" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
						<h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
						<a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-prev-icon mb-n2"></span>
			</div>
		</a>
		<a class="carousel-control-next" href="#header-carousel" data-slide="next">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-next-icon mb-n2"></span>
			</div>
		</a>
	</div>
</div>
<!-- Carousel End -->