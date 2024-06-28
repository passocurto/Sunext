<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_nome', 'cliente_email', 'status'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'produto_pedido')
            ->withPivot('quantidade', 'preco')
            ->withTimestamps();
    }
}
