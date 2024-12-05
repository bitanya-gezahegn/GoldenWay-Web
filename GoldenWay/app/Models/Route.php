<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = ['origin', 'destination', 'distance', 'stops', 'operations_officer_id'];

    protected $casts = [
        'stops' => 'array', 
    ];

      public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    
    public function operationsOfficer()
    {
        return $this->belongsTo(OperationsOfficer::class, 'operations_officer_id');
    } 
}
