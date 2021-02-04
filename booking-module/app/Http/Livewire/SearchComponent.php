<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;


class SearchComponent extends Component

{

    // variables which will be visible to the livewire frontend component
    public $location_array;

    public $search_from;
    public $fly_from;

    public $search_to;
    public $fly_to; 

    // 

    public function render()
    {
        return view('livewire.search-component');
    }



    public function getLocations($fromOrTo)
    {
        
        
        if ($fromOrTo === 'from') {       
            if ($this->search_from == '') {
                // $this->location_array = null;
                return;
            }
            else $search = $this->search_from;
        }
        elseif ($fromOrTo === 'to') { 
                   
            if ($this->search_to == '') {
                $this->location_array = null;
                return;
            }
            else $search = $this->search_to;
        }
        

        $client = new Client();
        $response = $client->request('GET', 'https://tequila-api.kiwi.com/locations/query', [
            'query' => [
                'term' => $search,
                'locale' => 'en-US',
                'location_types' => 'airport',
                'limit' => '10',
                'active_only' => 'true',
                'apikey' => 'VJIq2b7VE2DUhLxyppRPowVgG3186y1D'
            ]
        ]);


        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $locations = $response['locations'];
        
        // initialise locations array for frontend
        $locations_export = [];
        $this->location_array = [];       

        foreach ($locations as $location) {  
               
            $locations_tmp['id'] = $location['id'];
            $locations_tmp['city'] = $location['city']['name'];
            $locations_tmp['name'] = $location['name'];
            $locations_tmp['type'] = $location['type'];

            array_push($this->location_array, $locations_tmp);
        }
        
        
        // dd($this->location_array);

        

        

    }

    public function setOrigin($locationCity,$locationId,$locationType) {
        $this->fly_from = trim($locationType).':'.trim($locationId);
        $this->search_from = trim($locationCity).', ('.trim($locationId).')';
        $this->location_array = null;    
    }

    public function setDestination($locationCity,$locationId,$locationType) {
        $this->fly_to = trim($locationType).':'.trim($locationId);
        $this->search_to = trim($locationCity).', ('.trim($locationId).')';
        $this->location_array = null;    
    }

    
    
}
