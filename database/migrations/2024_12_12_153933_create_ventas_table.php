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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->date('fecha');
            $table->string('direccion');
            $table->string('cod_comprobante');
            $table->string('imagen_transferencia')->nullable();

            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_tipo_pago')->constrained('tipo_pagos');
            $table->foreignId('id_estado_venta')->constrained('estado_ventas');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
