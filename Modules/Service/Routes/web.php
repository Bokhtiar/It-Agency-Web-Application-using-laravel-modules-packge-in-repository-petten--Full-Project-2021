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

Route::prefix('service')->group(function() {
    Route::get('/', 'ServiceController@index');
    Route::get('/create', 'ServiceController@create');
    Route::post('store/', 'ServiceController@store');
    Route::post('store/{id}', 'ServiceController@store');
    Route::get('status/{id}', 'ServiceController@status');
    Route::get('edit/{id}', 'ServiceController@edit');
    Route::get('delete/{id}', 'ServiceController@destroy');

});

