<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/deliveries', [DeliveryController::class,'index']);

Route::get('/deliveries/{delivery}', [DeliveryController::class,'show']);
Route::post('/deliveries', [DeliveryController::class,'store']);
Route::put('/deliveries/{delivery}', [DeliveryController::class,'update']);
Route::delete('/deliveries/{delivery}', [DeliveryController::class,'destroy']);
