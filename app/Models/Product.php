<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'price_per_day',
        'stock',
        'image_path',
        'active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Si usas 'Rental' en inglés:
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }




}
