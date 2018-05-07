<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('pekerja')->user();

    //dd($users);

    return view('pekerja.home');
})->name('home');

Route::get('/login_type', function() {
    if (Auth::guest()) {
    	return view('public.login_type');
    }
    elseif (condition) {
    	return view('pekerja.home');
    }
});
