<!-- Registration Start -->
<div class="container-fluid py-2">
	<div class="container py-2">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header text-center bg-primary p-4">
					<h1 class="m-0">Cantact To Us For Booking</h1>
				</div>
				<div class="card-body rounded-bottom p-4">
					<ul class="list-inline m-0">
						@php
							$mobile_array = explode(", ", $setting->mobile);
						@endphp
						@foreach($mobile_array as $mobile_value)
							<li class="py-2"><i class="fa fa-check text-danger mr-3"></i> {{ $mobile_value }}</li>
						@endforeach
					</ul>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->