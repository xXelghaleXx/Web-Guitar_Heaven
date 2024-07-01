<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $primaryKey = 'id_venta';

    protected $fillable = [
        //
    ];

    public function det_ventas()
    {
        return $this->hasMany(DetVenta::class, 'id_venta', 'id_venta');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'id_pedido', 'id_pedido');
    }
}
