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

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index');
    Route::get('/create', 'BlogController@create');
    Route::post('store/', 'BlogController@store');
    Route::post('store/{id}', 'BlogController@store');
    Route::get('status/{id}', 'BlogController@status');
    Route::get('edit/{id}', 'BlogController@edit');
    Route::get('delete/{id}', 'BlogController@destroy');
});
