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

Route::get('/', 'EventoController@index');

Route::get('/{slug}', 'EventoController@evento');

Route::get('/pagseguro/pagar/{idParticipante}', 'PagamentoParticipanteController@efetuarPagamento');

Route::post('/cadastro/participante/{idEvento}', 'EventoController@addParticipante');

Route::post('/contato/send/{idEvento}', 'ContatoController@sendContato');

Route::get('/pagseguro/redirect', [
    'uses' => 'PagamentoParticipanteController@redirect',
    'as' => 'pagseguro.redirect',
]);

Route::get('/admin/lista', 'EventoController@listaAdmin');
Route::get('/admin/cadastro', 'EventoController@cadastroAdmin');
Route::get('/admin/edit/{idEvento}', 'EventoController@editAdmin');
Route::get('/admin/active/{idEvento}', 'EventoController@active');
Route::get('/admin/inactive/{idEvento}', 'EventoController@inactive');
Route::get('/admin/delete/{idEvento}', 'EventoController@delete');
