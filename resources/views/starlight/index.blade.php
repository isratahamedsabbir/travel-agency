@extends('starlight/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Starlight Responsive Bootstrap 4 Admin Template</title>
@endsection
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
		@include('starlight/inc/alert')
      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Order</h6>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $order =  App\Models\Order::all()->count() }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Air Ticket</h6>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $ticket = App\Models\Ticket::all()->count() }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Hotel</h6>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $hotel = App\Models\Hotel::all()->count() }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total</h6>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $order+$ticket+$hotel }}</h3>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        

		<div class="card pd-20 pd-sm-40 mg-t-20">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
		  <form action="{{ url('user/info/update/'.Auth::id()) }}" method="post"  enctype="multipart/form-data">
			@csrf
			  <div class="form-layout">
				<div class="row mg-b-25">
				
				  <div class="col-lg-8">
				  
					<div class="form-group">
					  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
					</div>
				  
				  
				  
					<div class="form-group">
					  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}">
					</div>
				  
				  
				  
				 
					<div class="form-group">
					  <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="mobile" value="{{ Auth::user()->mobile }}">
					</div>
				  
				  
				  
					<div class="form-group">
					  <label class="form-control-label">Photo: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="photo">
					</div>
				  
				  
					<div class="form-group">
					  <label class="form-control-label">Desctiption: <span class="tx-danger">*</span></label>
					  <textarea id="description" class="form-control" name="desctiption">{{ Auth::user()->desctiption }}</textarea>
					</div>
				  </div><!-- col-8 -->
				  
				  <div class="col-lg-4">
					<div class="form-group">
						<img src="{{ asset('uploads/'.Auth::user()->photo) }}" class="img-thumbnail rounded float-right"/>
						<h3 class="text-center py-4">{{ Auth::user()->name }}</h3>
					</div>
				  </div><!-- col-4 -->
				  
				  
				  
				</div><!-- row -->
			</form>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit" name="submit" value="update">Update</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->



      </div><!-- sl-pagebody -->
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
function editor(id){
	CKEDITOR.replace(id, {
		filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
}
editor('description');
</script>
@endsection
