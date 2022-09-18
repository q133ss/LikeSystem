<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::post('new-order', [App\Http\Controllers\OrderController::class, 'newOrder'])->name('new.order');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
    Route::resource('category',  App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('type', App\Http\Controllers\Admin\TypeController::class);
    Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
});
