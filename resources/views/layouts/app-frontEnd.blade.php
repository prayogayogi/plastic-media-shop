<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', "Dashboard")</title>

    @include('includes.frontEnd.link')
</head>

<body>
    <!-- Header -->
    @include('includes.frontEnd.header')

    @yield('content')

    <!-- Script -->
    @include('includes.frontEnd.footer')

    <!-- Script -->
    @stack('before-script')
        @include('includes.frontEnd.script')
    @stack('after-script')
</body>

</html>
