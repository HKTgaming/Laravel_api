<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blogs Api Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="css/ticker-style.css">
            <link rel="stylesheet" href="css/flaticon.css">
            <link rel="stylesheet" href="css/slicknav.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/fontawesome-all.min.css">
            <link rel="stylesheet" href="css/themify-icons.css">
            <link rel="stylesheet" href="css/slick.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <!-- header -->
    @include('page.header')
    <!-- end header -->
    
    <!-- home -->
    @yield('content')
    <!-- end home -->
    
    <!-- fooder -->
    @include('page.fooder')
    <!-- end fooder -->

   <!-- JS here -->
	
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./js/wow.min.js"></script>
    <script src="./js/animated.headline.js"></script>
    <script src="./js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./js/jquery.ticker.js"></script>
    <script src="./js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./js/jquery.scrollUp.min.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./js/contact.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/mail-script.js"></script>
    <script src="./js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./js/plugins.js"></script>
    <script src="./js/main.js"></script>
        
    </body>
</html>
