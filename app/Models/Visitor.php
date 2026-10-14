<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'device',
        'browser',
        'os',
        'user_agent',
        'total_visits',
        'total_pageviews',
        'first_visited_at',
        'last_visited_at',
    ];

    protected $casts = [
        'first_visited_at' => 'datetime',
        'last_visited_at' => 'datetime',
    ];

    public function pageviews()
    {
        return $this->hasMany(VisitorPageview::class)->orderBy('created_at', 'desc');
    }
}
