<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user_preferencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->comment('id usuario');
            $table->unsignedBigInteger('id_preferencia')->unique()->comment('id preferencia usuario');
            $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
            $table->foreign('id_preferencia')->references('id')->on('tb_preferencia')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user_preferencia');
    }
};
