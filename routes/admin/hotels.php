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
	Route::get('/hotels', 'Admin\HotelsController@index')->name('admin.hotels');
	Route::post('/hotels/uploadcsv', 'Admin\HotelsController@uploadcsv')->name('admin.hotels.uploadcsv');
	Route::delete('/hotels/del/{lang}/{id}', 'Admin\HotelsController@doDelete')->name('admin.hotels.del');
	Route::get('/hotels/edit/{lang}/{id}', 'Admin\HotelsController@edit')->name('admin.hotels.edit');
