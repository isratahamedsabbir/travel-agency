<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;



class SubcategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/subcategory/insert',[
			"category" => Category::all()
		]);
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:subcategories,name|string|max:225',
                    'category' => 'required',
					'icon' => 'required|file|mimes:jpeg,jpg,bmp,png'
				],
			);
			Subcategory::insert([
				"name" => $request->name,
				"category" => $request->category,
				"icon" => image_insert_function($request, 'icon'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/subcategory/loop')->with('success', 'subcategory add success');
		}else{
			return redirect('home')->with('success', 'subcategory not insert');
		}
    }
	public function loop_page(){
		return view('starlight/subcategory/loop', [
			'subcategory' => Subcategory::all()
		]);
    }
	public function update_page($id){
		return view('starlight/subcategory/update', [
			"category" => Category::all(),
			'subcategory' => Subcategory::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'name' => 'required|unique:categories,name|string|max:225',
                    'category' => 'required',
					'icon' => 'file|mimes:jpeg,jpg,bmp,png',
				],
			);
			Subcategory::find($id)->update([
				'name' => $request->name,
                "category" => $request->category,
				'icon' => image_update_function($request, Subcategory::where('id', $id)->get(), 'icon'),
			]);
			return back()->with("success", "subcategory update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/subcategory/loop', [
			"subcategory" => Subcategory::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		image_delete_function(Subcategory::where('id', $id)->get(), 'icon');
		Category::find($id)->forceDelete();
		return redirect('dashboard/subcategory/loop')->with('success', 'subcategory delete success');
    }
}
