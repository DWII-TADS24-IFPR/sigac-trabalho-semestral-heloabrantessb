<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<body data-bs-theme="dark">

    <footer class="d-flex flex-column align-items-center">
        <p>
            SIGAC - Sistema de Gerenciamento de Atividades Complementares &copy; {{ date('Y') }}
        </p>
        <p>All rights reserved.</p>
    </footer>
</body>
 
</html>
