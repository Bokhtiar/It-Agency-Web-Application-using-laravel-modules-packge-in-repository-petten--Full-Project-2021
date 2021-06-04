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

Route::group(["as"=>'portfolio.', "prefix"=>'portfolio' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'PortfolioController@index');
    Route::get('/create', 'PortfolioController@create');
    Route::post('store/', 'PortfolioController@store');
    Route::post('store/{id}', 'PortfolioController@store');
    Route::get('status/{id}', 'PortfolioController@status');
    Route::get('edit/{id}', 'PortfolioController@edit');
    Route::get('delete/{id}', 'PortfolioController@destroy');
});

