<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);


// Listar todos los productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Mostrar el formulario de creación
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Guardar un nuevo producto
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Mostrar un producto
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Mostrar el formulario de edición
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Actualizar un producto
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Eliminar un producto
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
