<header>
    <nav class="flex flex-wrap items-center justify-between px-2 py-2 bg-blue-900">

        <div class="flex flex-shrink-0 px-2 text-white ">

            <div class="block pr-2 sm:hidden">
                
                    <button x-data="{usedKeyboard: false}" @keydown.window.tab="usedKeyboard = true" @click="$dispatch('open-hamburger', { open: true })" :class="{'focus:outline-none': !usedKeyboard}" class="flex items-center px-3 py-2 border rounded hover:text-white hover:border-white">
                        <svg class="w-4 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>

            </div>
            <!--                 
                        <svg class="w-5 h-5 mr-2 fill-current" width="54" height="54" viewBox="0 0 54 54"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                            </svg> -->
            <div class="flex items-center px-2">
                <h1 class="text-xl font-semibold tracking-tight">{{ $payment_screen_title }}</h1>
            </div>
        </div>



        <button class="block pr-2 sm:hidden" 
            x-data="{usedKeyboard: false}" 
            @keydown.window.tab="usedKeyboard = true" 
            @click="$dispatch('open-menu', { open: true })" 
            :class="{'focus:outline-none': !usedKeyboard}">

            <div class="flex px-3 py-2 border rounded hover:text-white hover:border-white">
                <p class="h-5 pr-2 text-sm font-semibold text-white ">$5270.00</p>
                <svg class="w-5 h-5 text-white fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Cart</title>
                    <path d="M19.029 13h2.971l-.266 1h-2.992l.287-1zm.863-3h2.812l.296-1h-2.821l-.287 1zm-.576 2h4.387l.297-1h-4.396l-.288 1zm2.684-9l-.743 2h-1.929l-3.474 12h-11.239l-4.615-11h14.812l-.564 2h-11.24l2.938 7h8.428l3.432-12h4.194zm-14.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm5.9-7-.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z" />
                </svg>
            </div>

        </button>

        <!-- Locale modal START  -->
        <div class="hidden sm:inline-block">
            <div x-data="{ open_modal: false }">
                <button @click="open_modal = true" class="flex items-center px-3 py-2 rounded hover:text-white hover:border-white">

                    <svg class="inline-block w-5 h-6 text-gray-300 align-middle fill-current" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 00-1.38-3.56A8.03 8.03 0 0118.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 015.08 16zm2.95-8H5.08a7.987 7.987 0 014.33-3.56A15.65 15.65 0 008.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 01-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                        </path>
                    </svg>

                    <p class="inline-block h-6 px-2 text-gray-200">{{ $txt_locale }}</p>

                </button>


                <!-- Alpine - language modal START -->

                <div x-show="open_modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed inset-0 z-10 overflow-y-auto">


                    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                        <!--
                            Background overlay, show/hide based on modal state.

                            Entering: "ease-out duration-300"
                                From: "opacity-0"
                                To: "opacity-100"
                            Leaving: "ease-in duration-200"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <!--
                            Modal panel, show/hide based on modal state.

                            Entering: "ease-out duration-300"
                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                To: "opacity-100 translate-y-0 sm:scale-100"
                            Leaving: "ease-in duration-200"
                                From: "opacity-100 translate-y-0 sm:scale-100"
                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            -->
                        <div @click.away="open_modal = false" class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">

                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                                            {{ $txt_language }}
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                {{ $txt_language_sub_txt }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-around px-4 py-3 sm:flex-wrap bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">

                                <button @click="open_modal = false" wire:click="$emit('changeLang','dk')" type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-48 sm:text-sm">
                                    <div class="flex justify-center w-full">

                                        <div>
                                            <svg class="inline-block h-5 mx-2 align-middle rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-gb" viewBox="0 0 512 512">
                                                <path fill="#c8102e" d="M0 0h512.1v512H0z" />
                                                <path fill="#fff" d="M144 0h73.1v512H144z" />
                                                <path fill="#fff" d="M0 219.4h512.1v73.2H0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="inline-block h-full align-middle"> {{ $txt_danish }} </p>
                                        </div>

                                    </div>
                                </button>

                                <button @click="open_modal = false" wire:click="$emit('changeLang','en')" type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-48 sm:text-sm">
                                    <div class="flex justify-center w-full">

                                        <div>
                                            <svg class="inline-block h-5 mx-2 align-middle rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-gb" viewBox="0 0 512 512">
                                                <path fill="#012169" d="M0 0h512v512H0z" />
                                                <path fill="#FFF" d="M512 0v64L322 256l190 187v69h-67L254 324 68 512H0v-68l186-187L0 74V0h62l192 188L440 0z" />
                                                <path fill="#C8102E" d="M184 324l11 34L42 512H0v-3l184-185zm124-12l54 8 150 147v45L308 312zM512 0L320 196l-4-44L466 0h46zM0 1l193 189-59-8L0 49V1z" />
                                                <path fill="#FFF" d="M176 0v512h160V0H176zM0 176v160h512V176H0z" />
                                                <path fill="#C8102E" d="M0 208v96h512v-96H0zM208 0v512h96V0h-96z" />
                                            </svg>
                                        </div>

                                        <div>
                                            <p class="inline-block h-full align-middle">{{ $txt_english }}</p>
                                        </div>

                                    </div>
                                </button>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- language modal END -->

        </div>
        <!-- Locale modal END -->

    




    </nav>


    <!-- Hamburger slide out below here -->
    <section 
      x-data="slideout()" 
      x-cloak 
      @open-hamburger.window="open = $event.detail.open" 
      @keydown.window.tab="usedKeyboard = true" 
      @keydown.escape="open = false" x-init="init()">
      <div x-show.transition.opacity.duration.500="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-25"></div>
      <div class="fixed top-0 left-0 w-full h-screen max-w-sm overflow-y-scroll transition duration-500 bg-white transform-gpu" :class="{'-translate-x-full': !open}">
        
      <button @click="open = false" x-ref="closeButton" :class="{'focus:outline-none': !usedKeyboard}" class="absolute top-0 right-0 mt-3 mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
        <div class="h-full bg-gray-100">





          <!-- new slide out details -->

          <div class="mt-0 -mx-1 md:mt-0 md:col-span-2">

            <title class="flex w-full px-4 py-4 font-semibold text-white bg-gray-500 h-14"></title>


            <!-- Hamburger panel slideout -->


                    <!-- Locale modal START  -->
        <div class="p-4">
            <div x-data="{ open_modal: false }">
                <button @click="open_modal = true" class="flex items-center px-3 py-2 rounded hover:text-white hover:border-white">

                    <svg class="inline-block w-5 h-6 text-gray-500 align-middle fill-current" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 00-1.38-3.56A8.03 8.03 0 0118.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 015.08 16zm2.95-8H5.08a7.987 7.987 0 014.33-3.56A15.65 15.65 0 008.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 01-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                        </path>
                    </svg>

                    <p class="inline-block h-6 px-2 text-gray-700">{{ $txt_locale }}</p>

                </button>


                <!-- Alpine - language modal START -->

                <div x-show="open_modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="fixed inset-0 z-10 overflow-y-auto">


                    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                        <!--
                            Background overlay, show/hide based on modal state.

                            Entering: "ease-out duration-300"
                                From: "opacity-0"
                                To: "opacity-100"
                            Leaving: "ease-in duration-200"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <!--
                            Modal panel, show/hide based on modal state.

                            Entering: "ease-out duration-300"
                                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                To: "opacity-100 translate-y-0 sm:scale-100"
                            Leaving: "ease-in duration-200"
                                From: "opacity-100 translate-y-0 sm:scale-100"
                                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            -->
                        <div @click.away="open_modal = false" class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">

                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-headline">
                                            {{ $txt_language }}
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                {{ $txt_language_sub_txt }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-around px-4 py-3 sm:flex-wrap bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">

                                <button @click="open_modal = false" wire:click="$emit('changeLang','dk')" type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-48 sm:text-sm">
                                    <div class="flex justify-center w-full">

                                        <div>
                                            <svg class="inline-block h-5 mx-2 align-middle rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-gb" viewBox="0 0 512 512">
                                                <path fill="#c8102e" d="M0 0h512.1v512H0z" />
                                                <path fill="#fff" d="M144 0h73.1v512H144z" />
                                                <path fill="#fff" d="M0 219.4h512.1v73.2H0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="inline-block h-full align-middle"> {{ $txt_danish }} </p>
                                        </div>

                                    </div>
                                </button>

                                <button @click="open_modal = false" wire:click="$emit('changeLang','en')" type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-48 sm:text-sm">
                                    <div class="flex justify-center w-full">

                                        <div>
                                            <svg class="inline-block h-5 mx-2 align-middle rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-gb" viewBox="0 0 512 512">
                                                <path fill="#012169" d="M0 0h512v512H0z" />
                                                <path fill="#FFF" d="M512 0v64L322 256l190 187v69h-67L254 324 68 512H0v-68l186-187L0 74V0h62l192 188L440 0z" />
                                                <path fill="#C8102E" d="M184 324l11 34L42 512H0v-3l184-185zm124-12l54 8 150 147v45L308 312zM512 0L320 196l-4-44L466 0h46zM0 1l193 189-59-8L0 49V1z" />
                                                <path fill="#FFF" d="M176 0v512h160V0H176zM0 176v160h512V176H0z" />
                                                <path fill="#C8102E" d="M0 208v96h512v-96H0zM208 0v512h96V0h-96z" />
                                            </svg>
                                        </div>

                                        <div>
                                            <p class="inline-block h-full align-middle">{{ $txt_english }}</p>
                                        </div>

                                    </div>
                                </button>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- language modal END -->

        </div>
        <!-- Locale modal END -->


            <!-- Hamburger panel slideout END -->



          </div>

        </div>
      </div>
      
    </section>


</header>

