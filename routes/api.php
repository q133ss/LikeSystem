<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('services', [App\Http\Controllers\API\ServiceController::class, 'get']);
Route::post('/type-change/{id}', [App\Http\Controllers\Api\TypeController::class, 'typeChange']);
Route::get('/get-service/{id}', [App\Http\Controllers\Api\ServiceController::class, 'getInfo']);
