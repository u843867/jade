@extends ('layout')

@section ('content')


<div class="flex mx-10 my-5 flex-center position-ref full-height">
  <div class="w-1/3">
    <h1 class="ml-5 font-semibold">1. Initialize Payment (internal)</h1>
    <div class="w-full max-w-md m-5">
      <form class="w-full px-5 pt-6 pb-8 mb-4 bg-white rounded shadow-md" action="/payments" method="POST">
        @csrf

        <div class="flex flex-wrap mb-2 -mx-3">
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="client-id">
              Client-id
            </label>
            <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="Client-id" name="Client-id"  type="text" value="10100">
          </div>
          <div class="w-full px-3 md:w-1/2">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
              Account
            </label>
            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="account" name="account" type="text" value="101002">
          </div>
        </div>




          <div class="hidden paratoggle">

            <fieldset class="p-2 mb-4 border rounded">
              <legend class="pr-1 text-sm text-gray-500">Transaction</legend>

              <div class="flex flex-wrap mb-1 -mx-2">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="order-no">
                    Order#
                  </label>
                  <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="order-no" name="order-no"  type="text" value="QHWJEJ">
                </div>

                <div class="w-full px-3 md:w-1/2">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="Amount">
                    Amount
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="amount" name="amount" type="text" value="1000">
                </div>

              </div>

              <div class="block p-1 ">
                <p class="block text-xs text-gray-500">Card</p>
                </div>

              <div class="flex flex-wrap pt-1 mb-1 -mx-2">

                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                    Type-id
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="type-id" name="type-id" type="text" value="40">
                </div>

                <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="currency-id">
                    Currency-id
                  </label>
                  <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="currency-id" name="currency-id" type="text" value="578">
                </div>
                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="country-id">
                    Country-id
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="country-id" name="country-id" type="text" value="102">
                </div>
              </div>

            </fieldset>

            <fieldset class="p-2 border rounded">
              <legend class="pr-1 text-sm text-gray-500">Client Info'</legend>

              <div class="flex flex-wrap mb-0 -mx-2">

                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="language">
                    Language
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="language" name="language" type="text" value="us">
                </div>

                <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="version">
                    Version
                  </label>
                  <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="version" name="version" type="text" value="1.00">
                </div>
                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="platform">
                    Platform
                  </label>
                  <input class="block w-full px-3 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="platform" name="platform" type="text" value="HTML5/1.00">
                </div>
              </div>

              

              <div class="flex flex-wrap mb-0 -mx-2">

                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                    Phone <span class="font-medium text-gray-500 lowercase">country</span>
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phoneCountryId" name="phoneCountryId" type="text" value="40">
                </div>

                <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="operator">
                    Operator-id
                  </label>
                  <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="operator-id" name="operator-id" type="text" value="20000">
                </div>
                <div class="w-full px-3 md:w-1/3">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="phone-no">
                    Phone#
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phone-no" name="phone-no" type="text" value="3653503">
                </div>


                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="email">
                    Email
                  </label>
                  <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="email" name="email" type="text" value="test@cpd.com">
                </div>
                <div class="w-full px-3 md:w-1/2">
                  <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="ip">
                    IP
                  </label>
                  <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ip" name="ip" type="text" value="123.252.238.186">
                </div>


                
              </div>



            </fieldset>
          </div>

          <div class="flex items-end">
            
          </div>

          <div class="flex justify-between mt-4 align-middle">
            <div class="flex items-center">
              <p id="btntoggle" class="font-bold text-blue-500 hover:text-blue-700 collapsible">attributes...</p>
            </div>
            <div class="flex items-center">
              <button id="init_btn" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700"
                  type="submit">Submit</button>
            </div>
          </div>



      </form>
      <div>
        <p>Server: <span id="init_para0" class="font-semibold">{{ $server ?? '' }}</span></p>
        <p>Server Response Code: <span id="init_para" class="font-semibold">{{ $initialize_statusCode ?? '' }}</span></p>
        <p>Transaction ID: <span id="init_para1" class="font-semibold">{{ $transactionId2 ?? '' }}</span></p>
      </div>
      
      {{ d($initialize_payment_response ?? '') }}

    </div>
  </div>


  <div class="w-1/3">
    <h1 class="ml-5 font-semibold">2. Pay (Route) (internal)</h1>
    <div class="w-full max-w-md m-5">
      <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" action="/payments/route" method="post">
        @csrf

        <div class="flex flex-wrap mb-2 -mx-3">
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="client-id">
              Client-id
            </label>
            <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="Client-id" name="Client-id"  type="text" value="10100">
          </div>
          <div class="w-full px-3 md:w-1/2">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
              Account
            </label>
            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="account" name="account" type="text" value="101002">
          </div>
        </div>

        <div class="hidden paraRoutetoggle">

          <fieldset class="p-2 mb-4 border rounded">
            <legend class="pr-1 text-sm text-gray-500">Transaction</legend>
            <!-- <div class="w-full px-3 md:w-1/2">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
                Transaction ID
              </label>
              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="initialize-id" name="initialize-id" type="text" value="9625721">
            </div> -->
            <div class="flex flex-wrap mb-1 -mx-2">

              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="transaction-id">
                  Transaction ID
                </label>
                <input class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="transaction-id" name="transaction-id" type="text" value="9627164">
              </div>


              <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="order-no">
                  Stored Card
                </label>             
                <div class="relative">
                  <select class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="stored-card" name="stored-card">
                    <option>true</option>
                    <option>false</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              
              </div>

              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="Amount">
                  Amount
                </label>
                <input class="block w-full px-4 py-3 mb-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="amount" name="amount" type="text" value="1000">
              </div>

            </div>

            <div class="block p-1 ">
              <p class="block text-xs text-gray-500">Card</p>
              </div>

            <div class="flex flex-wrap pt-1 mb-1 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                  Type-id
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="type-id" name="type-id" type="text" value="7">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="currency-id">
                  Currency-id
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="currency-id" name="currency-id" type="text" value="578">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="country-id">
                  Country-id
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="country-id" name="country-id" type="text" value="102">
              </div>
            </div>

          </fieldset>

          <fieldset class="p-2 border rounded">
            <legend class="pr-1 text-sm text-gray-500">Client Info'</legend>

            <div class="flex flex-wrap mb-0 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="language">
                  Language
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="language" name="language" type="text" value="us">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="version">
                  Version
                </label>
                <input class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="version" name="version" type="text" value="1.00">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="platform">
                  Platform
                </label>
                <input class="block w-full px-3 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="platform" name="platform" type="text" value="HTML5/1.00">
              </div>
            </div>

            

            <div class="flex flex-wrap mb-0 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                  Phone <span class="font-medium text-gray-500 lowercase">country</span>
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phoneCountryId" name="phoneCountryId" type="text" value="40">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="operator">
                  Operator-id
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="operator-id" name="operator-id" type="text" value="20000">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="phone-no">
                  Phone#
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phone-no" name="phone-no" type="text" value="3653503">
              </div>


              <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="email">
                  Email
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="email" name="email" type="text" value="test@cpd.com">
              </div>
              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="ip">
                  IP
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="ip" name="ip" type="text" value="123.252.238.186">
              </div>


              
            </div>



          </fieldset>
        </div>

        <div class="flex items-end">
          
        </div>

        <div class="flex justify-between mt-4 align-middle">
          <div class="flex items-center">
            <p id="btnRouteToggle" class="font-bold text-blue-500 hover:text-blue-700 collapsible">attributes...</p>
          </div>
          <div class="flex items-center">
            <button id="init_btn_route" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700"
                type="submit">Submit</button>
          </div>
        </div>



      </form>
      <p>Server: <span id="init_para_route0" class="font-semibold">{{ $server_route ?? '' }}</span></p>
      <p>Server Response Code: <span id="init_para_route1" class="font-semibold"> {{ $pay_statusCode ?? '' }}</p>
    


      {{ d($pay_response ?? '') }}




    </div>
  </div>


  <div class="w-1/3">
    <h1 class="ml-5 font-semibold">3. Authorize Payment (external)</h1>
    <div class="w-full max-w-md m-5">
      <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" action="/payments/authorization" method="post">
        @csrf


        <div class="flex flex-wrap mb-2 -mx-3">
          <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="client-id">
              Client-id
            </label>
            <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="Client-id" name="Client-id"  type="text" value="10100">
          </div>
          <div class="w-full px-3 md:w-1/2">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
              Account
            </label>
            <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="account" name="account" type="text" value="101002">
          </div>
        </div>

        <div class="hidden paraAuthtoggle">

          <fieldset class="p-2 mb-4 border rounded">
            <legend class="pr-1 text-sm text-gray-500">Transaction</legend>

            <div class="flex flex-wrap mb-1 -mx-2">

              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="transaction-id">
                  Transaction ID
                </label>
                <input class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="transaction-id" name="transaction-id" type="text" value="9627164">
              </div>




              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="Amount">
                  Amount
                </label>
                <input class="block w-full px-4 py-3 mb-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="amount" name="amount" type="text" value="1000">
              </div>

            </div>

        

            <div class="flex flex-wrap pt-1 mb-1 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                  Type-id
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="type-id" name="type-id" type="text" value="7">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="currency-id">
                  Currency-id
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="currency-id" name="currency-id" type="text" value="578">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="country-id">
                  Country-id
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="country-id" name="country-id" type="text" value="102">
              </div>
            </div>

          </fieldset>

          <fieldset class="p-2 mb-4 border rounded">
            <legend class="pr-1 text-sm text-gray-500">Card Details</legend>
            <!-- <div class="w-full px-3 md:w-1/2">
              <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="account">
                Transaction ID
              </label>
              <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="initialize-id" name="initialize-id" type="text" value="9625721">
            </div> -->
            <div class="flex flex-wrap mb-1 -mx-2">

              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="cardNumber">
                  Card Number
                </label>
                <input class="block w-full px-3 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="cardNumber" name="cardNumber" type="text" value="5413330300006005">
              </div>




              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="cardExpiry">
                  Card Expiry
                </label>
                <input class="block w-full px-4 py-3 mb-2 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="cardExpiry" name="cardExpiry" type="text" value="01/23">
              </div>

            </div>

 

            <div class="flex flex-wrap pt-1 mb-1 -mx-2">

              <div class="w-full px-3 md:w-3/12">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                  Type-id
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="type-id" name="type-id" type="text" value="7">
              </div>

              <div class="w-full px-3 mb-6 md:w-6/12 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="cardHolderName">
                  Cardholder Name
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="cardHolderName" name="cardHolderName" type="text" value="Justin Jones">
              </div>
              <div class="w-full px-3 md:w-3/12">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="cardCVC">
                  CVC
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="cardCVC" name="cardCVC" type="text" value="005">
              </div>
            </div>

          </fieldset>

          <fieldset class="p-2 border rounded">
            <legend class="pr-1 text-sm text-gray-500">Client Info'</legend>

            <div class="flex flex-wrap mb-0 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="language">
                  Language
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="language" name="language" type="text" value="us">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="version">
                  Version
                </label>
                <input class="block w-full px-4 py-3 mb-4 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="version" name="version" type="text" value="1.00">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="platform">
                  Platform
                </label>
                <input class="block w-full px-3 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="platform" name="platform" type="text" value="HTML5/1.00">
              </div>
            </div>

            

            <div class="flex flex-wrap mb-0 -mx-2">

              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="type-id">
                  Phone <span class="font-medium text-gray-500 lowercase">country</span>
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phoneCountryId" name="phoneCountryId" type="text" value="40">
              </div>

              <div class="w-full px-3 mb-6 md:w-1/3 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="operator">
                  Operator-id
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="operator-id" name="operator-id" type="text" value="20000">
              </div>
              <div class="w-full px-3 md:w-1/3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="phone-no">
                  Phone#
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="phone-no" name="phone-no" type="text" value="3653503">
              </div>


              <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="email">
                  Email
                </label>
                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" id="email" name="email" type="text" value="test@cpd.com">
              </div>
              <div class="w-full px-3 md:w-1/2">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="customer-ref">
                  Customer Reference
                </label>
                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="customer-ref" name="customer-ref" type="text" value="TestCustomerRef">
              </div>


              
            </div>



          </fieldset>
        </div>

        <div class="flex items-end">
          
        </div>

        <div class="flex justify-between mt-4 align-middle">
          <div class="flex items-center">
            <p id="btnAuthToggle" class="font-bold text-blue-500 hover:text-blue-700 collapsible">attributes...</p>
          </div>
          <div class="flex items-center">
            <button id="init_btn_auth" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700"
                type="submit">Submit</button>
          </div>
        </div>
       

      </form>
        
      <p>Server: <span id="init_para_auth0" class="font-semibold">{{ $server_auth ?? '' }}</span></p>
      <p>Server Response Code: <span id="init_para_auth1" class="font-semibold"> {{ $authorize_statusCode ?? '' }}</p>
      <p>Authorization: <span id="init_para_auth1" class="font-semibold"> {{ $authorization_response_string ?? '' }} </p>

      


      {{ d($authorization_response ?? '') }}




    </div>
  </div>


</div>

@endsection