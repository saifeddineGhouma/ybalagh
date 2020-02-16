<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>يبلغ </title>
    <!-- Meta Description Tag -->
    <meta name="Description" content="">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('front/')}}images/favicon.png" />
    <!-- Material Design Lite Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/material/material.min.css')}}" />
    <!-- Material Design Select Field Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/material/mdl-selectfield.min.css')}}">
    <!-- Animteheading Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/animateheading/animateheading.min.css')}}" />
    <!-- Owl Carousel Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/owl_carousel/owl.carousel.min.css')}}" />
    <!-- Animate Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/animate/animate.min.css')}}" />
    <!-- Magnific Popup Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/magnific_popup/magnific-popup.min.css')}}" />
    <!-- Flex Slider Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugin/flexslider/flexslider.min.css')}}" />
    <!-- Custom Main Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('front/dist/css/style.css')}}">
</head>
<body>


 <div class="wrapper">

@include('front/include/nav')
@yield('content')
@include('front/include/footer')
 </div>


 <script src="{{asset('front/assets/plugin/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- Popper JavaScript-->
    <script src="{{asset('front/assets/plugin/popper/popper.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{asset('front/assets/plugin/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="{{asset('front/assets/plugin/modernizr/modernizr.js')}}"></script>
    <!-- Animaateheading JavaScript-->
    <script src="{{asset('front/assets/plugin/animateheading/animateheading.js')}}"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="{{asset('front/')}}assets/plugin/material/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="{{asset('front/assets/plugin/material/mdl-selectfield.min.js')}}"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/flexslider/jquery.flexslider.min.js')}}"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/owl_carousel/owl.carousel.min.js')}}"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js')}}"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/magnific_popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/waypoints/jquery.waypoints.min.js')}}"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/counterup/jquery.counterup.js')}}"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/masonry_pkgd/masonry.pkgd.min.js')}}"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/smoothscroll/smoothscroll.min.js')}}"></script>
    <!-- Style Switcher Plugin JavaScript-->
    <script src="{{asset('front/assets/plugin/styleswitcher/jQuery.style.switcher.min.js')}}"></script>
    <!--Custom JavaScript-->
    <script src="{{asset('front/dist/js/custom.js')}}"></script>

</body>
</html>
