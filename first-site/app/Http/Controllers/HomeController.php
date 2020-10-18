<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function home(){
        return view('home');
    }

    public function service(){
        return view('service');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function prices(){
        return view('prices');
    }

    public function contact(){
        return view('contact');
    }

    public function opportunity(){
        return view('opportunity');
    }

    public function honourableMentions(){
        return view('honourableMentions');
    }

    public function motive(){
        return view('motive');
    }

    public function read(){
        return view('read');
    }
    
}
