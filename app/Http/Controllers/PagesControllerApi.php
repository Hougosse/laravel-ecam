<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class PagesControllerApi extends Controller
{
    public function index(){
        return view('index');
    }

}
