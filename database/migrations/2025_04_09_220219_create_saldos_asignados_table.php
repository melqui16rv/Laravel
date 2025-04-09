<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saldos_asignados', function (Blueprint $table) {
            $table->id('ID_SALDO'); // esta línea ya define la clave primaria
            $table->string('NOMBRE_PERSONA', 255);
            $table->string('DOCUMENTO_PERSONA', 55);
            $table->dateTime('FECHA_REGISTRO')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('FECHA_INICIO');
            $table->date('FECHA_FIN');
            $table->date('FECHA_PAGO')->nullable();
            $table->decimal('SALDO_ASIGNADO', 15, 2);
            $table->string('CODIGO_CRP', 55);
            $table->string('CODIGO_CDP', 55);

            // Claves foráneas
            $table->foreign('CODIGO_CRP')
                ->references('CODIGO_CRP')->on('crp')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('CODIGO_CDP')
                ->references('CODIGO_CDP')->on('cdp')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saldos_asignados');
    }
};