<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class year extends Model
{

    protected $fillable = ['year', 'image', 'active'];



    public function galleries(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
