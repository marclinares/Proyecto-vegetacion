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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen'); // Ruta al archivo de imagen
            $table->string('descripcion_breve'); // Breve descripción
            $table->text('descripcion'); // Descripción larga
            $table->text('mapa'); // Código iframe o URL
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
