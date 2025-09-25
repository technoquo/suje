<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'image',
        'title',
        'slug',
        'description',
        'date_published',
        'status',
        'link_video',
        'link_google',
        'pdf',
        'user_id',
        'service_id',
        'service_image_id',
        'group_id',
    ];


    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceimage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ServiceImage::class, 'service_image_id');
    }

    public function group(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    public function parentGroup()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
