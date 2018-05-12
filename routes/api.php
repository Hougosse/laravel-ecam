<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Index page d'accueil
Route::get('/', 'PagesControllerApi@index');

//Afficher la liste de tous les voyages
Route::get('voyages', 'VoyagesControllerApi@index');

//Montre le voyage selon son id
Route::get('voyages/{id}', 'VoyagesControllerApi@show'); 

//Save le voyage
Route::post('voyages', 'VoyagesControllerApi@store'); 

//Mise-à-jour d'une note
Route::put('voyages/{id}', 'VoyagesControllerApi@update'); 

//Efface le voyage
Route::delete('voyages/{id}', 'VoyagesControllerApi@destroy');
