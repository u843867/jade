<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderShow extends Component
{

    public $order_json;
    public $itinerary;


    public $ref_id;

    public function render()
    {
        return view('livewire.order-show');
    }

    public function order_show()
    {    
        $this->order_json = null;
        $this->itinerary = null;

        $neworder = getOrder($this->ref_id);
        $order_tmp = (json_encode($neworder,true));   
        $this->order_json = (json_decode($order_tmp,true));  
        // dd( $this->order_json);

        foreach ($this->order_json['legs'] as $leg) {
            $this->itinerary = $this->itinerary . $leg['originLocationCode']."-".$leg['destinationLocationCode'].'  ';
          }

          
        

   

    } 

}
