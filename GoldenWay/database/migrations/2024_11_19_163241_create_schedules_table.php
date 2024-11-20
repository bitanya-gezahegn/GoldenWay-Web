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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->foreignId('trip_id')->constrained('trips')->onDelete('cascade'); // FK to Trip
            $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade'); // FK to Bus
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade'); // FK to User (Driver)
            $table->foreignId('operations_officer_id')->constrained('operations_officers')->onDelete('cascade'); // FK to operations officer (User)
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
