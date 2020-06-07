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
            $table->bigIncrements('id');
            $table->string('co_sigla', '10');
            $table->string('ds_alvo', '50');
            $table->string('ds_tipo', '100');
            $table->string('ds_administrador', '255');
            $table->string('vl_ultimo_rendimento', '255');
            $table->string('dt_pagamento', '255');
            $table->string('nr_cotistas', '15');
            $table->string('vl_patrimonio', '30');
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
