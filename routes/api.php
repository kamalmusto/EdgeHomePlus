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
Route::Resource('dht','api\Dht11DetailsController');
Route::Resource('device','api\DevicesController');
Route::Resource('flame','api\FlameDetailsController');
Route::Resource('led','api\LedsDetailsController');
Route::Resource('pir','api\PirDetailsController');
Route::Resource('system','api\HomeSystemController');
Route::Resource('owner','api\OwenrsDetailsController');
/*
 * route devices
 */
Route::get('device/{id}/{type}','api\DevicesController@getDetails')->name('device.get');
