<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->charset ='utf8mb4';
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->float('precio_total');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('pagos_id');
            $table->foreign('pagos_id')->references('id')->on('pagos');
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
}
