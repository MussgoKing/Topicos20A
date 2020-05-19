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

Route::get('/prueba', function () {
    return view('mi_vista');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*R U T A S  P R O Y E C T O
Clientes */
Route::get('clientes', 'ClientesController@index')
         ->name('cliente.create');//con este llamas en la vista
Route::resource('cliente', 'ClientesController')->middleware('auth');

Route::get('clientes/create', 'ClientesController@create');
//Productos
Route::get('productos', 'ProductController@index')
         ->name('producto.create');
Route::resource('producto', 'ProductController');
Route::get('productos/create', 'ProductController@create');

//pruebas clase
Route::get('/usuarios', 'UserController@index');
Route::get('/usuarios/nuevo', 'UserController@create');
Route::get('/usuarios/{id}', 'UserController@show') ->where('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienevenido {$name}, tu apodo es {$nickname}";
    }
    else {
        return "Bienevenido {$name}, no tienes apodo";
    }
});

Route::get('/usuarios/registro', function () {
    return "Página de registro";
});

Route::get('/usuarios/detalles/{id}', function ($id) {
    return "Detalle del usuario: {$id}";
}) ->where('id', '[0-9]+');

/*Route::get('/productos/nuevo', function () {
    return "Alta de productos";
});
*/ 
/*Route::get('/productos/detalles/{id}', function ($id) {
    return "Detalle del producto: {$id}";
}) ->where('id', '[0-9]+');
*/
Route::get('/about', function () {
    return "Acerca de...";
});