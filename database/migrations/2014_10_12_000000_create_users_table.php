<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->comment('Chave primária da tabela.');

            $table->string('name')
                ->comment('Nome do usuário.');

            $table->string('email')->unique()
                ->comment('Email do usuário.');

            $table->timestamp('email_verified_at')->nullable()
                ->comment('Verificação do email do usuário.');

            $table->string('password')
                ->comment('Senha do usuário');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
