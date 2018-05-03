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
    return view('public.home');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('public.about');
});

Route::get('/login_type', function () {
    return view('public.login_type');
});

//ROUTE TANPA CONTROLLER TARO SINI YA//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
  Route::get('/login', 'PekerjaAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PekerjaAuth\LoginController@login');
  Route::post('/logout', 'PekerjaAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PekerjaAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PekerjaAuth\RegisterController@register');

  Route::post('/password/email', 'PekerjaAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PekerjaAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PekerjaAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PekerjaAuth\ResetPasswordController@showResetForm');
});
