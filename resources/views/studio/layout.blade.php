<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VendeFácil Studio') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 font-sans text-slate-900 antialiased">
    <div class="min-h-screen lg:flex">

        @include('studio.sidebar')

        <div class="min-w-0 flex-1">
            @include('studio.header')

            <main class="px-5 py-7 sm:px-8 lg:px-10">
                @yield('content')
            </main>
        </div>

    </div>
</body>
</html>