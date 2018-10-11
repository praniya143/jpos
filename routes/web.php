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

Route::get('logout', 'Authentication@logout');

Route::post('authenticate', 'Authentication@doLogin');

Route::group(['middleware' => ['authenticate']], function () {

	Route::get('/', 'Home@index');
	Route::group(['prefix' => 'master'],function(){
		Route::get('', 'Home@master');
		Route::get('operator', 'Master@operator');
	});

	Route::resource('billing', 'Billing');

});
