<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPedidoTable extends Migration
{
    
    public function up()
    {
        Schema::create('produto_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->references('id')->on('pedidos');
			$table->integer('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produto_pedido');
    }
}
