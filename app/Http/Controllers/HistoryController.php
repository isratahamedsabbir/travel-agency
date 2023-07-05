<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Carbon\Carbon;
use Image;

class HistoryController extends Controller
{
    public function __construct(){}
	public function insert_function(Request $request){
		History::insert([
			"name" => "",
			"title" => "",
			"description" => "",
			"status" => true,
			"created_at" => Carbon::now()
		]);
		return back();
    }
	public function remove_function($id){
		History::find($id)->forceDelete();
		return redirect('dashboard/history/loop');
    }
}
