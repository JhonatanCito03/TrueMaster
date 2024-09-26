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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->integer('cedula');
            $table->date('fecha_nacimiento');
            $table->date('fecha_integracion');
            $table->string('correo');
            $table->unsignedBigInteger('id_cargos');
            $table->foreign('id_cargos')->references('id')->on('cargos');
            $table->unsignedBigInteger('id_metasoficinas');
            $table->foreign('id_metasoficinas')->references('id')->on('metasoficinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
