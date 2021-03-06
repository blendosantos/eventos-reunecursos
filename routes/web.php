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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/lista', 'EventoController@listaAdmin');
    Route::get('/cadastro', 'EventoController@cadastroAdmin');
    Route::post('/cadastro', 'EventoController@postCadastroAdmin');
    Route::get('/edit/{idEvento}', 'EventoController@editAdmin');
    Route::post('/edit/{idEvento}', 'EventoController@postEditAdmin');
    Route::get('/active/{idEvento}', 'EventoController@active');
    Route::get('/inactive/{idEvento}', 'EventoController@inactive');
    Route::get('/delete/{idEvento}', 'EventoController@delete');
    Route::post('/detalhe-curso/{idEvento}', 'EventoController@postDetalheCurso');
    Route::get('/cad-palestrante/{idEvento}', 'EventoController@getPalestranteCurso');
    Route::post('/palestrante-curso/{idEvento}', 'EventoController@postPalestranteCurso');
    Route::get('/edit-detalhe/{idProgramacao}', 'EventoController@getEditProgramacao');
    Route::post('/edit-programacao/{idProgramacao}', 'EventoController@postEditProgramacao');
    Route::post('/palestrante-vincular-curso/{idEvento}', 'EventoController@postPalestranteVincularCurso');
    Route::get('/delete-palestrante/{id}', 'EventoController@deletePalestranteCurso');
    Route::get('/edit-palestrante/{idPalestrante}/{idEvento}', 'EventoController@editPalestrante');
    Route::post('/edit-palestrante/{idPalestrante}/{idEvento}', 'EventoController@postEditPalestrante');

    Route::get('/listaPreInscritos/{idEvento}', 'EventoController@listaPreInscricao');

    Route::post('/plano-curso/{idEvento}', 'EventoController@postPlanoCurso');
    Route::get('/edit-plano/{id}', 'EventoController@editPlanoCurso');
    Route::post('/edit-plano/{id}', 'EventoController@postEditPlanoCurso');
    Route::get('/delete-plano/{id}', 'EventoController@deletePlanoCurso');

});
