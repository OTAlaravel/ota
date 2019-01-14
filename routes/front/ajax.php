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
Route::post('/ajax/profile/update', 'Ajax\ProfileController@DoUpdateProfile')->name('ajax.profile.update');
Route::post('/ajax/profile/change_pass', 'Ajax\ProfileController@DoChangePassword')->name('ajax.profile.changepass');