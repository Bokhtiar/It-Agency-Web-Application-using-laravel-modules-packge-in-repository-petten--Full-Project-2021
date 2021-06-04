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

use Illuminate\Support\Facades\Route;

Route::prefix('order')->group(function() {
    Route::get('/index', 'OrderController@index');
    Route::get('/detail/{id}', 'OrderController@detail');
    Route::post('/porduct-quantiy/{id}', 'OrderController@update');
    Route::get('/cart-delete/{id}', 'OrderController@delete');
    Route::get('/sendDoc/{id}', 'OrderController@sendDoc');
    Route::get('/status/{id}', 'OrderController@status');
});


