<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'sport',
        'status',
        'color',
        'service_id',
    ];

    protected $casts = [
        'colors' => 'array',
    ];

    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ServiceImage::class);
    }

    public function serviceImage()
    {
        return $this->belongsTo(\App\Models\ServiceImage::class, 'sport');
    }

    public function activities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Activity::class);
    }



}
