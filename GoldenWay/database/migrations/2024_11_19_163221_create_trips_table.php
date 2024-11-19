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
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->decimal('price', 8, 2);
            $table->foreignId('route_id')->constrained('routes')->onDelete('cascade'); // FK to Route
            $table->foreignId('operations_officer_id')->constrained('operations_officers')->onDelete('cascade'); // FK to operations officer (User)
            
            $table->timestamps();
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
