<?php
//  this is the controller for the OMS component 

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderJourneyLeg;
use App\Models\OrderTraveler;



class Oms extends Component
{

    public $jsonOrder;
    public $refId;

    
    public function render()
    {
        return view('livewire.oms');
    }

    public function oms_order()
    
    // this method creates a new record of Order in the DB. 
    {
        
        
        $order_data = json_decode($this->jsonOrder,true);
        
        //create unique ID
        $uid = uniqid();
        
     
        $order = Order::create([
            'refId' => md5($uid),
            'TotalCostCurrency' => $order_data['TotalCost']['currency'],
            'TotalCostSymbol' => $order_data['TotalCost']['symbol'],
            'TotalCostAmount' => $order_data['TotalCost']['amount'] 

        ]); 
         
        $this->refId = $order['refId'];

        $count = 0;
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
 
                $this->emit('order_added');
    }



}
