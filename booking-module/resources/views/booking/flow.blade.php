@extends ('layouts/booking-flow-layout')


@section ('ibe-body')

<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
   
        
          <!-- Replace with your content -->


          @livewire('booking-backend', ['search_parameters' => $search_parameters])





          
        
        <!-- /End replace -->

@stop