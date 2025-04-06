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
        Schema::create('tb_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->comment('Id do Usuario');
            $table->text('descricao_post')->comment('Descricao do Post');
            $table->date('data_post')->comment('Data do Post');
            $table->boolean('status_post')->comment('Status do Post');
            $table->string('arquivo_post', 36)->comment('Imagem do Post');
            $table->string('download_post', 50)->comment('Arquivo do Post');
            $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_post');

    }
};
