<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Hotel;
use auth;
use Image;
use rolecheck;

class HotelController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function hotel_conform($id){
		Hotel::find($id)->update([
			'new' => false
		]);
		return back();
    }
	public function hotel_delete($id){
		Hotel::find($id)->forceDelete();
		return redirect('dashboard/hotel/loop')->with('success', 'Hotel delete success');
    }
}
