<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorPageview extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'ip_address',
        'page_url',
        'page_title',
        'referer',
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
