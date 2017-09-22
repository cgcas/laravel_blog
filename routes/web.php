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

Route::get('/', 'home@verHome')->name('inicio');

Route::get('/post/{id}', 'posteando@verPost')->name('post');

Route::post('/buscar', 'buscar_controller@buscar')->name('buscar');

Route::match(['get', 'post'], '/nuevaEntrada', 'nuevaEntradaController@alta')->name('nuevaEntrada');

Route::match(['get', 'post'], '/editar/{id}', 'editarController@editar')->name('editar');

Route::get('/borrar/{id}','borrarController@borrar')->name('borrar');

Route::get('/escritores', 'BlogController@listarEscritores')->name('escritores');

Route::get('/escritor/{id}','BlogController@listarEntradasEscritor')->name('escritor');