<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $primaryKey = "id_producto";

    protected $fillable = [
        'detalles', 'marca', 'precio'
    ];

    // idkkk

    // public function det_carritos()
    // {
    //    return $this->hasMany(DetCarrito::class, 'id_producto', 'id_producto');
    // }
}
