<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'company',
        'phone',
        'service',
        'message',
        'budget',
        'timeline',
        'ip_address',
        'user_agent',
        'status',
    ];
}
