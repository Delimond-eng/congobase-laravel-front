<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <script>
        var setLanguageUrl = "{{ route('translate') }}";
    </script>

    <title>CongoBase ONG</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logos/favicon.ico">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-font-icons.css') }}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-line-icons.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/venobox/venobox.css') }}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css-animation.min.css') }}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nivo-slider.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        .language-select {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .language-select select {
            display: inline-block;
            padding: 5px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        .language-select option {
            background-repeat: no-repeat;
            background-size: 20px 20px;
            padding-left: 30px;
        }

        .language-select option[value="en"] {
            background-image: url('assets/images/flags/en.png');
        }

        .language-select option[value="fr"] {
            background-image: url('assets/images/flags/fr.png');
        }

        .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
            display: none !important;
        }
        body {
            top: 0 !important;
        }
    </style>

    @yield("styles")

    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body id="content">
    <div class="site-preloader-wrap">
        <div class="spinner-img">
            <img src="assets/img/logos/logo_2.png" height="50">
        </div>
    </div>

    {{-- Include header component --}}
    @include('components.header')


    {{-- End header component --}}
    @yield('content')

    {{-- Include footer component --}}
    @include('components.footer')



    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <!-- jQuery Lib -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Tether JS -->
    <script src="{{ asset('assets/js/vendor/tether.min.js') }}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <!-- OWL-Carousel JS -->
    <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
    <!-- isotope JS -->
    <script src="{{ asset('assets/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
    <!-- Smooth Scroll JS -->
    <script src="{{ asset('assets/js/vendor/smooth-scroll.min.js') }}"></script>
    <!-- venobox JS -->
    <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
    <!-- ajaxchimp JS -->
    <script src="{{ asset('assets/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/vendor/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
    <!-- Slick Nav JS -->
    <script src="{{ asset('assets/js/vendor/jquery.slicknav.min.js') }}"></script>
    <!-- Nivo Slider JS -->
    <script src="{{ asset('assets/js/vendor/jquery.nivo.slider.pack.js') }}"></script>
    <!-- Letter Animation JS -->
    <script src="{{ asset('assets/js/vendor/letteranimation.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield("scripts")

    {{--  <div id="google_translate_element"></div>
    <script src="{{ asset('assets/js/translate.js') }}"></script>  --}}
</body>
</html>
