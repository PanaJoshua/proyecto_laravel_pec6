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
        Schema::create('generos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('generos_libros', function (Blueprint $table) {
            $table->foreignId('genero_id')->constrained();
            $table->foreignId('libro_id')->constrained();
            $table->timestamps();

            $table->primary(['genero_id', 'libro_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generos_libros');
        Schema::dropIfExists('generos');
    }
};
