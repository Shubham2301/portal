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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('events', 'EventController');
Route::get('events', 'EventController@index');
Route::post('events', 'EventController@store');
Route::get('events/{id}', 'EventController@show');
Route::put('events/{id}', 'EventController@update');
