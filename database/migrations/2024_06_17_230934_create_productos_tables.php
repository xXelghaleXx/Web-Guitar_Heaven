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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('detalles');
            $table->string('marca');
            $table->decimal('precio', 20, 2);
            $table->string('madera')->nullable();
            $table->string('cuello')->nullable();
            $table->string('diapason')->nullable();
            $table->string('radio_diapason')->nullable();
            $table->string('longitud_escala')->nullable();
            $table->string('trastes')->nullable();
            $table->string('pastilla')->nullable();
            $table->string('extra')->nullable();
            $table->string('genero')->nullable();
            $table->integer('stock')->nullable();
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
        Schema::dropIfExists('productos');
    }
};
