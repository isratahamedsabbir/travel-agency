<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\About;

use auth;
use Image;
use rolecheck;


class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function update_page(){
		return view('starlight/about', [
			'about' => About::first()
		]);
    }
	public function update_function(Request $request){
		if($request->submit == "update"){
			$request->validate(
				[
					'main_img' => 'file|mimes:jpg,bmp,png,jpeg',
					'title' => 'required|string|max:225',
					'description' => 'required',
					'left_img' => 'file|mimes:jpg,bmp,png,jpeg',
					'right_img' => 'file|mimes:jpg,bmp,png,jpeg',
					'one_name' => 'required|string|max:225',
					'one_icon' => 'required',
					'one_title' => 'required|string|max:225',
					'two_name' => 'required|string|max:225',
					'two_icon' => 'required',
					'two_title' => 'required|string|max:225',
					'three_name' => 'required|string|max:225',
					'three_icon' => 'required',
					'three_title' => 'required|string|max:225'
				],
			);
			About::first()->update([
				'main_img' => file_update_function($request, About::where('id', 1)->get(), 'main_img'),
				'title' => $request->title,
				'description' => $request->description,
				'left_img' => file_update_function($request, About::where('id', 1)->get(), 'left_img'),
				'right_img' => file_update_function($request, About::where('id', 1)->get(), 'right_img'),
				'one_name' => $request->one_name,
				'one_icon' => $request->one_icon,
				'one_title' => $request->one_title,
				'two_name' => $request->two_name,
				'two_icon' => $request->two_icon,
				'two_title' => $request->two_title,
				'three_name' => $request->three_name,
				'three_icon' => $request->three_icon,
				'three_title' => $request->three_title,
			]);
			return back()->with("success", "About update done....");
		}else{
			return redirect('home');
		}
    }
}
