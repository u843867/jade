<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Justin';
    public $loud = true;
    public $greeting = ["Goodbye"];

   
    public function mount($name)
    {
        $this->name = $name;
    }
    
    
    public function render()
    {
        return view('livewire.hello-world');
    }
}
