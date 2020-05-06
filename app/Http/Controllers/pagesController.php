<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home()
    {
    	return view()->make('home');
    }

     public function about()
    {
    	return view()->make('about');
    }
}
