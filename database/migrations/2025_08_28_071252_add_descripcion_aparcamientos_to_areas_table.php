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
        Schema::table('areas', function (Blueprint $table) {
            $table->text('descripcion_aparcamientos')->nullable()->after('descripcion'); // o el campo que quieras
        });
    }

    public function down()
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->dropColumn('descripcion_aparcamientos');
        });
    }
    
};
