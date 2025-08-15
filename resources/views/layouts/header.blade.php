<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{ asset('barise/assets/images/preloader.png') }}" alt="" />
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="header-style-1 header-style-s3">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-lg-9 col-12">
                        <div class="contact-intro">
                            <ul>
                                <li><span>Call Us:</span>(62) 812-9015-3576</li>
                                <!-- <li><span>Email Us:</span> putratidartrans@gmail.com</li> -->
                                <li>
                                    <span>Address:</span> Jl. Akses Tol Cimanggis - Cikeas No.
                                    73, Leuwinanggung, Tapos, Depok
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-12">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <a href="#"><i class="ti-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end topbar -->
        <div class="wpo-site-header">
            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="{{ '/' }}"><img
                                        src="{{ asset('barise/assets/images/bus/logo/logo.png') }}"
                                        alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li class="menu-item-has-children">
                                        <a class="active" href="{{ '/' }}">Beranda</a>
                                    </li>
                                    <li><a href="{{ '/tentangkami' }}">Tentang Kami</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Armada Kami</a>
                                        <ul class="sub-menu">
                                            <li class="{{ request()->routeIs('bus.standar') ? 'active' : '' }}">
                                                <a href="{{ route('bus.standar') }}">Bus Standar</a>
                                            </li>
                                            <li class="{{ request()->routeIs('bus.luxury') ? 'active' : '' }}">
                                                <a href="{{ route('bus.luxury') }}">Bus Luxury</a>
                                            </li>
                                            <li class="{{ request()->routeIs('bus.vip') ? 'active' : '' }}">
                                                <a href="{{ route('bus.vip') }}">Bus VIP</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ '/mitra/partner' }}">Partner</a></li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Kebijakan</a>
                                        <ul class="sub-menu">
                                            <li> <a href="{{ '/kebijakan/kebijakan-sewa' }}">Kebijakan Privasi</a></li>
                                            <li><a href="{{ '/kebijakan/perizinan-sewa' }}">Perizinan Sewa</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- end of nav-collapse -->
                        </div>
                        <div class="col-lg-3 col-md-2 col-2">
                            <div class="header-right">
                                <div class="header-search-form-wrapper">
                                    <div class="cart-search-contact">
                                        <button class="search-toggle-btn">
                                            <i class="fi flaticon-loupe"></i>
                                        </button>
                                        <div class="header-search-form">
                                            <form>
                                                <div>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search here..." />
                                                    <button type="submit">
                                                        <i class="fi flaticon-loupe"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="close-form">
                                    <a class="header-theme-btn" href="{{ '/kontak' }}">HUBUNGI KAMI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of container -->
            </nav>
        </div>
    </header>
    <!-- end of header -->
