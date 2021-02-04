@extends ('layout-stripe')

@section ('content')
    

    
    <!-- these are the components - start -->
    <!-- @livewire('hello-world', ['name' => 'Justin']) -->

    <div class="flex mx-10 my-5 flex-center position-ref full-height">
        
        <div class="w-1/3">
            @livewire('stripe-payment-intent')
        </div>


        <div class="w-1/3">
        @livewire('payment-intent-confirm')
        </div>


        <div class="w-1/3">
    
        </div>
    </div>


    <!-- these are the components - end -->

    <div class="block h-5 "></div>

@endsection

