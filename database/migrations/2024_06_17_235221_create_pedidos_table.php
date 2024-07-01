<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->unsignedBigInteger('id_venta');
            $table->unsignedBigInteger('id_usuario');
            $table->string('remitente', 60)->nullable();
            $table->string('destinatario', 60)->nullable();
            $table->string('direccion_envio', 200)->nullable();
            $table->string('telefono_remitente', 10)->nullable();
            $table->string('telefono_destinatario', 10)->nullable();
            $table->date('fecha_entrega')->default(Carbon::now()->addDays(2));
            $table->string('estado', 45)->default('Entrega Pendiente');

            $table->foreign('id_venta')
                ->references('id_venta')
                ->on('ventas');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
