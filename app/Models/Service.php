<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'sections_id',
        'image',
        'status',
    ];

    public function sections(): \Illuminate\Database\Eloquent\Relations\BelongsTo
     {
        return $this->belongsTo(Section::class);
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function groups(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Group::class);
    }
    public function activities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
