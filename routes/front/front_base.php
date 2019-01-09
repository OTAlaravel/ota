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

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function () {
      return view('home');
    });

    Auth::routes();
	Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/users/dashboard', 'HomeController@index')->name('user.dashboard');
	Route::get('/users/my-profile', 'HomeController@index')->name('user.myprofile');

   require(base_path() . '/routes/front/customers.php');
   require(base_path() . '/routes/front/hoteliers.php');
   require(base_path() . '/routes/front/hotels.php');
   require(base_path() . '/routes/front/pages.php');
   require(base_path() . '/routes/front/cart.php');
