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
        Schema::create('adicionales_personalizacions', function (Blueprint $table) {
            $table->id();
            $table->integer('num_caracteres')->nullable();
            $table->decimal('precio', 8, 2)->nullable();
            $table->boolean('estado');
            $table->foreignId('id_tipo_personalizacion')->constrained('tipo_personalizacions');
            $table->foreignId('id_producto')->constrained('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adicionales_personalizacions');
    }
};
