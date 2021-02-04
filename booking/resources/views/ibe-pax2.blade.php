@extends ('ibe-layout2')


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

                    <p class=" mb-0 text-xs font-semibold leading-5 text-gray-400">
                        <time>Thu Dec 29</time>
                      </p>
                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                          <strong class="font-normal">
                            <time>9:25 PM</time><span class="sm:ml-2 ml-3">Dallas</span>
                            <span class="block sm:inline mt-0.5 text-gray-400 leading-5 sm:mt-0 sm:ml:4 sm:text-xs ">DFW</span>
                          </strong>
                        </p>

                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                      <strong class="font-normal">
                        <time>6:25 AM</time><span class="sm:ml-2 ml-3">London</span>
                        <span class="block sm:inline mt-0.5 text-gray-400 leading-5 sm:mt-0 sm:ml:4 sm:text-xs ">LHR</span>
                      </strong>
                    </p>
                    <div class="relative py-1">
                      <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-600"></div>
                      </div>
                      <!-- <div class="relative flex justify-center">
                        <span class="px-2 text-gray-500 bg-white">
                          <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path fill="#6B7280" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                          </svg>
                        </span>
                      </div> -->
                    </div>
                    <p class=" mb-0 text-xs font-semibold leading-5 text-gray-400">
                        <time>Wed Jan 20</time>
                      </p>
                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                          <strong class="font-normal">
                            <time>5:25 AM</time><span class="sm:ml-2 ml-3">London</span>
                            <span class="block sm:inline mt-0.5 text-gray-400 leading-5 sm:mt-0 sm:ml:4 sm:text-xs ">LHR</span>
                          </strong>
                        </p>

                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                      <strong class="font-normal">
                        <time>2:10 PM</time><span class="sm:ml-2 ml-3">Dallas</span>
                        <span class="block sm:inline mt-0.5 text-gray-400 leading-5 sm:mt-0 sm:ml:4 sm:text-xs ">DFW</span>
                      </strong>
                    </p>
                    
                    <!-- <p class="group-hover:text-white text-sm font-medium text-indigo-200">
                  View profile
                </p> -->
                  </div>
                </div>
              </a>
            </div>

            <div class="hover:bg-opacity-75 flex flex-shrink-0 p-4 bg-indigo-800 rounded">
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
          <h1 class="text-3xl font-semibold text-gray-900">Passengers</h1>
        </div>
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto">




          <div class="py-4">


            <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
              <div class=" relative flex flex-wrap w-full">

                <!-- left side of component -->
                <div class="w-full border-r border-gray-100">
                  <div id="comp_container">
                    <div class="p-6">

                      <div class=" relative">

                        <p class="mb-1 text-2xl font-medium leading-6 text-gray-500">
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
                    </div>


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




            <!-- Replace with your content -->

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
                              <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Contact details
                              </h3>
 
                            </div>
                            <div class="gap-y-6 gap-x-4 sm:grid-cols-6 grid grid-cols-1 mt-6">

                              <div class="sm:col-span-3">
                              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
  <div class="relative mt-1 rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <!-- Heroicon name: mail -->
      <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
      </svg>
    </div>
    <input type="text" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full pl-10 border-gray-300 rounded-md" placeholder="you@example.com">
  </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                  <div class="absolute inset-y-0 left-0 flex items-center">
                                    <label for="country" class="sr-only">Country</label>
                                    <select id="country" name="country" class="focus:ring-indigo-500 focus:border-indigo-500 pr-7 sm:text-sm h-full py-0 pl-3 text-gray-500 bg-transparent border-transparent rounded-md">
                                      <option>US</option>
                                      <option>CA</option>
                                      <option>EU</option>
                                    </select>
                                  </div>
                                  <input type="text" name="phone_number" id="phone_number" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full pl-16 border-gray-300 rounded-md" placeholder="+1 (555) 987-6543">
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
          </div>

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

                          <div class="pt-2">
                            <div>
                              <h3 class="text-lg font-medium leading-6 text-gray-900">
                                Primary passenger
                              </h3>
                              
                            </div>
                            <div class="gap-y-6 gap-x-4 sm:grid-cols-6 grid grid-cols-1 mt-6">
                              <div class="sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">
                                  First name
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">
                                  Last name
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>

                              <div class="sm:col-span-2">
                              <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                                <select id="nationality" name="nationalityn" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                  <option>USA</option>
                                  <option selected>Canada</option>
                                  <option>EU</option>
                                </select>
                              </div>

                              <div class="sm:col-span-1">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                  <select id="gender" name="gender" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                    <option>Male</option>
                                    <option selected>Female</option>
                                  </select>
                              </div>

                              <div class="sm:col-span-1">
                                <label for="day" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                  <select id="day" name="day" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                    <option>Day</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    
                                  </select>
                              </div>

                              <div class="sm:col-span-1">
                                <label for="month" class="block text-sm font-medium text-gray-700">&nbsp</label>
                                  <select id="month" name="month" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                    <option>Month</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    
                                  </select>
                              </div>

                              <div class="sm:col-span-1">
                                <label for="year" class="block text-sm font-medium text-gray-700">&nbsp</label>
                                  <select id="year" name="year" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                    <option>Year</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    
                                  </select>
                              </div>

                              <div class="sm:col-span-6">
                                <label for="street_address" class="block text-sm font-medium text-gray-700">
                                  Street address
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>

                              <div class="sm:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">
                                  City
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="city" id="city" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>

                              <div class="sm:col-span-2">
                                <label for="state" class="block text-sm font-medium text-gray-700">
                                  State / Province
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="state" id="state" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>

                              <div class="sm:col-span-2">
                                <label for="zip" class="block text-sm font-medium text-gray-700">
                                  ZIP / Postal
                                </label>
                                <div class="mt-1">
                                  <input type="text" name="zip" id="zip" autocomplete="postal-code" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>

                        <div class="pt-5">
                          <div class="flex justify-end">
                            <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
                              Cancel
                            </button>
                            <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                              Save
                            </button>
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
        <!-- /End replace -->
      </div>
  </div>
  </main>
</div>
</div>






@stop