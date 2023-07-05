<!-- About Start -->
<div class="container-fluid py-5">
	<div class="container pt-5">
		<div class="row">
			<div class="col-lg-12" style="min-height: 500px;">
                <div id="buttons"></div>
                <div id="gallery">
                    @foreach($gallery as $gallery_key => $gallery_vlaue)
                        <a href="{{ url('package/single/'.$gallery_vlaue->id) }}"><img src="{{ asset('uploads/'.$gallery_vlaue->thumb) }}" data-tags="{{ App\Models\Subcategory::find($gallery_vlaue->subcategory)->name }}" alt="lemon" /></a>
                    @endforeach
                </div>
            </div>
		</div>
	</div>
</div>
<!-- About End -->