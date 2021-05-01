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

Route::prefix('/role')->group(function() {
    Route::get('/', 'RoleController@index');
    Route::post('/store','RoleController@StoreOrUpdate');
    Route::post('/store/{id}','RoleController@StoreOrUpdate');
    Route::get('/edit/{id}', 'RoleController@edit');
    Route::get('/destroy/{id}', 'RoleController@destroy');
});
