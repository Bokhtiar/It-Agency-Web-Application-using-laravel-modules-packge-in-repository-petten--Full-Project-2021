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

Route::prefix('expenses')->group(function() {
    Route::get('/', 'ExpensesController@index');
    Route::get('/create', 'ExpensesController@create');
    Route::post('store/', 'ExpensesController@store');
    Route::post('store/{id}', 'ExpensesController@store');
    Route::get('edit/{id}', 'ExpensesController@edit');
    Route::get('delete/{id}', 'ExpensesController@destroy');

});
