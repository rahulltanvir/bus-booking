<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking_seats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('booking_id')
                ->constrained('bookings')
                ->cascadeOnDelete();

            $table->foreignId('trip_seat_id')
                ->constrained('trip_seats')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique('trip_seat_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking_seats');
    }
};