<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); // ID único
            $table->string('codigo')->unique(); // Código único
            $table->string('nombre'); // Nombre del curso
            $table->integer('horas_curso'); // Número de horas
            $table->boolean('laboratorio')->default(false); // Indica si tiene laboratorio
            $table->string('semestre'); // Semestre
            $table->timestamps(); // created_at y updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
