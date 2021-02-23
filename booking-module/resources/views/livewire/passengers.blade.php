<div>
    <div class="relative flex flex-col w-full mb-4 text-sm transition bg-white rounded shadow-md cursor-pointer">

        <div class=" relative flex flex-wrap w-full">

            <!-- Contact details -->
            <div class="w-full border-r border-gray-100">
                <div class="p-6">
                    <div class="relative">

                        <div class="space-y-8 divide-y divide-gray-200">

                            <div class="py-2">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-600">
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
                                            <input wire:model="pax_array.contact_email" type="text" name="email" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full pl-10 border-gray-300 rounded-md" placeholder="you@example.com">
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
                                            <input wire:model.="pax_array.contact_phone" type="text" name="phone_number" id="phone_number" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full pl-16 border-gray-300 rounded-md" placeholder="+1 (555) 987-6543">
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

            <!-- Passenger -->
            <div class="w-full border-r border-gray-100">
                <div class="p-6">
                    <div class=" relative">


                        <div class="space-y-8 divide-y divide-gray-200">

                            <div class="py-2">
                                <div>
                                    <h3 class="text-lg font-medium leading-6 text-gray-600">
                                        Primary passenger
                                    </h3>

                                </div>
                                <div class="gap-y-6 gap-x-4 sm:grid-cols-6 grid grid-cols-1 mt-6">
                                    <div class="sm:col-span-3">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">
                                            First name
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model.defer="pax_array.first_name" type="text" name="first_name" id="first_name" autocomplete="given-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">
                                            Last name
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model.defer="pax_array.last_name" type="text" name="last_name" id="last_name" autocomplete="family-name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                                        <select wire:model.defer="pax_array.nationality" id="nationality" name="nationality" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">
                                            <option>USA</option>
                                            <option selected>Canada</option>
                                            <option>EU</option>
                                        </select>
                                    </div>

                                    <div class="sm:col-span-1">
                                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                        <select wire:model.defer="pax_array.gender" id="gender" name="gender" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md">

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

                                    <div class="sm:col-span-3">
                                        <label for="ID_number" class="block text-sm font-medium text-gray-700">
                                            Passport / ID number
                                        </label>
                                        <div class="mt-1">
                                            <input wire:model.defer="pax_array.passport_id_number" type="text" name="ID_number" id="passport_id_number" autocomplete="off" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-1">
                                        <label for="day" class="block text-sm font-medium text-gray-700">ID expiry</label>
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


                                </div>
                            </div>


                        </div>


                    </div>





                </div>
            </div>
        </div>



    </div>

    <div class="my-5">
        <div class="flex justify-center">
            <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
                Add another passenger
            </button>

        </div>
    </div>

    <div class="pt-0">
        <div class="flex justify-end">
            <!-- <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
                                        Cancel
                                    </button> -->
            <button 
                x-on:click="scrollTop"
                wire:click="savePax" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                Customize >
            </button>
        </div>
    </div>
</div>