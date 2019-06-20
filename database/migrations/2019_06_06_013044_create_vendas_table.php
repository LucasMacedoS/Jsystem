<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('comanda_id');
                $table->foreign('comanda_id')->references('id')->on('comandas');

            $table->string('tipo_pagamento');

			$table->float('total_venda');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
