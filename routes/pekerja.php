<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('pekerja')->user();

    //dd($users);

    return view('pekerja.home');
})->name('home');

