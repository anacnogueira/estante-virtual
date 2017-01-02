<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.book.index');
});

/* Authors */
Route::group(['prefix'=>'autores'], function(){
	Route::get('/', ['as' => 'admin.author.index', 'uses' => 'AuthorsController@index']);
	Route::get('ver/{id}', ['as' => 'admin.author.show', 'uses' => 'AuthorsController@show']);
	Route::get('adicionar', ['as' => 'admin.author.create', 'uses' => 'AuthorsController@create']);
	Route::post('store', ['as' => 'admin.author.store', 'uses' => 'AuthorsController@store']);
	Route::get('editar/{id}', ['as' => 'admin.author.edit', 'uses' =>'AuthorsController@edit']);
	Route::put('update/{id}', ['as' => 'admin.author.update','uses' => 'AuthorsController@update']);
	Route::delete('excluir/{id}', ['as' => 'admin.author.destroy', 'uses' => 'AuthorsController@destroy']);
});

/* Categories */
Route::group(['prefix'=>'categorias'], function(){
	Route::get('/', ['as' => 'admin.category.index', 'uses' => 'CategoriesController@index']);
	Route::get('ver/{id}', ['as' => 'admin.category.show', 'uses' => 'CategoriesController@show']);
	Route::get('adicionar', ['as' => 'admin.category.create', 'uses' => 'CategoriesController@create']);
	Route::post('store', ['as' => 'admin.category.store', 'uses' => 'CategoriesController@store']);
	Route::get('editar/{id}', ['as' => 'admin.category.edit', 'uses' =>'CategoriesController@edit']);
	Route::put('update/{id}', ['as' => 'admin.category.update','uses' => 'CategoriesController@update']);
	Route::delete('excluir/{id}', ['as' => 'admin.category.destroy', 'uses' => 'CategoriesController@destroy']);
});

/* Books */
Route::group(['prefix'=>'livros'], function(){
	Route::get('/', ['as' => 'admin.book.index', 'uses' => 'BooksController@index']);
	Route::get('ver/{id}', ['as' => 'admin.book.show', 'uses' => 'BooksController@show']);
	Route::get('adicionar', ['as' => 'admin.book.create', 'uses' => 'BooksController@create']);
	Route::post('store', ['as' => 'admin.book.store', 'uses' => 'BooksController@store']);
	Route::get('editar/{id}', ['as' => 'admin.book.edit', 'uses' =>'BooksController@edit']);
	Route::put('update/{id}', ['as' => 'admin.book.update','uses' => 'BooksController@update']);
	Route::delete('excluir/{id}', ['as' => 'admin.book.destroy', 'uses' => 'BooksController@destroy']);
	Route::get('a-ser-lido', ['as' => 'admin.book.toBeRead', 'uses' => 'BooksController@toBeRead']);
});