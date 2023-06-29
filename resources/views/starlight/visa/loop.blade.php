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
@section('style')
<link href="{{ asset('starlight/lib/highlightjs/github.css') }}" rel="stylesheet">
<link href="{{ asset('starlight/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('starlight/lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Loop</span>
      </nav>
		@include('starlight/inc/alert')
      <div class="sl-pagebody">
		<div class="sl-page-title">
          <h5>Form Layouts</h5>
          <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">SN</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p text-center">Thumb</th>
                  <th class="wd-20p text-center">action</th>
                </tr>
              </thead>
              <tbody>
				@php
					$sn=1
				@endphp
				@forelse($visa as $visa_key => $visa_value)
                <tr>
                  <td>{{ $sn++ }}</td>
                  <td>{{ text_shorten($visa_value->name, 50) }}</td>
                  <td class="text-center"><a href="{{ asset('uploads/'.$visa_value->thumb) }}" ><img src="{{ asset('uploads/'.$visa_value->thumb) }}" style="width:30px;height:30px;"/></a></td>
                  <td class="text-center">
				    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					  <div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Dropdown
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						  <a class="dropdown-item" href="{{ url('dashboard/visa/update/page/'.$visa_value->id) }}">Update</a>
						  <a class="dropdown-item" href="{{ url('dashboard/visa/remove/'.$visa_value->id) }}">Delete</a>
						</div>
					  </div>
					</div>
				  </td>
                </tr>
				@empty
				<tr>
                  <td colspan="100" class="text-center bg-warning">Empty</td>
                </tr>
				@endforelse
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
      @include('starlight/inc/footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
@section('script')
<script src="{{ asset('starlight/lib/highlightjs/highlight.pack.js') }}"></script>
<script src="{{ asset('starlight/lib/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('starlight/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
<script src="{{ asset('starlight/lib/select2/js/select2.min.js') }}"></script>
<script>
  $(function(){
	'use strict';
	$('#datatable1').DataTable({
	  responsive: true,
	  language: {
		searchPlaceholder: 'Search...',
		sSearch: '',
		lengthMenu: '_MENU_ items/page',
	  }
	});
	// Select2
	$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>
@endsection
    

