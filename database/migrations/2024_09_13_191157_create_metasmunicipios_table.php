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
        Schema::create('metasmunicipios', function (Blueprint $table) {
            $table->id();
            $table->integer('valor_meta');
            $table->unsignedBigInteger('id_metasdptos');
            $table->foreign('id_metasdptos')->references('id')->on('metasdptos');
            $table->unsignedBigInteger('id_municipios');
            $table->foreign('id_municipios')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metasmunicipios');
    }
};
