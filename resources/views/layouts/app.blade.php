<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="wpOceans" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('barise/assets/images/favicon.png') }}" />
    <title>@yield('title', 'Hallo Bus Luxury')</title>
    <link href="{{ asset('barise/assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/owl.theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/slick-theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/swiper.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/owl.transitions.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/jquery.fancybox.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/css/odometer-theme-default.css') }}" rel="stylesheet" />
    <link href="{{ asset('barise/assets/sass/style.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>

    @include('layouts.header')

    <!-- start wpo-page-title -->
    <section class="wpo-page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>@yield('Title-Head')</h2>
                        <ol class="Breadcrumb">
                            <li><a href="{{ '/' }}">Beranda</a></li>
                            <li>@yield('Title-Sub')</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page-title -->
    @yield('content')

    @include('layouts.footer')


    <!-- All JavaScript files -->
    <script src="{{ asset('barise/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('barise/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('barise/assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('barise/assets/js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('barise/assets/js/jquery-plugin-collection.js') }}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('barise/assets/js/script.js') }}"></script>
</body>

</html>
