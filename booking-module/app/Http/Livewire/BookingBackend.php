<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingBackend extends Component
{
    // This component controls what the other components displayed
    // on the Flow blade view 

    // public variables needed/utilized by BookingBackend
    
    public $searchStep;
    public $passengerStep;
    public $customizeStep;
    public $paymentStep;
    public $reviewStep;
    public $search_parameters;
    public $search_result;
    public $pax_array; 

        
    
    protected $listeners = ['flightSelected', 'paxSaved', 'customizeComplete'];

    
    
    
    public function render()
    {
        if ($this->searchStep === null) {
            $this->searchStep = true;  
            $this->passengerStep = false;
            $this->customizeStep = false;
            $this->paymentStep = false;
        }
        return view('livewire.booking-backend');
    }

    public function flightSelected($search_result)
    {
        $this->searchStep =  false; 
        $this->passengerStep = true;
        $this->customizeStep = false;
        $this->paymentStep = false;
        
        $this->search_result = $search_result;
        // dd($this->search_result);
        
    }

    public function paxSaved($pax_array)
    {
        
        $this->searchStep =  false; 
        $this->passengerStep = false; 
        $this->customizeStep = true; 
        $this->paymentStep = false;
        
        $this->pax_array = $pax_array;
        // dd($this->pax_array);    
    }

    public function customizeComplete()
    {
        $this->searchStep =  false; 
        $this->passengerStep = false; 
        $this->customizeStep = false; 
        $this->paymentStep = true; 
                
    }

    public function paymentComplete()
    {
        $this->searchStep =  false; 
        $this->passengerStep = false; 
        $this->customizeStep = false; 
        $this->paymentStep = false; 
                
    }


}
