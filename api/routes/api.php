<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('produtos', ProdutoController::class);

Route::resource('pedidos', PedidoController::class);

//Route::post('pedidos/{pedido}/produtos', [produto_pedido::class, 'addProduto']);
