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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('presupuesto', 8, 2);
            $table->string('celular');
            $table->string('correo');
            $table->string('descripcion');
            $table->string('imagen_boceto');
            $table->date('fecha');
            $table->boolean('estado');

            $table->foreignId('id_estado_cotizacion')->constrained('estado_ventas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizaciones');
    }
};
