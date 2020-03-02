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

Route::get('/', 'RecetasIngredientesController@index')->name('inicio');
Route::get('infoProductos', 'RecetasIngredientesController@show');


Route::view('nosotros', 'informative.nosotros')->name('nosotros');


Route::get('ListaRecetas', 'RecetasIngredientesController@listaReceta')->name('recetas');
Route::get('categorias', 'CategoriasController@categorias')->name('categorias');

Route::get('recetaCompletas/{id}', 'RecetasIngredientesController@mostrarReceta');
Route::get('categoriaRecetas/{id}', 'CategoriasController@mostrarCategoria');
Route::post('busqueda', 'RecetaController@search')->name('busqueda');
Route::post('busquedaI', 'RecetasIngredientesController@busIngre')->name('busquedaI');





