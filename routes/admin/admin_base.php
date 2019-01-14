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

	Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
	Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
	Route::post('/setlang', 'Admin\AdminController@setlang')->name('admin.setlang');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    require(base_path() . '/routes/admin/users.php');
    require(base_path() . '/routes/admin/pages.php');
    require(base_path() . '/routes/admin/posts.php');
	require(base_path() . '/routes/admin/banners.php');
	require(base_path() . '/routes/admin/countries.php');
	require(base_path() . '/routes/admin/states.php');
	require(base_path() . '/routes/admin/testimonials.php');
	require(base_path() . '/routes/admin/accommodations.php');
	require(base_path() . '/routes/admin/species.php');
	require(base_path() . '/routes/admin/inspirations.php');
	require(base_path() . '/routes/admin/experiences.php');
	require(base_path() . '/routes/admin/hotels.php');
	require(base_path() . '/routes/admin/regions.php');
	require(base_path() . '/routes/admin/settings.php');


