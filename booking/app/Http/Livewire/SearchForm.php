<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchForm extends Component
{
    public $broadcast;


    public function render()
    {
        return view('livewire.search-form');
    }

    public function fetchPlaces()
    {
        $this->broadcast = 'howzit!!';
    }
}
