<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'name',
        'city',
        'email',
        'title',
        'content',
        'impact_savings_inr',
        'impact_points',
    ];
}
