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
        Schema::create('tb_seguidor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->comment('Id do Usuario');
            $table->date('data_seguidor')->comment('Data do Seguidor');
            $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_seguidor');

    }
};
