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

Route::get('/', 'PagesController@index');

Route::get('/voyages', 'VoyagesController@index');
Route::get('/voyages/create','VoyagesController@create');
Route::post('/voyages/store', 'VoyagesController@store');
Route::get('/voyages/{voyage}', 'VoyagesController@show');
Route::get('/voyages/{voyage}/edit', 'VoyagesController@edit');
Route::put('/voyages/{voyage}', 'VoyagesController@update');
Route::get('/voyages/delete/{voyage}', 'VoyagesController@destroy');
Route::get('/voyageperso','VoyagesController@voyageperso');

//Route::resource('/voyages', 'VoyagesController');

// Route::resource('users', 'UsersController');

//Route::get('/dashboard', 'DashboardController@index');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/users', 'UsersController@index');
Route::get('/users/create','UsersController@create');
Route::post('/users/store', 'UsersController@store');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');


