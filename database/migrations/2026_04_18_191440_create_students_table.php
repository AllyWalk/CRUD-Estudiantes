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
    Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('apellido');
    $table->string('email')->unique();
    $table->string('matricula')->unique();
    $table->integer('semestre'); // Nuevo campo
    $table->foreignId('career_id')->constrained(); // Relación con carreras
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
    
};
