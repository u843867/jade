<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchResult extends Component
{
    public $search_result;
    public $current_step;
  
    

    public function render()
    {
        return view('livewire.search-result');
        
    }

    
}
