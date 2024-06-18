<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('id_comentario');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_producto');
            $table->string('comentario', 200);
            $table->date('fecha_comentario')->default(DB::raw('CURRENT_DATE')); // fecha_comentario DATE DEFAULT (CURRENT_DATE)
            
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users');

            $table->foreign('id_producto')
                ->references('id_producto')
                ->on('productos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
};
