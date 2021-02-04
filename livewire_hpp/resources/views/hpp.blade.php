@extends ('layout-hpp')

@section ('hpp-header-content')

    <!-- this is the livewire header component -->
    @livewire('hpp-header')


@endsection


@section ('content')
    

    
    <!-- these are the components - start -->
    <!-- @livewire('hello-world', ['name' => 'Justin']) -->

    <div class="flex mx-3 my-3  flex-center position-ref full-height">
        
        <div class="w-full">
            @livewire('hpp',['order_array' => $order_array])
        </div>
      
    </div>


    <!-- these are the components - end -->

    

@endsection

