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
        Schema::create('tb_destaque', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_story')->comment('Id do Story');
            $table->unsignedBigInteger('id_instituicao')->comment('Id do Instituição');
            $table->string('nome_destaque', 100)->comment('Nome do Destaque');
            $table->boolean('status_destaque')->comment('Status do Destaque');
            $table->string('img_destaque', 36)->nullable()->comment('Img do Destaque');
            $table->foreign('id_story')->references('id')->on('tb_story')->onDelete('cascade');
            $table->foreign('id_instituicao')->references('id')->on('tb_instituicao')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_destaque');
    }
};
