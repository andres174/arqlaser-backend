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
        Schema::create('detalle_adicionales', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_adicional');
            $table->boolean('estado');
            $table->foreignId('id_detalle_venta')->constrained('detalle_ventas');
            $table->foreignId('id_adicionales_personalizacion')->constrained('adicionales_personalizacions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_adicionales');
    }
};
