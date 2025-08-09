<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    /** @use HasFactory<\Database\Factories\RentalFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'start_date',
        'end_date',
        'return_date',
        'total_price',
        'status',
        'penalty',
    ];

    protected $casts = [
        'start_date'  => 'date',
        'end_date'    => 'date',
        'return_date' => 'date',
        'total_price'  => 'decimal:2',
        'penalty'    => 'decimal:2',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
