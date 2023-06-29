<!-- ########## START: LEFT PANEL ########## -->
<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
<div class="sl-sideleft">
  <div class="input-group input-group-search">
	<input type="search" name="search" class="form-control" placeholder="Search">
	<span class="input-group-btn">
	  <button class="btn"><i class="fa fa-search"></i></button>
	</span><!-- input-group-btn -->
  </div><!-- input-group -->
  <label class="sidebar-label">Navigation</label>
  <div class="sl-sideleft-menu">
	<a href="{{ url('home') }}" class="sl-menu-link active">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
		<span class="menu-item-label">Dashboard</span>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<a href="{{ url('dashboard/setting/update/page/') }}" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
		<span class="menu-item-label">Setting</span>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Page</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/about/update/page/') }}" class="nav-link">About</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/contact/update/page/') }}" class="nav-link">Contact</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/umrah/update/page/') }}" class="nav-link">Umrah</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Customer</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/order/loop/') }}" class="nav-link">Order</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/contact/loop/') }}" class="nav-link">Contact</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/air_tickets/loop/') }}" class="nav-link">Air Ticket</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/hotel/loop/') }}" class="nav-link">Hotel</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/subscriber/loop/') }}" class="nav-link">Subscriber</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Carousel</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/carousel/insert/page/') }}" class="nav-link">Insert Carousel</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/carousel/loop/') }}" class="nav-link">All Carousel</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Category</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/category/insert/page/') }}" class="nav-link">Insert Category</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/category/loop/') }}" class="nav-link">All Category</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Sub Category</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/subcategory/insert/page/') }}" class="nav-link">Insert Sub Category</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/subcategory/loop/') }}" class="nav-link">All Sub Category</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Package</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/package/insert/page/') }}" class="nav-link">Insert Package</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/package/loop/') }}" class="nav-link">All Package</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Service</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/service/insert/page/') }}" class="nav-link">Insert Service</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/service/loop/') }}" class="nav-link">All Service</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Membership</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/membership/insert/page/') }}" class="nav-link">Insert Membership</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/membership/loop/') }}" class="nav-link">All Membership</a></li>
	</ul>
	<a href="#" class="sl-menu-link">
	  <div class="sl-menu-item">
		<i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
		<span class="menu-item-label">Visa</span>
		<i class="menu-item-arrow fa fa-angle-down"></i>
	  </div><!-- menu-item -->
	</a><!-- sl-menu-link -->
	<ul class="sl-menu-sub nav flex-column">
	  <li class="nav-item"><a href="{{ url('dashboard/visa/insert/page/') }}" class="nav-link">Insert Visa</a></li>
	  <li class="nav-item"><a href="{{ url('dashboard/visa/loop/') }}" class="nav-link">All Visa</a></li>
	</ul>
  </div><!-- sl-sideleft-menu -->

  <br>
</div><!-- sl-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->