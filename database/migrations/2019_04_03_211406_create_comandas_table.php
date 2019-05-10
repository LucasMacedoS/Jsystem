<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandasTable extends Migration
{
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comandas');
    }
}
