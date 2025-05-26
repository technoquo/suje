<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{

    protected $fillable = ['title', 'slug', 'description', 'image', 'status'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ? 1 : 0;
    }
}
