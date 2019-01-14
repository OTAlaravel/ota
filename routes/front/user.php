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
Route::get('/users/dashboard', 'ProfileController@index')->name('user.dashboard');
Route::get('/users/profile', 'ProfileController@Profile')->name('user.profile');
Route::get('/users/hotels', 'HotelsController@hotels_list')->name('user.hotels');
Route::get('/users/hotels/edit/{id}', 'HotelsController@hotels_edit')->name('user.hotels.edit');
Route::post('/users/hotels/update/{id}', 'HotelsController@hotels_update')->name('user.hotels.update');


