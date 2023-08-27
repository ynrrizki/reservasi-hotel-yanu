<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dash/assets/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Login</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/fonts/boxicons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('dash/assets/css/demo.css') }}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/pages/page-auth.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('dash/assets/vendor/js/helpers.js') }}"></script>
    <style type="{{ asset('dash/text/css') }}">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }
    </style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('dash/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dash/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dash/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('dash/assets/js/main.js') }}"></script>

    <!-- Page JS -->


</body>

</html>
