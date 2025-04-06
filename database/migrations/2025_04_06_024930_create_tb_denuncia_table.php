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
        Schema::create('tb_denuncia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_denuncia_post')->comment('Id do post denunciado');
            $table->unsignedBigInteger('id_denuncia_usuario')->comment('Id do usuario que fez a denuncia');
            $table->unsignedBigInteger('id_denuncia_instituicao')->comment('Id da instituicao denunciada');
            $table->string('motivo_denuncia', 100)->comment('Motivo da denuncia');
            $table->text('descricao_denuncia')->comment('Descricao da denuncia');
            $table->date('data_denuncia')->comment('Data da denuncia');
            $table->string('arquivo_denuncia', 36)->nullable()->comment('Imagem da denuncia');
            $table->boolean('status_denuncia')->comment('demonstrar se a denuncia foi analisada ou não');
            
            $table->foreign('id_denuncia_post')->references('id')->on('tb_post')->onDelete('cascade');
            $table->foreign('id_denuncia_usuario')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_denuncia_instituicao')->references('id')->on('tb_instituicao')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_denuncia');
    }
};
