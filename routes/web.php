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




Route::get('/', 'HomeController@index');

//RUtas para Products
Route::get('/products/destroy', 'ProductController@del')->middleware('admin');
Route::get('/products', 'ProductController@index');
Route::get('/products/add', 'ProductController@create')->middleware('admin');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::patch('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');


//rutas para menus
Route::get('/menus/destroy', 'MenuController@del')->middleware('admin');
Route::get('/menus', 'menuController@index');
Route::get('/menus/add', 'menuController@create')->middleware('admin');
Route::get('/menus/{id}', 'menuController@show');
Route::post('/menus', 'menuController@store');
Route::get('/menus/{id}/edit', 'menuController@edit');
Route::patch('/menus/{id}', 'menuController@update');
Route::delete('/menus/{id}', 'menuController@destroy');

Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/contactanos', 'HomeController@contactanos')->name('contactanos');
Route::get('/nosotros', 'HomeController@nosotros')->name('nosotros');

Route::get('/reporting', 'ProductController@reporting');
Route::get('/search', 'ProductController@search');


Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');
