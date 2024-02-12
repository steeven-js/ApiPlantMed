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
        Schema::create('plant_utilisations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['interne', 'externe'])->nullable();
            $table->longText('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plant_utilisations');
    }
};
