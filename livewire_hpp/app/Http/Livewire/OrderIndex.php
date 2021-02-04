<?php

namespace App\Http\Livewire;

use Livewire\Component;




class OrderIndex extends Component
{
    protected $listeners = ['order_added' => 'render'];

    public $orders;

    public function render()
    {
        //get all Orders
        $this->orders = (json_decode(getAllOrders(),true));
        // dd($this->orders);

        return view('livewire.order-index');
    }
}
