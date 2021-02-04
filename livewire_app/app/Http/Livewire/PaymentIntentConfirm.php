<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentIntentConfirm extends Component
{
    public $paymentIntentConfirm_rs;
    public $PaymentIntent_Id;
    public $payment_method ='pm_card_visa';


    public function render()
    {
        return view('livewire.payment-intent-confirm');
    }


    public function payment_intent_confirm() {


        $stripe = new \Stripe\StripeClient(
            'sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT'
          );

          $output_confirm = $stripe->paymentIntents->confirm(
            $this->PaymentIntent_Id,
            ['payment_method' => $this->payment_method]
          );

 
      
            
        $this->paymentIntentConfirm_rs = (json_encode($output_confirm));
        // dd($output->saveWithParent);

    }
}
