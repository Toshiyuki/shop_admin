<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    //
    // Route::get('/', function() {
    //   return view('items.index');
    // });
    Route::get('/', 'ItemsController@index');
    Route::get('/items/create', 'ItemsController@create');
    Route::get('/items/{id}', 'ItemsController@show');
    Route::get('/items/{id}/edit', 'ItemsController@edit');
    Route::post('/items','ItemsController@store');
    Route::patch('/items/{id}', 'ItemsController@update');
    Route::delete('/items/{id}', 'ItemsController@destroy');
});
