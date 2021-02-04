@extends ('layout-master')

@section ('header')

    @include('simple-header') 

@endsection



@section ('main-content')
    
    
    <!-- livewire component - start -->

    <div class="flex mx-3 my-3 flex-center position-ref full-height">
        
        <div class="w-full">
            @livewire('order')
        </div>
      
    </div>

    <!-- livewire component - end -->
    

@endsection

