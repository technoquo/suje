<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image1',
        'image2',
        'image3',
        'link_video',
    ];
}
