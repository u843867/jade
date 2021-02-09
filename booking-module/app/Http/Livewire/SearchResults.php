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
        
        // dd($this->search_parameters);
        $client = new Client();
        $response = $client->request('GET', 'https://tequila-api.kiwi.com/v2/search', [
            'query' => [
                // 'flight_type' => 'round',
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
        $this->search_results = json_decode($response,true);
        // $duration = $response['data'][0]['duration'];
        // dd($this->search_results['data'][0]['airlines']);
        // dd($this->search_parameters);
        dd($this->search_results['data'][0]);
                
        return view('livewire.search-results');
    }

      
}
