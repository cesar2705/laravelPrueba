<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar productos
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // Mostrar formulario de creación (no usado en APIs)
    public function create()
    {
        return response()->json(['message' => 'Formulario no disponible en API'], 404);
    }

    // Crear producto
    public function store(Request $request)
    {
        $product = Product::create($request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]));

        return response()->json($product, 201);
    }

    // Mostrar producto por ID
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Mostrar formulario de edición (no usado en APIs)
    public function edit($id)
    {
        return response()->json(['message' => 'Formulario no disponible en API'], 404);
    }

    // Actualizar producto
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validate([
            'nombre' => 'sometimes|string',
            'descripcion' => 'sometimes|string',
            'pricio' => 'sometimes|numeric',
            'stock' => 'sometimes|integer',
        ]));

        return response()->json($product);
    }

    // Eliminar producto
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}
