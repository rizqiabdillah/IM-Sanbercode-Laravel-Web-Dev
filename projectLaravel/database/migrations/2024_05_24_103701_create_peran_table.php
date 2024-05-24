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
        Schema::create('peran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('film_id');
            $table->foreignId('film_id')->references('id')->on('film');

            $table->unsignedBigInteger('cast_id');
            $table->foreignId('cast_id')->references('id')->on('cast');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
