<div class="max-w-4xl mx-auto">
  {{-- Because she competes with no one, no one can compete with her. --}}

  <div class="items-center justify-center w-full">

  <div class="m-3 ">


        <div class="mt-10 sm:mt-0">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-0 mt-10 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Create Order</h3>
                <p class="mt-1 text-sm text-gray-600">
                Save Order in JSON format
                </p>
              </div>
            </div>
            <div class="mt-5 md:mt-10 md:col-span-2">
              <form action="/orders" method="POST">
              @csrf
                <textarea id="order-json" name="order-json" rows="20" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="enter the journey order"></textarea>
              </div>
            </div>
                <button type="submit" class="justify-center float-right px-8 py-2 my-10 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  {{ __('lang.txt_save') }}
                </button>
            </div>
            </form>
          </div>
        </div>
      </div>

 





    