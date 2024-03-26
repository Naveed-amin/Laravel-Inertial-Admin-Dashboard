<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    @vite('resources/assets/images/favicon-32x32.png')
    <!--plugins-->
    @vite('resources/assets/plugins/simplebar/css/simplebar.css')
    @vite('resources/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')
    @vite('resources/assets/plugins/highcharts/css/highcharts.css')
    @vite('resources/assets/plugins/metismenu/css/metisMenu.min.css')
    @vite('resources/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')
    <!-- loader-->
    @vite('resources/assets/css/pace.min.css')
    @vite('resources/assets/js/pace.min.js')
    <!-- Bootstrap CSS -->
    @vite('resources/assets/css/bootstrap.min.css')
    @vite('resources/assets/css/bootstrap-extended.css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    @vite('resources/assets/css/app.css')
    @vite('resources/assets/css/icons.css')
    <!-- Theme Style CSS -->
    @vite('resources/assets/css/dark-theme.css')
    @vite('resources/assets/css/semi-dark.css')
    @vite('resources/assets/css/header-colors.css')
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
</head>

<body>
    @inertia
    <!--end switcher-->
    <!-- Bootstrap JS -->
    @vite('resources/assets/js/bootstrap.bundle.min.js')
    <!--plugins-->
    @vite('resources/assets/js/jquery.min.js')
    @vite('resources/assets/plugins/simplebar/js/simplebar.min.js')
    @vite('resources/assets/plugins/metismenu/js/metisMenu.min.js')
    @vite('resources/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')
    @vite('resources/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')
    @vite('resources/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')
    @vite('resources/assets/plugins/highcharts/js/highcharts.js')
    @vite('resources/assets/plugins/highcharts/js/exporting.js')
    @vite('resources/assets/plugins/highcharts/js/variable-pie.js')
    @vite('resources/assets/plugins/highcharts/js/export-data.js')
    @vite('resources/assets/plugins/highcharts/js/accessibility.js')
    @vite('resources/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')
    @vite('resources/assets/js/index.js')
    <!--app JS-->
    @vite('resources/assets/js/app.js')

</body>
<script>
    new PerfectScrollbar('.dashboard-top-countries');
</script>

</html>
