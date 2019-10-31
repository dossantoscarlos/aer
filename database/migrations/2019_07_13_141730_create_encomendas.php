<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_inicio');
            $table->string('status')->default('aberto');
            $table->string('cor_fundo');
            $table->string('frase');
            $table->string('dados_extras');
            $table->string('valor');
            $table->string('data_estimada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encomendas');
    }
}
