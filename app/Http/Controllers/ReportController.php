<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Order;

class ReportController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
		//$this->middleware('rolecheck');
    }
    public function showReports(){
        
        $data = Order::all();
        //$pdf = PDF::loadView('starlight.reports.report', compact('data'));
        $pdf = PDF::loadView('traveler.invoice');
        //return View('traveler.invoice');
        return $pdf->stream('report.pdf');
        //return $pdf->download('report.pdf'); */
        //return view('starlight.reports.report', compact('data'));
    }
}
