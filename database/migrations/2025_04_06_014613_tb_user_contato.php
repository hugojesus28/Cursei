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
        Schema::create('tb_user_contato', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->comment('ID do usuário');
            $table->unsignedBigInteger('id_admin')->comment('ID do admin');
            $table->string('motivo_user_contato', 50)->unique()->comment('motivo do contato');
            $table->text('mensagem_user_contato')->comment('mensagem do contato');
            $table->boolean('status_contato')->comment('Telefone do contato');
            $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('tb_admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user_contato');

    }
};
