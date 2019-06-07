<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancoCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balanco_caixas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('venda_id')->nullable();
                $table->foreign('venda_id')->references('id')->on('vendas');
            $table->string('tipo');
            $table->float('valor', 255, 2);
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
        Schema::dropIfExists('balanco_caixas');
    }
}
