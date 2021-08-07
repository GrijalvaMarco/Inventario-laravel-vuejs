<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 
        'descripcion', 
        'sku', 
        'precio', 
        'cantidad', 
        'estado', 
        'categoria_id', 
        'created_at',
        'updated_at'
    ];

}
