<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="{{ asset("assets-backEnd/css/sleek.css") }}" />
        <!-- FAVICON -->
        <link href="{{ asset("assets-backEnd/img/favicon.png") }}" rel="shortcut icon" />
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script> --}}
    </head>
    <body>
        {{-- <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div> --}}

        <div class="container d-flex align-items-center justify-content-center vh-100">
            @yield('content')
        </div>

        <!-- Javascript -->
    <script src="{{ asset("assets-backEnd/plugins/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets-backEnd/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets-backEnd/js/sleek.js") }}"></script>
    <link href="{{ asset("assets-backEnd/options/optionswitch.css") }}" rel="stylesheet">
    <script src="{{ asset("assets-backEnd/options/optionswitcher.js") }}"></script>
    </body>
</html>
