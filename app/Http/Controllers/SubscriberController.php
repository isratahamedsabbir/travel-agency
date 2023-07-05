<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Subscriber;
use auth;
use Image;
use rolecheck;

class SubscriberController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function subscriber_conform($id){
		Subscriber::find($id)->update([
			'new' => false
		]);
		return back();
    }
	public function subscriber_delete($id){
		Subscriber::find($id)->forceDelete();
		return redirect('dashboard/subscriber/loop')->with('success', 'Subscriber delete success');
    }
}
