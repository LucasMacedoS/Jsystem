<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('comanda_id');
                $table->foreign('comanda_id')->references('id')->on('comandas');

            $table->unsignedInteger('produto_id');
                $table->foreign('produto_id')->references('id')->on('produtos');

            $table->tinyInteger('quantidade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
