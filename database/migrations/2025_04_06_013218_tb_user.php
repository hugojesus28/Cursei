<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id();
           $table->string('nome_user', 100)->comment('Nome do Usuario');
           $table->string('email_user', 100)->unique()->comment('Email do Usuario');
           $table->string('senha_user', 100)->comment('Senha do Usuario');
           $table->string('img_user', 36)->nullable()->comment('Img do Usuario');
           $table->string('token_user', 36)->unique()->comment('token do Usuario');
           $table->boolean('status_user')->comment('status do Usuario');
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
        Schema::dropIfExists('tb_user');
    }
};
