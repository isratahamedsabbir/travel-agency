<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\History;
use auth;
use Image;
use rolecheck;
class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function order_conform($id){
		Order::find($id)->update([
			'new' => false
		]);
		History::insert([
			"name" => auth::user()->name,
			"title" => "conform order $id",
			"description" => "empty",
			"status" => true,
			"created_at" => Carbon::now()
		]);
		return back();
    }
	public function order_delete($id){
		Order::find($id)->forceDelete();
		History::insert([
			"name" => auth::user()->name,
			"title" => "delete order $id",
			"description" => "empty",
			"status" => true,
			"created_at" => Carbon::now()
		]);
		return redirect('dashboard/order/loop')->with('success', 'Order delete success');
    }
}
