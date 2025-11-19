<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'fullname','email', 'address', 'total', 'status'
    ];

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
