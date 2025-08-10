<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

     protected $fillable = [
        'title',
        'image',
        'status',
        'year_id'
     ];

    public function years():\Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Year::class, 'year_id');
    }
}
