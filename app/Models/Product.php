<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'stock',
    ];

    protected $table = 'productos';

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
