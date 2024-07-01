<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $primaryKey = 'id_pedido';

    protected $fillable = [
        'id_venta', 'id_usuario', 'remitente', 'destinatario', 'telefono_remitente', 'telefono_destinatario', 'direccion_envio'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id', 'id_usuario');
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta', 'id_venta');
    }

}
