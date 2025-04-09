<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('crp', function (Blueprint $table) {
            $table->string('CODIGO_CRP', 55)->primary();
            $table->string('CODIGO_CDP', 55);
            $table->string('Numero_Documento', 55)->nullable();
            $table->date('Fecha_de_Registro')->nullable();
            $table->dateTime('Fecha_de_Creacion')->nullable();
            $table->string('Estado', 255)->nullable();
            $table->string('Dependencia', 255)->nullable();
            $table->text('Rubro')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Fuente', 100)->nullable();
            $table->decimal('Valor_Inicial', 15, 2)->nullable();
            $table->decimal('Valor_Operaciones', 15, 2)->nullable();
            $table->decimal('Valor_Actual', 15, 2)->nullable();
            $table->decimal('Saldo_por_Utilizar', 15, 2)->nullable();
            $table->string('Tipo_Identificacion', 255)->nullable();
            $table->string('Identificacion', 255)->nullable();
            $table->string('Nombre_Razon_Social', 255)->nullable();
            $table->string('Medio_de_Pago', 255)->nullable();
            $table->string('Tipo_Cuenta', 255)->nullable();
            $table->string('Numero_Cuenta', 255)->nullable();
            $table->string('Estado_Cuenta', 255)->nullable();
            $table->string('Entidad_Nit', 255)->nullable();
            $table->text('Entidad_Descripcion')->nullable();
            $table->string('Solicitud_CDP', 55)->nullable();
            $table->string('CDP', 55)->nullable();
            $table->string('Compromisos', 55)->nullable();
            $table->text('Cuentas_por_Pagar')->nullable();
            $table->text('Obligaciones')->nullable();
            $table->text('Ordenes_de_Pago')->nullable();
            $table->decimal('Reintegros', 15, 2)->nullable();
            $table->dateTime('Fecha_Documento_Soporte')->nullable();
            $table->string('Tipo_Documento_Soporte', 255)->nullable();
            $table->string('Numero_Documento_Soporte', 255)->nullable();
            $table->text('Observaciones')->nullable();

            // Clave foránea con relación a cdp
            $table->foreign('CODIGO_CDP')->references('CODIGO_CDP')->on('cdp')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('crp');
    }
};
