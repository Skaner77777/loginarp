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

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    Route::get('/listaCategoria', 'CategoriaController@listaCategoria')->name('listaCategoria');
    Route::get('/crearCategoria', 'CategoriaController@crearCategoria')->name('crearCategoria');
    Route::post('/guardarCategoria', 'CategoriaController@guardarCategoria')->name('guardarCategoria');
    Route::get('/mostrarCategoria', 'CategoriaController@mostrarCategoria')->name('mostrarCategoria');
    Route::get('/editarCategoria', 'CategoriaController@editarCategoria')->name('editarCategoria');
    Route::get('/modificarCategoria', 'CategoriaController@modificarCategoria')->name('modificarCategoria');
    Route::get('/eliminarCategoria', 'CategoriaController@eliminarCategoria')->name('eliminarCategoria');
});

