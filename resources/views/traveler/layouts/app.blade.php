<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('head')

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('traveler/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('traveler/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('traveler/css/style.css') }}" rel="stylesheet">
	@yield('style')
</head>
<body>
	@include('traveler/inc/nav')
    @yield('content')
	@include('traveler/inc/footer')
	<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
	<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('traveler/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('traveler/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('traveler/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('traveler/js/main.js') }}"></script>
	@yield('script')
</body>
</html>
