<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;


class FrontendController extends Controller
{
    public function index_page(){
        return view('traveler/index', [
			'setting' => Setting::first(),
		]);
    }
}
