<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stripe - REST API</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/myJs.js') }}"/></script>

    @livewireStyles

</head>

<body class="bg-gray-200">
    <div class="flex flex-col h-screen">
    
        <header>
            <nav class="flex flex-wrap items-center justify-between p-6 bg-gray-500">
                <div class="flex items-center flex-shrink-0 mr-6 text-white">
                    <svg class="w-8 h-8 mr-2 fill-current" width="54" height="54" viewBox="0 0 54 54"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                        </svg>
                    <span class="text-xl font-semibold tracking-tight">Stripe - API Viewer</span>
                </div>
                <div class="block lg:hidden">
                    <button
                        class="flex items-center px-3 py-2 bg-gray-500 border rounded hover:text-white hover:border-white">
                        <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>

            </nav>
        </header>
        


        @yield ('content')


        <div class="block h-5 "></div>

        <footer class="fixed bottom-0 flex flex-wrap items-center w-full p-6 mt-10 bg-gray-500">
            <p class="p-3"></p>
        </footer>

    </div>

    @livewireScripts
</body>

</html>