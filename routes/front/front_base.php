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
	  Route::get('/home', function () {
      $user = auth('web')->user();
      return redirect('/users/dashboard');
    });
   Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
   Route::post('/users/register', 'Auth\RegisterController@doCreate')->name('user.register');
   
   require(base_path() . '/routes/front/user.php');
   require(base_path() . '/routes/front/hotels.php');
   require(base_path() . '/routes/front/pages.php');
   require(base_path() . '/routes/front/cart.php');
   require(base_path() . '/routes/front/ajax.php');
