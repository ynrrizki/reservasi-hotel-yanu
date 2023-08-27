<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="luxury">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        HOTEL HEBAT
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @stack('addon-css')
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Navbar -->
    @include('partials.main.navbar')

    <!-- Header -->
    @include('partials.main.header')

    <!-- Content -->
    <section class="py-16">
        @yield('content')
    </section>

    <!-- Footer -->
    @include('partials.main.footer')


    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @stack('addon-js')
</body>

</html>
