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

Route::group(["as"=>'client.', "prefix"=>'client' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'ClientController@index');
    Route::get('/create', 'ClientController@create');
    Route::post('store/', 'ClientController@store');
    Route::post('store/{id}', 'ClientController@store');
    Route::get('status/{id}', 'ClientController@status');
    Route::get('edit/{id}', 'ClientController@edit');
    Route::get('delete/{id}', 'ClientController@destroy');
});

