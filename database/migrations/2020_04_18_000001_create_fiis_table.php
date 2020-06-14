<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateFiisTable
 */
class CreateFiisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiis', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->comment('Chave primária da tabela.');

            $table->string('co_sigla', '10')
                ->comment('Sigla do FII.');

            $table->string('ds_alvo', '50')
                ->comment('Público alvo do FII.');

            $table->string('ds_tipo', '100')
                ->comment('Tipo do FII.');

            $table->string('ds_administrador', '255')
                ->comment('Administrador do FII.');

            $table->string('vl_ultimo_rendimento', '255')
                ->comment('Valor do último rendimento do FII.');

            $table->string('dt_pagamento', '255')
                ->comment('Data de pagamento do FII.');

            $table->string('nr_cotistas', '15')
                ->comment('Número de cotistas do FII.');

            $table->string('vl_patrimonio', '30')
                ->comment('Valor patrimonial do FII.');

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
        Schema::dropIfExists('fiis');
    }
}
