<div>
<h1 class="ml-5 font-semibold">2. Payment Intent - confirm</h1>

<div class="w-full max-w-md m-5">
    <form form wire:submit.prevent="payment_intent_confirm()" action="#" class="pb-8 mb-4 bg-white rounded shadow-md">
        @csrf

        <div class="h-6" wire:loading.class.remove="h-6"></div>

        <div class="w-full overflow-hidden">

            <div wire:loading.class="relative inline-block w-1/2 fluentProgressBar-waiting"></div>

        </div>

        <div class="px-8 pt-6">

            <div class="flex flex-wrap mb-2 -mx-3">
                <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="amount">
                        Payment Intent
                    </label>
                    <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" wire:model.defer="PaymentIntent_Id" name="PaymentIntent_Id" type="text">
                </div>
                <div class="w-full px-3 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="payment_method">
                        Payment Method
                    </label>
                    <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" wire:model.defer="payment_method" name="payment_method" type="text">
                </div>
            </div>

            <div class="flex items-end">

</div>

<div class="flex justify-between mt-4 align-middle">
    <div class="flex items-center">
        
    </div>
    <div class="flex items-center">
        <button id="btn_confirm" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-700" type="submit">Submit</button>
    </div>
</div>

        </div>

</form>


<div>
    <!-- any server responses I want to extract will display here -->
    
</div>

<div class="py-3">
    <!-- kint will display here -->
    {{ d($paymentIntentConfirm_rs ?? '') }}
</div>

</div>
</div>
