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

Route::get('abouts/', 'AboutController@index');
Route::get('all-service/', 'ServiceController@index');
Route::get('all-portfolio/', 'PortfolioController@index');
Route::get('portfolio/detail/{slug}', 'PortfolioController@show');
Route::get('all-testimonial/', 'TestimonialController@all_testimonial');
Route::get('all-blog/', 'BlogController@index');
Route::get('all-product/', 'ProductController@index');
Route::get('all-freelancer/', 'PortfolioController@freelancer');
Route::get('category-ways-product/{id}', 'ProductController@category_ways_product');



Route::get('blog/detail/{slug}', 'BlogController@detail');
Route::get('contact/', 'ContactController@index');
Route::post('contact/store', 'ContactController@store');
Route::get('quote/', 'QuoteController@index');
Route::post('quote/store/', 'QuoteController@store');
//menu
Route::get('navbar-menu/{slug}', 'MenuController@show');
Route::get('footer/{slug}', 'MenuController@footer_show');


