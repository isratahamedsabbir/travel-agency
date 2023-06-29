<!-- Testimonial Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="text-center mb-3 pb-3">
			<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
			<h1>{{__('data.testimonial')}}</h1>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Click here to comment</button>
		</div>
		<div class="owl-carousel testimonial-carousel">
			@foreach($review as $review_key => $review_value)
				<div class="text-center">
					<img class="img-fluid mx-auto" src="{{ asset('uploads/'.$review_value->photo) }}" style="width: 100px; height: 100px;" >
					<div class="testimonial-text bg-white p-4 mt-n5">
						<p class="mt-5">{{ $review_value->message }}</p>
						<h5 class="text-truncate">{{ $review_value->name }}</h5>
						<span>{{ $review_value->company }}</span>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Testimonial End -->