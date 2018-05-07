<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    //
    function __construct(){
    	$this->middleware('LoginType');
    }

    public function login_type()
    {
    	return view('public.login_type');
    }

}
