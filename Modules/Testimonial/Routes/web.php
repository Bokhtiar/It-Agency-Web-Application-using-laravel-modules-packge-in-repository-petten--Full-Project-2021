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


Route::group(["as"=>'testimonial.', "prefix"=>'testimonial' ,"middleware"=>['auth','admin']],function() {
    Route::get('/', 'TestimonialController@index');
    Route::get('/create', 'TestimonialController@create');
    Route::post('store/', 'TestimonialController@store');
    Route::post('store/{id}', 'TestimonialController@store');
    Route::get('status/{id}', 'TestimonialController@status');
    Route::get('edit/{id}', 'TestimonialController@edit');
    Route::get('delete/{id}', 'TestimonialController@destroy');
});

