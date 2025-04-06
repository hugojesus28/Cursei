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
        Schema::create('tb_curtida_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user_curtida')->comment('Id do Usuario');
            $table->unsignedBigInteger('id_post')->comment('Id do Usuario');
            $table->boolean('status_curtida')->comment('Status da Curtida');
            $table->date('data_curtida')->comment('Data da Curtida');
            $table->foreign('id_user_curtida')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_post')->references('id')->on('tb_post')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_curtida_post');

    }
};
