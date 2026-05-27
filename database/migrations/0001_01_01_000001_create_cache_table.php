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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Título del proyecto
            $table->text('description');   // Descripción larga
            $table->string('image_url');   // Enlace a la imagen del proyecto
            $table->string('demo_url');    // Enlace a la web en vivo
            $table->string('github_url');  // Enlace al repositorio
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
