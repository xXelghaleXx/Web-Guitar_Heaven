<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carrito()
    {
        return $this->hasOne(Carrito::class, 'id', 'id_usuario');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_usuario', 'id');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id', 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id', 'id_usuario');
    }
}
