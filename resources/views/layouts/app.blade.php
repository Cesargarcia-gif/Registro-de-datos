<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <!-- Tus estilos -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Mensajes parciales -->
    @include('layouts._partials.message')

    <!-- Contenido de cada página -->
    @yield('content')

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
