<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="software ala medida para tu negocio.">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:velisol" content="" /> <!-- website name -->
	<meta property="og:https://www.velisol.com" content="" /> <!-- website link -->
	<meta property="og:Velisol" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:Software a la medida para tu negocio." content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Velisol - software a la medida</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <link href="{{ asset("css/fontawesome-all.css") }}" rel="stylesheet">
    <link href="{{ asset("css/swiper.css") }}" rel="stylesheet">
    <link href="{{ asset("css/magnific-popup.css") }}" rel="stylesheet">
    <link href="{{ asset("css/styles.css") }}" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.ico">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    	
    <!-- Scripts -->
    <script src="{{ asset("js/jquery.min.js") }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset("js/popper.min.js") }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset("js/app.js") }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset("js/jquery.easing.min.js") }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset("js/swiper.min.js") }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset("js/jquery.magnific-popup.js") }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset("js/validator.min.js") }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset("js/scripts.js") }}"></script> <!-- Custom scripts -->
</body>
</html>