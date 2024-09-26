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
        Schema::create('dptos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_dpto');
            $table->integer('codigo_dpto');
            $table->unsignedBigInteger('id_regiones');
            $table->foreign('id_regiones')->references('id')->on('regiones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dptos');
    }
};
