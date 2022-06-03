<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembrosController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\EnderecosController;
// adicionar linha de contatos 
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('membros', MembrosController::class);
Route::resource('contatos', ContatosController::class);
Route::resource('enderecos', EnderecosController::class);
// rota de contatos


// Route::get('/membros', [App\Http\Controllers\MembrosController::class, 'index']);
// Route::get('/membros/cadastrar', [App\Http\Controllers\MembrosController::class, 'create']);
