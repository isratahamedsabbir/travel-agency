<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Order;
use App\Models\Message;
use App\Models\Ticket;
use App\Models\Hotel;
use App\Models\Subscriber;
use App\Models\Review;



use auth;
use Image;
use rolecheck;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('starlight/index',[
			'carousel' => Carousel::all()
		]);
    }
	public function order_page()
    {
        return view('starlight/order',[
			'order' => Order::all()
		]);
    }
	public function ticket_page()
    {
        return view('starlight/ticket',[
			'ticket' => Ticket::all()
		]);
    }
	public function message_page()
    {
        return view('starlight/message',[
			'message' => Message::all()
		]);
    }
	public function hotel_page()
    {
        return view('starlight/hotel',[
			'hotel' => Hotel::all()
		]);
    }
	public function subscriber_page()
    {
        return view('starlight/subscriber',[
			'subscriber' => Subscriber::all()
		]);
    }
	public function review_page()
    {
        return view('starlight/review',[
			'review' => Review::all()
		]);
    }
}
