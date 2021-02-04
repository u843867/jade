<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Stripe;

class StripePaymentIntent extends Component
{
    public function render()
    {
        return view('livewire.stripe-payment-intent');
    }

    public $paymentIntent_rs;
    public $paymentIntent_id;


    public $amount = '10000';
    public $currency = 'usd';
    public $payment_method = 'card';
    public $email = 'test@taiga.net';
    public $orderId = 'QWERTY';

    public function payment_intent() {

      /*  Stripe\Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');

        $output = Stripe\PaymentIntent::create([

          'amount' => $this->amount,
          'currency' => $this->currency,
          'payment_method_types' => $this->payment_method,
          'receipt_email' => $this->email,
          ['metadata' => ['order_id' => $this->orderId]]

        ]);
            */

        $stripe = new \Stripe\StripeClient(
            'sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT'
          );
          $output =   $stripe->paymentIntents->create([
            'amount' => $this->amount,
            'currency' => $this->currency,
            'receipt_email' => $this->email,
            'payment_method_types' => [$this->payment_method],
            ['metadata' => ['order_id' => $this->orderId]]
          ]);

            
        $this->paymentIntent_rs = (json_encode($output));
        $this->paymentIntent_id = $output->id;  
        // dd(json_encode($output->id));  

    }

}
