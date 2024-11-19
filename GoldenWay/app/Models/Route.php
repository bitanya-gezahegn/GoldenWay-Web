<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = ['origin', 'destination', 'distance', 'stops', 'operations_officer_id'];

    protected $casts = [
        'stops' => 'array', // Ensure 'stops' is cast as an array
    ];

    // Relationship: One Route can have many Trips
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    // Relationship: A Route belongs to an Operations Officer (User)
    public function operationsOfficer()
    {
        return $this->belongsTo(OperationsOfficer::class, 'operations_officer_id');
    } 
}
