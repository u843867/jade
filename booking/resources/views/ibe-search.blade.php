@extends ('ibe-layout')


@section ('ibe-body')

<main>


  <!-- page container   -->
  <div class=" max-w-8xl sm:px-6 lg:px-8 py-6 mx-auto bg-gray-100">
    <!-- Replace with your content -->

    <!-- search form start -->

      
      @livewire('search-form')

    <!-- search form end -->

    <div class="h-6"></div>

    <!-- This example requires Tailwind CSS v2.0+ -->



    <div class="flex">

      <div class="w-3/12 mr-6">

        <div class=" md:mb-4 relative flex flex-col w-full h-full px-4 pb-4 text-sm transition bg-gray-100 rounded cursor-pointer">
          

          <div class="hover:bg-gray-600 relative px-2 py-2 mt-0 overflow-hidden bg-gray-500 rounded">
            <p class="flex justify-center mb-1 text-sm font-semibold text-white">Sign in / Sign up</p>
          </div>

          <div class="h-4"></div>

          <div class="p-1 border-b border-gray-200">
            <ul class="">
              <li>
                <div class="md:grid-cols-8 xl:grid-cols-9 hover:bg-white relative grid items-start px-2 py-2 overflow-hidden rounded">

                  <p class="col-span-6 col-start-1 mb-1 text-sm font-semibold text-gray-500">Search</p>
                </div>
                <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                          <strong class=" font-medium">
                            <time>9:25 PM</time><span class=" sm:ml-2 ml-3">Dallas</span>
                            <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">DFW</span>
                          </strong>
                        </p>
              </li>
              <div class="border-b border-gray-200"></div>
              <li>
                <div class="md:grid-cols-8 xl:grid-cols-9 hover:bg-white relative grid items-start px-2 py-2 overflow-hidden rounded">

                  <p class="col-span-6 col-start-1 mb-1 text-sm font-semibold text-gray-400">Passengers</p>
                </div>
              </li>
              <div class="border-b border-gray-200"></div>
              <li>
                <div class="md:grid-cols-8 xl:grid-cols-9 hover:bg-white relative grid items-start px-2 py-2 overflow-hidden rounded">

                  <p class="col-span-6 col-start-1 mb-1 text-sm font-semibold text-gray-400">Customize</p>
                </div>
              </li>
              <div class="border-b border-gray-200"></div>
              <li>
                <div class="md:grid-cols-8 xl:grid-cols-9 hover:bg-white relative grid items-start px-2 py-2 overflow-hidden rounded">

                  <p class="col-start-21 col-span-6 mb-1 text-sm font-semibold text-gray-400">Review & Pay</p>
                </div>
              </li>

            </ul>

          </div>

          <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded cursor-pointer">
            <img class="rounded" src="{{ asset('images/stock_image.jpg') }}" alt="">
          </div>

        </div>


      </div>

      <div class="w-6/12 mx-auto">
        <!-- 1st kiwi copied component kiwi.com-->
        <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
          <div class=" relative flex flex-wrap w-full">

            <!-- left side of component -->
            <div class="sm:w-8/12 w-full border-r border-gray-100">
              <div id="comp_container">
                <div class="p-4">
                  <p class="mb-2 font-medium leading-5 text-gray-500">
                    <time>Thu Dec 28</time>
                  </p>
                  <div class=" relative">
                    <div class="flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class="relative flex items-center flex-shrink-0 mr-2">
                          <div class="absolute left w-0.5 h-full bg-gray-300 top-1/3"></div>
                          <div class="relative z-10">
                            <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                          </div>
                        </div>
                        <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                          <strong class=" font-medium">
                            <time>9:25 PM</time><span class=" sm:ml-2 ml-3">Dallas</span>
                            <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">DFW</span>
                          </strong>
                        </p>
                      </div>






                    </div>

                    <div class="flex -ml-1">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 h-3/4 bg-gray-300 bottom-6"></div>
                        <div class=" relative z-10 bg-white border-b border-white">
                          <svg class="flex-shrink-0 w-4 h-4 text-gray-400 align-middle bg-white fill-current" viewBox="0 0 24 24">
                            <path d="M11.893 5.807l.113-.007a.9.9 0 01.893.787l.007.113-.001 8.393 2.419-2.41a.905.905 0 011.09-.06l.096.076c.34.304.395.807.146 1.174l-.076.097-3.864 3.933a.904.904 0 01-1.255.086l-4.049-4.02a.898.898 0 01.066-1.27.904.904 0 011.186-.02l2.441 2.368V6.7a.9.9 0 01.788-.893l.113-.007-.113.007z"></path>
                          </svg>
                        </div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 top-3/6"></div>
                      </div>
                      <div class="flex justify-between flex-grow mx-0 mt-2 mb-1">
                        <div class="flex flex-wrap flex-auto">
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-blue-500 bg-blue-100 border border-blue-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>2h 21m</time>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class=" box-border inline-flex items-center justify-center flex-auto flex-grow-0 flex-shrink-0 w-6 min-h-full p-0 text-sm font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200 rounded-full">
                              <div class=" flex flex-shrink-0">
                                <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                                  <path d="M12 3.42c.894 0 1.424 1.104 1.424 2.263V9.26c0 .356.178.624.445.802l6.685 3.654c.268.179.446.446.446.803v.575c0 .624-.624 1.07-1.159.802l-5.793-1.96a.486.486 0 00-.624.445v2.992c0 .357.178.539.445.717l1.694 1.07c.356.178.592.466.475.676-.026.048-.069.25-.315.304-.246.055-1.228-.176-2.665-.425l-.082-.012c-.244.583-.57.875-.976.875-.407 0-.735-.293-.983-.878a1.316 1.316 0 00-.075.011c-1.437.25-2.42.48-2.665.425-.246-.054-.289-.256-.315-.304-.117-.21.119-.498.475-.676l1.694-1.07c.267-.178.445-.535.445-.802v-2.992c0-.356-.356-.535-.624-.446L4.16 15.807C3.624 16.075 3 15.63 3 15.005v-.576c0-.267.178-.623.446-.712l6.685-3.655c.267-.178.445-.446.445-.802V5.594c0-1.337.53-2.174 1.424-2.174z"></path>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>Direct</time>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                    <div class=" flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 bg-gray-300 bottom-full"></div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 bottom-5 sm:bottom-2"></div>
                        <div class=" relative z-10">
                          <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                        </div>
                      </div>

                      <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                        <strong class=" font-medium">
                          <time>11:30 PM</time><span class=" sm:ml-2 ml-3">Fort Lauderdale</span>
                          <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">FLL</span>
                        </strong>
                      </p>

                    </div>


                  </div>
                </div>


                <div class=" sm:p-4 sm:border-b-0 flex flex-wrap justify-between px-4 py-2 pb-2 border-b-0 border-gray-200 border-solid">

                  <div class=" inline-flex flex-row flex-wrap items-center content-start flex-grow">

                    <div class="mt-0 mb-1 ml-0 mr-1">
                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                        <div class=" px-0 py-1 leading-none">
                          <time>Economy</time>
                        </div>
                      </div>
                    </div>

                    <!-- baggage - hand           -->
                    <div class="mt-0 mb-1 ml-0 mr-1">

                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">

                        <div class=" flex flex-shrink-0 mr-1">
                          <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                            <path d="M11.16 4.083c0-.25.167-.416.417-.416h.833c.25 0 .417.166.417.416v2.5c0 .25-.167.417-.417.417h-.833c-.25 0-.417-.167-.417-.417v-2.5zm3.75 6.25h-3.5c-.25 0-.417.167-.417.417v.833c0 .334-.25.667-.666.667-.417 0-.667-.25-.667-.667v-.833c0-.25-.167-.417-.333-.417h-.25a.657.657 0 01-.667-.666c0-.417.25-.667.667-.667h5.833c.333 0 .667.25.667.667a.657.657 0 01-.667.666zm0-3.25c-.25 0-.417-.166-.417-.416v-2.5c0-.25.167-.417.417-.417.583 0 .833-.417.833-.917S15.493 2 14.91 2H9.077c-.584 0-.834.417-.834.833 0 .417.25.834.75.834.334.083.5.25.5.5v2.416c0 .25-.166.417-.416.417h-.834C7.077 7.083 6.16 8 6.16 9.083v10c0 1 .667 1.834 1.667 2 .083 0 .166.167.166.25 0 .5.334.667.834.667s.833-.167.833-.667a.18.18 0 01.167-.166h4.166a.18.18 0 01.167.166c0 .5.333.667.833.667s.834-.167.834-.667c0-.083.25-.25.333-.25 1-.166 1.667-1.083 1.667-2v-10c0-1.083-.75-2-1.917-2h-1z"></path>
                          </svg>
                        </div>

                        <div class=" px-0 py-1 leading-none">
                          <time>7 kg</time>
                        </div>
                      </div>
                    </div>


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
            <!-- end left side of component -->


            <!-- right side of component -->

            <div class="sm:w-4/12 w-full h-auto px-4 py-2">
              <div class=" sm:h-4/5 sm:justify-center flex items-center justify-start pb-3">
                <div class="sm:text-lg pb-2 text-xl font-bold text-gray-600">
                  $ 45
                </div>
              </div>


              <div class="sm:h-1/5 sm:mb-0 flex">

                <div class="sm:hidden sm:pointer-events-none sm:ml-auto sm:pl-4 sm:whitespace-nowrap inline-flex">
                  <div class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                    <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                      <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                        <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                      </svg>
                    </div>
                    <div class="inline-block w-full text-left">Show details</div>
                  </div>
                </div>

                <button class="sm:ml-0 sm:flex-shrink sm:w-full inline-flex items-center justify-center flex-grow py-2 mb-1 ml-2 text-xs font-semibold text-white bg-blue-900 rounded">
                  Book
                </button>

              </div>

            </div>

            <!-- end right side of component -->

          </div>
        </div>


        <div class="h-1"></div>

        <!-- 2nd kiwi copied component kiwi.com-->
        <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
          <div class=" relative flex flex-wrap w-full">

            <!-- left side of component -->
            <div class="sm:w-8/12 w-full border-r border-gray-100">
              <div>
                <div class="p-4">
                  <p class="mb-2 font-medium leading-5 text-gray-500">
                    <time>Thu Dec 29</time>
                  </p>
                  <div class=" relative">
                    <div class="flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class="relative flex items-center flex-shrink-0 mr-2">
                          <div class="absolute left w-0.5 h-full bg-gray-300 top-2/3"></div>
                          <div class="relative z-10">
                            <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                          </div>
                        </div>
                        <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                          <strong class=" font-medium">
                            <time>9:25 PM</time><span class=" sm:ml-2 ml-3">Dallas</span>
                            <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">DFW</span>
                          </strong>
                        </p>
                      </div>






                    </div>

                    <div class="flex -ml-1">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 h-3/4 bg-gray-300 bottom-6"></div>
                        <div class=" relative z-10 bg-white border-b border-white">
                          <svg class="flex-shrink-0 w-4 h-4 text-gray-400 align-middle bg-white fill-current" viewBox="0 0 24 24">
                            <path d="M11.893 5.807l.113-.007a.9.9 0 01.893.787l.007.113-.001 8.393 2.419-2.41a.905.905 0 011.09-.06l.096.076c.34.304.395.807.146 1.174l-.076.097-3.864 3.933a.904.904 0 01-1.255.086l-4.049-4.02a.898.898 0 01.066-1.27.904.904 0 011.186-.02l2.441 2.368V6.7a.9.9 0 01.788-.893l.113-.007-.113.007z"></path>
                          </svg>
                        </div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 top-3/6"></div>
                      </div>
                      <div class="flex justify-between flex-grow mx-0 mt-2 mb-1">
                        <div class="flex flex-wrap flex-auto">
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-blue-500 bg-blue-100 border border-blue-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>2h 21m</time>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class=" box-border inline-flex items-center justify-center flex-auto flex-grow-0 flex-shrink-0 w-6 min-h-full p-0 text-sm font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200 rounded-full">
                              <div class=" flex flex-shrink-0">
                                <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                                  <path d="M12 3.42c.894 0 1.424 1.104 1.424 2.263V9.26c0 .356.178.624.445.802l6.685 3.654c.268.179.446.446.446.803v.575c0 .624-.624 1.07-1.159.802l-5.793-1.96a.486.486 0 00-.624.445v2.992c0 .357.178.539.445.717l1.694 1.07c.356.178.592.466.475.676-.026.048-.069.25-.315.304-.246.055-1.228-.176-2.665-.425l-.082-.012c-.244.583-.57.875-.976.875-.407 0-.735-.293-.983-.878a1.316 1.316 0 00-.075.011c-1.437.25-2.42.48-2.665.425-.246-.054-.289-.256-.315-.304-.117-.21.119-.498.475-.676l1.694-1.07c.267-.178.445-.535.445-.802v-2.992c0-.356-.356-.535-.624-.446L4.16 15.807C3.624 16.075 3 15.63 3 15.005v-.576c0-.267.178-.623.446-.712l6.685-3.655c.267-.178.445-.446.445-.802V5.594c0-1.337.53-2.174 1.424-2.174z"></path>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>Direct</time>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                    <div class=" flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 bg-gray-300 bottom-full"></div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 bottom-5 sm:bottom-2"></div>
                        <div class=" relative z-10">
                          <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                        </div>
                      </div>

                      <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                        <strong class=" font-medium">
                          <time>11:30 PM</time><span class=" sm:ml-2 ml-3">Fort Lauderdale</span>
                          <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">FLL</span>
                        </strong>
                      </p>

                    </div>


                  </div>
                </div>


                <div class=" sm:p-4 sm:border-b-0 flex flex-wrap justify-between px-4 py-2 pb-2 border-b-0 border-gray-200 border-solid">

                  <div class=" inline-flex flex-row flex-wrap items-center content-start flex-grow">

                    <div class="mt-0 mb-1 ml-0 mr-1">
                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                        <div class=" px-0 py-1 leading-none">
                          <time>Economy</time>
                        </div>
                      </div>
                    </div>

                    <!-- baggage - hand           -->
                    <div class="mt-0 mb-1 ml-0 mr-1">

                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">

                        <div class=" flex flex-shrink-0 mr-1">
                          <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                            <path d="M11.16 4.083c0-.25.167-.416.417-.416h.833c.25 0 .417.166.417.416v2.5c0 .25-.167.417-.417.417h-.833c-.25 0-.417-.167-.417-.417v-2.5zm3.75 6.25h-3.5c-.25 0-.417.167-.417.417v.833c0 .334-.25.667-.666.667-.417 0-.667-.25-.667-.667v-.833c0-.25-.167-.417-.333-.417h-.25a.657.657 0 01-.667-.666c0-.417.25-.667.667-.667h5.833c.333 0 .667.25.667.667a.657.657 0 01-.667.666zm0-3.25c-.25 0-.417-.166-.417-.416v-2.5c0-.25.167-.417.417-.417.583 0 .833-.417.833-.917S15.493 2 14.91 2H9.077c-.584 0-.834.417-.834.833 0 .417.25.834.75.834.334.083.5.25.5.5v2.416c0 .25-.166.417-.416.417h-.834C7.077 7.083 6.16 8 6.16 9.083v10c0 1 .667 1.834 1.667 2 .083 0 .166.167.166.25 0 .5.334.667.834.667s.833-.167.833-.667a.18.18 0 01.167-.166h4.166a.18.18 0 01.167.166c0 .5.333.667.833.667s.834-.167.834-.667c0-.083.25-.25.333-.25 1-.166 1.667-1.083 1.667-2v-10c0-1.083-.75-2-1.917-2h-1z"></path>
                          </svg>
                        </div>

                        <div class=" px-0 py-1 leading-none">
                          <time>7 kg</time>
                        </div>
                      </div>
                    </div>


                  </div>

                  <div class=" sm:pointer-events-none sm:block sm:ml-auto sm:pl-4 sm:whitespace-nowrap hidden">
                    <div id="more_details" class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                      <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                        <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                          <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                        </svg>
                      </div>
                      <div class=" inline-block w-full text-left">Show details</div>
                    </div>
                  </div>

                </div>
                <div class="sm:flex-1 box-border flex flex-col"></div>
              </div>
            </div>
            <!-- end left side of component -->


            <!-- right side of component -->

            <div class="sm:w-4/12 w-full h-auto px-4 py-2">
              <div class=" sm:h-4/5 sm:justify-center flex items-center justify-start pb-3">
                <div class="sm:text-lg pb-2 text-xl font-bold text-gray-600">
                  $ 45
                </div>
              </div>


              <div class="sm:h-1/5 sm:mb-0 flex">

                <div class="sm:hidden sm:pointer-events-none sm:ml-auto sm:pl-4 sm:whitespace-nowrap inline-flex">
                  <div class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                    <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                      <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                        <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                      </svg>
                    </div>
                    <div class=" inline-block w-full text-left">Show details</div>
                  </div>
                </div>

                <button class="sm:ml-0 sm:flex-shrink sm:w-full inline-flex items-center justify-center flex-grow py-2 mb-1 ml-2 text-xs font-semibold text-white bg-blue-900 rounded">
                  Book
                </button>

              </div>

            </div>

            <!-- end right side of component -->

          </div>
        </div>


        <div class="h-1"></div>

        <!-- 3rd kiwi copied component kiwi.com-->
        <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white rounded shadow-md cursor-pointer">
          <div class=" relative flex flex-wrap w-full">

            <!-- left side of component -->
            <div class="sm:w-8/12 w-full border-r border-gray-100">
              <div>
                <div class="p-4">
                  <p class="mb-2 font-medium leading-5 text-gray-500">
                    <time>Thu Dec 27</time>
                  </p>
                  <div class=" relative">
                    <div class="flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class="relative flex items-center flex-shrink-0 mr-2">
                          <div class="absolute left w-0.5 h-full bg-gray-300 top-2/3"></div>
                          <div class="relative z-10">
                            <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                          </div>
                        </div>
                        <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                          <strong class=" font-medium">
                            <time>9:25 PM</time><span class=" sm:ml-2 ml-3">Dallas</span>
                            <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">DFW</span>
                          </strong>
                        </p>
                      </div>






                    </div>

                    <div class="flex -ml-1">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 h-3/4 bg-gray-300 bottom-6"></div>
                        <div class=" relative z-10 bg-white border-b border-white">
                          <svg class="flex-shrink-0 w-4 h-4 text-gray-400 align-middle bg-white fill-current" viewBox="0 0 24 24">
                            <path d="M11.893 5.807l.113-.007a.9.9 0 01.893.787l.007.113-.001 8.393 2.419-2.41a.905.905 0 011.09-.06l.096.076c.34.304.395.807.146 1.174l-.076.097-3.864 3.933a.904.904 0 01-1.255.086l-4.049-4.02a.898.898 0 01.066-1.27.904.904 0 011.186-.02l2.441 2.368V6.7a.9.9 0 01.788-.893l.113-.007-.113.007z"></path>
                          </svg>
                        </div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 top-3/6"></div>
                      </div>
                      <div class="flex justify-between flex-grow mx-0 mt-2 mb-1">
                        <div class="flex flex-wrap flex-auto">
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-blue-500 bg-blue-100 border border-blue-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>2h 21m</time>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class=" box-border inline-flex items-center justify-center flex-auto flex-grow-0 flex-shrink-0 w-6 min-h-full p-0 text-sm font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200 rounded-full">
                              <div class=" flex flex-shrink-0">
                                <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                                  <path d="M12 3.42c.894 0 1.424 1.104 1.424 2.263V9.26c0 .356.178.624.445.802l6.685 3.654c.268.179.446.446.446.803v.575c0 .624-.624 1.07-1.159.802l-5.793-1.96a.486.486 0 00-.624.445v2.992c0 .357.178.539.445.717l1.694 1.07c.356.178.592.466.475.676-.026.048-.069.25-.315.304-.246.055-1.228-.176-2.665-.425l-.082-.012c-.244.583-.57.875-.976.875-.407 0-.735-.293-.983-.878a1.316 1.316 0 00-.075.011c-1.437.25-2.42.48-2.665.425-.246-.054-.289-.256-.315-.304-.117-.21.119-.498.475-.676l1.694-1.07c.267-.178.445-.535.445-.802v-2.992c0-.356-.356-.535-.624-.446L4.16 15.807C3.624 16.075 3 15.63 3 15.005v-.576c0-.267.178-.623.446-.712l6.685-3.655c.267-.178.445-.446.445-.802V5.594c0-1.337.53-2.174 1.424-2.174z"></path>
                                </svg>
                              </div>
                            </div>
                          </div>
                          <div class="mt-0 mb-1 ml-0 mr-1">
                            <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                              <div class=" px-0 py-1 leading-none">
                                <time>Direct</time>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>

                    <div class=" flex">
                      <div class=" relative flex items-center flex-shrink-0 mr-2">
                        <div class=" absolute left w-0.5 bg-gray-300 bottom-full"></div>
                        <div class="absolute left w-0.5 h-full bg-gray-300 bottom-5 sm:bottom-2"></div>
                        <div class=" relative z-10">
                          <svg class="flex-shrink-0 w-2 h-2 align-middle bg-gray-400 rounded-full fill-current" viewBox="0 0 24 24"></svg>
                        </div>
                      </div>

                      <p class=" m-0 text-sm font-normal leading-5 text-left text-gray-700">
                        <strong class=" font-medium">
                          <time>11:30 PM</time><span class=" sm:ml-2 ml-3">Fort Lauderdale</span>
                          <span class="block sm:inline mt-0.5 text-gray-500 leading-5 sm:mt-0 sm:ml:4 sm:text-sm ">FLL</span>
                        </strong>
                      </p>

                    </div>


                  </div>
                </div>


                <div class=" sm:p-4 sm:border-b-0 flex flex-wrap justify-between px-4 py-2 pb-2 border-b-0 border-gray-200 border-solid">

                  <div class=" inline-flex flex-row flex-wrap items-center content-start flex-grow">

                    <div class="mt-0 mb-1 ml-0 mr-1">
                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">
                        <div class=" px-0 py-1 leading-none">
                          <time>Economy</time>
                        </div>
                      </div>
                    </div>

                    <!-- baggage - hand           -->
                    <div class="mt-0 mb-1 ml-0 mr-1">

                      <div class="rounded-xl box-border inline-flex items-center justify-center flex-auto min-h-full px-2 py-0 text-xs font-medium leading-4 text-gray-500 bg-gray-100 border border-gray-200">

                        <div class=" flex flex-shrink-0 mr-1">
                          <svg class="flex-shrink-0 w-4 h-4 align-middle bg-gray-100 rounded-full fill-current" viewBox="0 0 24 24">
                            <path d="M11.16 4.083c0-.25.167-.416.417-.416h.833c.25 0 .417.166.417.416v2.5c0 .25-.167.417-.417.417h-.833c-.25 0-.417-.167-.417-.417v-2.5zm3.75 6.25h-3.5c-.25 0-.417.167-.417.417v.833c0 .334-.25.667-.666.667-.417 0-.667-.25-.667-.667v-.833c0-.25-.167-.417-.333-.417h-.25a.657.657 0 01-.667-.666c0-.417.25-.667.667-.667h5.833c.333 0 .667.25.667.667a.657.657 0 01-.667.666zm0-3.25c-.25 0-.417-.166-.417-.416v-2.5c0-.25.167-.417.417-.417.583 0 .833-.417.833-.917S15.493 2 14.91 2H9.077c-.584 0-.834.417-.834.833 0 .417.25.834.75.834.334.083.5.25.5.5v2.416c0 .25-.166.417-.416.417h-.834C7.077 7.083 6.16 8 6.16 9.083v10c0 1 .667 1.834 1.667 2 .083 0 .166.167.166.25 0 .5.334.667.834.667s.833-.167.833-.667a.18.18 0 01.167-.166h4.166a.18.18 0 01.167.166c0 .5.333.667.833.667s.834-.167.834-.667c0-.083.25-.25.333-.25 1-.166 1.667-1.083 1.667-2v-10c0-1.083-.75-2-1.917-2h-1z"></path>
                          </svg>
                        </div>

                        <div class=" px-0 py-1 leading-none">
                          <time>7 kg</time>
                        </div>
                      </div>
                    </div>


                  </div>

                  <div class=" sm:pointer-events-none sm:block sm:ml-auto sm:pl-4 sm:whitespace-nowrap hidden">
                    <div id="more_details" class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                      <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                        <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                          <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                        </svg>
                      </div>
                      <div class=" inline-block w-full text-left">Show details</div>
                    </div>
                  </div>

                </div>
                <div class="sm:flex-1 box-border flex flex-col"></div>
              </div>
            </div>
            <!-- end left side of component -->


            <!-- right side of component -->

            <div class="sm:w-4/12 w-full h-auto px-4 py-2">
              <div class=" sm:h-4/5 sm:justify-center flex items-center justify-start pb-3">
                <div class="sm:text-lg pb-2 text-xl font-bold text-gray-600">
                  $ 45
                </div>
              </div>


              <div class="sm:h-1/5 sm:mb-0 flex">

                <div class="sm:hidden sm:pointer-events-none sm:ml-auto sm:pl-4 sm:whitespace-nowrap inline-flex">
                  <div class=" sm:bg-white box-border relative flex items-center justify-between flex-auto flex-grow-0 flex-shrink-0 w-auto h-8 max-w-full py-0 pl-2 pr-3 mb-0 text-xs font-medium leading-snug text-center text-gray-700 no-underline bg-transparent bg-gray-200 border-0 rounded-md appearance-none">
                    <div class=" flex flex-row items-center justify-center my-0 ml-0 mr-2">
                      <svg class="flex-shrink-0 w-4 h-4 align-middle rounded-full fill-current" viewBox="0 0 24 24">
                        <path d="M7.912 8.747a.904.904 0 00-1.274-.065.898.898 0 00-.066 1.27l4.796 5.303a.904.904 0 001.342-.003l4.72-5.255a.898.898 0 00-.07-1.271.904.904 0 00-1.274.07l-3.754 4.18a.4.4 0 01-.595 0L7.912 8.747z"></path>
                      </svg>
                    </div>
                    <div class=" inline-block w-full text-left">Show details</div>
                  </div>
                </div>

                <button class="sm:ml-0 sm:flex-shrink sm:w-full inline-flex items-center justify-center flex-grow py-2 mb-1 ml-2 text-xs font-semibold text-white bg-blue-900 rounded">
                  Book
                </button>

              </div>

            </div>

            <!-- end right side of component -->

          </div>
        </div>


        <div class="h-1"></div>

        <div class="flex flex-col">
          <div class="sm:-mx-6 lg:-mx-8 -my-2 overflow-x-auto">
            <div class="sm:px-6 lg:px-8 inline-block min-w-full py-2 align-middle">
              <div class="sm:rounded-lg overflow-hidden border-b border-gray-200 shadow">
                <div class="grid grid-cols-12 gap-5 px-6 py-4">
                  <div class="flex items-center col-span-4">

                    <div class="inline-block w-10">
                      <i class="fas fa-plane w-10 text-2xl text-gray-400 rounded-full"></i>
                    </div>

                    <div class="inline-block px-3">
                      <div class="sm:inline-flex block">
                        <div class="inline-block text-base font-medium text-gray-900">
                          10:00 am
                        </div>
                        <div><svg class="inline-block w-8 h-4 px-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                          </svg></div>

                        <div class="inline-block text-base font-medium text-gray-900">
                          12:46 am
                        </div>
                      </div>

                      <div class="block text-sm text-gray-500">
                        British Airways
                      </div>

                    </div>

                  </div>

                  <div class="flex items-center col-span-2">
                    <div class="inline-block px-2">
                      <div class="inline-flex">
                        <div class="inline-block text-base font-medium text-gray-500">
                          5hr 45 min
                        </div>

                      </div>

                      <div class="block text-sm text-gray-500">
                        DFW-LHR
                      </div>

                    </div>
                  </div>

                  <div class="flex items-center col-span-2">
                    <div class="inline-block px-2">
                      <div class="inline-flex">
                        <div class="inline-block text-base font-medium text-gray-500">
                          1 stop
                        </div>

                      </div>

                      <div class="block text-sm text-gray-500">
                        1 hr 35 mins IAH
                      </div>

                    </div>
                  </div>

                  <div class="flex items-center justify-end col-span-4">

                    <div class=" inline-block px-3">
                      <div class="inline-flex pr-2">
                        <div class="inline-block text-base font-medium text-gray-900">
                          $133
                        </div>

                      </div>



                    </div>

                    <div class="inline-block w-10">
                      <svg class="w-7 h-7 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </div>

                  </div>

                </div>





              </div>
            </div>
          </div>
        </div>

        <div class="h-1"></div>

        <div class="flex flex-col">
          <div class="sm:-mx-6 lg:-mx-8 -my-2 overflow-x-auto">
            <div class="sm:px-6 lg:px-8 inline-block min-w-full py-2 align-middle">
              <div class="sm:rounded-lg overflow-hidden border-b border-gray-200 shadow">
                <table class="min-w-full divide-y divide-gray-200">

                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="whitespace-nowrap px-6 py-4">
                        <div class="flex items-center">
                          <div class="flex items-center w-8 h-10">
                            <i class="fas fa-plane text-2xl text-gray-400 rounded-full"></i>
                          </div>

                          <div class="ml-4">
                            <div class="flex content-center">
                              <div class="inline-block text-base font-medium text-gray-900">
                                10:00 am
                              </div>
                              <div><svg class="inline-block w-8 h-4 px-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                                </svg></div>

                              <div class="inline-block text-base font-medium text-gray-900">
                                12:45 am
                              </div>
                            </div>
                            <div class="block text-sm text-gray-500">
                              British Airways
                            </div>
                          </div>
                        </div>
                      </td>

                      <td class="whitespace-nowrap px-6 py-4">
                        <div class="text-base text-gray-900">5hr 45min</div>
                        <div class="text-sm text-gray-500">DFW-LHR</div>
                      </td>

                      <td class="whitespace-nowrap px-6 py-4">
                        <div class="text-base text-gray-900">1 stop</div>
                        <div class="text-sm text-gray-500">1 hr 35 min IAH</div>
                      </td>

                      <td class="whitespace-nowrap px-6 py-4 text-base font-medium text-gray-900">
                        $133
                      </td>
                      <td class="whitespace-nowrap px-0 py-4 text-lg font-medium text-right">
                        <svg class="w-7 h-7 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </td>
                    </tr>

                    <!-- More rows... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-3/12 ml-6">
        <div class=" md:mb-4 relative flex flex-col w-full h-full px-4 py-0 pb-4 text-sm transition bg-gray-100 rounded cursor-pointer">
          <div class="md:mb-4 relative flex flex-col w-full text-sm transition bg-white cursor-pointer">
            <img class="rounded" src="{{ asset('images/upload-3.jpg') }}" alt="">
          </div>
        </div>
      </div>

    </div>





  </div>




</main>

@stop