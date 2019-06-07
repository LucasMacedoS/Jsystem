<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->boolean('manipulado');
            $table->integer('estoque');
            $table->float('valor_unitario',255,2);
            $table->unsignedInteger('categoria_id');
                $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedInteger('grupo_id');
                $table->foreign('grupo_id')->references('id')->on('grupos');
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
        Schema::dropIfExists('produtos');
    }
}
