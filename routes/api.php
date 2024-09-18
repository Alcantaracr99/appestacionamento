<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\VerificarClienteMiddleware;
use App\Http\Middleware\VerificarContatoMiddleware;
use App\Http\Middleware\VerificarDocumentoMiddleware;
use App\Http\Middleware\VerificarEnderecoMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\StatusRegistroController;
use App\Http\Controllers\TpDocumentoController;
use App\Http\Controllers\TpTelefoneController;
use App\Http\Controllers\CarroClienteController;
use App\Http\Controllers\ValorHoraController;
use App\Http\Controllers\FaixaHorariaController;

Route::group(['prefix' => '/cliente'], function(){
    Route::get('/', [ClienteController::class, 'listar']);
    Route::get('/buscar-id/{id}', [ClienteController::class, 'mostrarPorId']);
    Route::post('/criar', [ClienteController::class, 'criar'])->middleware(VerificarClienteMiddleware::class);
    Route::put('/atualizar/{id}', [ClienteController::class, 'atualizar'])->middleware(VerificarClienteMiddleware::class);
    Route::delete('/remover/{id}', [ClienteController::class, 'remover']);
});

Route::group(['prefix' => '/contato'], function(){
    Route::get('/{id}', [ContatoController::class, 'buscarContatoPeloId']);
    Route::get('/cliente/{idCliente}', [ContatoController::class, 'listarContatosPeloIdCliente']);
    Route::post('/criar', [ContatoController::class, 'criar'])->middleware(VerificarContatoMiddleware::class);
    Route::put('/atualizar/{id}', [ContatoController::class, 'atualizar'])->middleware(VerificarContatoMiddleware::class);
    Route::delete('/remover/{id}', [ContatoController::class, 'remover']);
});

Route::group(['prefix' => '/documento'], function(){
    Route::get('/{id}', [DocumentoController::class, 'buscarDocumentoPeloId']);
    Route::get('/cliente/{idCliente}', [DocumentoController::class, 'listarDocumentosPeloIdCliente']);
    Route::post('/criar', [DocumentoController::class, 'criar'])->middleware(VerificarDocumentoMiddleware::class);
    Route::put('/atualizar/{id}', [DocumentoController::class, 'atualizar'])->middleware(VerificarDocumentoMiddleware::class);
    Route::delete('/remover/{id}', [DocumentoController::class, 'remover']);
});

Route::group(['prefix' => '/endereco'], function(){
    Route::get('/{id}', [EnderecoController::class, 'buscarEnderecoPeloId']);
    Route::get('/cliente/{idCliente}', [EnderecoController::class, 'listarEnderecosPeloIdCliente']);
    Route::post('/criar', [EnderecoController::class, 'criar'])->middleware(VerificarEnderecoMiddleware::class);
    Route::put('/atualizar/{id}', [EnderecoController::class, 'atualizar'])->middleware(VerificarEnderecoMiddleware::class);
    Route::delete('/remover/{id}', [EnderecoController::class, 'remover']);
});

Route::group(['prefix' => '/carro_cliente'], function(){
    Route::get('/', [CarroCLienteController::class, 'listar']);
});

Route::group(['prefix' => '/st_registro'], function(){
    Route::get('/', [StatusRegistroController::class, 'listar']);
});

Route::group(['prefix' => '/valor-hora'], function(){
    Route::get('/', [ValorHoraController::class, 'listar']);
});

Route::group(['prefix' => '/tp_documento'], function(){
    Route::get('/', [TpDocumentoController::class, 'listar']);
});

Route::group(['prefix' => '/tp_telefone'], function(){
    Route::get('/', [TpTelefoneController::class, 'listar']);
});

Route::group(['prefix' => '/faixa-horaria'], function(){
    Route::get('/', [FaixaHorariaController::class, 'listar']);
});
