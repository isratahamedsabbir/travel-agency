<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Ticket;
use auth;
use Image;
use rolecheck;

class TicketController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function ticket_conform($id){
		Ticket::find($id)->update([
			'new' => false
		]);
		return back();
    }
	public function ticket_delete($id){
		Ticket::find($id)->forceDelete();
		return redirect('dashboard/air_tickets/loop')->with('success', 'Ticket delete success');
    }
}
