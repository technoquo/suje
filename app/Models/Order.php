<?php

namespace App\Models;

use App\Mail\OrderCancelledMail;
use App\Mail\OrderPaidMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'fullname','email', 'address', 'total', 'status'
    ];

    protected static function booted()
    {
        static::updated(function ($order) {

            if ($order->isDirty('status')) {

                // ✔ Pago completado
                if ($order->status === 'paid') {
                    Mail::to($order->email)
                        ->bcc(env('SALES_EMAIL'))
                        ->send(new OrderPaidMail($order));
                }

                // ❌ Pedido cancelado
                if ($order->status === 'cancelled') {
                    Mail::to($order->email)
                        ->bcc(env('SALES_EMAIL'))
                        ->send(new OrderCancelledMail($order));
                }
            }
        });
    }


    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getIsLateAttribute()
    {
        return $this->items()
            ->where('is_returned', false)     // no devuelto
            ->whereDate('date_fin', '<', now())  // fecha vencida
            ->exists();
    }
}
