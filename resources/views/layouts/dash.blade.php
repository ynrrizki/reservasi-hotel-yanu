<!DOCTYPE html>

<html lang="en" class="dark-style layout-menu-fixed" dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="{{ asset('dash/assets/') }}" data-template="vertical-menu-theme-default-dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard | HOTEL HEBAT</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dash/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/core-dark.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/css/theme-semi-dark.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('dash/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />



    <!-- Page CSS -->
    @stack('addon-css')

    <!-- Helpers -->
    <script src="{{ asset('dash/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('dash/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @if (Auth::user()->role == 'ADMIN')
                @include('partials.dash.sidebar')
            @endif
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page" @yield('layout-style')>
                <!-- Navbar -->

                @include('partials.dash.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank"
                                    class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                            <div>
                                <a href="https://themeselection.com/license/" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                    Themes</a>

                                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank" class="footer-link me-4">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('dash/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dash/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('dash/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dash/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    {{-- <script src="{{ asset('dash/assets/js/dashboards-analytics.js') }}"></script> --}}
    @stack('addon-js')


</body>

</html>
