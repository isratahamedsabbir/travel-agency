<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Package;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;



class PackageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/package/insert',[
            'category' => Category::all()
        ]);
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'title' => 'required|unique:packages,title|string|max:225',
					'category' => 'required',
					'subcategory' => 'required',
					'price' => 'required',
					'description' => 'required',
					'package' => 'required',
					'thumb' => 'required|file|mimes:jpeg,jpg,bmp,png'
				],
			);
			Package::insert([
				"title" => $request->title,
				"category" => $request->category,
				"subcategory" => $request->subcategory,
				"price" => $request->price,
				"discount" => $request->discount,
				"description" => $request->description,
				"package" => $request->package,
				"offer" => $request->offer,
				"thumb" => image_insert_function($request, 'thumb'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/package/loop')->with('success', 'Package add success');
		}else{
			return redirect('home')->with('success', 'Package not insert');
		}
    }
	public function loop_page(){
		return view('starlight/package/loop', [
			'package' => Package::all()
		]);
    }
	public function update_page($id){
		return view('starlight/package/update', [
			'package' => Package::find($id),
			'category' => Category::all(),
			'subcategory' => Subcategory::all(),
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'title' => 'required|unique:packages,title|string|max:225',
					'category' => 'required',
					'subcategory' => 'required',
					'price' => 'required',
					'description' => 'required',
					'package' => 'required'
				],
			);
			Package::find($id)->update([
				"title" => $request->title,
				"category" => $request->category,
				"subcategory" => $request->subcategory,
				"price" => $request->price,
				"discount" => $request->discount,
				"description" => $request->description,
				"package" => $request->package,
				"offer" => $request->offer,
				"thumb" => image_update_function($request, Package::where('id', $id)->get(), 'thumb'),
			]);
			return back()->with("success", "category update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/package/loop', [
			"category" => Package::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		image_delete_function(Package::where('id', $id)->get(), 'thumb');
		Package::find($id)->forceDelete();
		return redirect('dashboard/package/loop')->with('success', 'Package delete success');
    }
}
