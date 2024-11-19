<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['departure_date', 'arrival_date', 'price', 'route_id', 'operations_officer_id'];

    // Relationship: A Trip belongs to one Route
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    // Relationship: A Trip can have many Schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    // Relationship: A Trip belongs to an Operations Officer (User)
    public function operationsOfficer()
    {
        return $this->belongsTo(User::class, 'operations_officer_id');
    }
}
