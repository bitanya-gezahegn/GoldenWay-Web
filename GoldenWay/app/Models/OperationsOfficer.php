<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class OperationsOfficer extends User
{
    // protected $table = 'operations_officers';
    protected $fillable = [
        'department',
        'employment_date',
    
    ];
    // Add relationships or driver-specific methods here
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
