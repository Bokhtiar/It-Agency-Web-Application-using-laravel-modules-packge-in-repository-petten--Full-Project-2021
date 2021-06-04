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

Route::group(["as"=>'freelancer.', "prefix"=>'freelancer' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'FreelancerController@index');
    Route::get('/create', 'FreelancerController@create');
    Route::post('/store', 'FreelancerController@store');
    Route::post('/store/{id}', 'FreelancerController@store');
    Route::get('/edit/{id}', 'FreelancerController@edit');
    Route::get('/delete/{id}', 'FreelancerController@delete');
});

