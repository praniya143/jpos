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

Route::get('login', function () {
	return view('login');
});

Route::get('logout', 'AuthenticationController@logout');

Route::post('authenticate', 'AuthenticationController@doLogin');

Route::group(['middleware' => ['authenticate']], function () {

	Route::get('/', 'HomeController@index');
	Route::group(['prefix' => 'master'],function(){
		Route::get('', 'HomeController@master');
		Route::resource('operator', 'OperatorController');
		Route::resource('dealer', 'DealerController');

	});

	Route::resource('billing', 'BillingController');

});
