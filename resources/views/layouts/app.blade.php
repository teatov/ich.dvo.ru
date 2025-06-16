@props(['container' => true])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
    <script type="module" defer>
        Alpine.start();
    </script>
</head>

<body class="relative flex min-h-screen flex-col gap-y-16 font-sans antialiased">
    <x-layout.header />
    <main @class(['grow', 'container' => $container])>
        {{ $slot }}
    </main>
    <x-layout.footer />
</body>

</html>
