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

Route::group(["as"=>'employee.', "prefix"=>'employee' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'EmployeeController@index');
    Route::get('/create', 'EmployeeController@create');
    Route::post('/store', 'EmployeeController@store');
    Route::get('/edit/{id}', 'EmployeeController@edit');
    Route::get('/delete/{id}', 'EmployeeController@destroy');
});

