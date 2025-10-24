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



// Produtos
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
});

//Route::get(
//    '/produtos/{produto_id}',
//    function(
//        int $produto_id
//        ){
//    echo 'Id do produto: ' . $produto_id;
//})->where('produto_id', '[0-9]+');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

     Route::prefix('clientes')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('admin.clientes.index');
        Route::get('/clientes/{id}', [AdminController::class, 'showCliente'])->name('admin.clientes.show');
    });
    });
/*Route::prefix('/admin')->group(function(){
    route::get('/adm',[AdminController::class, 'admin'])->name('adm');

    Route::get('/dashboard', function(){
    return 'Tela dashboard admin';
    })->name('admin.dashboard');
    
    Route::get('/clientes', function(){
    return 'lista clientes';
    });

    Route::get(
    '/clientes/{cliente_id}',
        function(
            int $cliente_id
         ){
        echo 'Id do cliente: ' . $cliente_id;
    })->where('produto_id', '[0-9]+');

    Route::get('/fornecedores', function(){
    return 'lista fornecedores';
    });

    Route::get('/produtos', function(){
    return 'lista produtos';
    });

});*/


