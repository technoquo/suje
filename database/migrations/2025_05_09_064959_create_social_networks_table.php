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
        Schema::create('social_networks', function (Blueprint $table) {
            $table->id();
            $table->string('platform'); // Ej: Facebook, Twitter, LinkedIn
            $table->string('url');
            $table->string('icon')->nullable(); // Icono de la red social
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_networks');
    }
};
