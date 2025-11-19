<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'name',
        'image',
        'quantity',
        'price',
        'days',
        'date_debut',
        'date_fin',
        'total_price',
        'penalty',
        'is_returned',
        'return_date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
