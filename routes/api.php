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
Route::Resource('room','api\RoomsController');
Route::Resource('dht','api\DhtController');
Route::Resource('flame','api\FlamesController');
Route::Resource('led','api\LedController');
Route::Resource('door','api\DoorController');
