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

// Frontend
	// Beranda
		Route::get('/', 'Frontend\HomeController@index')
			->name('frontend.home');
	// Beranda
// Frontend





// portal admin
	Route::prefix('admin')->group(function(){

	    // login logout
			Route::get('login', 'Auth\LoginController@showLoginForm')
				->name('loginForm');
		    Route::post('login', 'Auth\LoginController@login')
		    	->name('login');
		    Route::post('logout', 'Auth\LoginController@logout')
		    	->name('logout');
	    // login logout

	    // Middleware Auth
	    	Route::middleware(['auth'])->group(function(){

	    		// dashboard
		    		Route::get('dashboard', 'AdminPortal\DashboardController@index')
		    			->name('adpor.dashboard');
	    		// dashboard

	    		// users
		    		Route::get('user', 'AdminPortal\UserController@index')
		    			->name('adpor.user.index');
		    		Route::get('user/reset/{id}', 'AdminPortal\UserController@resetPassword')
		    			->name('adpor.user.resetpassword');
		    		Route::get('user/delete/{id}', 'AdminPortal\UserController@delete')
		    			->name('adpor.user.delete');
		    		Route::get('user/status/{id}', 'AdminPortal\UserController@status')
		    			->name('adpor.user.status');
		    		Route::post('user/store', 'AdminPortal\UserController@add')
		    			->name('adpor.user.store');
		    		Route::post('user/update/me', 'AdminPortal\UserController@update')
		    			->name('adpor.user.update.me');
		    		// log user
	    			Route::get('log-user', 'AdminPortal\UserController@loguser')
		    			->name('adpor.user.loguser');
		    		// log user
		    	// users

	    	});
	    // Middleware Auth
	});
// portal admin
