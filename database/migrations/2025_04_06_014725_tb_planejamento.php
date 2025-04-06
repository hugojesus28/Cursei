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
        Schema::create('tb_planejamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_instituicao')->comment('ID da instituição');
            $table->string('nome_evento', 100)->comment('nome da preferência');
            $table->text('descricao_evento')->comment('Descrição do evento');
            $table->date('data_inicio_evento')->comment('Descrição do evento');
            $table->date('data_final_evento')->comment('Descrição do evento');
            $table->foreign('id_instituicao')->references('id')->on('tb_instituicao')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_planejamento');

    }
};
