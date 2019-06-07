<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPagamentoTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_pagamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_pagamento');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tipo_pagamento');
    }
}
