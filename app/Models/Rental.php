<?php

namespace App\Models;

use App\Mail\OrderPaidMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Rental extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'date_debut',
        'date_fin',
        'return_date',
        'total_price',
        'penalty',
    ];


    protected static function booted()
    {
        static::updated(function ($order) {
            if ($order->isDirty('status') && $order->status === 'paid') {
                Mail::to($order->email)->send(new OrderPaidMail($order));
            }
        });
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}

