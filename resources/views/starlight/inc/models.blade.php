<?php
function order_details($data){
	$id = $data->id;
	$email = $data->email;
	$type = $data->type;
	$status = $data->status;
	$postcode = $data->postcode;
	$address = $data->address;
	$transaction_id = $data->transaction_id;
	$currency = $data->currency;
	$amount = $data->amount;
	$name = $data->name;
	$phone = $data->phone;
	$title = $data->title;
	$category = App\Models\Category::find($data->category)->name;
	$subcategory = App\Models\Subcategory::find($data->subcategory)->name;
	$country = App\Models\Country::find($data->country)->name;
	$city = App\Models\City::find($data->city)->name;
	echo <<<TEXT
<!-- Modal -->
<div id="modaldemo{$id}" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
	<div class="modal-content bd-0 tx-14">
	  <div class="modal-header pd-y-20 pd-x-25">
		<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">{$name}</h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body pd-25">
		<h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">{$title}</a></h4>
		<ul class="list-group">
		  <li class="list-group-item">Name: {$name}</li>
		  <li class="list-group-item">Title: {$title}</li>
		  <li class="list-group-item">Category: {$category}</li>
		  <li class="list-group-item">Sub Category: {$subcategory}</li>
		  <li class="list-group-item">Mobile: {$phone}</li>
		  <li class="list-group-item">Email: {$email}</li>
		  <li class="list-group-item">Country: {$country}</li>
		  <li class="list-group-item">City: {$city}</li>
		  <li class="list-group-item">Postcode: {$postcode}</li>
		  <li class="list-group-item">Address: {$address}</li>
		  <li class="list-group-item">Transaction Id: {$transaction_id}</li>
		  <li class="list-group-item">Status: {$status}</li>
		  <li class="list-group-item">Type: {$type}</li>
		  <li class="list-group-item">Currency: {$currency}</li>
		  <li class="list-group-item">Amount: {$amount}</li>
		</ul>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
TEXT;
}
function hotel_details($data){
	$id = $data->id;
	$name = $data->name;
	$email = $data->email;
	$mobile = $data->mobile;
	$adult = $data->adult;
	$child = $data->child;
	$check_in_date = $data->check_in_date;
	$check_out_date = $data->check_out_date;
	$hotel_name = $data->hotel_name;
	$hotel_address = $data->hotel_address;
	$room = $data->room;
	$message = $data->message;
	echo <<<TEXT
<!-- Modal -->
<div id="modaldemo{$id}" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
	<div class="modal-content bd-0 tx-14">
	  <div class="modal-header pd-y-20 pd-x-25">
		<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">{$name}</h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body pd-25">
		<ul class="list-group">
		  <li class="list-group-item">Name: {$name}</li>
		  <li class="list-group-item">email: {$email}</li>
		  <li class="list-group-item">mobile: {$mobile}</li>
		  <li class="list-group-item">adult: {$adult}</li>
		  <li class="list-group-item">child: {$child}</li>
		  <li class="list-group-item">check in date: {$check_in_date}</li>
		  <li class="list-group-item">check out date: {$check_out_date}</li>
		  <li class="list-group-item">hotel name: {$hotel_name}</li>
		  <li class="list-group-item">hotel address: {$hotel_address}</li>
		  <li class="list-group-item">room: {$room}</li>
		  <li class="list-group-item">message: {$message}</li>
		</ul>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
TEXT;
}
function message_details($data){
	$id = $data->id;
	$name = $data->name;
	$message = $data->message;
	echo <<<TEXT
<!-- Modal -->
<div id="modaldemo{$id}" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
	<div class="modal-content bd-0 tx-14">
	  <div class="modal-header pd-y-20 pd-x-25">
		<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">{$name}</h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body pd-25">
		<h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">{$name}</a></h4>
		<div>{$message}</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
TEXT;
}
function ticket_details($data){
	$id = $data->id;
	$name = $data->name;
	$email = $data->email;
	$mobile = $data->mobile;
	$adult = $data->adult;
	$child = $data->child;
	$travel_date = $data->travel_date;
	$return_date = $data->return_date;
	$form = $data->form;
	$to = $data->to;
	$message = $data->message;
	echo <<<TEXT
<!-- Modal -->
<div id="modaldemo{$id}" class="modal fade">
  <div class="modal-dialog modal-dialog-vertical-center" role="document">
	<div class="modal-content bd-0 tx-14">
	  <div class="modal-header pd-y-20 pd-x-25">
		<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">{$name}</h6>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body pd-25">
		<ul class="list-group">
		  <li class="list-group-item">Name: {$name}</li>
		  <li class="list-group-item">email: {$email}</li>
		  <li class="list-group-item">mobile: {$mobile}</li>
		  <li class="list-group-item">adult: {$adult}</li>
		  <li class="list-group-item">child: {$child}</li>
		  <li class="list-group-item">travel date: {$travel_date}</li>
		  <li class="list-group-item">return date: {$return_date}</li>
		  <li class="list-group-item">form: {$form}</li>
		  <li class="list-group-item">to: {$to}</li>
		  <li class="list-group-item">message: {$message}</li>
		</ul>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
	  </div>
	</div>
  </div><!-- modal-dialog -->
</div><!-- modal -->
TEXT;
}