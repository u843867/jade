<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderJourneyLeg;
use App\Models\OrderTraveler;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('hello');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // store the JSON in a variable
        $received_order_json = $request->input('order-json');
        $order_data = json_decode($received_order_json, true);

        //create unique ID
        $uid = uniqid();


        $order = Order::create([
            'refId' => md5($uid),
            'TotalCostCurrency' => $order_data['TotalCost']['currency'],
            'TotalCostSymbol' => $order_data['TotalCost']['symbol'],
            'TotalCostAmount' => $order_data['TotalCost']['amount'] 
        ]);    
      

        // $count = 0;
        foreach ($order_data['originDestinations'] as $od) {
            //$departureDateTimeRange = [$od][$count]['departureDateTimeRange']['date'];
            // $id = [$od][$count]['id'];
        
            // $check = ($od['destinationLocationName']);
            // dd($check); 

         
            OrderJourneyLeg::create([
            'legNumber'=>$od['id'],
            'originLocationName'=>$od['originLocationName'],
            'originLocationCode'=> $od['originLocationCode'],
            'destinationLocationName'=> $od['destinationLocationName'],
            'destinationLocationCode'=> $od['destinationLocationCode'],
            'departureDate' => $od['departureDateTimeRange']['date'],
            'departureTime' => $od['departureDateTimeRange']['time'],
            'arrivalDate' => $od['arrivalDateTimeRange']['date'],
            'arrivalTime' => $od['arrivalDateTimeRange']['time'],
            'duration' => $od['duration']['hours'].':'.$od['duration']['minutes'],
            'equipmentType' => $od['equipment']['type'],
            'equipmentMake' => $od['equipment']['make'],
            'equipmentname' => $od['equipment']['name'],
            'orders_id' => $order->id

            ]);
             
            // $count++;
                
            }

            // $count = 0;
        foreach ($order_data['travelers'] as $od) {
         
            OrderTraveler::create([
            'travelerNumber'=>$od['id'],
            'travelerType'=>$od['travelerType'],
            'travelerTitle'=> $od['travelerTitle'],
            'travelerFirstName'=> $od['travelerFirstName'],
            'travelerLastName'=> $od['travelerLastName'],
            'travelerBirthDay' => $od['travelerDOB']['day'],
            'travelerBirthMonth' => $od['travelerDOB']['month'],
            'travelerBirthYear' => $od['travelerDOB']['year'],
            'travelerDocsType' => $od['travelerDocs']['IdType'],
            'travelerDocsNumber' => $od['travelerDocs']['number'],
            'travelerDocsDay' => $od['travelerDocs']['expiry']['day'],
            'travelerDocsMonth' => $od['travelerDocs']['expiry']['month'],
            'travelerDocsYear' => $od['travelerDocs']['expiry']['year'],
            'fk_order_id' => $order->id

            ]);
             
            // $count++;
                
            }

            // $count = 0;
            foreach ($order_data['productBreakdown'] as $od) {  
             
                OrderProduct::create([
                'productNumber'=>$od['id'],
                'productType'=>$od['productType'],
                'productName'=>$od['productName'],
                'productId'=> $od['productId'],
                'quantity'=> $od['quantity'],
                'priceCurrency' => $od['price']['currency'],
                'priceSymbol' => $od['price']['symbol'],
                'priceValue' => $od['price']['value'],
                'status' => $od['status'],
                'orders_id' => $order->id
    
                ]);
                 
                // $count++;
                    
                }
                              
    }

    public function livestore($request)
    {

        $order_data = json_decode($request,true);
        
        //create unique ID
        $uid = uniqid();

        $order = Order::create([
            'refId' => md5($uid),
            'TotalCostCurrency' => $order_data['TotalCost']['currency'],
            'TotalCostSymbol' => $order_data['TotalCost']['symbol'],
            'TotalCostAmount' => $order_data['TotalCost']['amount'] 
        ]);    
      
            dd($order->id);

        $count = 0;
        foreach ($order_data['originDestinations'] as $od) {
         
            OrderJourneyLeg::create([
            'legNumber'=>$od['id'],
            'originLocationName'=>$od['originLocationName'],
            'originLocationCode'=> $od['originLocationCode'],
            'destinationLocationName'=> $od['destinationLocationName'],
            'destinationLocationCode'=> $od['destinationLocationCode'],
            'departureDate' => $od['departureDateTimeRange']['date'],
            'departureTime' => $od['departureDateTimeRange']['time'],
            'arrivalDate' => $od['arrivalDateTimeRange']['date'],
            'arrivalTime' => $od['arrivalDateTimeRange']['time'],
            'duration' => $od['duration']['hours'].':'.$od['duration']['minutes'],
            'equipmentType' => $od['equipment']['type'],
            'equipmentMake' => $od['equipment']['make'],
            'equipmentname' => $od['equipment']['name'],
            'order_id' => $order->id

            ]);
             
            $count++;
                
            }

            $count = 0;
        foreach ($order_data['travelers'] as $od) {
            //$departureDateTimeRange = [$od][$count]['departureDateTimeRange']['date'];
            // $id = [$od][$count]['id'];
        
            // $check = ($od['destinationLocationName']);
            // dd($check); 

         
            OrderTraveler::create([
            'travelerNumber'=>$od['id'],
            'travelerType'=>$od['travelerType'],
            'travelerTitle'=> $od['travelerTitle'],
            'travelerFirstName'=> $od['travelerFirstName'],
            'travelerLastName'=> $od['travelerLastName'],
            'travelerBirthDay' => $od['travelerDOB']['day'],
            'travelerBirthMonth' => $od['travelerDOB']['month'],
            'travelerBirthYear' => $od['travelerDOB']['year'],
            'travelerDocsType' => $od['travelerDocs']['IdType'],
            'travelerDocsNumber' => $od['travelerDocs']['number'],
            'travelerDocsDay' => $od['travelerDocs']['expiry']['day'],
            'travelerDocsMonth' => $od['travelerDocs']['expiry']['month'],
            'travelerDocsYear' => $od['travelerDocs']['expiry']['year'],
            'order_id' => $order->id

            ]);
             
            $count++;
                
            }

            $count = 0;
            foreach ($order_data['productBreakdown'] as $od) {
                //$departureDateTimeRange = [$od][$count]['departureDateTimeRange']['date'];
                // $id = [$od][$count]['id'];
            
                // $check = ($od['destinationLocationName']);
                // dd($check); 
    
             
                OrderProduct::create([
                'productNumber'=>$od['id'],
                'productType'=>$od['productType'],
                'productName'=>$od['productName'],
                'productId'=> $od['productId'],
                'quantity'=> $od['quantity'],
                'priceCurrency' => $od['price']['currency'],
                'priceSymbol' => $od['price']['symbol'],
                'priceValue' => $od['price']['value'],
                'status' => $od['status'],
                'order_id' => $order->id
    
                ]);
                 
                $count++;
                    
                }
                              
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ref_id)
    {      
        $order = Order::where('refId', $ref_id)->first();
        return new OrderResource(Order::findOrFail($order['id']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}