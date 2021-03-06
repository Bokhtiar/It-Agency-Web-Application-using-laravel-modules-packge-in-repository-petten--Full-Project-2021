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

Route::group(["as"=>'contact-list.', "prefix"=>'contact-list' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'ContactController@index');
    Route::get('/status/{id}', 'ContactController@status');
    Route::get('/delete/{id}', 'ContactController@destroy');

});

