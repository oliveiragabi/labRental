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

Route::get('/alocacao', 'LocacaoController@aloca');

Route::get('/alocacao/mostra/{id}', 'LocacaoController@mostra');

Route::get('/alocacao/novo', 'LocacaoController@novo');

Route::get('/alocacao/adiciona', 'LocacaoController@adiciona');

Route::get('/usuario/login', 'UsuarioController@login');

Route::get('/usuario/verificalogin', 'UsuarioController@verificalogin');

Route::get('/usuario/novo', 'UsuarioController@novo');

Route::get('/usuario/adicionar', 'UsuarioController@adicionar');