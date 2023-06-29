<style>
.bg-registration{
	background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('uploads/'.$contact->bg_img) }}), no-repeat center center;
  	background-size: cover;
}
</style>
<!-- Registration Start -->
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
	<div class="container py-5">
		<div class="row align-items-center">
			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="mb-4">
					<h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{ $contact->name }}</h6>
					<h1 class="text-white">{{ $contact->first_title }}<span class="text-primary"> {{ $contact->last_title }}</span></h1>
				</div>
				<span class="text-white">{{ $contact->description }}</span>
				<ul class="list-inline text-white m-0">
				@php
					$contact_array = explode(", ", $contact->list);
				@endphp
				@foreach($contact_array as $contact_value)
					<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>{{$contact_value}}</li>
				@endforeach
				</ul>
			</div>
			<div class="col-lg-5">
				<div class="card border-0">
					<div class="card-header bg-primary text-center p-4">
						<h1 class="text-white m-0">Contact With Us</h1>
					</div>
					<div class="card-body rounded-bottom bg-white p-5">
						<form action="{{ url('message/insert/function') }}" method="post">
							@csrf
							<div class="form-group">
								<input type="text" name="name" class="form-control p-4" placeholder="Your name" required="required" />
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control p-4" placeholder="Your email" required="required" />
							</div>
							<div class="form-group">
								<input type="text" name="mobile" class="form-control p-4" placeholder="Your email" required="required" />
							</div>
							<div class="form-group">
								<textarea name="message" class="form-control p-4" required="required">Message</textarea>
							</div>
							<div>
								<button class="btn btn-primary btn-block py-3" type="submit" name="submit" value="insert">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->