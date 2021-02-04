<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [			
        'id',
        'productType',
        'productNumber',
        'productName',
        'productId',
        'quantity',
        'priceCurrency', 
        'priceSymbol',
        'priceValue', 
        'status',
        'order_id' 
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
