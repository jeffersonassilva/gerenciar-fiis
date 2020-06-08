<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cotas', function (Blueprint $table) {
            $table->foreign('cd_fii', 'fk_cotas_fiis')
                ->references('id')->on('fiis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_endereco', function (Blueprint $table) {
            $table->dropForeign('fk_cotas_fiis');
        });
    }
}
