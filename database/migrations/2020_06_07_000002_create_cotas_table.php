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
            $table->bigIncrements('id');
            $table->integer('nr_cotas');
            $table->float('vl_cota');
            $table->date('dt_compra');
            $table->integer('ic_subscricao')->default(0);
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
        Schema::dropIfExists('cotas');
    }
}
