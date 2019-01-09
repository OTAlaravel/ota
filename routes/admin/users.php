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

	Route::get('/users', 'Admin\UsersController@index')->name('admin.users');
	Route::get('/users/{username}', 'Admin\UsersController@edit')->name('admin.user.edit');
	Route::post('/users/{user}', 'Admin\UsersController@update')->name('admin.user.update');
	
