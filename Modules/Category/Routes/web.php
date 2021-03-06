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
Route::group(["as"=>'category.', "prefix"=>'category' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'CategoryController@index');
    Route::post('store/', 'CategoryController@store');
    Route::post('store/{id}', 'CategoryController@store');
    Route::get('status/{id}', 'CategoryController@status');
    Route::get('edit/{id}', 'CategoryController@edit');
    Route::get('delete/{id}', 'CategoryController@destroy');
});
