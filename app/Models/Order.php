<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'user_id',
        'order_number',
        'total_price',
        'status',
        'pickup_time',
        'payment_method',
        'payment_status',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function store()
{
    return $this->belongsTo(Store::class);
}

public function items()
{
    return $this->hasMany(OrderItem::class);
}

public function payment()
{
    return $this->hasOne(Payment::class);
}
}
