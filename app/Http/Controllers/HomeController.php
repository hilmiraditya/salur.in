<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    public function index()
    {
        if(Auth::user()->role == 'A'){
            
            return view('agency.dashboard');
        }elseif (Auth::user()->role == 'M') {
            
            return view('majikan.dashboard');
        }elseif (Auth::user()->role == 'P') {
           
            return view('pekerja.dashboard');
        }
        else{
            header('/');
        }

    }
}
