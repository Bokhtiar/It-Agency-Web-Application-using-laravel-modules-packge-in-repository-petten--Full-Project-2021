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

Route::group(["as"=>'product.', "prefix"=>'product' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'ProductController@index');
    Route::get('/create', 'ProductController@create');
    Route::post('store/', 'ProductController@store');
    Route::post('store/{id}', 'ProductController@store');
    Route::get('status/{id}', 'ProductController@status');
    Route::get('edit/{id}', 'ProductController@edit');
    Route::get('show/{id}', 'ProductController@show');
    Route::get('delete/{id}', 'ProductController@destroy');
});


