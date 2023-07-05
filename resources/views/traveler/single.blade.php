@extends('traveler/layouts/app')
@section('head')
	<!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $package->title }}">
    <meta name="twitter:description" content="{!!$package->description!!}">
    <meta name="twitter:image" content="{{asset('uploads/'.$package->thumb)}}">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="{{ $package->title }}">
    <meta property="og:description" content="{!!$package->description!!}">
    <meta property="og:image" content="{{asset('uploads/'.$package->thumb)}}">
    <meta property="og:image:secure_url" content="{{asset('uploads/'.$package->thumb)}}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta content="" name="{{ $setting->keywords }}">
    <meta content="" name="{!!$package->description!!}">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link href="{{asset('uploads/'.$package->thumb)}}" rel="icon">
    <title>{{ $package->title }}</title>
@endsection
@section('content')
<!-- Blog Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset('uploads/'.$package->thumb) }}" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">Offer</h6>
                                    <small class="text-white text-uppercase">Running</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">{{ App\Models\Category::find($package->category)->name }}</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">{{ App\Models\Subcategory::find($package->subcategory)->name }}</a>
                            </div>
                            <h2 class="mb-3">{{ $package->title }}</h2>
                            <h3 class="text-center">dasdasdasd</h3>
                            <hr class="hr"/>
                            {!! $package->description !!}
                            <h3 class="text-center">dasdasdasd</h3>
                            <hr class="hr"/>
                            {!! $package->package !!}
                            <a href="{{ url('payment/online/page/'.$package->id) }}" class="btn btn-primary">Buy Online</a>
                            <a href="{{ url('payment/offline/page/'.$package->id) }}" class="btn btn-primary">Buy Offline</a>
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <section>
                            <div class="container">
                                <div id="disqus_thread"></div>
                                    <script>
                                        /**
                                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                        /*
                                            var disqus_config = function () {
                                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                        };
                                        */
                                        (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document, s = d.createElement('script');
                                            s.src = 'https://http-127-0-0-1-8000-opkfgj9gg3.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                        })();
                                    </script>
                                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            </div>
                        </section>
                    </div>
                    <!-- Comment List End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column bg-primary mb-5 py-5 px-4">
                        <img src="{{ asset('uploads/'.$setting->icon) }}" class="img-fluid mx-auto mb-3" style="width: 250px;">
                        <h3 class="text-danger mb-3">{{ $setting->title }}</h3>
						<ul class="list-inline m-0">
							@php
								$mobile_array = explode(", ", $setting->mobile);
							@endphp
							@foreach($mobile_array as $mobile_value)
								<li class="py-2"><i class="fa fa-check text-danger mr-3"></i> {{ $mobile_value }}</li>
							@endforeach
						</ul>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <form action="{{url('package/search/')}}" method="post">
                                <div class="input-group">
                                    @csrf
                                    <input type="text" class="form-control p-4" name="keywords" placeholder="Keywords">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text bg-primary border-primary text-white"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Category List -->
                    @foreach($category as $category_key => $category_value)
                    <div class="mb-5">
                        <a href="{{url('package/category/'.$category_value->id)}}"><h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">{{$category_value->name}}</h4></a>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                            @foreach($subcategory as $subcategory_key => $subcategory_value)
                                @if($subcategory_value->category == $category_value->id)
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="{{url('package/subcategory/'.$subcategory_value->id)}}"><i class="fa fa-angle-right text-primary mr-2"></i>{{$subcategory_value->name}}</a>
                                    </li>
                                @endif
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach


                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        @foreach($recent_package as $recent_package_key => $recent_package_value)
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="{{url('package/single/'.$recent_package_value->id)}}">
                                <img class="img-fluid" src="{{ asset('uploads/'.$recent_package_value->thumb) }}" style="width:100px;" alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">{{ $recent_package_value->title }}</h6>
                                    <small>{{ naturalDate($recent_package_value->created_at) }}</small>
                                </div>
                            </a>
                        @endforeach
                    </div>
    
                    <!-- related Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Releted Post</h4>
                        @foreach($related_package as $related_package_key => $related_package_value)
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="{{url('package/single/'.$related_package_value->id)}}">
                                <img class="img-fluid" src="{{ asset('uploads/'.$related_package_value->thumb) }}" style="width:100px;" alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">{{ $related_package_value->title }}</h6>
                                    <small>{{ naturalDate($related_package_value->created_at) }}</small>
                                </div>
                            </a>
                        @endforeach
                    </div>
					
					<!-- Author Bio -->
                    <div class="d-flex flex-column bg-primary mb-5 py-5 px-4">
                        <img src="{{ asset('uploads/'.$setting->icon) }}" class="img-fluid mx-auto mb-3" style="width: 250px;">
                        <h3 class="text-danger mb-3">{{ $setting->title }}</h3>
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
    <!-- Blog End -->



@endsection