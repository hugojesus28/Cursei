<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_instituicao' , function (Blueprint $table) {
            $table->id();
            $table->string('nome_instituicao', 100)->comment('Nome da Instituição');
            $table->string('email_instituicao', 100)->unique()->comment('Email da Instituição');
            $table->string('senha_instituicao', 50)->comment('Senha da Instituição');
            $table->string('cnpj_instituicao', 15)->unique()->comment('CNPJ da Instituição');
            $table->string('token_instituicao', 36)->unique()->comment('Token da Instituição');
            $table->string('img_instituicao', 36)->nullable()->comment('Imagem da Instituição');
            $table->string('status_instituicao')->comment('status da Instituição');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_instituicao');

    }
};
