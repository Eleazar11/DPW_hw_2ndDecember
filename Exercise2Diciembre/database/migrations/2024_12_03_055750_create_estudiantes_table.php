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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id(); // Genera el campo id de tipo bigint con autoincremento
            $table->string('codigo_estudiante')->unique(); // Código único
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->text('direccion')->nullable(); // Dirección puede ser nula
            $table->string('correo', 150)->unique(); // Correo único
            $table->string('telefono', 15)->nullable(); // Teléfono puede ser nulo
            $table->enum('estado', ['activo', 'inactivo'])->default('activo'); // Estado con valor por defecto
            $table->timestamps(); // Añade created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
