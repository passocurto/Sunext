<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produto')->insert([
            [
                'nome' => "Brown Brim",
                'descricao' => "Para sua cabeça",
                'preco' => 30,
                'quantidade' => 50,
                'imageUrl' => "https://i.ibb.co/ZYW3VTp/brown-brim.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => "Touca azul",
                'descricao' => "Para sua cabeça",
                'preco' => 30,
                'quantidade' => 50,
                'imageUrl' => "https://i.ibb.co/ypkgK0X/blue-beanie.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => "Brown Cowboy",
                'descricao' => "Para o vaqueiro",
                'preco' => 35,
                'quantidade' => 55,
                'imageUrl' => "https://i.ibb.co/QdJwgmp/brown-cowboy.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => "Touca verde",
                'descricao' => "Para a Cidade",
                'preco' => 18,
                'quantidade' => 25,
                'imageUrl' => "https://i.ibb.co/rKBDvJX/palm-tree-cap.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => "Boné de lobos",
                'descricao' => "Para aventureiros",
                'preco' => 14,
                'quantidade' => 25,
                'imageUrl' => "https://i.ibb.co/bLB646Z/red-beanie.png",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => "Bone Azul",
                'descricao' => "Para roqueiros",
                'preco' => 16,
                'quantidade' => 20,
                'imageUrl' => "https://i.ibb.co/1f2nWMM/wolf-cap.png",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
