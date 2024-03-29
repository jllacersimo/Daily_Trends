<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;

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
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $feeds=Feed::orderBy('id','desc')->paginate(4);

        return view('home',[
            'feeds'=>$feeds
        ]);
    }
}
