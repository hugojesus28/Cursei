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
        Schema::create('tb_comentario'  , function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_comentario')->comment('Id do Usuario');
            $table->unsignedBigInteger('id_user_post')->comment('Id do post');
            $table->text('comentario')->comment('Comentario');
            $table->date('data_comentario')->comment('data Comentario');
            $table->boolean('status_comentario')->comment('status Comentario');


            $table->foreign('id_user_comentario')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_user_post')->references('id')->on('tb_user')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_comentario');

    }
};
