<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@show');

Route::get('/admin', function() {
	return view('admin.dashboard');
});

Route::get('/admin/posts', 'PostController@showAll');
Route::get('/admin/posts/create', 'PostController@create');
Route::post('/admin/posts/create', 'PostController@store');
Route::get('/admin/posts/delete/{id}', 'PostController@delete');
Route::get('/posts/{id}', 'PostController@get');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
	Route::get('/openmeup', 'AuthController@showLogin');
	Route::post('/login', 'AuthController@authenticate');

	// Requires the user to be authenticated.
	Route::group(['middleware' => ['auth']], function() {

		Route::get('/dashboard', function() {
			return view('admin.dashboard');
		});

		Route::get('/logout', 'AuthController@logout');

		// Requires Manage Users Permission.
		Route::group(['middleware' => ['permission:manage_users']], function() {

			Route::get('/users', 'UsersController@show');
			Route::get('/users/{id}', 'UsersController@get');
		});
		
	});

});