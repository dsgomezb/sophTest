<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soph</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
    <body class="antialiased">
        <div class="w-full flex items-center justify-between block p-6 space-x-6">
            <h1 class="text-xl text-blue-500">SOPH</h1>
        </div>
    </body>
    <script>
        var base_url = "{{ url('/') }}";
    </script>
</html>
