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
        Schema::create('tb_reels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->comment('Id do Usuario');
            $table->string('titulo_reels', 100)->comment('Titulo do Reel');
            $table->string('descricao_reels', 255)->comment('Descricao do Reel');
            $table->date('data_reels')->comment('Data do Reel');
            $table->string('arquivo_reels', 36)->comment('Imagem do Reel');
            $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
            $table->boolean('status_reels')->comment('Status do Reel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_reels');
    }
};
