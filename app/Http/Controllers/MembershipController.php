<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use Carbon\Carbon;
use IIlluminate\Support\Facades\Storage;

use auth;
use Image;
use rolecheck;


class MembershipController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function index_page(){
		return view('starlight/index');
    }
	public function insert_page(){
		return view('starlight/membership/insert');
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'title' => 'required|unique:memberships,title|string|max:225',
					'code' => 'required',
					'image' => 'required|file|mimes:jpeg,jpg,bmp,png'
				],
			);
			Membership::insert([
				"title" => $request->title,
				"code" => $request->code,
				"image" => image_insert_function($request, 'image'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/membership/loop')->with('success', 'membership add success');
		}else{
			return redirect('home')->with('success', 'membership not insert');
		}
    }
	public function loop_page(){
		return view('starlight/membership/loop', [
			'membership' => Membership::all()
		]);
    }
	public function update_page($id){
		return view('starlight/membership/update', [
			'membership' => Membership::find($id)
		]);
    }
	public function update_function(Request $request, $id){
		if($request->submit == "update"){
			$request->validate(
				[ 
					'title' => 'required|unique:memberships,title|string|max:225',
					'code' => 'required',
					'image' => 'file|mimes:jpeg,jpg,bmp,png',
				],
			);
			Membership::find($id)->update([
				'title' => $request->title,
				'code' => $request->code,
				'image' => image_update_function($request, Membership::where('id', $id)->get(), 'image'),
			]);
			return back()->with("success", "membership update done....");
		}else{
			return redirect('home');
		}
    }
	public function search_function(){
		$keyword = $_GET['keyword'];
		return view('starlight/membership/loop', [
			"membership" => Membership::where("name", "like", "%$keyword%")->get()
		]);
	}
	public function remove_function($id){
		image_delete_function(Membership::where('id', $id)->get(), 'image');
		Membership::find($id)->forceDelete();
		return redirect('dashboard/membership/loop')->with('success', 'membership delete success');
    }
}
