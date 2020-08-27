<?php

namespace App\Http\Controllers;

use App\Model\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data['income'] = Transaction::where('transaction_status', 'SUCCESS')->sum('transaction_total');
        $data['sales'] = Transaction::count();
        $data['items'] = Transaction::orderBy('id', 'DESC')->take(5)->get();
        $data['pie'] = [
            'pending' =>Transaction::where('transaction_status', 'PENDING')->count(),
            'failed' =>Transaction::where('transaction_status', 'FAILED')->count(),
            'success' =>Transaction::where('transaction_status', 'SUCCESS')->count(),
        ];

    	return view('pages.dashboard', $data);
    }
}
