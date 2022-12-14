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

Route::middleware('auth')->group(function (){
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Route::post('new-order', [App\Http\Controllers\OrderController::class, 'newOrder'])->name('new.order');
    Route::get('my-orders', [App\Http\Controllers\OrderController::class, 'index'])->name('my.orders');

    Route::middleware('is.admin')->prefix('admin')->name('admin.')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
        Route::resource('category',  App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('type', App\Http\Controllers\Admin\TypeController::class);
        Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
    });

    Route::get('profile', [App\Http\Controllers\Auth\LoginController::class, 'profile'])->name('profile');
    Route::post('profile', [App\Http\Controllers\Auth\LoginController::class, 'profileUpdate'])->name('profile.update');
    Route::post('profile/password', [App\Http\Controllers\Auth\LoginController::class, 'updatePassword'])->name('profile.update.password');
});

Route::get('locale/{lang}', [\App\Http\Controllers\LocaleController::class, 'change'])->name('locale');

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'auth'])->name('auth');
Route::get('register', [App\Http\Controllers\Auth\LoginController::class, 'registration'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->name('registration');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
