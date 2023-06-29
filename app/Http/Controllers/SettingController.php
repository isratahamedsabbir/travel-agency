<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Setting;

use auth;
use Image;
use rolecheck;

class SettingController extends Controller
{
    public function update_page(){
		return view('starlight/setting', [
			'setting' => Setting::first()
		]);
    }
	public function update_function(Request $request){
		if($request->submit == "update"){
			$request->validate(
				[
					'first_name' => 'required|string|max:225', 
					'last_name' => 'required|string|max:225', 
					'title' => 'required|string|max:225',
					'author' => 'required|string|max:225',
					'icon' => 'file|mimes:jpg,bmp,png,jpeg',
					'keywords' => 'required',
					'description' => 'required',
					'email' => 'required',
					'mobile' => 'required',
					'address' => 'required',
				],
			);
			Setting::first()->update([
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'title' => $request->title,
				'author' => $request->author,
				'icon' => file_update_function($request, Setting::where('id', 1)->get(), 'icon'),
				'keywords' => $request->keywords,
				'description' => $request->description,
				'email' => $request->email,
				'mobile' => $request->mobile,
				'address' => $request->address,
				'facebook' => $request->facebook,
				'twitter' => $request->twitter,
				'linkedin' => $request->linkedin,
				'instagram' => $request->instagram,
				'youtube' => $request->youtube,
			]);
			return back()->with("alert", "setting update done....");
		}else{
			return redirect('home');
		}
    }
}
