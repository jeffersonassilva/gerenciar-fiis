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
            $table->bigIncrements('id');
            $table->float('vl_dividendo');
            $table->date('dt_pagamento');
            $table->bigInteger('cd_fii')->unsigned()->index();
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
