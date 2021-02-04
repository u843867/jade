<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderJourneyLeg;
use App\Models\OrderTraveler;
use App\Http\Resources\OrderResource;
use App\Http\Controllers\View;

class hppController extends Controller
{
     
    public function show($ref_id)
    {    
        $neworder = getOrder($ref_id);
        $order = (json_encode($neworder,true));    

        return view("hpp", ["order_array"=>$order]);

    }

}
