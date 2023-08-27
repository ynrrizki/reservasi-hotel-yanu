<!DOCTYPE html>
<html lang="en" data-theme="winter">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        HOTEL HEBAT
    </title>
    @stack('addon-css')
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Content -->
    <section class="py-16">
        @yield('content')
    </section>


</body>

</html>
