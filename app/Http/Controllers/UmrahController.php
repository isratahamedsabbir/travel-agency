<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\Umrah;

use auth;
use Image;
use rolecheck;

class UmrahController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
    public function update_page(){
		return view('starlight/umrah', [
			'umrah' => Umrah::first()
		]);
    }
	public function update_function(Request $request){
		if($request->submit == "update"){
			$request->validate(
				[
					'title' => 'required|string|max:225',
					'description' => 'required',
                    'thumb' => 'file|mimes:jpg,bmp,png,jpeg',
                    'bg_img' => 'file|mimes:jpg,bmp,png,jpeg',
				],
			);
			Umrah::first()->update([
				'title' => $request->title,
                'description' => $request->description,
				'thumb' => file_update_function($request, Umrah::where('id', 1)->get(), 'thumb'),
				'bg_img' => file_update_function($request, Umrah::where('id', 1)->get(), 'bg_img'),
			]);
			return back()->with("success", "Umrah update done....");
		}else{
			return redirect('home');
		}
    }
}
