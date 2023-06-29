<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carousel;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;

class CarouselController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/carousel/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'title' => 'required|unique:carousels,title|string|max:225', 
					'picture' => 'required|file|mimes:jpeg,jpg,bmp,png,mp4'
				],
			);
			Carousel::insert([
				"title" => $request->title,
				"picture" => file_insert_function($request, 'picture'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/carousel/loop')->with('success', 'carousel add success');
		}else{
			return redirect('home')->with('success', 'carousel not insert');
		}
    }
	public function loop_page(){
		return view('starlight/carousel/loop', [
			'carousel' => Carousel::all()
		]);
    }
	public function update_page($id){
		return view('starlight/carousel/update', [
			'carousel' => Carousel::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'title' => 'required|unique:carousels,title|string|max:225',
					'picture' => 'file|mimes:jpeg,jpg,bmp,png,mp4',
				],
			);
			Carousel::find($id)->update([
				'title' => $request->title,
				'picture' => file_update_function($request, Carousel::where('id', $id)->get(), 'picture'),
			]);
			return back()->with("success", "carousel update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/carousel/loop', [
			"carousel" => Carousel::where("title", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		file_delete_function(Carousel::where('id', $id)->get(), 'picture');
		Carousel::find($id)->forceDelete();
		return redirect('dashboard/carousel/loop')->with('success', 'carousel delete success');
    }
}
