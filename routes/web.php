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

Route::get('/pagseguro/pagar', 'PagamentoParticipanteController@efetuarPagamento');

Route::post('/pagseguro/notification', [
    'uses' => '\laravel\pagseguro\Platform\Laravel5\NotificationController@notification',
    'as' => 'pagseguro.notification',
]);

Route::get('/pagseguro/redirect', [
    'uses' => 'PagamentoParticipanteController@redirect',
    'as' => 'pagseguro.redirect',
]);
