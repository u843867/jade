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
<div 




  class="flex h-screen overflow-hidden bg-gray-100">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div 
  x-data="slideout()"
	x-cloak
	@open-menu.window="open = $event.detail.open"
	@keydown.window.tab="usedKeyboard = true"
	@keydown.escape="open = false"
	x-init="init()">
    <div 
    
    x-show.transition.opacity.duration.500="open" 
    @click="open = false"
      class="fixed inset-0 z-40 flex">
      <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 transition duration-100" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-600 opacity-75" :class="{'translate-x-full': !open}"></div>
      </div>
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div 
        
        class="relative flex flex-col flex-1 w-full max-w-xs pt-5 pb-4 bg-indigo-700">
        
        <div class="absolute top-0 right-0 pt-2 -mr-12" :class="{'translate-x-full': !open}">
          <button  
            @click="open = false"
            x-ref="closeButton"
            :class="{'focus:outline-none': !usedKeyboard}"
            class="focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white flex items-center justify-center w-10 h-10 ml-1 rounded-full">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: x -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow">
          <!-- // full logo with words https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg -->
        </div>
        <div class="flex-1 h-0 mt-5 overflow-y-auto">
          <nav class="px-2 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
            <a href="#" class="group flex items-center px-2 py-2 text-base font-medium text-white bg-indigo-800 rounded-md">
              <!-- Heroicon name: home -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="#" class="hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium text-indigo-100 rounded-md">
              <!-- Heroicon name: users -->
              <span class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Team
            </a>

            <a href="#" class="hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium text-indigo-100 rounded-md">
              <!-- Heroicon name: folder -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Projects
            </a>

            <a href="#" class="hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium text-indigo-100 rounded-md">
              <!-- Heroicon name: calendar -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Calendar
            </a>

            <a href="#" class="hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium text-indigo-100 rounded-md">
              <!-- Heroicon name: inbox -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
              Documents
            </a>

            <a href="#" class="hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium text-indigo-100 rounded-md">
              <!-- Heroicon name: chart-bar -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              Reports
            </a>
          </nav>
        </div>
      </div>
      <div class="w-14 flex-shrink-0" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div
    
    class="ml:flex ml:flex-shrink-0 hidden bg-indigo-700">
    <div 
      x-show.transition.opacity.duration.500="open" @click="open = false"
      class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex flex-col flex-1 h-0">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow">
          </div>
          <nav class="flex-1 px-2 mt-5 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->




            <div class=" hover:bg-indigo-800 flex flex-shrink-0 px-4 py-3 border-t border-indigo-800 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-center">
                  <div>
                    <img class="inline-block w-10 h-10 rounded-full" src="../images/profile.png" alt="">
                  </div>
                  <div class="ml-3">
                    <p class="text-base font-medium text-white">
                      Justin Jones
                    </p>
                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                      View profile
                    </p> -->
                  </div>
                </div>
              </a>
            </div>

            <div class="h-2"></div>


            <div class="flex flex-shrink-0 p-4 bg-indigo-800 border-indigo-800 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-start">
                  <div>
                    <p class="inline-block w-5 h-5 text-indigo-300 rounded-full">1</p>
                  </div>
                  <div class="ml-2">
                    <p class="text-base font-medium text-white">
                      Search
                    </p>
                                        

                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p> -->
                  </div>
                  <div class="relative">
                          <div class="absolute inset-0 flex items-center py-1" aria-hidden="true">
                            <div class="w-full border-t border-gray-500"></div>
                          </div>
                        </div>
                </div>
              </a>
            </div>

            <div class="hover:bg-indigo-600 hover:bg-opacity-75 flex flex-shrink-0 p-4 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-start">
                  <div>
                    <p class="inline-block w-5 h-5 text-indigo-300 rounded-full">2</p>
                  </div>
                  <div class="ml-2">
                    <p class="text-base font-medium text-white">
                      Passengers
                    </p>
                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p> -->
                  </div>
                </div>
              </a>
            </div>
            <div class="hover:bg-indigo-600 hover:bg-opacity-75 flex flex-shrink-0 p-4 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-start">
                  <div>
                    <p class="inline-block w-5 h-5 text-indigo-300 rounded-full">3</p>
                  </div>
                  <div class="ml-2">
                    <p class="text-base font-medium text-white">
                      Customize
                    </p>
                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p> -->
                  </div>
                </div>
              </a>
            </div>

            <div class="hover:bg-indigo-600 hover:bg-opacity-75 flex flex-shrink-0 p-4 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-start">
                  <div>
                    <p class="inline-block w-5 h-5 text-indigo-300 rounded-full">4</p>
                  </div>
                  <div class="ml-2">
                    <p class="text-base font-medium text-white">
                      Review & Pay
                    </p>
                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p> -->
                  </div>
                </div>
              </a>
            </div>







          </nav>
        </div>
        <div class=" hover:bg-indigo-800 flex flex-shrink-0 p-4 border-t border-indigo-800">
          <a href="#" class="group flex-shrink-0 block w-full">
            <div class="flex items-center">
              <!-- <div>
                <img class="h-9 w-9 inline-block rounded-full" src="../images/profile.png" alt="">
              </div> -->
              <div class="py-5 ml-3">
              <p class="group-hover:text-white text-base font-medium text-indigo-200">
                  Total
                </p>
                <p class=" text-lg font-medium text-white">
                  $ 125.00
                </p>
                
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col flex-1 w-0 overflow-hidden">
    <div class="relative z-10 flex flex-shrink-0 h-16 bg-white shadow">
      <button 
      x-data="{usedKeyboard: false}"
			@keydown.window.tab="usedKeyboard = true"
			@click="$dispatch('open-menu', { open: true })"
			:class="{'focus:outline-none': !usedKeyboard}"
        class="focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden px-4 text-gray-500 border-r border-gray-200">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: menu-alt-2 -->
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex justify-between flex-1 px-4">
        <div class="flex flex-1">
          <form class="md:ml-0 flex w-full" action="#" method="GET">
            <label for="search_field" class="sr-only">Search</label>
            <div class="focus-within:text-gray-600 relative w-full text-gray-400">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                <!-- Heroicon name: search -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input id="search_field" class="focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm block w-full h-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 border-transparent" placeholder="Search" type="search" name="search">
            </div>
          </form>
        </div>
        <div class="md:ml-6 flex items-center ml-4">
          <button class="hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 p-1 text-gray-400 bg-white rounded-full">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: bell -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div x-data="{ profileModal: false }" class="relative ml-3">
            <div>
              <button @click="profileModal = true" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 flex items-center max-w-xs text-sm bg-white rounded-full" id="user-menu" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="../images/profile.png" alt="">
              </button>
            </div>
            <!--
              Profile dropdown panel, show/hide based on dropdown state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show.transition.duration.300ms="profileModal" @click.away="profileModal = false" class="ring-1 ring-black ring-opacity-5 absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>

              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>

              <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main class="focus:outline-none relative flex-1 overflow-y-auto" tabindex="0">
      <div class="py-6">
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto mb-3">
          <h1 class="text-2xl font-semibold text-gray-900">Search</h1>
        </div>
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto">
          <!-- Replace with your content -->



          @livewire('search-results', ['search_parameters' => $search_parameters])
          
          
          
          
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>
</div>







@stop