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
        Schema::create('metasoficinas', function (Blueprint $table) {
            $table->id();
            $table->integer('valor_meta');
            $table->unsignedBigInteger('id_metasmunicipios');
            $table->foreign('id_metasmunicipios')->references('id')->on('metasmunicipios');
            $table->unsignedBigInteger('id_oficinas');
            $table->foreign('id_oficinas')->references('id')->on('oficinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metasoficinas');
    }
};
