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

	Route::get('/posts', 'Admin\PostsController@index')->name('admin.posts');
	Route::get('/posts/add', 'Admin\PostsController@create')->name('admin.posts.add');
	Route::post('/posts/doadd', 'Admin\PostsController@doCreate')->name('admin.posts.doadd');

	Route::get('/posts/edit/{lang}/{id}', 'Admin\PostsController@PageComposer')->name('admin.posts.edit');
	Route::get('/pages/builder/{id}', 'Admin\PagesController@PageEdit')->name('admin.posts.builder');
	Route::post('/posts/update', 'Admin\PostsController@doDpdate')->name('admin.posts.update');
});

