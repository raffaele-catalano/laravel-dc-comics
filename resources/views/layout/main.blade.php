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

    {{-- FontAwesome --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    @include('partials.header')

    <main class="text-light">
        <div class="main-wrapper d-flex flex-column align-items-center w-75">
            @yield('content')
        </div>
    </main>

</body>

</html>
