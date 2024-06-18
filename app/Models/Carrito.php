<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = "carritos";

    protected $primaryKey = "id_carrito";

    protected $fillable = [
        //
    ];

    public function det_carritos()
    {
        return $this->hasMany(DetCarrito::class, 'id_carrito', 'id_carrito');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id', 'id_usuario');
    }
}
