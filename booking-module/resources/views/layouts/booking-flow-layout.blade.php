<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>IBE</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/myCss.css') }}" rel="stylesheet">



  <script src="https://kit.fontawesome.com/ed601ea99b.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/myJs.js') }}" /></script>
  

  @livewireStyles



  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  
</head>

<body>
  <!-- This example requires Tailwind CSS v2.0+ -->


  @yield ('ibe-body')

</body>

</html>