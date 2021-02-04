<div>
    <h1 class="ml-5 font-semibold">3. Authorize Payment (external)</h1>
    <div class="w-full max-w-md m-5">
            


        <form wire:submit.prevent="authorise_payment()" action="#"
            class="pb-8 mb-4 bg-white rounded shadow-md">
            @csrf

            <div class="h-6" wire:loading.class.remove="h-6"></div>
            

            <div class="w-full overflow-hidden">
                
                <div wire:loading.class="relative inline-block w-1/2 fluentProgressBar-waiting"></div>
                
            </div>

            <div class="px-8 pt-6 ">

            <div class="flex flex-wrap mb-2 -mx-3">

            
    
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="clientId">
                        ClientId
                    </label>
                    <input
                        class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                        wire:model.defer="ClientId" name="ClientId" type="text" value="10100">
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
                        Account
                    </label>
                    <input
                        class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                        wire:model.defer="account" name="account" type="text" value="101002">
                </div>
            </div>

            <div id="paraAuth" class="hidden paraAuthtoggle">

                <fieldset class="p-2 mb-4 border rounded">
                    <legend class="pr-1 text-sm text-gray-500">Transaction</legend>

                    <div class="flex flex-wrap mb-1 -mx-2">

                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="transactionId">
                                Transaction ID
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="initializeId" name="initializeId" type="text" value="9627164">
                        </div>




                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="Amount">
                                Amount
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="amount" name="amount" type="text" value="1000">
                        </div>

                    </div>



                    <div class="flex flex-wrap pt-1 mb-1 -mx-2">

                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="cardTypeId">
                                TypeId
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="cardTypeId" name="typeId" type="text" value="7">
                        </div>

                        <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="currencyId">
                                CurrencyId
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                                wire:model.defer="currencyId" name="currencyId" type="text" value="578">
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="countryId">
                                CountryId
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="countryId" name="countryId" type="text" value="102">
                        </div>
                    </div>

                </fieldset>

                <fieldset class="p-2 mb-4 border rounded">
                    <legend class="pr-1 text-sm text-gray-500">Card Details</legend>
                    <!-- <div class="w-full px-3 md:w-1/2">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
                Transaction ID
              </label>
              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="initializeId" name="initializeId" type="text" value="9625721">
            </div> -->
                    <div class="flex flex-wrap mb-1 -mx-2">

                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="cardNumber">
                                Card Number
                            </label>
                            <input
                                class="block w-full px-3 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="cardNumber" name="cardNumber" type="text" value="5413330300006005">
                        </div>




                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="cardExpiry">
                                Card Expiry
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="cardExpiry" name="cardExpiry" type="text" value="01/23">
                        </div>

                    </div>



                    <div class="flex flex-wrap pt-1 mb-1 -mx-2">

                        <div class="w-full px-3 md:w-3/12">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="typeId">
                                TypeId
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="typeId" name="typeId" type="text" value="7">
                        </div>

                        <div class="w-full px-3 mb-6 md:w-6/12 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="cardHolderName">
                                Cardholder Name
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                                wire:model.defer="cardHolderName" name="cardHolderName" type="text" value="Justin Jones">
                        </div>
                        <div class="w-full px-3 md:w-3/12">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="cardCVC">
                                CVC
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="cardCVC" name="cardCVC" type="text" value="005">
                        </div>
                    </div>

                </fieldset>

                <fieldset class="p-2 border rounded">
                    <legend class="pr-1 text-sm text-gray-500">Client Info'</legend>

                    <div class="flex flex-wrap mb-0 -mx-2">

                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="language">
                                Language
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="language" name="language" type="text" value="us">
                        </div>

                        <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="version">
                                Version
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                                wire:model.defer="version" name="version" type="text" value="1.00">
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="platform">
                                Platform
                            </label>
                            <input
                                class="block w-full px-3 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="platform" name="platform" type="text" value="HTML5/1.00">
                        </div>
                    </div>



                    <div class="flex flex-wrap mb-0 -mx-2">

                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="typeId">
                                Phone <span class="font-medium text-gray-500 lowercase">country</span>
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="phoneCountryId" name="phoneCountryId" type="text" value="40">
                        </div>

                        <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="operator">
                                OperatorId
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                                wire:model.defer="operatorId" name="operatorId" type="text" value="20000">
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="phone-no">
                                Phone#
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="phoneNo" name="phone-no" type="text" value="3653503">
                        </div>


                        <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="email">
                                Email
                            </label>
                            <input
                                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"
                                wire:model.defer="email" name="email" type="text" value="test@cpd.com">
                        </div>
                        <div class="w-full px-3 md:w-1/2">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="customer-ref">
                                Customer Reference
                            </label>
                            <input
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                                wire:model.defer="customerRef" name="customer-ref" type="text" value="TestCustomerRef">
                        </div>



                    </div>



                </fieldset>
            </div>

            <div class="flex items-end">

            </div>

            <div class="flex justify-between mt-4 align-middle">
                <div class="flex items-center">
                    <p class="font-bold text-blue-500 btnAuthToggle hover:text-blue-700 collapsible">attributes...
                    </p>
                </div>
                <div class="flex items-center">
                    <button id="btn_auth" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700"
                        type="submit">Submit</button>
                </div>
            </div>
        </div>

        </form>

        <p wire:model.defer="$server_auth_name">Server: <span id="init_para_auth0"
                class="font-semibold">{{ $server_auth_name ?? '' }}</span></p>
        <p wire:model.defer="$server_auth_code">Server Response Code: <span id="init_para_auth1" class="font-semibold">
                {{ $authorise_statusCode ?? '' }}</p>
        <p wire:model.defer="$auth_response_string">Authorization: <span id="init_para_auth2" class="font-semibold">
                {{ $auth_response_string ?? '' }} </p>



        <!-- display initialize_payment_response with 'kint' -->

        <div class="py-3">
            {{ d($authorise_payment_response ?? '') }}
        </div>


    </div>


</div>