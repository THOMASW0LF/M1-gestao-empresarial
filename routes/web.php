<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\IndexController;

route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'salvar'])->name('cliente.salvar');

// aliases públicos que apontam para os mesmos métodos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('produtos', ProdutoController::class);

    Route::prefix('clientes')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('clientes.index');
        Route::get('/{id}', [AdminController::class, 'showCliente'])->name('clientes.show');
    });
});



