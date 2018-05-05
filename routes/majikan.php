<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('majikan')->user();

    //dd($users);

    return view('majikan.home');
})->name('home');

