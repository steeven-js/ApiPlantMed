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
        Schema::create('symptome_plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('symptome_id')->nullable();
            $table->foreignId('plant_id')->nullable();
            $table->timestamps();

            // Create a unique index instead of a primary key
            $table->unique(['symptome_id', 'plant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptome_plants');
    }
};
