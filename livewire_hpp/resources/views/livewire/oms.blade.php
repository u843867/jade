<div class="mt-5 md:mt-0 md:col-span-2">
  <form wire:submit.prevent="oms_order()" action="#">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">


        <div>
          <label for="about" class="block text-sm font-medium text-gray-700">
            Order - JSON
          </label>
          <div class="mt-1">
            <textarea id="jsonOrder" wire:model.defer="jsonOrder" name="jsonOrder" rows="8" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder=""></textarea>
          </div>
          <!-- <p class="mt-2 text-sm text-gray-500">
                Paste a Shopping Basket order in JSON format then hit 'Store'.
              </p> -->
        </div>



      </div>

      <div class="justify-between px-4 py-3 text-right align-middle bg-gray-50 sm:px-6">

        <div class="inline-block float-left w-6/12">
          <div class="flex rounded-md shadow-sm">
            <span class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
              refId
            </span>
            <input type="text" value="{{$refId}}" name="refId" id="refId" class="flex-1 block w-full border-gray-300 rounded-none bg-gray-50 rounded-r-md sm:text-sm" placeholder="">
          </div>
        </div>


        <div class="inline-block text-center">
          <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Store
          </button>
        </div>

      </div>

    </div>
  </form>
</div>