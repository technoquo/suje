<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'info',
        'email',
        'phone',
        'address',
        'image',
        'logo',
        'latitude',
        'longitude',
        'image_photo',
    ];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
