<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imagenes_saldos_asignados', function (Blueprint $table) {
            $table->id('ID_IMAGEN');
            $table->unsignedBigInteger('ID_SALDO');
            $table->string('NOMBRE_ORIGINAL', 255);
            $table->string('RUTA_IMAGEN', 255);
            $table->dateTime('FECHA_SUBIDA')->default(DB::raw('CURRENT_TIMESTAMP'));

            // Clave foránea
            $table->foreign('ID_SALDO')
                  ->references('ID_SALDO')->on('saldos_asignados')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imagenes_saldos_asignados');
    }
};