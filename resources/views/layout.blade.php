<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    @livewireStyles
 
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    @livewire('navigation-dropdown')
 
   @yield('content')
 
   <footer>&copy; 2020 by Me</footer>
@livewireScripts
</body>
</html>