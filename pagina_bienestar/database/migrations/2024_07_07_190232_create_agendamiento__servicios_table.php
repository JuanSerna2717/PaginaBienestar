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
        Schema::create('agendamiento__servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('tipo_documento');
            $table->string('num_documento');
            $table->string('jornada');
            $table->string('servicio');
            $table->string('num_ficha');
            $table->string('programa');
            $table->string('correo');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamiento__servicios');
    }
};
