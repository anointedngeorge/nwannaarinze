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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest')->constrained('guests');
            $table->foreignId('room')->constrained('rooms');
            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->float('total_price')->default(0.0);
            $table->foreignId('attended_by')->constrained('users');
            $table->enum('status', ['reserved', 'booked', 'paid', 'pending'])->default('pending');
            $table->string('code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
