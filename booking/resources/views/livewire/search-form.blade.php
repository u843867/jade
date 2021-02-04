
<div class="md:mt-0 md:col-span-2 mt-5">
  <form action="#" method="POST">
    <div class="sm:rounded-md shadow">


      <div class="block p-4 bg-white">
        <div class="flex">
          <!-- new cabin dropdown -->
          <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
              <button @click="open = true" type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">
                Roundtrip
                <!-- Heroicon name: chevron-down -->
                <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>


              <!--
            Dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
              <div x-show.transition.duration.400ms="open" @click.away="open = false" class="ring-1 ring-black ring-opacity-5 absolute left-0 z-50 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Roundtrip</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Oneway</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Multi-city</a>

                </div>
              </div>
            </div>
          </div>



          <div class="w-3"></div>
          <div class="relative inline-block text-left">
            <div x-data="{ open: false }">
              <button @click="open = true" type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">

                <svg class="w-5 h-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"" />
                      
                    </svg>

                    1
                    <!-- Heroicon name: chevron-down -->
                    <svg class=" w-5 h-5 ml-2 -mr-1" xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>


              <!--
            Dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"-->

              <div x-show.transition.duration.200ms="open" @click.away="open = false" class="ring-1 ring-black ring-opacity-5 absolute left-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">1</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">2</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">3</a>

                </div>
              </div>
            </div>
          </div>

          <div class="w-3"></div>
          <!-- new cabin dropdown -->
          <div class="relative inline-block text-left">
            <div x-data="{ open: false }">
              <button @click="open = true" type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">
                Economy
                <!-- Heroicon name: chevron-down -->
                <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>


              <!--
            Dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
              <div x-show="open" @click.away="open = false" class="ring-1 ring-black ring-opacity-5 absolute left-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Economy</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Business</a>
                  <a href="#" @click="open = false" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">First</a>
                  <form method="POST" action="#">

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sm:pb-6 flex px-4 pb-5 bg-white">



        <div class="h-4"></div>

        <div class="inline-flex w-3/12">
          <div class="relative w-full">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <input x-on:click="fetchPlaces" id="from" type="text" name="from" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="From" />
          </div>
        </div>

        <div class="sm:pl-2 inline-flex w-3/12">
          <div class="relative w-full">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <input id="from" type="text" name="from" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="To" />
          </div>
        </div>



        <div class=" sm:pl-4 inline-flex w-2/12">
          <div class="relative w-full">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
            <input id="from" type="text" name="from" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="Leaving" />
          </div>
        </div>

        <div class="sm:pl-2 sm:pr-4 inline-flex w-2/12">
          <div class="relative w-full">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
            <input id="from" type="text" name="from" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="Returning" />
          </div>
        </div>

        <div class=" inline-flex flex-grow">
          <button type="submit" class="hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-gray-500 border border-transparent rounded-md shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span class="pl-1">Search</span>
          </button>
        </div>


        

      </div>

      
    </div>
  </form>
</div>
