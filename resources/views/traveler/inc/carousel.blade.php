
<!-- Carousel Start -->
<div class="container-fluid p-0">
	<div id="header-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<!-- Carousel wrapper -->
			<div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
			  <!-- Inner -->
			  <div class="carousel-inner">
				@foreach($carousel as $carousel_key => $carousel_value)
					<div class="carousel-item {{ $carousel_key ==1 ? 'active' : '' }}">
					  	@if(str_contains($carousel_value->picture, '.mp4'))
							<video class="img-fluid" autoplay loop muted>
								<source src="{{ url('uploads/'.$carousel_value->picture) }}" type="video/mp4" />
							</video>
						@else
							<img class="img-fluid" src="{{ url('uploads/'.$carousel_value->picture) }}" />
						@endif
					</div>
				@endforeach
			  </div>
			  <!-- Inner -->
			</div>
			<!-- Carousel wrapper -->
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















<!-- Booking Start -->
<div class="container-fluid booking mt-5 pb-5">
	<div class="container pb-5">
		<div class="bg-light shadow" style="padding: 30px;">
			<div class="row align-items-center" style="min-height: 60px;">
				<div class="col-md-12">
					<div class="row">
						<marquee>
							@foreach($recent_package as $recent_package_key => $recent_package_value)
								<a style="font-size:40px;" href="{{ url('package/single/'.$recent_package_value->id) }}"><img class="img-thumbnail" src="{{ asset('uploads/'.$recent_package_value->thumb) }}" style="width:60px;" alt="">
                               	{{ $recent_package_value->title }}</a>
							@endforeach
						</marquee>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Booking End -->