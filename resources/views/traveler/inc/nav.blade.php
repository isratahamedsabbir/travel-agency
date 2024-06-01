<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
				<div class="d-inline-flex align-items-center">
					@php
						$email_array = explode(", ", $setting->email);
						$mobile_array = explode(", ", $setting->mobile);
					@endphp
					<p><i class="fa fa-envelope mr-2"> {{ $email_array[0] }}</i></p>
					<p class="text-body px-3">|</p>
					<p><i class="fa fa-phone-alt mr-2"></i> {{ $mobile_array[0] }}</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-right">
				<div class="d-inline-flex align-items-center">
					<a class="text-primary px-3" href="{{ $setting->facebook }}">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a class="text-primary px-3" href="{{ $setting->twitter }}">
						<i class="fab fa-twitter"></i>
					</a>
					<a class="text-primary px-3" href="{{ $setting->linkedin }}">
						<i class="fab fa-linkedin-in"></i>
					</a>
					<a class="text-primary px-3" href="{{ $setting->instagram }}">
						<i class="fab fa-instagram"></i>
					</a>
					<a class="text-primary pl-3" href="{{ $setting->youtube }}">
						<i class="fab fa-youtube"></i>
					</a>
					<a class="text-primary pl-3" href="{{ url('language/en') }}">EN</a>
					<a class="text-primary pl-3" href="{{ url('language/bn') }}">BN</a>
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
			<a href="#" class="navbar-brand">
				<img src="{{ asset('uploads/'.$setting->icon) }}" style="width:80px;height:80px;"/>
			</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
				<div class="navbar-nav ml-auto py-0">
					<a href="{{ url('/') }}" class="nav-item nav-link">{{ __('data.home') }}</a>
					<div class="nav-item dropdown">
					  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('data.package') }}</a>
					  <ul class="dropdown-menu border-0 rounded-0 m-0" aria-labelledby="navbarDropdown">
						@foreach($category as $category_key => $category_value)
							<li class="dropdown">
								<a href="{{ url('package/category/'.$category_value->id) }}" class="dropdown-item">{{ $category_value->name }}</a>
								
								@php
									// Filter subcategories for the current category
									$filteredSubcategories = $subcategory->filter(function($subcategory_value) use ($category_value) {
										return $subcategory_value->category == $category_value->id;
									});
								@endphp

								@if($filteredSubcategories->isNotEmpty())
									<ul class="dropdown-menu" style="margin-top:-30px; margin-left:160px;">
										@foreach($filteredSubcategories as $subcategory_value)
											<li><a href="{{ url('package/subcategory/'.$subcategory_value->id) }}" class="dropdown-item">{{ $subcategory_value->name }}</a></li>
										@endforeach
									</ul>
								@endif
							</li>
						@endforeach
					  </ul>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('data.hotel') }}</a>
						<div class="dropdown-menu border-0 rounded-0 m-0">
							<a href="{{ url('frontend/hotel') }}" class="dropdown-item">National</a>
							<a href="{{ url('frontend/hotel') }}" class="dropdown-item">International</a>
						</div>
					</div>
					<a href="{{ url('frontend/visa') }}" class="nav-item nav-link">{{ __('data.visa') }}</a>
					<a href="{{ url('frontend/ticket') }}" class="nav-item nav-link">{{ __('data.air ticket') }}</a>
					<a href="{{ url('frontend/umrah') }}" class="nav-item nav-link">{{ __('data.umrah') }}</a>
					<a href="{{ url('frontend/contact') }}" class="nav-item nav-link">{{ __('data.contact') }}</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- Navbar End -->
