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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code')->unique();

            $table->foreignId('customer_id')->constrained('customers')->restrictOnDelete();
            $table->foreignId('room_id')->constrained('rooms')->restrictOnDelete();

            $table->date('check_in');
            $table->date('check_out');
            $table->unsignedTinyInteger('guests');
            $table->unsignedInteger('nights');
            $table->unsignedInteger('price_per_night');
            $table->unsignedInteger('total_price');

            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'expired'])->default('pending');
            $table->dateTime('expires_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();

            $table->index(['room_id', 'check_in', 'check_out']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
