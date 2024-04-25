<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">


        <title inertia>{{ config('app.name', 'Laravel') }}</title>


            <!-- Required meta tags -->

            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" href="assets/images/favicon.png" />
            @vite([
                'resources/assets/vendors/mdi/css/materialdesignicons.min.css',
                'resources/assets/vendors/css/vendor.bundle.base.css',
                'resources/assets/vendors/jvectormap/jquery-jvectormap.css',
                'resources/assets/vendors/flag-icon-css/css/flag-icon.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.carousel.min.css',
                'resources/assets/vendors/owl-carousel-2/owl.theme.default.min.css',
                'resources/assets/css/style.css',
                ])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia





        @vite([
                'resources/assets/vendors/js/vendor.bundle.base.js',
                'resources/assets/vendors/chart.js/Chart.min.js',
                'ssets/vendors/progressbar.js/progressbar.min.js',
                'resources/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js',
                'resources/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js',
                'resources/assets/vendors/owl-carousel-2/owl.carousel.min.js',
                'resources/assets/js/off-canvas.js',
                'resources/assets/js/hoverable-collapse.js',
                'resources/assets/js/misc.js',
                'resources/assets/js/settings.js',
                'resources/assets/js/todolist.js',
                'resources/assets/js/dashboard.js',
                ])
    </body>
</html>
