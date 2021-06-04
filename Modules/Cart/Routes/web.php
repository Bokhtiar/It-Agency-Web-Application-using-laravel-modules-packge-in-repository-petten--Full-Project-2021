<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::prefix('cart')->group(function() {
    Route::get('store/{id}', 'CartController@store')->middleware('auth');
    Route::get('details', 'CartController@cart_details')->middleware('auth');
    Route::post('quantity-store/{id}', 'CartController@quantity')->middleware('auth');
    Route::get('delete/{id}', 'CartController@delete')->middleware('auth');

});

Route::prefix('order')->group(function() {
    Route::get('/create', 'OrdersController@create')->middleware('auth');
    Route::post('/store', 'OrdersController@store')->middleware('auth');
    Route::get('/list', 'OrdersController@index')->middleware('auth');
});

