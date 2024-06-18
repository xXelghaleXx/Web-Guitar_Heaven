<?php

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
            $table->unsignedBigInteger('id_usuario');
            $table->string('remitente', 60); 
            $table->string('destinatario', 60);
            $table->string('direccion_envio', 200);
            $table->string('telefono_remitente', 10);
            $table->string('telefono_destinatario', 10);
            $table->date('fecha_entrega')->nullable();
            $table->string('estado', 45);
            
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
