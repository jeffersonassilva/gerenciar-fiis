<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class AddForeignKeysToRendimentosTable
 */
class AddForeignKeysToRendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rendimentos', function (Blueprint $table) {
            $table->foreign('cd_fii', 'fk_rendimentos_fiis')
                ->references('id')->on('fiis');

            $table->foreign('cd_usuario', 'fk_rendimentos_usuarios')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rendimentos', function (Blueprint $table) {
            $table->dropForeign('fk_rendimentos_fiis');
            $table->dropForeign('fk_rendimentos_usuarios');
        });
    }
}
