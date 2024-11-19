<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Customer extends User
{
    // protected $table = 'customers';

    // Add relationships or driver-specific methods here
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
