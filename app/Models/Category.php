<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'nombre',
    ];

    protected $table = 'categorias';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
}