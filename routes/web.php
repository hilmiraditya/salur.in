<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('about');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('pekerja/editprofil', 'PekerjaController@index');


Route::get('majikan/editprofil', 'MajikanController@index');

Route::get('agency/editprofil', 'AgencyController@index');

Route::post('/DataAgen', 'AgencyController@update');