<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->   
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}  <!--font size won't work-->
    @vite([ 'resources/js/app.js'])   <!--font size works-->
</head>
<body>
    <div id="app">  
        <main >
            @yield('content')
        </main>
    </div>
    
    <!--end footer-->
    <!--jQuery js-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="js/validator.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <!--main js-->
    <script src="js/custom.js"></script>
</body>
</html>
