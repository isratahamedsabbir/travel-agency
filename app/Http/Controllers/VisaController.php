<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visa;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;
class VisaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/visa/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:visas,name|string|max:225', 
					'description' => 'required',
					'thumb' => 'required|file|mimes:jpeg,jpg,bmp,png'
				],
			);
			Visa::insert([
				"name" => $request->name,
				"description" => $request->description,
				"thumb" => image_insert_function($request, 'thumb'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/visa/loop')->with('success', 'visa add success');
		}else{
			return redirect('home')->with('success', 'visa not insert');
		}
    }
	public function loop_page(){
		return view('starlight/visa/loop', [
			'visa' => Visa::all()
		]);
    }
	public function update_page($id){
		return view('starlight/visa/update', [
			'visa' => Visa::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'name' => 'required|unique:visas,name|string|max:225',
					'description' => 'required',
					'thumb' => 'file|mimes:jpeg,jpg,bmp,png',
				],
			);
			Visa::find($id)->update([
				'name' => $request->name,
				'description' => $request->description,
				'thumb' => image_update_function($request, Visa::where('id', $id)->get(), 'thumb'),
			]);
			return back()->with("success", "visa update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/visa/loop', [
			"visa" => Visa::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		image_delete_function(Visa::where('id', $id)->get(), 'thumb');
		Visa::find($id)->forceDelete();
		return redirect('dashboard/visa/loop')->with('success', 'visa delete success');
    }
}
