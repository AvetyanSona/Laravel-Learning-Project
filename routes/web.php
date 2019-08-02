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

Route::view('/','home');
//Route::view('contact','contact');
Route::view('about','about');

//Route::get('customers','CustomersController@index');
//Route::get('customers/create','CustomersController@create');
//Route::post('customers','CustomersController@store');
//Route::get('customers/{customer}','CustomersController@show');
//Route::get('customers/{customer}/edit','CustomersController@edit');
//Route::patch('customers/{customer}','CustomersController@update');
//Route::delete('customers/{customer}','CustomersController@destroy');

Route::get('contact','ContactFormController@create');
Route::post('contact','ContactFormController@store');

Route::resource('customers','CustomersController');
//Route::resource('customers','CustomersController')->middleware('auth'); It's the way to add auth middleware for route


Auth::routes();

//Route::group(['middleware' => ['auth']], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//});
