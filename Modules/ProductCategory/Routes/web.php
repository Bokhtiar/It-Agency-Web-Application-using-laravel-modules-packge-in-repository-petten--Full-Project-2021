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

Route::group(["as"=>'productcategory.', "prefix"=>'productcategory' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'ProductCategoryController@index');
    Route::post('store/', 'ProductCategoryController@store');
    Route::post('store/{id}', 'ProductCategoryController@store');
    Route::get('status/{id}', 'ProductCategoryController@status');
    Route::get('edit/{id}', 'ProductCategoryController@edit');
    Route::get('delete/{id}', 'ProductCategoryController@destroy');
});

