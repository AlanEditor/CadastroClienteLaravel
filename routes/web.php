<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

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

//Cadastro
Route::get('/',[CadastroController::class, 'index'])->name('cadastro');
Route::post('/',[CadastroController::class, 'cadastrar'])->name('cadastro');


//Listagem
Route::get('/listagem',[CadastroController::class, 'listar'])->name('listagem');

//Delete
Route::delete('/listagem/{id}', [CadastroController::class, 'destroy']);

//Update
Route::get('/listagem/update/{id}', [CadastroController::class, 'edit']);
Route::put('/listagem/update/{id}', [CadastroController::class, 'update']);

//Pesquisar
Route::get('/listagem/search', [CadastroController::class, 'pesquisar'])->name('pesquisar');
