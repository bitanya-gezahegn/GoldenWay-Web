<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Driver extends User
{
    // protected $table = 'drivers';
    protected $fillable = [
        'licence_number',
        'employment_date',
      
    ];
    // Add relationships or driver-specific methods here
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
