<div  class="max-w-7xl sm:px-6 lg:px-8 px-4 py-6 mx-auto bg-gray-100">

    <form action="/booking/flow" method="POST">
        @csrf
        <div class="sm:rounded p-7 bg-white shadow">
        
            <div class="block pb-2">
            
                <div class="flex">
                    <!-- trip type dropdown -->
                    <div class="relative inline-block text-left">

                    
                        <div x-data="{ tripTypeModal: false, flight_type: 'Roundtrip' }">
                            
                            <input x-bind:value="flight_type" id="flight_type" class="hidden" type="text" name="flight_type" autocomplete="off"/>  
                        <!-- <p x-text='flight_type'></p> -->
                            <button @click="tripTypeModal = true"  type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-32 px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">
                            <span x-text="flight_type"></span>
                            
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

                            <div x-show.transition.duration.200ms="tripTypeModal" @click.away="tripTypeModal = false" class=" ring-1 ring-black ring-opacity-5 absolute left-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg cursor-pointer">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <li @click="tripTypeModal = false, flight_type = 'Roundtrip'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Roundtrip</li>
                                    <li @click="tripTypeModal = false, flight_type = 'Oneway'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Oneway</li>
                                    <li @click="tripTypeModal = false, flight_type = 'Multicity'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Multicity</li>  
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="w-1"></div>
                    <div class="relative inline-block text-left">
                        <div x-data="{ paxModal: false, paxNo: '1'  }">
                            <button @click="paxModal = true" type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-auto px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">
                            <input x-bind:value="paxNo" id="paxNo" class="hidden" type="text" name="paxNo" autocomplete="off"/>  
                            <svg class="w-5 h-5 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"" />
                            </svg>

                            <span x-text="paxNo"></span>
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

                            <div x-show.transition.duration.200ms="paxModal" @click.away="paxModal = false" class="ring-1 ring-black ring-opacity-5 absolute left-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <li @click="paxModal = false, paxNo = '1'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">1</li>
                                    <li @click="paxModal = false, paxNo = '2'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">2</li>
                                    <li @click="paxModal = false, paxNo = '3'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">3</li>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-1"></div>
                    <!-- new cabin dropdown -->
                    <div class="relative inline-block text-left">
                    <div x-data="{ cabinModal: false, cabin: 'Economy' }">
                            
                            <input x-bind:value="cabin" id="cabin" class="hidden" type="text" name="cabin" autocomplete="off"/>  
                        <!-- <p x-text='flight_type'></p> -->
                            <button @click="cabinModal = true"  type="button" class="hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 inline-flex justify-center w-32 px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md" id="options-menu" aria-haspopup="true" aria-expanded="true">
                            <span x-text="cabin"></span>
                            
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

                            <div x-show.transition.duration.200ms="cabinModal" @click.away="cabinModal = false" class=" ring-1 ring-black ring-opacity-5 absolute left-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg cursor-pointer">
                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <li @click="cabinModal = false, cabin = 'Economy'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Economy</li>
                                    <li @click="cabinModal = false, cabin = 'Business'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">Business</li>
                                    <li @click="cabinModal = false, cabin = 'First'" class="hover:bg-gray-100 hover:text-gray-900 block px-4 py-2 text-sm text-gray-700" role="menuitem">First</li>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:pb- flex bg-white">



                <div class="h-4"></div>

                <div class="inline-flex w-3/12">
                    <div  @click="poo = true" x-data="{ poo: false, fly_from:'', display_from:'' }" class="relative w-full">
                        <input wire:model="fly_from" class="hidden border" id="fly_from" name="fly_from" type="text"/>
                        <div wire:keyup.debounce.150ms="getLocations('from')" class="relative" x-bind:class="{ 'z-40': poo }">
                            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <input wire:model="search_from" id="search_from" type="text" name="search_from" autocomplete="off" class="sm:text-base focus:outline-none focus:border-white w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="From" />
                        </div>
                        <div x-show.transition.duration.200ms="poo" @click.away="poo = false" class="ring-1 ring-black ring-opacity-5 -mt-14 -left-2 sm:w-80 absolute z-30 py-1 -ml-2 origin-top-right bg-white rounded-md shadow-lg">
                            <div class=" pt-16 border-white rounded-md cursor-pointer" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">

                                @if(!empty($location_array))

                                @foreach ($location_array as $location)
                                <div
                                
                                    @click.away="poo = false" class="hover:bg-gray-200 w-full">
                                    
                                    <div 
                                    
                                    wire:click="setOrigin('{{$location['city']}}', '{{$location['id']}}', '{{$location['type']}}')"   
                                    class=" flex px-5 py-2">
                                        
                                        <div 
                                            
                                            class="inline-block pr-3">
                                            @if ($location['type'] === 'airport')
                                            <i class="fas fa-plane text-sm text-gray-400"></i>

                                            @else
                                            <i class="fas fa-globe-americas"></i>
                                            @endif
                                        </div>
                                        <div class=" inline-block font-semibold">
                                            {{ $location['city'] }} <span class="text-sm font-medium text-gray-700">{{ $location['id'] }}</span>
                                            <p class=" text-sm text-gray-700">{{ $location['name'] }}</p>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                                @endif



                            </div>
                        </div>
                        
                    </div>



                </div>

                <div class="w-2"></div>


                <div class="inline-flex w-3/12">
                    <div  @click="poo = true" x-data="{ poo: false, fly_to:'', display_to:'' }" class="relative w-full">
                        <input wire:model="fly_to" class="hidden border" id="fly_to" name="fly_to" type="text"/>
                        <div wire:keyup.debounce.150ms="getLocations('to')" class="relative" x-bind:class="{ 'z-40': poo }">
                            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <input wire:model="search_to" id="search_to" type="text" name="search_to" autocomplete="off" class="sm:text-base focus:outline-none focus:border-white w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="To" />
                        </div>
                        <div x-show.transition.duration.200ms="poo" @click.away="poo = false" class="ring-1 ring-black ring-opacity-5 -mt-14 -left-2 sm:w-80 absolute z-30 py-1 -ml-2 origin-top-right bg-white rounded-md shadow-lg">
                            <div class=" pt-16 border-white rounded-md cursor-pointer" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">

                                @if(!empty($location_array))

                                @foreach ($location_array as $location)
                                <div
                                
                                    @click.away="poo = false" class="hover:bg-gray-200 w-full">
                                    
                                    <div 
                                    
                                    wire:click="setDestination('{{$location['city']}}', '{{$location['id']}}', '{{$location['type']}}')"   
                                    class=" flex px-5 py-2">
                                        
                                        <div 
                                            
                                            class="inline-block pr-3">
                                            @if ($location['type'] === 'airport')
                                            <i class="fas fa-plane text-sm text-gray-400"></i>

                                            @else
                                            <i class="fas fa-globe-americas"></i>
                                            @endif
                                        </div>
                                        <div class=" inline-block font-semibold">
                                            {{ $location['city'] }} <span class="text-sm font-medium text-gray-700">{{ $location['id'] }}</span>
                                            <p class=" text-sm text-gray-700">{{ $location['name'] }}</p>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                                @endif



                            </div>
                        </div>
                        
                    </div>



                </div>

                <!-- <div class="w-4"></div> -->

                <div x-data x-init="picker = new Pikaday({ 
                            field: $refs.datepicker_from,
                            format:'D/M/YYYY' 
                    })" class="sm:pl-4 inline-flex w-2/12">
                    <div @click="picker = true" class="relative w-full">
                        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input x-ref="datepicker_from" id="from_date" type="text" name="from_date" autocomplete="off" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="Leaving" />
                    </div>
                </div>

                <div x-data x-init="picker = new Pikaday({ 
                            field: $refs.datepicker_to,
                            format:'D/M/YYYY' 
                    })" class="sm:pl-2 sm:pr-4 inline-flex w-2/12">
                    <div @click="picker = true" class="relative w-full">
                        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                            <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input x-ref="datepicker_to" id="return_from" type="text" name="return_from" autocomplete="off" class="sm:text-base focus:outline-none focus:border-blue-400 w-full py-2 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded" placeholder="Returning" />
                    </div>
                </div>

                <div class=" inline-flex flex-grow">
                    <!-- <button type="submit" class="hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-gray-500 border border-transparent rounded-md shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <span class="pl-1">Search</span>
                    </button> -->
                    
                    <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center justify-center flex-grow px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                        <!-- Heroicon name: mail -->
                        <svg class="w-5 h-5 mr-3 -ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                        </svg>
                        <span class="pl-1">Search </span>

                    </button>

                    
                    
                </div>

            </div>

        </div>
    </form>
</div>