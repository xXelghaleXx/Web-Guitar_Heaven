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
        Schema::create('detCarritos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_carrito');
            $table->unsignedBigInteger('id_producto');
            $table->integer('cantidad');
            $table->decimal('total', 10, 2)->nullable();

            $table->primary(['id_carrito', 'id_producto']);

            $table->foreign('id_carrito')
                  ->references('id_carrito')
                  ->on('carritos');

            $table->foreign('id_producto')
                  ->references('id_producto')
                  ->on('productos');
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
        Schema::dropIfExists('detCarritos');
    }
};
