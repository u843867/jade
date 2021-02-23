<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Customize extends Component
{
    public function render()
    {
        return view('livewire.customize');
    }

    public function customized()
    {
        $this->emit('customizeComplete');
    }
}
