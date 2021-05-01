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

Route::prefix('permission')->group(function() {
    Route::get('/', 'PermissionController@index');
    Route::get('/create', 'PermissionController@create');
    Route::post('/store', 'PermissionController@StoreOrUpdate');
    Route::post('/store/{id}', 'PermissionController@StoreOrUpdate');
    Route::get('/edit/{id}', 'PermissionController@edit');
    Route::get('/destroy/{id}', 'PermissionController@destroy');
});
