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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tentang', function () {
    return view('about');
});


Route::post('/file','FileController@store');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changepassword', 'HomeController@view_changepassword');
Route::post('/changePassword','HomeController@changepassword')->name('changePassword');

Route::get('/', 'ShowController@showall');

//Start--controller Pekerja
Route::post('/DataPekerja', 'PekerjaController@update');
Route::post('/rekrut', 'PekerjaController@rekrut');
Route::post('/UploadBerkas','PekerjaController@UploadBerkas');
Route::get('/HapusBerkas/{id}','PekerjaController@HapusBerkas');
//End--controller Pekerja

//Start--controller Majikan
Route::post('/DataMajikan', 'MajikanController@update');


//End--controller Majikan



//Start--controller Agen
Route::post('/DataAgen', 'AgencyController@update');
Route::post('/savedetail/{id}', 'AgencyController@save_detail_pekerja');
Route::get('/edit/{id}', 'AgencyController@detail_pekerja');
Route::get('/hapus/{id}', 'AgencyController@delete_staff');
Route::get('/resettoken', 'AgencyController@reset_kode_unik');

//End--controller Agen