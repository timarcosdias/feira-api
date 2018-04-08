<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('propriedade_id')->references('id')->on('propriedades');
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->decimal('preco', 8, 2);
            $table->integer('quantidade');
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
        Schema::dropIfExists('ofertas');
    }
}
