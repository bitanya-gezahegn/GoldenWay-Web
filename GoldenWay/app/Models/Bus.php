<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_plate', // Add other relevant fields as needed
        'model',
        'capacity',
    ];

    // Define the relationship with Seat
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
