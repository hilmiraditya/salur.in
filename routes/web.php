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

//ROUTE TANPA CONTROLLER TARO SINI YA//
Route::get('/', function () {
    return App\Auth::user()->name;
    //return view('public.home');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('public.about');
});

// Route::get('/login_type', function () {
//     return view('public.login_type');
// });

//ROUTE DENGAN CONTROLLER TARO SINI YA//
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login_type', 'PagesController@login_type');





//=============================================================//

Route::group(['prefix' => 'agency'], function () {
  Route::get('/login', 'AgencyAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AgencyAuth\LoginController@login');
  Route::post('/logout', 'AgencyAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AgencyAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AgencyAuth\RegisterController@register');

  Route::post('/password/email', 'AgencyAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AgencyAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AgencyAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AgencyAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'pekerja'], function () {
//=============================ROUTE LOGIN PEKERJA===============================================///
  Route::get('/login', 'PekerjaAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PekerjaAuth\LoginController@login');
  Route::post('/logout', 'PekerjaAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PekerjaAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PekerjaAuth\RegisterController@register');

  Route::post('/password/email', 'PekerjaAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PekerjaAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PekerjaAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PekerjaAuth\ResetPasswordController@showResetForm');
  //=============================ROUTE UMUM PEKERJA=============================================///

  Route::get('/editprofile','PekerjaAuth\PekerjaController@EditProfile');
  Route::get('/cariagen','PekerjaAuth\PekerjaController@CariAgen');
});

Route::group(['prefix' => 'majikan'], function () {
  Route::get('/login', 'MajikanAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MajikanAuth\LoginController@login');
  Route::post('/logout', 'MajikanAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MajikanAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MajikanAuth\RegisterController@register');

  Route::post('/password/email', 'MajikanAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MajikanAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MajikanAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MajikanAuth\ResetPasswordController@showResetForm');
});
