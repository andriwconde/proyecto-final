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

Route::get('/phpinfo', function () {
    phpinfo();
});


Route::get('/', 'WebsiteController@index');

Route::get('/products', 'ProductController@index');
Route::get('/products/add', 'ProductController@create');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::patch('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');

Route::get('/home', function () {
    return 'Presentacion de todos nuestros menus'; /* view('home') */
});

Route::get('/detalle/{id}', function ($id) {

    return 'Aqui vemos el detalle del producto' . ' ' . $id;
    /*
    view('detalle',
    [
        'id' => $id,
        'precios' => 88888.99,
        'descripcion' => "Lorem ipsum dolor",
        'titulo' => "Lorem Ipsum",
        'imagen' => "imagen",
    ]);
    */

});

Route::get('/cart', function () {
    return 'Este es tu carrito'; /* view('cart') */
});

Route::post('/cart', function () {
    return 'Podes agregar nuevos productos';
});

Route::get('/faq', function () {
    return 'La preguntas que mas nos hacen'; /* view('faq') */;
});

Route::get('/contacto', function () {
    return 'Encontranos en Digital House'; /* view('contacto') */;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
