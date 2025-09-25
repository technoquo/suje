<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'full_name',
        'position',
        'image',
        'testimony',
        'vimeo_url',
        'sections_id',
        'status',
    ];
}
