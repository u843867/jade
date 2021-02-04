<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTraveler extends Model
{
    use HasFactory;

    protected $fillable = [			
        'travelerNumber',
        'travelerType',
        'travelerTitle',
        'travelerFirstName',
        'travelerLastName',
        'travelerBirthDay',
        'travelerBirthMonth',
        'travelerBirthYear', 
        'travelerDocsType', 
        'travelerDocsNumber', 
        'travelerDocsDay', 
        'travelerDocsMonth', 
        'travelerDocsYear', 
        'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
