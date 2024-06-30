<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'imageUrl',
        'preco',
        'quantidade'
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'produto_pedido')
            ->withPivot('quantidade', 'preco')
            ->withTimestamps();
    }
}
