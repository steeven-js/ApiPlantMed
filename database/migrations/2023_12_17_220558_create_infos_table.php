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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_id')->references('id')->on('plants')->onDelete('cascade');
            $table->string('name');
            $table->string('nscient');
            $table->string('famille');
            $table->string('genre');
            $table->longText('description');
            $table->longText('habitat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
