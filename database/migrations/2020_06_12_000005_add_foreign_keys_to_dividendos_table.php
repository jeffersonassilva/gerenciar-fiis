<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddForeignKeysToDividendosTable
 */
class AddForeignKeysToDividendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dividendos', function (Blueprint $table) {
            $table->foreign('cd_fii', 'fk_dividendos_fiis')
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
        Schema::table('dividendos', function (Blueprint $table) {
            $table->dropForeign('fk_dividendos_fiis');
        });
    }
}
