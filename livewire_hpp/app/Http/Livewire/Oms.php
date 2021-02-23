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

    public $jsonOrder = 
        '{
        "originDestinations": [{
                "id": "1",
                "originLocationName": "Bahrain",
                "originLocationCode": "BAH",
                "destinationLocationName": "London",
                "destinationLocationCode": "LHR",
                "departureDateTimeRange": {
                    "date": "2021-02-01",
                    "time": "10:00:00"
                },
                "arrivalDateTimeRange": {
                    "date": "2021-02-01",
                    "time": "12:00:00"
                },
                "duration": {
                    "hours": "9",
                    "minutes": "55"
                },
                "equipment": {
                    "type": "Aeroplane",
                    "make": "Boeing",
                    "name": "747-400"
                }
            },
            {
                "id": "2",
                "originLocationName": "London",
                "originLocationCode": "LHR",
                "destinationLocationName": "Dallas",
                "destinationLocationCode": "DFW",
                "departureDateTimeRange": {
                    "date": "2021-02-21",
                    "time": "06:00:00"
                },
                "arrivalDateTimeRange": {
                    "date": "2021-02-21",
                    "time": "22:00:00"
                },
                "duration": {
                    "hours": "9",
                    "minutes": "30"
                },
                "equipment": {
                    "type": "Aeroplane",
                    "make": "Boeing",
                    "name": "777-300ER"
                }
            }
        ],
        "travelers": [{
                "id": "1",
                "travelerType": "ADULT",
                "travelerTitle": "Mr",
                "travelerFirstName": "James",
                "travelerLastName": "Jones",
                "travelerDOB": {
                    "day": "18",
                    "month": "1",
                    "year": "1962"
                },
                "travelerDocs": {
                    "IdType": "passport",
                    "number": "NZ856431584",
                    "expiry": {
                        "day": "30",
                        "month": "9",
                        "year": "2032"
                    }
                }
            },
            {
                "id": "2",
                "travelerType": "ADULT",
                "travelerTitle": "Mrs",
                "travelerFirstName": "Tessa",
                "travelerLastName": "Sanderson",
                "travelerDOB": {
                    "day": "7",
                    "month": "12",
                    "year": "1965"
                },
                "travelerDocs": {
                    "IdType": "passport",
                    "number": "GB84564655",
                    "expiry": {
                        "day": "30",
                        "month": "03",
                        "year": "2032"
                    }
                }
            },
            {
                "id": "3",
                "travelerType": "Child",
                "travelerTitle": "Mstr",
                "travelerFirstName": "Steel",
                "travelerLastName": "Jones",
                "travelerDOB": {
                    "day": "14",
                    "month": "2",
                    "year": "2019"
                },
                "travelerDocs": {
                    "IdType": "passport",
                    "number": "NZ856431584",
                    "expiry": {
                        "day": "9",
                        "month": "12",
                        "year": "2032"
                    }
                }
            }
        ],
        "TotalCost": {
            "currency": "USD",
            "symbol": "$",
            "amount": "1315.50"
        },
        "productBreakdown": [{
                "id": "1",
                "productType": "ticket",
                "productName": "Value Fare - adult",
                "productId": "WVFAATRT",
                "quantity": "2",
                "status": "basket",
                "price": {
                    "currency": "USD",
                    "symbol": "$",
                    "value": "2400.00"
                }
            },
            {
                "id": "2",
                "productType": "ticket",
                "productName": "Value Fare - child",
                "productId": "WVFCATRT",
                "quantity": "1",
                "status": "basket",
                "price": {
                    "currency": "USD",
                    "symbol": "$",
                    "value": "740.50"
                }
            },
            {
                "id": "3",
                "productType": "bag",
                "productName": "20kg check-in bag",
                "productId": "BG-0C2",
                "quantity": "1",
                "status": "basket",
                "price": {
                    "currency": "USD",
                    "symbol": "$",
                    "value": "65.50"
                }
            }
        ]
    }'
    ;
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
