
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
        <link href="{{asset('assets')}}/css/user/style.css" rel="stylesheet">
        <link href="{{asset('assets')}}/css/user/tiny-slider.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/css/user/bootstrap.min.css" rel="stylesheet">

		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		@include('layouts.header')
		<!-- End Header/Navigation -->

		@yield('app-content')	

		<!-- Start Footer Section -->
		@include('layouts.footer')
		<!-- End Footer Section -->	


		<script src="{{asset('assets')}}js/user/bootstrap.bundle.min.js"></script>
		<script src="{{asset('assets')}}js/user/tiny-slider.js"></script>
		<script src="{{asset('assets')}}js/user/custom.js"></script>
	</body>

</html>
