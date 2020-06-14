<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateCotasTable
 */
class CreateCotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotas', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->comment('Chave primária da tabela.');

            $table->integer('nr_cotas')
                ->comment('Número de cotas.');

            $table->float('vl_cota')
                ->comment('Valor individual da cota.');

            $table->date('dt_compra')
                ->comment('Data da compra da cota.');

            $table->integer('ic_subscricao')->default(0)
                ->comment('Indicador de subscrição da cota.');

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
        Schema::dropIfExists('cotas');
    }
}
