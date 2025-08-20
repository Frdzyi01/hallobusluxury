<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="wpOceans" />

    <!-- Meta SEO -->
    <meta name="description"
        content="Hallo Bus Luxury - Penyedia jasa sewa bus mewah terbaik di Jakarta, Bogor, Bekasi & Jabodetabek. Layanan sewa bus luxury dengan armada terbaru dan pelayanan profesional." />
    <meta name="keywords"
        content="hallobusluxury, sewa bus jakarta, sewa bus bogor, sewa bus bekasi, sewa bus mewah, sewa bus VIP,sewa bus Luxury, sewa bus standar, bus vip,bus standar, bus luxury, sewa bus jabodetabek, sewa bus luxury, sewa bus, bus mewah, travel sewa bus, travel bus, sewa bus pariwisata, rental bus jakarta, sewa bus bandung, sewa bus tangerang, sewa bus depok, sewa bus executive, sewa bus murah, sewa bus harian, sewa bus ac, sewa bus besar, sewa bus medium, sewa bus untuk karyawan, sewa bus untuk wisata, sewa bus untuk wedding, sewa bus untuk airport, sewa bus untuk ziarah, sewa bus untuk company outing, sewa bus untuk seminar, bus luxury jakarta, bus pariwisata jabodetabek" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="language" content="Indonesian" />
    <meta name="distribution" content="global" />
    <meta name="rating" content="general" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Hallo Bus Luxury - Sewa Bus Mewah Jakarta & Jabodetabek" />
    <meta property="og:description"
        content="Penyedia jasa sewa bus mewah terbaik di Jakarta, Bogor, Bekasi & seluruh Jabodetabek. Armada luxury terbaru dengan fasilitas lengkap." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.hallobusluxury.com" />
    <meta property="og:image" content="{{ asset('barise/assets/images/bus/logo/logo_black_to_white.png') }}" />
    <meta property="og:site_name" content="Hallo Bus Luxury" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Hallo Bus Luxury - Sewa Bus Mewah Jakarta & Jabodetabek" />
    <meta name="twitter:description"
        content="Penyedia jasa sewa bus mewah terbaik di Jakarta, Bogor, Bekasi & seluruh Jabodetabek." />
    <meta name="twitter:image" content="{{ asset('barise/assets/images/bus/logo/logo_black_to_white.png') }}" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.hallobusluxury.com" />
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('barise/assets/images/bus/logo/logo_black_to_white.png') }}" />

    <link rel="shortcut icon" type="image/png"
        href="{{ asset('barise/assets/images/bus/logo/logo_black_to_white.png') }}" />

    <title>@yield('title', 'Hallo Bus Luxury - Sewa Bus Mewah Terbaik di Jabodetabek')</title>
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

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6281111830302" target="_blank" class="wa-float">
        <i class="fab fa-whatsapp"></i>
    </a>



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
