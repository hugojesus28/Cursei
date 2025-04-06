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
        Schema::create('tb_story', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_story')->comment('Id do story');
            $table->string('arquivo_story', 36)->comment('video, imagem do Story');
            $table->date('data_inicio_story')->comment('Data do Story');
            $table->string('musica_story', 36)->nullable()->comment('Musica do Story');
            $table->string('texto_story', 255)->nullable()->comment('Descricao do Story');
            $table->boolean('status_story')->comment('Status do Story');
            $table->foreign('id_user_story')->references('id')->on('tb_user')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_story');
    }
};
