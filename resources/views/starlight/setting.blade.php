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
        <span class="breadcrumb-item active">Setting</span>
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
			<form action="{{ url('dashboard/setting/update/function') }}" method="post" enctype="multipart/form-data">
			  @csrf
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="first_name" value="{{ $setting->first_name }}">
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="last_name" value="{{ $setting->last_name }}">
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-7">
					<div class="form-group">
					  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="file" name="icon">
					  <small>300*300</small>
					</div>
				  </div><!-- col-7 -->
				  <div class="col-lg-5">
					<div class="form-group text-center">
					  <a href="{{ url('uploads/'.$setting->icon) }}" ><img src="{{ asset('uploads/'.$setting->icon) }}" style="width:80px;height:80px;" alt="{{ $setting->icon }}"/></a>
					</div>
				  </div><!-- col-5 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="title" value="{{ $setting->title }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Author: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="author" value="{{ $setting->author }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Keywords: <span class="tx-danger">*</span></label>
					  <textarea class="form-control" name="keywords">{{ $setting->keywords }}</textarea>
					  <small>gmail, google, facebook</small>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
					  <textarea class="form-control" name="description">{{ $setting->description }}</textarea>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="email" value="{{ $setting->email }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Mobile: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="mobile" value="{{ $setting->mobile }}">
					  <small>0171</small>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
					  <textarea class="form-control" name="address">{{ $setting->address }}</textarea>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Facebook: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="facebook" value="{{ $setting->facebook }}">
						<small>https://www.facebook.com/</small>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Twitter: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="twitter" value="{{ $setting->twitter }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">LinkedIn: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="linkedin" value="{{ $setting->linkedin }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Instagram: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="instagram" value="{{ $setting->instagram }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Youtube: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="youtube" value="{{ $setting->youtube }}">
					</div>
				  </div><!-- col-12 -->
				</div><!-- row -->
				<div class="form-layout-footer">
				  <button class="btn btn-info mg-r-5" type="submit" name="submit" value="update">Submit Form</button>
				</div><!-- form-layout-footer -->
			  </div><!-- form-layout -->
			</form>
		</div><!-- card -->
      </div><!-- sl-pagebody -->
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
    

