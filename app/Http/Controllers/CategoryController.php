<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;


class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/category/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:categories,name|string|max:225', 
					'icon' => 'required|file|mimes:jpeg,jpg,bmp,png'
				],
			);
			Category::insert([
				"name" => $request->name,
				"icon" => image_insert_function($request, 'icon'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/category/loop')->with('success', 'category add success');
		}else{
			return redirect('home')->with('success', 'category not insert');
		}
    }
	public function loop_page(){
		return view('starlight/category/loop', [
			'category' => Category::all()
		]);
    }
	public function update_page($id){
		return view('starlight/category/update', [
			'category' => Category::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'name' => 'required|unique:categories,name|string|max:225',
					'icon' => 'file|mimes:jpeg,jpg,bmp,png',
				],
			);
			Category::find($id)->update([
				'name' => $request->name,
				'icon' => image_update_function($request, Category::where('id', $id)->get(), 'icon'),
			]);
			return back()->with("success", "category update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/category/loop', [
			"category" => Category::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		image_delete_function(Category::where('id', $id)->get(), 'icon');
		Category::find($id)->forceDelete();
		return redirect('dashboard/category/loop')->with('success', 'category delete success');
    }
}
