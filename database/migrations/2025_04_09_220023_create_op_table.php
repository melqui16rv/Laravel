<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('op', function (Blueprint $table) {
            $table->string('CODIGO_OP', 55)->primary();
            $table->string('CODIGO_CRP', 55);
            $table->string('CODIGO_CDP', 55);
            $table->string('Numero_Documento', 55)->nullable();
            $table->date('Fecha_de_Registro')->nullable();
            $table->dateTime('Fecha_de_Pago')->nullable();
            $table->string('Estado', 255)->nullable();
            $table->decimal('Valor_Bruto', 15, 2)->nullable();
            $table->decimal('Valor_Deducciones', 15, 2)->nullable();
            $table->decimal('Valor_Neto', 15, 2)->nullable();
            $table->string('Tipo Beneficiario', 255)->nullable();
            $table->string('Vigencia Presupuestal', 155)->nullable();
            $table->string('Tipo_Identificacion', 255)->nullable();
            $table->string('Identificacion', 255)->nullable();
            $table->string('Nombre_Razon_Social', 255)->nullable();
            $table->string('Medio_de_Pago', 255)->nullable();
            $table->string('Tipo_Cuenta', 255)->nullable();
            $table->string('Numero_Cuenta', 255)->nullable();
            $table->string('Estado_Cuenta', 255)->nullable();
            $table->string('Entidad_Nit', 255)->nullable();
            $table->text('Entidad_Descripcion')->nullable();
            $table->string('Dependencia', 255)->nullable();
            $table->text('Dependencia_Descripcion')->nullable();
            $table->text('Rubro')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Fuente', 100)->nullable();
            $table->string('Recurso', 255)->nullable();
            $table->string('Sit', 155)->nullable();
            $table->decimal('Valor_Pesos', 15, 2)->nullable();
            $table->decimal('Valor_Moneda', 15, 2)->nullable();
            $table->decimal('Valor_Reintegrado_Pesos', 15, 2)->nullable();
            $table->decimal('Valor_Reintegrado_Moneda', 15, 2)->nullable();
            $table->string('Tesoreria_Pagadora', 100)->nullable();
            $table->string('Identificacion_Pagaduria', 255)->nullable();
            $table->string('Cuenta_Pagaduria', 255)->nullable();
            $table->string('Endosada', 55)->nullable();
            $table->string('Tipo_Identificacion2', 255)->nullable();
            $table->string('Identificacion3', 255)->nullable();
            $table->string('Razon_social', 255)->nullable();
            $table->string('Numero_Cuenta4', 255)->nullable();
            $table->text('Concepto_Pago')->nullable();
            $table->string('Solicitud_CDP', 55)->nullable();
            $table->string('CDP', 55)->nullable();
            $table->string('Compromisos', 55)->nullable();
            $table->text('Cuentas_por_Pagar')->nullable();
            $table->date('Fecha_Cuentas_por_Pagar')->nullable();
            $table->text('Obligaciones')->nullable();
            $table->text('Ordenes_de_Pago')->nullable();
            $table->decimal('Reintegros', 15, 2)->nullable();
            $table->date('Fecha_Doc_Soporte_Compromiso')->nullable();
            $table->string('Tipo_Doc_Soporte_Compromiso', 100)->nullable();
            $table->string('Num_Doc_Soporte_Compromiso', 100)->nullable();
            $table->text('Objeto_del_Compromiso')->nullable();

            // Foreign Keys (opcional)
            $table->foreign('CODIGO_CRP')->references('CODIGO_CRP')->on('crp')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('CODIGO_CDP')->references('CODIGO_CDP')->on('cdp')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('op');
    }
};