<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateDividendosTable
 */
class CreateDividendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dividendos', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->comment('Chave primária da tabela.');

            $table->float('vl_dividendo')
                ->comment('Valor do dividendo por cota.');

            $table->date('dt_pagamento')
                ->comment('Data do pagamento.');

            $table->date('dt_fechamento')
                ->comment('Data do fechamando.');

            $table->enum('ic_pagamento', array(0, 1))
                ->comment('Indicador de confirmação do pagamento. 0:Não; 1:Sim.');

            $table->bigInteger('cd_fii')->unsigned()->index()
                ->comment('Código do FII.');

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
        Schema::dropIfExists('dividendos');
    }
}
