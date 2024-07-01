<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $primaryKey = 'id_comentario';

    public $timestamps = false;

    protected $fillable = [
        'id_usuario', 'id_producto', 'comentario'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id_usuario');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }
}
