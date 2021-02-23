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
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
  <div class="md:flex md:flex-shrink-0 hidden bg-indigo-700">
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


            <div class="hover:bg-indigo-600 flex flex-shrink-0 p-4 border-indigo-800 rounded">
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

            <div class="flex flex-shrink-0 p-4 bg-indigo-800 rounded">
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
        <div class=" hover:bg-indigo-600 flex flex-shrink-0 p-4 border-t border-indigo-800">
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
          <h1 class="text-3xl font-semibold text-gray-900">Review & Pay</h1>
        </div>


        <div class="sm:px-6 md:px-8 max-w-4xl px-4 py-4 mx-auto">





          <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
            <div class=" relative flex flex-wrap w-full">

              <!-- left side of component -->
              <div class="w-full border-r border-gray-100">
                <div id="comp_container">
                  <div class="p-6">
                    <div class=" relative">

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
                      <div class="space-y-8 divide-y divide-gray-200">

                        <div class="py-2">
                          <div>
                            <h3 class="mb-1 text-2xl font-medium leading-6 text-gray-500">
                              Itinerary
                            </h3>

                          </div>
                          <div class="gap-y-6 gap-x-4 sm:grid-cols-12 grid grid-cols-1 mt-6">

                            <div class="sm:col-span-3">

                              <div class="relative mt-1 rounded-md">
                                <div class="flex">
                                  <div class="flex-shrink-0 mr-4">
                                    <img class=" w-36 rounded" src="../images/itinerary3.png" alt="">
                                  </div>

                                </div>

                              </div>
                            </div>

                            <div class="sm:col-span-9">
                            <div>
                              <h4 class=" text-base font-medium text-gray-400"><span class="text-gray-500">Wed July 24</span></h4>
                                <div class="sm:flex sm:flex-wrap">

                                  <div class="flex flex-no-wrap">
                                 
                                    <div class=" w-36 inline-block mr-2 text-sm text-gray-500">16:05 PM - 5:20 AM</div>
                                    <div class=" inline-block w-20 text-sm text-gray-500 whitespace-no-wrap">10h 55m</div>
                                  </div>

                                  <div class="flex-nowrap flex">

                                    <div class="flex-nowrap inline-block text-sm text-gray-500">Kuala Lumpur, KUL<span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                                    Dallas, DFW </div>
                                  </div>

                                </div>
                              </div>

                              <div class="h-2"></div>

                              <div class="relative">
                                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                  <div class="w-full border border-gray-100 border-dashed"></div>
                                </div>
                              </div>

                              <div class="h-1"></div>

                              <div>
                              <h4 class=" text-base font-medium text-gray-400"><span class="text-gray-500">Wed Aug 01</span></h4>
                                <div class="sm:flex sm:flex-wrap">

                                  <div class="flex flex-no-wrap">
                                 
                                    <div class=" w-36 inline-block mr-2 text-sm text-gray-500">6:05 PM - 9:00 AM</div>
                                    <div class=" inline-block w-20 text-sm text-gray-500 whitespace-no-wrap">8h 55m</div>
                                  </div>

                                  <div class="flex-nowrap flex">

                                    <div class="flex-nowrap inline-block text-sm text-gray-500">Dallas, DFW <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                                      Kuala Lumpur, KUL</div>
                                  </div>

                                </div>
                              </div>
                            </div>

                          </div>


                        </div>

                      </div>





                    </div>

                    <div class="h-5"></div>

                    <div class="space-y-8 divide-y divide-gray-200">

                      <div class="py-2">
                        <div>
                          <h3 class=" text-2xl font-medium leading-6 text-gray-500">
                            Passengers
                          </h3>

                        </div>
                        <div class="gap-y-6 gap-x-4 sm:grid-cols-12 grid grid-cols-1 mt-6">

                          <div class="sm:col-span-3">

                            <div class="relative mt-1 rounded-md">
                              <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                  <img class=" h-24 rounded" src="../images/car-bw.png" alt="">
                                </div>

                              </div>





                            </div>
                          </div>




                          <div class="sm:col-span-9">






                            <div>
                              <h4 class=" text-base font-medium text-gray-600"> Mr Justin Jones</h4>
                              <div class="sm:flex sm:flex-wrap">

                                <div class="flex flex-no-wrap mb-2">
                                  <div class="inline-block text-sm text-gray-500"><i class="fa fa-calendar-o justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted">11 Oct 1952</span></div>
                                  <div class="mr-8"></div>
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-passport justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> GB78789789719, exp: 10/24</span></div>
                                  <div class="mr-8"></div>
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-phone justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> +1 930 283-2838</span></div>
                                </div>
                                <div class="flex flex-no-wrap">
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-paper-plane justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1">justinjones@cellpointmobile.com</span></div>
                                </div>

                                <!-- <div class="flex-nowrap flex">

        <div class="flex-nowrap inline-block text-sm text-gray-500">Dallas, DFW <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
          Kuala Lumpur, KUL</div>
      </div> -->

                              </div>
                            </div>




                            <div class="h-5"></div>




                            <div>
                              <h4 class=" text-base font-medium text-gray-600"> Mstr Steel Michael Jones</h4>
                              <div class="sm:flex sm:flex-wrap">

                                <div class="flex flex-no-wrap mb-2">
                                  <div class="inline-block text-sm text-gray-500"><i class="fa fa-calendar-o justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted">11 Oct 1952</span></div>
                                  <div class="mr-8"></div>
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-passport justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> GB78789789719, exp: 10/24</span></div>
                                  <div class="mr-8"></div>
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-phone text-gray-460 justify-center text-xs bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> +1 930 283-2838</span></div>
                                </div>
                                <div class="flex flex-no-wrap">
                                  <div class="inline-block text-sm text-gray-500"><i class="fas fa-paper-plane justify-center text-xs text-gray-600 bg-white rounded-md"></i> <span class="ml-1">justinjones@cellpointmobile.com</span></div>
                                </div>

                                <!-- <div class="flex-nowrap flex">

        <div class="flex-nowrap inline-block text-sm text-gray-500">Dallas, DFW <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
          Kuala Lumpur, KUL</div>
      </div> -->

                              </div>
                            </div>

                          </div>

                        </div>


                      </div>





                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="h-5"></div>



          <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
            <div class=" relative flex flex-wrap w-full">

              <!-- left side of component -->
              <div class="w-full border-r border-gray-100">
                <div id="comp_container">
                  <div class="p-6">
                    <div class=" relative">

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
                      <div class="space-y-8 divide-y divide-gray-200">

                        <div class="py-2">
                          <div>
                            <h3 class="mb-1 text-2xl font-medium leading-6 text-gray-500">
                              Payment Options
                            </h3>

                          </div>
                          <div class="gap-y-6 gap-x-4 sm:grid-cols-12 grid grid-cols-1 mt-6">

                            <div class="sm:col-span-3">

                              <div class="relative mt-1 rounded-md">
                                <div class="flex">
                                  <div class="flex-shrink-0 mr-4">
                                    <img class="w-25 h-15 rounded" src="../images/payment-bw.png" alt="">
                                  </div>

                                </div>

                              </div>
                            </div>

                            <div class="sm:col-span-9">
                              <div>
                              <div class="h-5"></div>



<div class="sm:col-span-7 col-span-6 border rounded-md">
  <div class="hover:-translate-y-1 hover:shadow-lg flex items-center flex-1 h-16 px-4 py-3 bg-white rounded-md cursor-pointer select-none">
    <div class="flex-1 pl-1 mr-5">
      <div class="font-medium text-blue-700">Visa <span class="text-sm">•••• 6277</span></div>
      <div class="text-xs text-gray-600">12/21</div>
      <!-- <div class="text-sm text-gray-600">200ml</div> -->
    </div>
    <div class="flex justify-center w-16">
      <i class="fa fa-cc-visa justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
    </div>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

    </label>
  </div>
</div>
<div class="h-2"></div>
<div class="sm:col-span-7 col-span-6 border rounded-md">
  <div class="hover:-translate-y-1 hover:shadow-lg flex items-center flex-1 h-16 px-4 py-3 bg-white rounded-md cursor-pointer select-none" x-data="{usedKeyboard: false}" @keydown.window.tab="usedKeyboard = true" @click="$dispatch('open-addcard', { open: true })" :class="{'focus:outline-none': !usedKeyboard}">
    <div class="flex-1 pl-1 mr-5">
      <div class="font-medium text-blue-700">{{ __('lang.txt_add_card') }}</div>
      <div class="text-xs text-gray-600">{{ __('lang.txt_credit_debit_card') }}</div>
      <!-- <div class="text-sm text-gray-600">200ml</div> -->
    </div>
    <div class="flex justify-center w-16">
      <i class="far fa-credit-card justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
    </div>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

    </label>
  </div>
</div>
<div class="h-2"></div>
<div class="sm:col-span-7 col-span-6 border rounded-md">
  <div class="hover:-translate-y-1 hover:shadow-lg flex items-center flex-1 h-16 px-4 py-3 bg-white rounded-md cursor-pointer select-none">
    <div class="flex-1 pl-1 mr-5">
      <div class="font-medium text-blue-700">PayPal</div>
      <div class="text-xs text-gray-600"></div>
      <!-- <div class="text-sm text-gray-600">200ml</div> -->
    </div>
    <div class="flex justify-center w-16">
      <i class="fab fa-paypal justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
    </div>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

    </label>
  </div>
</div>
<div class="h-2"></div>
<div class="sm:col-span-7 col-span-6 border rounded-md">
  <div class="hover:-translate-y-1 hover:shadow-lg flex items-center flex-1 h-16 px-4 py-3 bg-white rounded-md cursor-pointer select-none">
    <div class="flex-1 pl-1 mr-5">
      <div class="font-medium text-blue-700">Google Pay</div>
      <div class="text-xs text-gray-600"></div>
      <!-- <div class="text-sm text-gray-600">200ml</div> -->
    </div>
    <div class="flex justify-center w-16">
      <i class="fab fa-google-pay justify-center text-3xl text-gray-500 bg-white rounded-md"></i>
    </div>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

    </label>
  </div>
</div>

                                <!-- <div class="flex-nowrap flex">

        <div class="flex-nowrap inline-block text-sm text-gray-500">Dallas, DFW <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
          Kuala Lumpur, KUL</div>
      </div> -->

                              </div>
                            </div>

                          </div>

                        </div>


                      </div>





                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="h-2"></div>

          <div class="flex justify-end">

<button type="button" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
  Continue
  <!-- Heroicon name: mail -->
  <svg class="w-5 h-5 ml-3 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" />

  </svg>
</button>
</div>
          

        </div>

    </main>
  </div>
</div>






@stop