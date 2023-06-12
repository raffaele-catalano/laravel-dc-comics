<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC-Comics</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="/dc_favicon.ico" type="ico">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    @include('partials.header')

    <main class="text-light">
        <div class="main-wrapper d-flex flex-column align-items-center">
            @yield('content')
        </div>
    </main>

</body>

</html>
