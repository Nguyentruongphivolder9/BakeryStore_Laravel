<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <!-- Favicon -->
    <link href="{{ asset('assets') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets') }}/js/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/js/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets') }}/css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets') }}/css/css/style.css" rel="stylesheet">

    <title>Bakery Store </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('layouts.header')
    <!-- End Header/Navigation -->

    @yield('app-content')

    <!-- Start Footer Section -->
    @include('layouts.footer')
    <!-- End Footer Section -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/wow/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/easing/easing.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('assets') }}/js/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets') }}/js/js/main.js"></script>
</body>

</html>
