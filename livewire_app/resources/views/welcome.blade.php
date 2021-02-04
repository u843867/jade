<html>
    <head>

        <title>Laravel</title>
      
        @livewireStyles
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"
    </head>

    <body>

        <p class="text-xl">I'm a paragraphsda</p>

        @livewire('hello-world', ['name' => 'Jkustin'])

        
        @livewireScripts

    </body>

</html>
