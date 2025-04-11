<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nombre' => 'Silla ergonómica',
            'descripcion' => 'Silla con soporte lumbar y ajuste de altura',
            'precio' => 150.00,
            'stock' => 25,
        ]);

        Product::create([
            'nombre' => 'Escritorio de madera',
            'descripcion' => 'Escritorio de 1.5m con cajones',
            'precio' => 300.00,
            'stock' => 12,
        ]);

        Product::create([
            'nombre' => 'Lámpara LED de escritorio',
            'descripcion' => 'Luz blanca regulable con USB',
            'precio' => 45.50,
            'stock' => 40,
        ]);
    }
}
