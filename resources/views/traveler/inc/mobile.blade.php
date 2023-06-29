<!-- Registration Start -->
<div class="container-fluid py-2">
	<div class="container py-2">
		<div class="align-items-center">
			<div class="card border-0">
				<div class="card-header text-center p-2">
					<h1 class="m-0">Cantact To Us For Booking</h1>
				</div>
				<div class="card-body rounded-bottom bg-white p-4">
                    @php
                        $mobile_array = explode(", ", $setting->mobile);
                    @endphp
                    @foreach($mobile_array as $mobile_value)
                        <p><i class="fa fa-phone-alt mr-2"></i> {{ $mobile_value }}</p>
                    @endforeach
                </div>
			</div>
		</div>
	</div>
</div>
<!-- Registration End -->