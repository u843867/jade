@extends ('layouts/booking-flow-layout')


@section ('ibe-body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex h-screen overflow-hidden bg-gray-100">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div class="md:hidden">
    <div class="fixed inset-0 z-40 flex">
      <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
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
      <div class="relative flex flex-col flex-1 w-full max-w-xs bg-indigo-700">
        <div class="absolute top-0 right-0 pt-2 -mr-12">
          <button class="focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white flex items-center justify-center w-10 h-10 ml-1 rounded-full">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: x -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
          </button>
        </div>
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow">
          </div>
          <nav class="px-2 mt-5 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-indigo-600 hover:bg-opacity-75" -->
            <a href="#" class="group flex items-center px-2 py-2 text-base font-medium text-white bg-indigo-800 rounded-md">
              <!-- Heroicon name: home -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="#" class="hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium text-white rounded-md">
              <!-- Heroicon name: users -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Team
            </a>

            <a href="#" class="hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium text-white rounded-md">
              <!-- Heroicon name: folder -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Projects
            </a>

            <a href="#" class="hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium text-white rounded-md">
              <!-- Heroicon name: calendar -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Calendar
            </a>

            <a href="#" class="hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium text-white rounded-md">
              <!-- Heroicon name: inbox -->
              <svg class="w-6 h-6 mr-4 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
              Documents
            </a>


          </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 border-t border-indigo-800">
          <a href="#" class="group flex-shrink-0 block">
            <div class="flex items-center">
              <div>
                <img class="inline-block w-10 h-10 rounded-full" src="../images/profile.png" alt="">
              </div>
              <div class="ml-3">
                <p class="text-base font-medium text-white">
                  Justin Jones
                </p>
                <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="w-14 flex-shrink-0" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="md:flex md:flex-shrink-0 bg-indigo-700">
    <div class="flex flex-col w-64">
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
    <div class="md:hidden sm:pl-3 sm:pt-3 pt-1 pl-1">
      <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: menu -->
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      
    </div>
    <main class="focus:outline-none relative z-0 flex-1 overflow-y-auto" tabindex="0">
      <div class="py-6">
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto">
          <h1 class="text-3xl font-semibold text-gray-900">Search</h1>
        </div>
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto">




          <div class="py-4">


            <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
              <div class=" relative flex flex-wrap w-full">

                <!-- left side of component -->
                <div class="w-full border-r border-gray-100">
                  <div id="comp_container">
                    <!-- <div class="p-6">

                      <div class=" relative">

                        <p class=" mb-1 text-2xl font-medium leading-6 text-gray-500">
                          <time>Sign in for easier booking</time>
                        </p>

                        <div class="h-4"></div>


                        <div class="">
                          <svg class="inline-block w-4 h-6 text-gray-500 fill-current" viewBox="0 0 24 24">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path>
                          </svg>
                          <p class="inline-block text-sm font-normal text-gray-500">Save your details once for all future bookings.</p>
                        </div>
                        <div class="">
                          <svg class="inline-block w-4 h-6 text-gray-500 fill-current" viewBox="0 0 24 24">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path>
                          </svg>
                          <p class="inline-block text-sm font-normal text-gray-500">Save your details once for all future bookings.</p>
                        </div>
                        <div class="">
                          <svg class="inline-block w-4 h-6 text-gray-500 fill-current" viewBox="0 0 24 24">
                            <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path>
                          </svg>
                          <p class="inline-block text-sm font-normal text-gray-500">Save your details once for all future bookings.</p>
                        </div>



                      </div>
                    </div> -->


                    <div class=" sm:p-4 sm:border-b-0 flex flex-wrap justify-between px-4 py-2 pb-2 border-b-0 border-gray-200 border-solid">

                      <div class=" inline-flex flex-row flex-wrap items-center content-start flex-grow">



                      </div>

                      <div class=" sm:pointer-events-none sm:block sm:ml-auto sm:pl-4 sm:whitespace-nowrap hidden">
                        <div id="more_details" class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                          <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                            <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                              <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                            </svg>
                          </div>
                          <div class="inline-block w-full text-left">Show details</div>
                        </div>
                      </div>

                    </div>
                    <div class="sm:flex-1 box-border flex flex-col"></div>
                  </div>
                </div>

              </div>
            </div>





            <!-- Replace with your content -->
            

            <!-- {{ $search_parameters['tripType'] ?? '' }}
            {{ $search_parameters['paxNo'] ?? '' }}
            {{ $search_parameters['cabin'] ?? '' }}
            {{ $search_parameters['fly_from'] ?? '' }}
            {{ $search_parameters['fly_to'] ?? '' }}
            {{ $search_parameters['from_date'] ?? '' }}
            {{ $search_parameters['to_date'] ?? '' }} -->

            @livewire('search-results', ['search_parameters' => $search_parameters])
            






            <!-- Replace with your content -->
          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>
</div>






@stop