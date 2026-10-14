<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'city',
        'region',
        'country',
        'country_code',
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

    public function getLocationFormattedAttribute(): string
    {
        $parts = array_filter([$this->city, $this->region, $this->country]);
        if (!empty($parts)) {
            return implode(', ', $parts);
        }
        return 'Location Unknown';
    }
}
