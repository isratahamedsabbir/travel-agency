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
        <span class="breadcrumb-item active">Insert</span>
      </nav>
		@include('starlight/inc/alert')
      <div class="sl-pagebody">
		<div class="sl-page-title">
          <h5>Form Layouts</h5>
          <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Top Label Layout</h6>
          <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>
			<form action="{{ url('dashboard/service/insert/function') }}" method="post" enctype="multipart/form-data">
			  @csrf
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="name" value="{{ old('name') }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="title" value="{{ old('title') }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="icon" value="{{ old('icon') }}">
            <small><?php echo "< i class='fa fa-2x fa-route mx-auto mb-4'></i >"; ?></small>
					</div>
				  </div><!-- col-12 -->
				</div><!-- row -->
				<div class="form-layout-footer">
				  <button class="btn btn-info mg-r-5" type="submit" name="submit" value="insert">Submit Form</button>
				</div><!-- form-layout-footer -->
			  </div><!-- form-layout -->
			</form>
		</div><!-- card -->
      </div><!-- sl-pagebody -->
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
    

