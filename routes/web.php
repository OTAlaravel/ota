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


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function () {
      return view('welcome');
    });

    Auth::routes();
	Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('test',function(){
		return View::make('test');
	});
});


Route::prefix('admin')->group(function()
{
	Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
	Route::post('/setlang', 'Admin\AdminController@setlang')->name('admin.setlang');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	Route::get('/users', 'Admin\UsersController@index')->name('admin.users');
	Route::get('/users/{username}', 'Admin\UsersController@edit')->name('admin.user.edit');
	Route::post('/users/{user}', 'Admin\UsersController@update')->name('admin.user.update');
	
	Route::get('/pages', 'Admin\PagesController@index')->name('admin.pages');
	Route::get('/pages/add', 'Admin\PagesController@create')->name('admin.pages.add');
	Route::post('/pages/doadd', 'Admin\PagesController@doCreate')->name('admin.pages.doadd');
	Route::get('/pages/edit/{lang}/{id}', 'Admin\PagesController@PageComposer')->name('admin.pages.edit');
	Route::get('/pages/builder/{lang}/{id}', 'Admin\PagesController@PageEdit')->name('admin.pages.builder');
	Route::post('/pages/update', 'Admin\PagesController@doDpdate')->name('admin.pages.update');
	Route::post('/pages/change/status', 'Admin\PagesController@doChange')->name('admin.pages.change.status');
    Route::post('/pages/del/{lang}/{id}', 'Admin\PagesController@doDelete')->name('admin.pages.del');

	Route::get('/posts', 'Admin\PostsController@index')->name('admin.posts');
	Route::get('/posts/add', 'Admin\PostsController@create')->name('admin.posts.add');
	Route::post('/posts/doadd', 'Admin\PostsController@doCreate')->name('admin.posts.doadd');
	Route::get('/posts/edit/{lang}/{id}', 'Admin\PostsController@postEdit')->name('admin.posts.edit');
	Route::post('/posts/update', 'Admin\PostsController@doDpdate')->name('admin.posts.update');
	Route::post('/posts/change/status', 'Admin\PostsController@doChange')->name('admin.posts.change.status');
	Route::post('/posts/del/{lang}/{id}', 'Admin\PostsController@doDelete')->name('admin.posts.del');

	Route::get('/banners', 'Admin\BannersController@index')->name('admin.banners');
	Route::get('/banners/add', 'Admin\BannersController@create')->name('admin.banners.add');
	Route::post('/banners/doadd', 'Admin\BannersController@doCreate')->name('admin.banners.doadd');
	Route::get('/banners/edit/{lang}/{id}', 'Admin\BannersController@edit')->name('admin.banners.edit');
	Route::delete('/banners/del/{lang}/{id}', 'Admin\BannersController@doDelete')->name('admin.banners.del');
	Route::post('/banners/update/{lang}/{id}', 'Admin\BannersController@update')->name('admin.banners.update');

});

