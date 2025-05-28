@extends('layouts.footer')

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
    <body class="font-sans text-light bg-dark" data-bs-theme="dark">
        <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center pt-3 pt-sm-0">
            <div>
                <a href="/">

                </a>
            </div>

            <div class="w-100 bg-secondary-subtle text-light" style="max-width: 24rem; margin-top: 1.5rem; padding: 1.5rem; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15); border-radius: .5rem; overflow: hidden;" >
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
