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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id('id_asistencia');
            $table->string('hora_llegada');
            $table->dateTime('fecha_ingreso');
            $table->boolean('asistio')->default(false); // Campo para indicar si asistió o no
            $table->integer('faltas')->default(0); // Campo para contar las faltas
            $table->integer('llegadas_tarde')->default(0); // Nuevo campo para contar las llegadas tarde
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
