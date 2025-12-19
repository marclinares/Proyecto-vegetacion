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
        Schema::create('area_vegetacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->foreignId('vegetacion_id')->constrained('vegetaciones')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['area_id', 'vegetacion_id']); // para evitar duplicados
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_vegetacion');
    }
};
