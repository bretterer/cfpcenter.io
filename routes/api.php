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

/**
 * Conference Routes
 */

Route::get('conferences', ['uses' => 'Api\ConferencesController@index']);
Route::get('conferences/{id}', ['uses' => 'Api\ConferencesController@fetch'])->where('[0-9]+');
Route::post('conferences', ['uses' => 'Api\ConferencesController@create']);
Route::put('conferences/{id}', ['uses' => 'Api\ConferencesController@edit'])->where('[0-9]+');
Route::delete('conferences/{id}', ['uses' => 'Api\ConferencesController@delete'])->where('[0-9]+');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
