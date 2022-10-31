<?php

namespace App\Http\Controllers;

use App\Models\eventRegistration;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $count = eventRegistration()->distinct('date')
//            ->count();
        $count = 2;

        return view('home',compact('count'));
    }
}
