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
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nome_admin', 100)->comment('Nome do Admin');
            $table->string('email_admin', 100)->unique()->comment('Email do admin');
            $table->string('senha_admin', 50)->comment('senha do admin');
            $table->string('token_admin', 36)->unique()->comment('senha do admin');
            $table->string('img_admin', 36)->nullable()->comment('imagem do admin');
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
        Schema::dropIfExists('tb_admin');
    }
};
