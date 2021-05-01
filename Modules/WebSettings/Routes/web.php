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

Route::prefix('topheader')->group(function() {
    Route::get('/', 'TopHeaderController@index');
    Route::post('/store', 'TopHeaderController@store');
    Route::post('/store/{id}', 'TopHeaderController@store');
    Route::get('/edit/{id}', 'TopHeaderController@edit');
    Route::get('/delete/{id}', 'TopHeaderController@destroy');
});



Route::prefix('navbar')->group(function() {
    Route::get('create', 'MenuController@create');
    Route::post('store', 'MenuController@store');
    Route::post('store/{id}', 'MenuController@store');
    Route::get('index', 'MenuController@index');
    Route::get('edit/{id}', 'MenuController@edit');
    Route::get('delete/{id}', 'MenuController@destroy');
});
    foreach (Modules\WebSettings\Entities\Menu::all() as $menu) {
        Route::get($menu->link, 'MenuController@index');
        Route::get('menu/{id}', 'MenuController@show');
    }



Route::prefix('social')->group(function() {
    Route::get('/', 'SocialController@index');
    Route::post('store/{id}', 'SocialController@store');
    // Route::post('/store/{id}', 'SocialInfoController@store');
    // Route::get('/edit/{id}', 'SocialInfoController@edit');
    // Route::get('/delete/{id}', 'SocialInfoController@destroy');
});

//about area
Route::get('about/', 'AboutController@index');
Route::post('about/store/{id}', 'AboutController@store');


//team
    Route::get('team/', 'TeamController@index');
    Route::post('team/store', 'TeamController@store');
    Route::post('team/store/{id}', 'TeamController@store');
    Route::get('team/edit/{id}', 'TeamController@edit');
    Route::get('team/status/{id}', 'TeamController@status');
    Route::get('team/delete/{id}', 'TeamController@destroy');
