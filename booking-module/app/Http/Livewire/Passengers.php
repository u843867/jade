<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Passengers extends Component
{
    public $pax_array;
    
    // public $contact_email;
    // public $contact_phone;
    // public $first_name;
    // public $last_name;
    // public $nationality;
    // public $gender;
    // public $date_of_birth;
    // public $passport_id_number;
    // public $passport_id_expiry;
     
    
    
    public function render()
    {
        return view('livewire.passengers');
    }

    public function savePax()
    {
        // create pax array
        // $this->pax_array = array($this->contact_email, $this->contact_phone, $this->first_name,  
        // $this->last_name, $this->nationality, $this->gender, $this->passport_id_number);
        $this->emit('paxSaved', json_encode($this->pax_array));
        // dd(json_encode($this->pax_array));
    }


}
