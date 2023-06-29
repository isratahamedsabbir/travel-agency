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
			<form action="{{ url('dashboard/package/update/function/'.$package->id) }}" method="post" enctype="multipart/form-data">
			  @csrf
			  <div class="form-layout">
				<div class="row mg-b-25">
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="title" value="{{ $package->title }}">
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-6">
					<div class="form-group">
						<label class="form-control-label">Category: <span class="tx-danger">*</span></label>
						<select id="categoris" class="form-control" name="category">
                <option value="">select</option>
              @forelse($category as $category_key => $category_value)
                <option value="{{ $category_value->id }}" {{ $category_value->id == $package->category ? 'selected' : '' }}>{{ $category_value->name }}</option>
                @empty
                <option value="">empty</option>
              @endforelse
            </select>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-6">
					<div class="form-group">
						<label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
						<select id="subcategoris" class="form-control" name="subcategory">
              <option value="{{ App\Models\Subcategory::find($package->subcategory)->id }}">{{ App\Models\Subcategory::find($package->subcategory)->name }}</option>
            </select>
					</div>
				  </div><!-- col-12 -->
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
					  <input class="form-control" type="text" name="price" value="{{ $package->price }}">
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Discount: </label>
					  <input class="form-control" type="text" name="discount" value="{{ $package->discount }}">
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-7">
            <div class="form-group">
              <label class="form-control-label">Thumb: <span class="tx-danger">*</span></label>
              <input class="form-control" type="file" name="thumb">
              <small>Please Imput jpg,jpeg,png,bmp file.</small>
            </div>
				  </div><!-- col-7 -->
          <div class="col-lg-5">
            <div class="form-group text-center">
              <img class="img-thumbnail" src="{{ asset('uploads/'.$package->thumb) }}" style="width:150px;"/>
            </div>
				  </div><!-- col-5 -->
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
					  <textarea id="description" name="description" class="form-control">{{ $package->description }}</textarea>
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-6">
					<div class="form-group">
					  <label class="form-control-label">Packag: <span class="tx-danger">*</span></label>
					  <textarea id="packag" name="package" class="form-control">{{ $package->package }}</textarea>
					</div>
				  </div><!-- col-6 -->
				  <div class="col-lg-12">
					<div class="form-group">
					  <label class="form-control-label">Offer: </span></label>
            yes <input type="radio" name="offer" value="1" {{ $package->offer == 1 ? 'checked' : "" }}/>
            no <input type="radio" name="offer" value="0" {{ $package->offer == 0 ? 'checked' : "" }}/>
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
@section('script')
<script>
$('#categoris').change(function(){
	var category = $('#categoris').val();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		type : 'POST',
		url : '/dashboard/ajax/get/subcategory/data',
		data : {category:category},
		success : function(data){
			$('#subcategoris').html(data);
		}
	});
});
</script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
function editor(id){
	CKEDITOR.replace(id, {
		filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
		filebrowserUploadMethod: 'form'
	});
}
editor('description');
editor('packag');
</script>
@endsection