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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_number')->unique();

            $table->enum('type', ['Standard', 'Superior', 'Deluxe']);

            $table->text('description')->nullable();
            $table->unsignedTinyInteger('capacity');
            $table->unsignedInteger('price_per_night');

            $table->enum('status', ['available', 'maintenance'])->default('available');

            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
