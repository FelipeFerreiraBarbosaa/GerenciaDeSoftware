<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjetoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['web'])->group(function () {
    Route::get('/', [ProjetoController::class, 'index'])->name('projeto');

    Route::get('login', [AuthController::class, 'index'])->name('login');

    Route::post('login', [AuthController::class, 'auth'])->name('auth');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('pessoa', [PessoaController::class, 'index'])->name('pessoa');
    Route::get('pessoa/edit/{id}', [PessoaController::class, 'edit'])->name('pessoa.edit');
    Route::post('pessoa/edit/{id}', [PessoaController::class, 'update'])->name('pessoa.update');

    Route::get('pessoa/create', [PessoaController::class, 'create'])->name('pessoa.create');
    Route::post('pessoa/create', [PessoaController::class, 'store'])->name('pessoa.store');
    Route::get('pessoa/destroy/{id}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');
});