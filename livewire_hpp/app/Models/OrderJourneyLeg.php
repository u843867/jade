<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderJourneyLeg extends Model
{
    use HasFactory;

    protected $fillable = [
        'legNumber',
        'originLocationName',
        'originLocationCode','destinationLocationName',
        'destinationLocationCode',
        'departureDate',
        'departureTime',
        'arrivalDate',
        'arrivalTime',
        'duration',
        'equipmentType',
        'equipmentMake',
        'equipmentname',
        'order_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

