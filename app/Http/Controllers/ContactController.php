<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Contact;

use auth;
use Image;
use rolecheck;




class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
    public function update_page(){
		return view('starlight/contact', [
			'contact' => Contact::first()
		]);
    }
	public function update_function(Request $request){
		if($request->submit == "update"){
			$request->validate(
				[
					'name' => 'required|string|max:225',
                    'first_title' => 'required|string|max:225',
                    'last_title' => 'required|string|max:225',
					'description' => 'required',
					'list' => 'required',
                    'bg_img' => 'file|mimes:jpg,bmp,png,jpeg',
				],
			);
			Contact::first()->update([
				'name' => $request->name,
                'first_title' => $request->first_title,
                'last_title' => $request->last_title,
                'list' => $request->list,
                'description' => $request->description,
				'bg_img' => file_update_function($request, Contact::where('id', 1)->get(), 'bg_img'),
			]);
			return back()->with("success", "Contact update done....");
		}else{
			return redirect('home');
		}
    }
}
