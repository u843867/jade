<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    use HasFactory;

    protected $fillable = ['refId','TotalCostCurrency','TotalCostSymbol','TotalCostAmount'];

    /**
     * Get the travelers for the order.
     */
    public function travelers()
    {
        return $this->hasMany(OrderTraveler::class);
    }

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function legs()
    {
        return $this->hasMany(OrderJourneyLeg::class);
    }

}


