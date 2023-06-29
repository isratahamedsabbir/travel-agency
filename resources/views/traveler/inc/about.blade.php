<!-- About Start -->
<div class="container-fluid py-5">
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-6" style="min-height: 500px;">
				<div class="position-relative h-100">
					<img class="position-absolute w-100 h-100" src="{{ asset('uploads/'.$about->main_img) }}" style="object-fit: cover;">
				</div>
			</div>
			<div class="col-lg-6 pt-5 pb-lg-5">
				<div class="about-text bg-white p-4 p-lg-5 my-lg-5">
					<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
					<h1 class="mb-3">{{ $about->title }}</h1>
					<p>{{ remove_tag($about->description) }}</p>
					<div class="row mb-4">
						<div class="col-6">
							<img class="img-fluid" src="{{ asset('uploads/'.$about->left_img) }}" alt="">
						</div>
						<div class="col-6">
							<img class="img-fluid" src="{{ asset('uploads/'.$about->right_img) }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- Feature Start -->
<div class="container-fluid pb-5">
	<div class="container pb-5">
		<div class="row">
			<div class="col-md-4">
				<div class="d-flex mb-4 mb-lg-0">
					<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
						{!!html_entity_decode($about->one_icon)!!}
					</div>
					<div class="d-flex flex-column">
						<h5 class="">{{ $about->one_name }}</h5>
						<p class="m-0">{{ $about->one_title }}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="d-flex mb-4 mb-lg-0">
					<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
						{!!html_entity_decode($about->two_icon)!!}}
					</div>
					<div class="d-flex flex-column">
						<h5 class="">{{ $about->two_name }}</h5>
						<p class="m-0">{{ $about->two_title }}</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="d-flex mb-4 mb-lg-0">
					<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
						{!!html_entity_decode($about->three_icon)!!}
					</div>
					<div class="d-flex flex-column">
						<h5 class="">{{ $about->three_name }}</h5>
						<p class="m-0">{{ $about->three_title }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Feature End -->