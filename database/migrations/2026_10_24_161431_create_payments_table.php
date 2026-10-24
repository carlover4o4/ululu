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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();

            $table->foreignId('reservation_id')->unique()->constrained('reservations')->cascadeOnDelete();

            $table->enum('method', ['bank_transfer', 'qris', 'ewallet']);

            $table->unsignedInteger('amount');

            $table->enum('status', ['paid', 'refunded'])->default('paid');

            $table->dateTime('paid_at')->nullable();
            $table->timestamp('refunded_at')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
