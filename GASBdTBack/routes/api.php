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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::get('users', 'UserController@index');

Route::get('soci', 'UserController@elencoSoci');
Route::get('fornitori', 'UserController@elencoFornitori');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');

// Dettagli del fornitore
Route::get('fornitori/{id}', 'FornitoreController@dettaglio');
Route::put('fornitori/{id}', 'FornitoreController@update');

// Prodotto del fornitore
Route::get('fornitori/{id}/prodotto/{idProdotto}', 'FornitoreController@dettaglioProdotto');
Route::put('fornitori/{id}/prodotto/{idProdotto}', 'FornitoreController@updateProdotto');
Route::post('fornitori/{id}/prodotto/', 'FornitoreController@addProdotto');

// Ordini
Route::get('ordini', 'OrdineController@elenco');