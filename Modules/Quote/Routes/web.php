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

Route::group(["as"=>'quote.', "prefix"=>'quote' ,"middleware"=>['auth','admin']],function() {
    Route::get('/all', 'QuoteController@index');
    Route::get('/status/{id}', 'QuoteController@status');
    Route::get('/delete/{id}', 'QuoteController@destroy');
});

