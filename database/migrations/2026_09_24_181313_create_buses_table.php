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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('bus_operator_id')
                ->constrained('bus_operators')
                ->cascadeOnDelete();

            $table->string('bus_number')->unique();
            $table->string('bus_name')->nullable();

            $table->string('bus_type')->default('AC');

            $table->unsignedSmallInteger('total_seats');

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
