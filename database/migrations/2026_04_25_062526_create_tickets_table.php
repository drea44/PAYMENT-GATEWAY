<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            // Data pembeli
            $table->string('name');
            $table->string('email');

            // Data event
            $table->string('event_name');
            $table->integer('price');

            // Status pembayaran
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');

            // Order dari Midtrans
            $table->string('order_id')->unique();

            // Optional tambahan (rekomendasi)
            $table->string('payment_type')->nullable(); // VA, QRIS, dll
            $table->string('transaction_id')->nullable(); // dari Midtrans
            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};