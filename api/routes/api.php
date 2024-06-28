<?php

use App\Models\Pedido;
use App\Models\Produto;
use App\Models\produto_pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/produtos', function () {
    return Produto::all();
});


Route::get('/pedidos', function () {
    return Pedido::all();
});

//Route::post('pedidos/{pedido}/produtos', [produto_pedido::class, 'addProduto']);
