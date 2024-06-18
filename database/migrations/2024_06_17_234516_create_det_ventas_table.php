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
        Schema::create('detVentas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_venta'); 
            $table->unsignedBigInteger('id_producto');
            $table->integer('cantidad'); 
            $table->decimal('total', 10, 2);
            
            $table->primary(['id_venta', 'id_producto']);
            
            $table->foreign('id_venta')
                  ->references('id_venta')
                  ->on('ventas');

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
        Schema::dropIfExists('detVentas');
    }
};
