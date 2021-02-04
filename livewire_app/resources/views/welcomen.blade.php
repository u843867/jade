@extends ('layout')

@section ('content')
    

    
    <!-- these are the components - start -->
    <!-- @livewire('hello-world', ['name' => 'Justin']) -->

    <div class="flex mx-10 my-5 flex-center position-ref full-height">
        
        <div class="w-1/3">
            @livewire('payment-initialise')
        </div>


        <div class="w-1/3">
             @livewire('payment-route')  
        </div>


        <div class="w-1/3">
            @livewire('payment-authorisation')  
        </div>
    </div>


    <!-- these are the components - end -->

    

@endsection

