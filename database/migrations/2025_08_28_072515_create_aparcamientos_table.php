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
        Schema::create('aparcamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained()->onDelete('cascade'); // clave foránea
            $table->string('nombre')->nullable(); // nombre del parking (opcional)
            $table->text('descripcion')->nullable(); // descripción opcional del aparcamiento
            $table->integer('plazas')->nullable(); // número de plazas (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aparcamientos');
    }
};
