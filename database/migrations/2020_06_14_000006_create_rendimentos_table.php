<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateRendimentosTable
 */
class CreateRendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendimentos', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->comment('Chave primária da tabela.');

            $table->integer('nr_cotas')
                ->comment('Número de cotas.');

            $table->float('vl_recebido')
                ->comment('Valor total recebido pelas cotas.');

            $table->date('dt_pagamento')
                ->comment('Data do pagamento.');

            $table->bigInteger('cd_fii')->unsigned()->index()
                ->comment('Código do FII.');

            $table->bigInteger('cd_usuario')->unsigned()->index()
                ->comment('Código do usuário.');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendimentos');
    }
}
