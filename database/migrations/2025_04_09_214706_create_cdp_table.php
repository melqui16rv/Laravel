<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cdp', function (Blueprint $table) {
            $table->string('CODIGO_CDP', 55)->primary();
            $table->string('Numero_Documento', 55)->nullable();
            $table->date('Fecha_de_Registro')->nullable();
            $table->dateTime('Fecha_de_Creacion')->nullable();
            $table->string('Estado', 255)->nullable();
            $table->string('Dependencia', 255)->nullable();
            $table->text('Rubro')->nullable();
            $table->string('Fuente', 100)->nullable();
            $table->string('Recurso', 255)->nullable();
            $table->decimal('Valor_Inicial', 15, 2)->nullable();
            $table->decimal('Valor_Operaciones', 15, 2)->nullable();
            $table->decimal('Valor_Actual', 15, 2)->nullable();
            $table->decimal('Saldo_por_Comprometer', 15, 2)->nullable();
            $table->text('Objeto')->nullable();
            $table->text('Compromisos')->nullable();
            $table->text('Cuentas_por_Pagar')->nullable();
            $table->text('Obligaciones')->nullable();
            $table->text('Ordenes_de_Pago')->nullable();
            $table->decimal('Reintegros', 15, 2)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cdp');
    }
};
