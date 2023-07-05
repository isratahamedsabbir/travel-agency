<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Message;
use auth;
use Image;
use rolecheck;

class MessageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function message_conform($id){
		Message::find($id)->update([
			'new' => false
		]);
		return back();
    }
	public function message_delete($id){
		Message::find($id)->forceDelete();
		return redirect('dashboard/message/loop')->with('success', 'Message delete success');
    }
}
