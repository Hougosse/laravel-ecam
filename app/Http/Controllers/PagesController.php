<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //$users = App\Voyage::find(1)->users;
        //dd($users->toArray());
        $title = 'Welcome to CustomTravels';
        return view('pages.index', compact('title'));    
    }

}
