<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    @yield('title')
</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="https://cdn-icons-png.flaticon.com/512/25/25694.png"  rel="icon">
  <link href="https://cdn-icons-png.flaticon.com/512/25/25694.png" rel="apple-touch-icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
 

  <link href="{{asset('home/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

 
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->

   @include('home.search');
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  @include('home.navbar');
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->

  <!--/ Testimonials End /-->

  @yield('content')













  
  <!--/ footer Star /-->
 @include('home.footer');
    <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('home/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('home/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('home/lib/popper/popper.min.js') }}"></script>
  <script src="{{ asset('home/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('home/lib/scrollreveal/scrollreveal.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('home/js/main.js') }}"></script>

</body>
</html>
