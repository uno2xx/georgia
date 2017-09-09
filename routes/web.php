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

Route::get('/', function(){
	return redirect()->route('stepOne');
});

Route::get('/step-one', 'PaymentController@index')->name('stepOne');
Route::post('/step-one-store', 'PaymentController@stepOneStore')->name('stepOneStore');
Route::get('/step-two', 'PaymentController@stepTwo')->name('stepTwo');
Route::post('/step-two-store', 'PaymentController@stepTwoStore')->name('stepTwoStore');