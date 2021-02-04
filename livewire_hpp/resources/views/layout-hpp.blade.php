<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HPP</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ed601ea99b.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/myJs.js') }}" /></script>
    

    
    @livewireStyles
    
    
    
</head>

<body x-data="{ 'open_modal': false }" @keydown.escape="open_modal = false" x-cloak     
        class="h-full bg-gray-100">
    
    <div class="flex flex-col h-screen">



        @yield ('hpp-header-content')



        @yield ('content')



 




        

    </div>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

    @livewireScripts
    
</body>

</html>