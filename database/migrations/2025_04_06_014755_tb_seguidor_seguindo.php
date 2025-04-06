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
        Schema::create('tb_seguidor_seguindo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_seguindo')->comment('Id do seguindo');
            $table->unsignedBigInteger('id_seguidor')->comment('Id do seguidor');
            $table->foreign('id_seguindo')->references('id')->on('tb_seguindo')->onDelete('cascade');
            $table->foreign('id_seguidor')->references('id')->on('tb_seguidor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_seguidor_seguindo');

    }
};
