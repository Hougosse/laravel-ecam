<?php

namespace App\Http\Controllers;

use App\User;
use App\Voyage;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $voyages=Voyage::all();
        return view('dashboard')->with('voyages', $voyages)->with('user', $user);
    }
}
