<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['departure_time', 'arrival_time', 'trip_id', 'bus_id', 'driver_id', 'operations_officer_id'];

    // Relationship: A Schedule belongs to a Trip
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    // Relationship: A Schedule belongs to a Bus
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    // Relationship: A Schedule belongs to a Driver (User)
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    // Relationship: A Schedule belongs to an Operations Officer (User)
    public function operationsOfficer()
    {
        return $this->belongsTo(OperationsOfficer::class, 'operations_officer_id');
    }
}
