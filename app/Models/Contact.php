<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'company',
        'phone',
        'service',
        'budget',
        'timeline',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];
}
