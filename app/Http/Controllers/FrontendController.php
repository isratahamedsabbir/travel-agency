<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Setting;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Contact;
use App\Models\Message;
use App\Models\About;
use App\Models\Visa;
use App\Models\Subscriber;
use App\Models\Membership;
use App\Models\Review;
use App\Models\Service;
use App\Models\Umrah;
use App\Models\Package;

use Image;

class FrontendController extends Controller
{
    
	
	
	
	public function index_page(){
		return view("traveler/index", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::latest()->paginate(24, ['*'], 'packages'),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function fronted_page($page = 'index'){
		return view("traveler/$page", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::latest()->paginate(24, ['*'], 'packages'),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function online_payment_page($id){
		return view("exampleHosted", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::find($id),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function package_single_page($id){
		return view("traveler/single", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::find($id),
			'recent_package' => Package::latest()->take(12)->get(),
			'related_package' => Package::where('subcategory', Package::find($id)->subcategory)->take(12)->get(),
		]);
    }
	public function category_package_page($id){
		return view("traveler/loop", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::where('category', $id)->latest()->paginate(24, ['*'], 'packages'),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function subcategory_package_page($id){
		return view("traveler/loop", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::where('subcategory', $id)->latest()->paginate(24, ['*'], 'packages'),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function search_package_page(Request $request){
		$keywords = $request->keywords;
		return view("traveler/loop", [
			'carousel' => Carousel::all(),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
			'contact' => Contact::first(),
			'review' => Review::all(),
			'setting' => Setting::first(),
			'about' => About::first(),
			'umrah' => Umrah::first(),
			'service' => Service::all(),
			'membership' => Membership::all(),
			'visa' => Visa::all(),
			'package' => Package::where('title', 'LIKE', '%'.$keywords.'%')->latest()->paginate(24, ['*'], 'packages'),
			'recent_package' => Package::latest()->take(12)->get(),
		]);
    }
	public function message_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|string|max:225',
					'email' => 'required',
					'mobile' => 'required',
					'message' => 'required'
				],
			);
			Message::insert([
				"name" => $request->name,
				"email" => $request->email,
				"mobile" => $request->mobile,
				"message" => $request->message,
				"created_at" => Carbon::now()
			]);
			return back()->with('success', 'message send');
		}else{
			return redirect('home')->with('fail', 'message not send');
		}
	}
	public function subscriber_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'email' => 'required|unique:subscribers,email'
				],
			);
			Subscriber::insert([
				"email" => $request->email,
				"created_at" => Carbon::now()
			]);
			return back()->with('success', 'you are subscriber');
		}else{
			return redirect('home')->with('error', 'subscriber permition fail.');
		}
	}
	public function review_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required',
					'company' => 'required|string|max:225',
					'photo' => 'required|file|mimes:jpeg,jpg,bmp,png',
					'message' => 'required',
				],
			);
			Review::insert([
				"name" => $request->name,
				"company" => $request->company,
				"photo" => image_insert_function($request, 'photo'),
				"message" => $request->message,
				"created_at" => Carbon::now()
			]);
			return back()->with('success', 'you are summit Review');
		}else{
			return redirect('home')->with('error', 'Review submit fail.');
		}
	}
}
