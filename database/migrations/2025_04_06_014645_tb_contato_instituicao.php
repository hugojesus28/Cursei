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
        Schema::create('tb_instituicao_contato', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_instituicao')->comment('ID do Instituição');
            $table->unsignedBigInteger('id_admin')->comment('ID do Instituição');
            $table->string('motivo_instituicao_contato', 50)->comment('motivo do contato');
            $table->text('mensagem_instituicao_contato')->comment('mensagem do contato');
            $table->boolean('status_contato')->comment('Status do contato');
            $table->foreign('id_instituicao')->references('id')->on('tb_instituicao')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('tb_admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_instituicao_contato');

    }
};
