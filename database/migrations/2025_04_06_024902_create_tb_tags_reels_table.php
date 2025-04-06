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
        Schema::create('tb_tags_reels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reels')->comment('Id do Reels');
            $table->string('nome_tag_reels', 50)->comment('nome da Tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tags_reels');
    }
};
