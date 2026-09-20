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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bus_id')
                ->constrained('buses')
                ->cascadeOnDelete();

            $table->foreignId('route_id')
                ->constrained('routes')
                ->cascadeOnDelete();

            $table->date('travel_date');

            $table->time('departure_time');
            $table->time('arrival_time')->nullable();

            $table->decimal('fare', 10, 2);

            $table->boolean('status')->default(true);

            $table->timestamps();

            $table->index(['travel_date', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
