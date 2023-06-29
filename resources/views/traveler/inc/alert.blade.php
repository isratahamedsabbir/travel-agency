@if($errors->any())
	@foreach($errors->all() as $error)
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Error</strong> {{ $error }}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endforeach
@endif
@if(session('error'))
<script>
	alert("{{ session('error') }}");
</script>
@endif
@if(session('success'))
<script>
	alert("{{ session('success') }}");
</script>
@endif
