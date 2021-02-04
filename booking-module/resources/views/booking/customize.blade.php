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
                    
                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                          <strong class="font-normal">
                            <time>Mr Justin Jones</time>
                            
                          </strong>
                        </p>
                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                          <strong class="font-normal">
                            <time>Mrs Angela Jones</time>
                            
                          </strong>
                        </p>
                    <p class=" m-0 text-xs font-normal leading-5 text-left text-gray-400">
                          <strong class="font-normal">
                            <time>Mstr Steel Jones</time>
                            
                          </strong>
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

            <div class="flex flex-shrink-0 p-4 rounded">
              <a href="#" class="group flex-shrink-0 block">
                <div class="flex items-start">
                  <div>
                    <p class="inline-block w-5 h-5 text-indigo-300 rounded-full">4</p>
                  </div>
                  <div class="ml-2">
                    <p class="text-base font-medium text-gray-300">
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
              <div class="ml-3">
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
          <h1 class="text-3xl font-semibold text-gray-900">Customize</h1>
        </div>
        <div class="sm:px-6 md:px-8 max-w-4xl px-4 mx-auto">




          <div class="py-4">


          <div class="overflow-hidden bg-white rounded shadow">
            <div class="sm:p-6 px-4 py-5">
            <div>
  <h3 class=" text-2xl font-medium leading-6 text-gray-500">
    Select your fare ticket
  </h3>
  <dl class="sm:grid-cols-2 lg:grid-cols-3 grid grid-cols-1 gap-5 mt-5">
    <div class="overflow-hidden bg-white rounded-lg shadow">
      <div class="sm:p-6 px-4 py-5">
        <div class="flex items-center">
          <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
            <!-- Heroicon name: users -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div class="flex-1 w-0 ml-5">
            <dt class="text-sm font-medium text-gray-500 truncate">
              Saver
            </dt>
            <dd class="flex items-baseline">
              <div class="text-2xl font-semibold text-gray-900">
                $ 35.00
              </div>


            </dd>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 sm:px-6 px-4 py-4">
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">No Changes<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Checked bag fee<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">No cancellation<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
      </div>
<div class="flex justify-center my-2">
      <button type="button" class="hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center w-full px-4 py-2 mx-2 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md">
        <p class="mx-auto"> Continue with Saver </p>
      </button>
      </div>

    </div>

    <div class="overflow-hidden bg-white rounded-lg shadow">
      <div class="sm:p-6 px-4 py-5">
        <div class="flex items-center">
          <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
            <!-- Heroicon name: mail-open -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg>
          </div>
          <div class="flex-1 w-0 ml-5">
            <dt class="text-sm font-medium text-gray-500 truncate">
              Standard
            </dt>
            <dd class="flex items-baseline">
              <div class="text-2xl font-semibold text-gray-900">
                $ 89.00
              </div>

            </dd>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 sm:px-6 px-4 py-4">
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Changes permitted<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Checked bag included<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Cancellation permitted<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
      </div>
      <div class="flex justify-center my-2">
      <button type="button" class="hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center w-full px-4 py-2 mx-2 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md">
        <p class="mx-auto"> Continue with Standard </p>
      </button>
      </div>
    </div>

    <div class="overflow-hidden bg-white rounded-lg shadow">
      <div class="sm:p-6 px-4 py-5">
        <div class="flex items-center">
          <div class="flex-shrink-0 p-3 bg-indigo-500 rounded-md">
            <!-- Heroicon name: cursor-click -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
          </div>
          <div class="flex-1 w-0 ml-5">
            <dt class="text-sm font-medium text-gray-500 truncate">
              Flexi
            </dt>
            <dd class="flex items-baseline">
              <div class="text-2xl font-semibold text-gray-900">
                $ 125.00
              </div>


            </dd>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 sm:px-6 px-4 py-4">
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Changes - free<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">2 Checked bags included<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
        <div class="flex pb-1 text-sm align-middle">
          <svg class="inline-block w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="mx-1"></div>
          <p class="hover:text-indigo-500 inline-block font-medium text-gray-500">Cancellation - free<span class="sr-only"> Total Subscribers stats</span></p>
        </div>
      </div>
      <div class="flex justify-center my-2">
      <button type="button" class="hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center w-full px-4 py-2 mx-2 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md">
        <p class="mx-auto"> Continue with Flexi </p>
      </button>
      </div>
    </div>
  </dl>
</div>
            </div>
          </div>





            <!-- Replace with your content -->




            <!-- Replace with your content -->

            <div class="h-6"></div>

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
                              <h3 class="mb-1 text-2xl font-semibold text-gray-500">
                                Travel Insurance
                              </h3>
                              <div class="h-10"></div>
                            </div>

                          </div>


                        </div>


                      </div>


                      

                    </div>
                    

                  </div>
                 

                </div>

                

              </div>

              
            </div>
            <div class="pt-5">
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
          </div>


        </div>
        <!-- /End replace -->
      </div>
  </div>
  </main>
</div>
</div>






@stop