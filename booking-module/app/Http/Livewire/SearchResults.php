<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class SearchResults extends Component
{
    
    // variables which will be visible to the livewire frontend component
    
    // this is an array of search parameters provided when this livewire component was instantiated on the frontend
    public $search_parameters;

    //this is the search results for the frontend display 
    public $search_results;
    public $current_step;


    public function render()
    {
        if ($this->search_parameters['flight_type'] === 'Roundtrip'){
            $this->search_parameters['flight_type'] = 'round';
        }
        elseif ($this->search_parameters['flight_type'] === 'Oneway'){
            $this->search_parameters['flight_type'] = 'oneway';
        }
        // dd($this->search_parameters);
        $client = new Client();
        $response = $client->request('GET', 'https://tequila-api.kiwi.com/v2/search', [
            'query' => [
                'flight_type' => $this->search_parameters['flight_type'],
                'fly_from' => $this->search_parameters['fly_from'],
                'fly_to' => $this->search_parameters['fly_to'],
                'date_from' => $this->search_parameters['from_date'],
                'date_to' => $this->search_parameters['from_date'],
                'return_from' => $this->search_parameters['return_from'],
                'return_to' => $this->search_parameters['return_from'],
                'curr' => 'USD',
                'sort' => 'duration',
                'apikey' => 'VJIq2b7VE2DUhLxyppRPowVgG3186y1D'
            ]
        ]);

        $response = $response->getBody()->getContents();
        
        ($tempSearch_results = json_decode($response,true));
        // dd($tempSearch_results['data'][0]);

        // loop through the route array (detailed route data) and for each route occurence create an array 
            // within the array create a summary array, extracting the leg Origin and Destination i.e. outbound leg, inbound leg 
            // note, there may be 1..many sectors per leg. e.g. EDI-BAH could have 1 leg (EDI-BAH, direct), it could be EDI-DXB-BAH etc.
            // in the summary array we will only list the leg O & D e.g. EDI & BAH, but we will want to take note of the number of flights
            // that are comprised in the leg.
        $search_results_count = 0;
        
        foreach ($tempSearch_results['data'] as $search_result) {
            
            $search_results_count++;
            // get all the general (non leg & non segment data )
            $id = $search_result['id'];
            $booking_token = $search_result['booking_token']; 
            $price = $search_result['price'];
                
            if (isset($search_result['baglimit']['hand_weight'])) {
                $hand_luggage_limit = $search_result['baglimit']['hand_weight'];
            }
            if (isset($search_result['baglimit']['hold_weight'])) {
                $hold_luggage_limit = $search_result['baglimit']['hold_weight'];
            }
            $leg_duration_outbound = $search_result['duration']['departure'];
            $leg_duration_inbound = $search_result['duration']['return'];  
            $availability = $search_result['availability']['seats'];
               
            //////////////////////////////////////////////////////////////////////
            
            $cabin_array = array();
            $inbound_cabin_array = array();

            // $outbound_origin = $search_result['routes'][0][0];
            // $outbound_destination = $search_result['routes'][0][1];
            // if (isset($search_result['routes'][1][0])) {
            //     $inbound_origin = $search_result['routes'][1][0];
            // }
            // if (isset($search_result['routes'][1][0])) {
            //     $inbound_destination = $search_result['routes'][1][1];
            // }
            $cabin_array_count = 0;
            $in_cabin_array_count = 0;
            $legCount = 0;
            $leg_array = array();
            $outbound_flightCount=0;
            $inbound_flightCount=0;


            
            foreach ($search_result['routes'] as $key=>$leg) {
                
                foreach ($search_result['route'] as $segment) {
                    // this foreach loops through the segment(s). It's job is 2 fold. Firstly, to get the data needed 
                    // to display on the  flight results page - this is put into the 'leg array'. Secondly, segment data is
                    // added to the segment array - displayed when the user clicks - 'more detail'  

                    // this IF statement ensures we only get the data for the 'fly from' city as this is the Originating city 
                    if ($segment['flyFrom'] === $leg[0]) {

                        ($origin_match = true);
                        //if this is a match, we have our outbound leg Origin. List out the attributes for the summary array
                        $leg_origin_city = $segment['cityFrom']; 
                        $leg_origin_IATA_code = $segment['flyFrom'];
                        $leg_origin_date = \Carbon\Carbon::parse($segment['local_departure'])->format("d M Y");
                        $leg_origin_time = \Carbon\Carbon::parse($segment['local_departure'])->format("g:i A");


                        // create 'from' array
                        $leg_array [$legCount][0] = array('leg_origin_city'=>$leg_origin_city, 'leg_origin_IATA_code'=>$leg_origin_IATA_code,
                        'leg_origin_date'=>$leg_origin_date,'leg_origin_time'=>$leg_origin_time, 
                        ); 
                        
                    }

                    // this IF statement ensures we only get the data for the 'fly to' city as this is the Destination city
                    if ($segment['flyTo'] === $leg[1]) {

                        ($destination_match = true);
                        //if this is a match, we have our outbound leg destination. List out the attributes for the summary array
                        $leg_destination_city = $segment['cityTo']; 
                        $leg_destination_IATA_code = $segment['flyTo'];
                        $leg_destination_date = \Carbon\Carbon::parse($segment['local_arrival'])->format("d M Y");
                        $leg_destination_time = \Carbon\Carbon::parse($segment['local_arrival'])->format("g:i A");
                        

                        // create 'to' array
                        $leg_array[$legCount][1] = array('leg_destination_city'=>$leg_destination_city, 'leg_destination_IATA_code'=>$leg_destination_IATA_code,
                        'leg_destination_date'=>$leg_destination_date,'leg_destination_time'=>$leg_destination_time
                        );                              
                    }

                    // if($legCount === 0){$outbound_flightCount++;}
                    // if($legCount === 1){$inbound_flightCount++;}
                                        // Each 'Segment' can have a cabin e.g. economy, business etc. The Cabin array stores all the unique Cabin variables. 
                    // If 2 segments have the same Cabin, that cabin will only be stored once. Almost always, an itinerary will have only one cabin.
                    // Also, we need to map the fare category received in the response to a cabin. This will be done first.
                    if ($segment['fare_category'] === 'M') 
                    {
                    $tmp_cabin = 'Economy';
                    }
                    elseif ($segment['fare_category'] === 'W') 
                    {
                    $tmp_cabin = 'Economy premium';
                    }
                    elseif ($segment['fare_category'] === 'C') 
                    {
                    $tmp_cabin = 'Business';
                    }
                    elseif ($segment['fare_category'] === 'F') 
                    {
                    $tmp_cabin = 'First';
                    }   
                    else 
                    {
                    $tmp_cabin = 'Economy';
                    }

                    
                    if (count($cabin_array) != 0) {
                        foreach ($cabin_array as $cabin) {
                        
                            if ($cabin === $tmp_cabin){}
                            
                            else {
                                $cabin_array[$cabin_array_count] = $tmp_cabin;
                                $cabin_array_count++;
                            }
                        }
                    }
                    else {
                        $cabin_array[$cabin_array_count] = $tmp_cabin;
                        $cabin_array_count++;
                    }

                }
                // dd($inbound_flightCount);
                //now the segment loop is ended we need to record the number of flights inbound and outbound.
                $outbound_flightCount=0;
                foreach ($search_result['route'] as $sector) {
                    // dd($outbound_destination);
                    //when we get to the sector with destination == outbound destination we have our count of outbound.
                    if ($sector['flyTo'] === $search_result['routes'][0][1]) {
                        $outbound_flightCount+=1;
                        break;
                    } else {
                        $outbound_flightCount+=1;
                    }

                }
                //we only want to calculate the inbound flights if this is a roundtrip
                if (isset($search_result['routes'][1][1])) {
                $inbound_flightCount = count($search_result['route']) - $outbound_flightCount;
                }
                // dd($inbound_flightCount);


                if($legCount === 0){
                    $leg_array[$legCount] += array('outbound_flightCount'=>$outbound_flightCount);
                    
                    $outbound_flightCount = 0;
                }

                if($legCount === 1) {
                    $leg_array[$legCount] += array('inbound_flightCount'=>$inbound_flightCount);
                    
                    $inbound_flightCount = 0;
                } 
                
                // dd($outbound_flightCount);
                $tmp_searchResults[$search_results_count] = array('id'=> $id, 'booking_token'=> $booking_token, 'price'=> $price, 
                'hand_luggage_limit'=> $hand_luggage_limit,'hold_luggage_limit'=> $hold_luggage_limit, 'availability'=> $availability, 
                'leg_duration_inbound' => $leg_duration_inbound,'leg_duration_outbound' => $leg_duration_outbound,
                'outbound_flightCount'=>$outbound_flightCount, 'inbound_flightCount'=>$inbound_flightCount, 'cabin_array'=>$cabin_array,  
                'leg_array' => $leg_array
                );
                
                

                $legCount++;
            }


 
        
        // dd($tmp_searchResults);
        

        }

        $this->search_results = $tmp_searchResults;
        // dd($this->search_results);
        // create flight result array. This contains all the summary data

        // $this->search_results = json_decode($response,true);
        // $duration = $response['data'][0]['duration'];
        // dd($this->search_results['data'][0]['airlines']);
        // dd($this->search_parameters);
        // dd($this->search_results['data'][0]);
                
        return view('livewire.search-results');
    }

      
}
