<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ImovelController,
    UsuarioController,
};

Route::get('/', function () {
    return view('welcome');
});

/*
criando rotas para consumir API.... GET,POST,PUT,DELETE
*/
Route::get('/', [ImovelController::class, 'index']);
Route::get('/imovel/{id}', [ImovelController::class, 'show']);
Route::get('/cadastrar', [ImovelController::class, 'create']);
Route::post('/imovel', [ImovelController::class, 'store']);
Route::get('/dashboard', [ImovelController::class, 'dashboard']);
Route::get('/editar/{id}', [ImovelController::class, 'edit']);
Route::put('/atualizar/{id}', [ImovelController::class, 'update']);
Route::delete('/apagar/{id}', [ImovelController::class, 'destroy']);


#  Rotas User

Route::get('/login', [UsuarioController::class, 'login']);
Route::post('/signin', [UsuarioController::class, 'signin']);
