<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Payment extends Component
{
    public function render()
    {
        return view('livewire.payment');
    }

    public function paid()
    {
        // create pax array
        // $this->pax_array = array($this->contact_email, $this->contact_phone, $this->first_name,  
        // $this->last_name, $this->nationality, $this->gender, $this->passport_id_number);
        $this->emit('paymentComplete');
        // dd(json_encode($this->pax_array));
    }
}
