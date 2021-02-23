<div class="md:mt-0 md:col-span-2 mt-5">
  <form wire:submit.prevent="oms_order()" action="#">
    <div class="sm:rounded-md sm:overflow-hidden shadow">
      <div class="sm:p-6 px-4 py-5 space-y-6 bg-white">


        <div>
          <label for="about" class="block text-sm font-medium text-gray-700">
            Order - JSON
          </label>
          <div class="mt-1">
            <textarea id="jsonOrder" wire:model.defer="jsonOrder" name="jsonOrder" rows="8" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder=""></textarea>
          </div>
          <!-- <p class="mt-2 text-sm text-gray-500">
                Paste a Shopping Basket order in JSON format then hit 'Store'.
              </p> -->
        </div>



      </div>

      <div class="bg-gray-50 sm:px-6 justify-between px-4 py-3 text-right align-middle">

        <div class="inline-block float-left w-8/12">
          <div x-data class="flex rounded-md shadow-sm">
            <span class="rounded-l-md bg-gray-50 inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300">
              refId
            </span>
            <input type="text" value="{{$refId}}" name="refId" id="refId" 
            
            class="bg-gray-50 rounded-r-md sm:text-sm flex-1 block w-full border-gray-300 rounded-none" placeholder="">
          
            <div class="inline-flex text-center">
          <div 
                  x-show="$wire.refId!==null" 
                  onclick="window.open('http://localhost/hpp2/{{$refId}}','_blank')"
                  class="hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2 ml-2 text-sm font-medium text-white bg-gray-400 border border-transparent rounded-md shadow-sm cursor-pointer">
            link to HPP
          </div>
        </div>
          
          
          </div>
          

        </div>


        <div class="inline-block text-center">
          <button class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
            Store
          </button>
        </div>

      </div>

    </div>
  </form>
</div>