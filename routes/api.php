<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DoacoesController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ImagensController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\UFController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AnimalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("cidades", [CidadeController::class,"index"]);
Route::post("cidade", [CidadeController::class,"store"]);
Route::get("cidade/{id}", [CidadeController::class,"show"]);
Route::put("cidade/{id}", [CidadeController::class,"update"]);
Route::delete("cidade/{id}", [CidadeController::class,"destroy"]);

Route::get("contatos", [ContatoController::class,"index"]);
Route::post("contato", [ContatoController::class,"store"]);
Route::get("contato/{id}", [ContatoController::class,"show"]);
Route::put("contato/{id}", [ContatoController::class,"update"]);
Route::delete("contato/{id}", [ContatoController::class,"destroy"]);

Route::get("doacoes", [DoacoesController::class,"index"]);
Route::post("doacoes", [DoacoesController::class,"store"]);
Route::get("doacoes/{id}", [DoacoesController::class,"show"]);
Route::put("doacoes/{id}", [DoacoesController::class,"update"]);
Route::delete("doacoes/{id}", [DoacoesController::class,"destroy"]);

Route::get("enderecos", [EnderecoController::class,"index"]);
Route::post("endereco", [EnderecoController::class,"store"]);
Route::get("endereco/{id}", [EnderecoController::class,"show"]);
Route::put("endereco/{id}", [EnderecoController::class,"update"]);
Route::delete("endereco/{id}", [EnderecoController::class,"destroy"]);

Route::get("imagens", [ImagensController::class,"index"]);
Route::post("imagens", [ImagensController::class,"store"]);
Route::get("imagens/{id}", [ImagensController::class,"show"]);
Route::put("imagens/{id}", [ImagensController::class,"update"]);
Route::delete("imagens/{id}", [ImagensController::class,"destroy"]);

Route::get("instituicaos", [InstituicaoController::class,"index"]);
Route::post("instituicao", [InstituicaoController::class,"store"]);
Route::get("instituicao/{id}", [InstituicaoController::class,"show"]);
Route::put("instituicao/{id}", [InstituicaoController::class,"update"]);
Route::delete("instituicao/{id}", [InstituicaoController::class,"destroy"]);

Route::get("ufs", [UfController::class,"index"]);
Route::post("uf", [UfController::class,"store"]);
Route::get("uf/{id}", [UfController::class,"show"]);
Route::put("uf/{id}", [UfController::class,"update"]);
Route::delete("uf/{id}", [UFController::class,"destroy"]);


Route::get("usuarios", [UsuarioController::class,"index"]);
Route::post("usuario", [UsuarioController::class,"store"]);
Route::get("usuario/{id}", [UsuarioController::class,"show"]);
Route::put("usuario/{id}", [UsuarioController::class,"update"]);
Route::delete("usuario/{id}", [UsuarioController::class,"destroy"]);
Route::post('/authenticate', [UsuarioController::class,'auth']);

Route::get("animals", [AnimalController::class,"index"]);
Route::post("animal", [AnimalController::class,"store"]);
Route::get("animal/{id}", [AnimalController::class,"show"]);
Route::put("animal/{id}", [AnimalController::class,"update"]);
Route::delete("animal/{id}", [AnimalController::class,"destroy"]);


