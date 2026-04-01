<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi secara massal
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'price_at_purchase',
    ];

    /**
     * Relasi: Satu detail order ini milik (belongsTo) satu Pesanan
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relasi: Satu detail order ini merujuk ke (belongsTo) satu Menu
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}