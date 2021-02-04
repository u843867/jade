<div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="order_show()" action="#">
              <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-6 lg:col-span-2"">
                      <label for="ref_id" class="block text-sm font-medium text-gray-700">Reference Id</label>
                      <input wire:model.defer="ref_id" type="text" name="ref_id" id="ref_id" autocomplete="refId" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2"">
                      <label for="total_cost" class="block text-sm font-medium text-gray-700">Total Cost</label>
                      <input type="text" value="{{ $order_json['Symbol'] ?? '' }} {{ $order_json['Amount'] ?? '' }}" name="" id="$order_json_amount" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2"">
                      <label for="total_cost" class="block text-sm font-medium text-gray-700">Itinerary</label>
                      <input type="text" value="{{ $itinerary }}" name="" id="itinerary" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>


                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                      <label for="primary_pax" class="block text-sm font-medium text-gray-700">Primary Passenger</label>
                      <input type="text" name="primary_pax" value="{{ $order_json['travellers'][0]['travelerTitle'] ?? '' }} {{ $order_json['travellers'][0]['travelerFirstName'] ?? ''}} {{ $order_json['travellers'][0]['travelerLastName'] ?? ''}}" id="primary_pax" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="created_at" class="block text-sm font-medium text-gray-700">Created</label>
                      <input type="text" value="{{ $order_json['created_at'] ?? '' }}" name="created_at" id="created_at" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                      <label for="created_at" class="block text-sm font-medium text-gray-700">Updated</label>
                      <input type="text" value="{{ $order_json['updated_at'] ?? '' }}" name="updated_at" id="updated_at" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    
                  </div>
                </div>


                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                  <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Show
                  </button>
                </div>
              </div>
            </form>
          </div>
