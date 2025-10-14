<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'image',
        'title',
        'slug',
        'description',
        'sport_id',
        'date_published',
        'status',
        'whatsapp',
        'instagram',
        'link_video',
        'link_google',
        'user_id',
        'group_id',
    ];

    public $timestamps = true;

    public function sport()
    {
        return $this->belongsTo(\App\Models\Sport::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
