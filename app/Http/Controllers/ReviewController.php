<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Review;
use auth;
use Image;
use rolecheck;
class ReviewController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function review_conform($id){
		Review::find($id)->update([
			'new' => false
		]);
		return back();
    }
	public function review_delete($id){
		Review::find($id)->forceDelete();
		return redirect('dashboard/review/loop')->with('success', 'Review delete success');
    }
}
