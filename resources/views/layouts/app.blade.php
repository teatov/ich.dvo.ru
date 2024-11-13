<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative flex min-h-screen flex-col gap-y-10 font-sans antialiased">
    <x-layout.header />
    <main class="max-w-screen-1.5xl container mx-auto grow px-4 lg:px-15">
        {{ $slot }}
    </main>
    <x-layout.footer />
</body>

</html>
