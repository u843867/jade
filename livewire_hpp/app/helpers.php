<?php
use App\Models\Order;


use App\Http\Resources\OrderResource;

function getOrder($ref_id) {
        $order = Order::where('refId', $ref_id)->first();
        $order = new OrderResource(Order::findOrFail($order['id']));
        return $order;
}

function getAllOrders(){ 
    
    $orders = Order::all()->sortByDesc("created_at");;
    $productSum_array = array();
    $count = 0;
    foreach ($orders as $order) {
        
       foreach ($order['products'] as $product) {
        if (array_key_exists($product['productType'],$productSum_array)) {
        $productSum_array[$product['productType']] += (int)$product['quantity'];
        }
        else $productSum_array[$product['productType']] = (int)$product['quantity'];
       }

       foreach ($order['legs'] as $leg) {}
       foreach ($order['travelers'] as $traveler) {}
      
       $orders[$count] = $order;
    //    $orders[$count]['legs'] = $leg;
    //    $orders[$count]['traveler'] = $traveler;
    //    $orders[$count]['products'] = $product;
       $orders[$count]['prod_sum'] = $productSum_array;
       

       
       $productSum_array =[];
       $count++;
        
      
            
       

              
        }
        // dd($orders);
     
    

    $ordersAll = (json_encode($orders,true)); 
    // dd($orders);
    return $ordersAll;    
    
}

