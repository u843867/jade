@extends ('layout-master')

@section ('header')

@include('simple-header')

@stop

@section ('main-content')

<div>
  
  <main>
    <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">




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
      <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Create Order</h3>
              <p class="mt-1 text-sm text-gray-600">
                Paste an Order in JSON format to store it in the database.
              </p>
            </div>
          </div>

          @livewire('oms')

        </div>
      </div>


      <!-- start - 2nd section -->

      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>

      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Retrieve Order</h3>
              <p class="mt-1 text-sm text-gray-600">
                Retrieve an Order from the database.
              </p>
            </div>
          </div>

          @livewire('order-show')


        </div>
      </div>

      <!-- end - 2nd section -->


      <!-- start - 3rd section -->
      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>

      <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Orders</h3>
              <p class="mt-1 text-sm text-gray-600">
                List of Orders.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            
          
          
          
          <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        
        @livewire('order-index')
        
      </div>
    </div>
  </div>
</div>

          
          </div>
        </div>
      </div>
      <!-- end - 3rd section -->


    </div>
  </main>


</div>



<!-- //stop for 'main content' -->
@stop