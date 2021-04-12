<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoshasproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoshasproductos', function (Blueprint $table) {
            $table->charset ='utf8mb4';
            $table->timestamps();
            $table->integer('cantidad');
            $table->unsignedBigInteger('pedidos_id');
            $table->foreign('pedidos_id')->references('id')->on('pedidos');
            $table->unsignedBigInteger('productos_id');
            $table->foreign('productos_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidoshasproductos');
    }
}
