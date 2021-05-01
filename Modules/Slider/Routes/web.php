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

Route::prefix('slider')->group(function() {
    Route::get('/', 'SliderController@index');
    Route::get('/create', 'SliderController@create');
    Route::post('store/', 'SliderController@store');
    Route::post('store/{id}', 'SliderController@store');
    Route::get('status/{id}', 'SliderController@status');
    Route::get('edit/{id}', 'SliderController@edit');
    Route::get('delete/{id}', 'SliderController@destroy');

});
