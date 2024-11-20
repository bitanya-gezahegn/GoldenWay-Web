<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'seat_number',
        'available', // Any other relevant fields
    ];

    // Define the relationship with Bus
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
