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
        $count = eventRegistration::all()->count();
//        $count = 2;
        $notAprovado = eventRegistration::
        where('payment_state', 1)->sum('lot');
        $aprovadas = eventRegistration::
        where('payment_state', 0)->sum('lot');
        $aprovadasAndNotAprovado = eventRegistration::sum('lot');

        return view('home',compact('count','notAprovado','aprovadas','aprovadasAndNotAprovado'));
    }
}
