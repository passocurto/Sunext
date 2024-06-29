<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto = Produto::create($validatedData);

        return response()->json($produto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Produto $produto)
    {
        return response()->json($produto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Produto $produto)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        $produto->update($validatedData);

        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return response()->json(null, 204);
    }

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
