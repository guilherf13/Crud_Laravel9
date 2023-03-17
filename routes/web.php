<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincimpalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedoresController;
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
//Rotas de navegação basica.
Route::get('/', [PrincimpalController::class, 'index'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatosController::class, 'contatos'])->name('site.contato');
//Rota de loguin
Route::get('/loguin', function ()
{
    return 'Loguin';
});

//Grupo de rotas com prefixo /app para alguma logica futura. 
Route::prefix('/app')->group(function ()
{
    Route::get('/clientes', [ClientesController::class, 'clientes']);
    Route::get('/fornecedores', [FornecedoresController::class, 'index']);
    Route::get('/produtos', [ProdutosController::class, 'produtos']);    
});

Route::get('/teste/{valor1}/{valor2}', [TesteController::class, 'testes']);
Route::fallback(function ()
{
    echo 'Pagina Não encontrada. <a href="'.route('site.princimpal').'">Clique aqui</a> para voltar a pagina inicial';
});

