<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use auth;
use Image;
use rolecheck;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					//'name' => 'required|unique:users,name|string|max:225',
					//'email' => 'required|unique:users,email|string|max:225',
					'mobile' => 'required',
					'photo' => 'file|mimes:jpeg,jpg,bmp,png',
				],
			);
			User::find($id)->update([
				'mobile' => $request->mobile,
				'desctiption' => $request->desctiption,
				'photo' => image_update_function($request, User::where('id', $id)->get(), 'photo'),
			]);
			return back()->with("success", "User update done....");
		}else{
			return redirect('home');
		}
    }
	
}
