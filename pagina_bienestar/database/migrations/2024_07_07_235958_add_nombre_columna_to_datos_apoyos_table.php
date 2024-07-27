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
        Schema::table('datos__apoyos', function (Blueprint $table) {
            $table->string('estado')->default('En revisión');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datos__apoyos', function (Blueprint $table) {
            $table->string('estado')->default('En revisión');
        });
    }
};
