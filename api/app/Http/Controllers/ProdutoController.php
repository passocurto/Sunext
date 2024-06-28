<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function addProduto(Request $request, $pedidoId)
    {
        $pedido = Pedido::findOrFail($pedidoId);
        $produto = Produto::findOrFail($request->produto_id);

        $pedido->produtos()->attach($produto, [
            'quantidade' => $request->quantidade,
            'preco' => $request->preco
        ]);

        return response()->json(['message' => 'Produto adicionado ao pedido com sucesso!'], 201);
    }
}
