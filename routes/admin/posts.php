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

	Route::get('/posts', 'Admin\PostsController@index')->name('admin.posts');
	Route::get('/posts/add', 'Admin\PostsController@create')->name('admin.posts.add');
	Route::post('/posts/doadd', 'Admin\PostsController@doCreate')->name('admin.posts.doadd');
	Route::get('/posts/edit/{lang}/{id}', 'Admin\PostsController@postEdit')->name('admin.posts.edit');
	Route::post('/posts/update', 'Admin\PostsController@doDpdate')->name('admin.posts.update');
	Route::post('/posts/change/status', 'Admin\PostsController@doChange')->name('admin.posts.change.status');
	Route::post('/posts/del/{lang}/{id}', 'Admin\PostsController@doDelete')->name('admin.posts.del');

	