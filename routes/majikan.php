<?php

Route::get('/home', function () {

if (!Auth::guest()) {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('majikan')->user();

    //dd($users);

    return view('majikan.home');}

	elseif (Auth::guest()) {
		return view('public.login_type');
	}
})->name('home');

