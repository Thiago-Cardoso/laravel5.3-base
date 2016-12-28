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
    return view('welcome');
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get(
'/produtos/mostra/{id}',
'ProdutoController@mostra'
)
->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona','ProdutoController@adiciona');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Auth::routes();

Route::post('/produtos/alterar/{id}','ProdutoController@alterar');

Route::get('/produtos/edit/{id}','ProdutoController@edit');

Route::get('/home', 'HomeController@index');
