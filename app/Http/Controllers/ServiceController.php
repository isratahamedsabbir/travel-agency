<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;
class ServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/service/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'name' => 'required|unique:services,name|string|max:225', 
					'title' => 'required', 
					'icon' => 'required'
				],
			);
			Service::insert([
				"name" => $request->name,
				"title" => $request->title,
				"icon" => $request->icon,
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/service/loop')->with('success', 'service add success');
		}else{
			return redirect('home')->with('success', 'service not insert');
		}
    }
	public function loop_page(){
		return view('starlight/service/loop', [
			'service' => Service::all()
		]);
    }
	public function update_page($id){
		return view('starlight/service/update', [
			'service' => Service::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'name' => 'required|unique:services,name|string|max:225',
					'title' => 'required',
					'icon' => 'required',
				],
			);
			Service::find($id)->update([
				'name' => $request->name,
				'title' => $request->title,
				'icon' => $request->icon,
			]);
			return back()->with("success", "service update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/service/loop', [
			"service" => Service::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		Service::find($id)->forceDelete();
		return redirect('dashboard/service/loop')->with('success', 'service delete success');
    }
}
