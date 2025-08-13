<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="wpOceans" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="{{ asset('barise/assets/images/favicon.png') }}"
    />
    <title>Hallo Bus Luxury</title>
    <link
      href="{{ asset('barise/assets/css/themify-icons.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/flaticon.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/animate.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/owl.carousel.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/owl.theme.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('barise/assets/css/slick.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('barise/assets/css/slick-theme.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/swiper.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/owl.transitions.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/jquery.fancybox.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('barise/assets/css/odometer-theme-default.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('barise/assets/sass/style.css') }}" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>

  <body>
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
            <img src="barise/assets/images/preloader.png" alt="" />
          </div>
        </div>
      </div>
      <!-- end preloader -->
      <!-- Start header -->
      <header id="header" class="header-style-s2">
        <div class="topbar">
          <div class="container">
            <div class="row align-items-center">
              <div class="col col-lg-9 col-12">
                <div class="contact-intro">
                  <ul>
                    <li>
                      <img
                        src="barise/assets/images/phone-call.png"
                        alt=""
                      />(62) 812-1911-0199
                    </li>
                    <!-- <li>
                      <img
                        src="barise/assets/images/email.png"
                        alt=""
                      />putratidartrans@gmail.com
                    </li> -->
                    <li>
                      <img src="barise/assets/images/location.png" alt="" />Jl.
                      Akses Tol Cimanggis - Cikeas No. 73, Leuwinanggung, Tapos,
                      Depok
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
            <div class="container">
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
                <div class="col-lg-2 col-md-5 col-5">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="{{('/')}}"
                      ><img
                        src="{{asset('barise/assets/images/bus/logo/logo_black_to_white.png')}}"
                        alt="logo"
                    /></a>
                  </div>
                </div>
                <div class="col-lg-7 col-md-1 col-1">
                  <div
                    id="navbar"
                    class="collapse navbar-collapse navigation-holder"
                  >
                    <button class="menu-close"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                      <li class="menu-item-has-children">
                        <a class="active" href="{{('/')}}">Beranda</a>
                      </li>
                      <li><a href="about.html">Tentang Kami</a></li>
                      {{--
                      <li class="menu-item-has-children">
                        <a href="#">Mitra Kami</a>
                        <ul class="sub-menu">
                          <li><a href="#">Partnership</a></li>
                        </ul>
                      </li>
                      --}}
                      <li class="menu-item-has-children">
                        <a href="#">Armada Kami</a>
                        <ul class="sub-menu">
                          <li
                            class="{{ request()->routeIs('bus.standar') ? 'active' : '' }}"
                          >
                            <a href="{{ route('bus.standar') }}">Bus Standar</a>
                          </li>
                          <li
                            class="{{ request()->routeIs('bus.luxury') ? 'active' : '' }}"
                          >
                            <a href="{{ route('bus.luxury') }}">Bus Luxury</a>
                          </li>
                          <li
                            class="{{ request()->routeIs('bus.vip') ? 'active' : '' }}"
                          >
                            <a href="{{ route('bus.vip') }}">Bus VIP</a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item-has-children">
                        <a href="#">Kebijakan</a>
                        <ul class="sub-menu">
                          <li><a href="#">Kebijakan Privasi</a></li>
                          <li><a href="#">Perizinan Sewa</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Kontak</a></li>
                    </ul>
                  </div>
                  <!-- end of nav-collapse -->
                </div>
                <div class="col-lg-3 col-md-3 col-3">
                  <div class="header-right">
                    <div class="close-form">
                      <a class="theme-btn" href="#">HUBUNGI KAMI</a>
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

      <!-- start of hero -->
      <section class="wpo-hero-slider-s2">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="slide-inner slide-bg-image"
                data-background="{{ asset('barise/assets/images/home-bus/1.png') }}"
              >
                <!-- <div class="gradient-overlay"></div> -->
                <div class="container-fluid">
                  <div class="slide-content">
                    <div data-swiper-parallax="300" class="slide-title">
                      <h2
                        style="font-size: 30px !important; margin-bottom: -10px"
                      >
                        PT. CAHAYA PUTRA TIDAR
                      </h2>
                      <h2>
                        Bus Mewah
                        <br />
                        <span>Kelas Premium </span> <br />
                        Armada Luxury
                      </h2>
                    </div>
                    <div class="clearfix"></div>
                    <div
                      data-swiper-parallax="500"
                      class="slide-btns"
                      style="display: flex; justify-content: center; gap: 15px"
                    >
                      <a href="#" class="theme-btn" style="margin-right: 7px"
                        >Cek Kendaraan</a
                      >
                      <a href="#" class="theme-btn" style="margin-left: 7px"
                        >Pesan Sekarang</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div
                class="slide-inner slide-bg-image"
                data-background="{{ asset('barise/assets/images/home-bus/2.png') }}"
              >
                <!-- <div class="gradient-overlay"></div> -->
                <div class="container-fluid">
                  <div class="slide-content">
                    <div data-swiper-parallax="300" class="slide-title">
                      <h2
                        style="font-size: 30px !important; margin-bottom: -10px"
                      >
                        PT. CAHAYA PUTRA TIDAR
                      </h2>
                      <h2>
                        Pilihan Tepat <br />
                        <span>Mewah, Nyaman</span> <br />
                        Berkesan Luxury
                      </h2>
                    </div>
                    <div class="clearfix"></div>
                    <div
                      data-swiper-parallax="500"
                      class="slide-btns"
                      style="display: flex; justify-content: center; gap: 15px"
                    >
                      <a href="#" class="theme-btn" style="margin-right: 7px"
                        >Cek Kendaraan</a
                      >
                      <a href="#" class="theme-btn" style="margin-left: 7px"
                        >Pesan Sekarang</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div
                class="slide-inner slide-bg-image"
                data-background="{{ asset('barise/assets/images/home-bus/3.png') }}"
              >
                <!-- <div class="gradient-overlay"></div> -->
                <div class="container-fluid">
                  <div class="slide-content">
                    <div data-swiper-parallax="300" class="slide-title">
                      <h2
                        style="font-size: 30px !important; margin-bottom: -10px"
                      >
                        PT. CAHAYA PUTRA TIDAR
                      </h2>
                      <h2>
                        Nikmati<br />
                        <span>Mewah Keren</span><br />
                        Tanpa Kompromi
                      </h2>
                    </div>
                    <div class="clearfix"></div>
                    <div
                      data-swiper-parallax="500"
                      class="slide-btns"
                      style="display: flex; justify-content: center; gap: 15px"
                    >
                      <a href="#" class="theme-btn" style="margin-right: 7px"
                        >Cek Kendaraan</a
                      >
                      <a href="#" class="theme-btn" style="margin-left: 7px"
                        >Pesan Sekarang</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
          </div>
          <!-- end swiper-wrapper -->

          <!-- swipper controls -->
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </section>
      <!-- end of hero slider -->

      <!-- start of barise-about-section-s2 -->
      <section class="barise-about-section-s2">
        <div class="container">
          <div class="about-wrap">
            <div class="fun-fact-card">
              <div class="info">
                <h3>
                  <span class="odometer" data-count="67">00</span>
                  <i class="ti-plus"></i>
                </h3>
              </div>
              <div class="text">
                <h2>Tahun Pengalaman</h2>
                <p>Melayani dengan profesionalisme dan keahlian.</p>
              </div>
            </div>
            <div class="about-card">
              <div class="wpo-section-title-s2">
                <span>TENTANG KAMI</span>
                <h2>Mewujudkan Perjalanan Mewah Impian Anda</h2>
              </div>
              <p>
                HalloBusLuxury berkomitmen memberikan pengalaman perjalanan
                terbaik dengan armada bus mewah berkualitas tinggi. Dari
                perjalanan bisnis hingga wisata eksklusif, kami siap melayani
                Anda.
                <a href="{{ route('tentangkami') }}">Selengkapnya</a>
              </p>
            </div>
            <div class="about-video">
              <div class="video-holder">
                <a
                  href="https://www.youtube.com/embed/7Jv48RQ_2gk"
                  class="video-btn"
                  data-type="iframe"
                  tabindex="0"
                  ><i class="ti-control-plays"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-about-section-s2 -->

      <!-- start of barise-property-section-s2 -->
      <section class="barise-property-section-s2 section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
              <div class="wpo-section-title-s2">
                <span>ARMADA KAMI</span>
                <h2>Temukan Bus Mewah Sesuai Kebutuhan Anda</h2>
              </div>
            </div>
          </div>
          <div class="property-wrap">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="property-item">
                  <div class="images">
                    <img
                      src="{{ asset('barise/assets/images/bus-medium-30seact/busmedium30seat.jpg') }}"
                      alt="Bus Standar"
                      style="height: 450px; object-fit: cover"
                    />
                  </div>
                  <div class="text">
                    <span>BUS Standar</span>

                    <ul>
                      <li>- AC</li>
                      <li>- Audio System</li>
                      <li>- Comfortable Seats</li>
                      <li>- Bagasi Luas</li>
                    </ul>
                    <a href="#" class="theme-btn">
                      <i class="ti-eye" style="margin-right: 13px"></i>
                      LIHAT DETAIL
                    </a>
                    <a href="https://wa.me/6281219110199" class="theme-btn">
                      <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                      BOOKING NOW
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="property-item">
                  <div class="images">
                    <img
                      src="{{ asset('barise/assets/images/bigbus45seat/bhaladikatampakdepan.jpg') }}"
                      alt="Bus Luxury"
                      style="height: 450px; object-fit: cover"
                    />
                  </div>
                  <div class="text">
                    <span>BUS Luxury</span>

                    <ul>
                      <li>- Kapasitas 30 Seat</li>
                      <li>- WiFi + TV LED</li>
                      <li>- Interior Premium</li>
                      <li>- Toilet Pribadi</li>
                    </ul>
                    <a href="#" class="theme-btn">
                      <i class="ti-eye" style="margin-right: 13px"></i>
                      LIHAT DETAIL
                    </a>
                    <a href="https://wa.me/6281219110199" class="theme-btn">
                      <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                      BOOKING NOW
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="property-item">
                  <div class="images">
                    <img
                      src="{{ asset('barise/assets/images/BigbusVIP28-30Seat/home.jpeg') }}"
                      alt="Bus VIP"
                      style="height: 450px; object-fit: cover"
                    />
                  </div>
                  <div class="text">
                    <span>BUS VIP</span>

                    <ul>
                      <li>- Kapasitas 20 Seat</li>
                      <li>- Seat Reclining</li>
                      <li>- Privasi Maksimal</li>
                      <li>- Mini Bar</li>
                    </ul>
                    <a href="#" class="theme-btn">
                      <i class="ti-eye" style="margin-right: 13px"></i>
                      LIHAT DETAIL
                    </a>
                    <a href="https://wa.me/6281219110199" class="theme-btn">
                      <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                      BOOKING NOW
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-property-section-s2 -->

      <!-- start of barise-choose-section -->
      <section class="barise-choose-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-12">
              <div class="wpo-section-title-s2">
                <span>KEUNGGULAN KAMI</span>
                <h2>Partner Terbaik untuk Perjalanan Mewah</h2>
                <p>
                  Tim profesional kami siap memberikan pelayanan terbaik untuk
                  memastikan perjalanan Anda nyaman dan berkesan.
                </p>
              </div>
              <div class="left-content">
                <div class="progress-item">
                  <p>Kepuasan Pelanggan</p>
                  <div class="progres-label">
                    <div class="label-two">
                      <span>95%</span>
                    </div>
                  </div>
                  <div class="progress">
                    <div
                      class="bar wow fadeInLeft"
                      style="
                        width: 90%;
                        visibility: visible;
                        animation-name: fadeInLeft;
                      "
                    >
                      <span></span>
                    </div>
                  </div>
                </div>
                <a href="#" class="theme-btn">HUBUNGI KAMI</a>
              </div>
            </div>
            <div class="col-lg-7 col-12">
              <div class="right-content">
                <div class="cord-single on-cord">
                  <div class="content">
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/choose-1.svg') }}"
                        alt=""
                      />
                    </div>
                    <h2>Pelayanan Profesional</h2>
                  </div>
                  <p>
                    Didukung oleh tim berpengalaman yang siap memberikan solusi
                    terbaik untuk kebutuhan transportasi Anda.
                  </p>
                </div>
                <div class="cord-single">
                  <div class="content">
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/choose-2.svg') }}"
                        alt=""
                      />
                    </div>
                    <h2>Fasilitas Lengkap</h2>
                  </div>
                  <p>
                    Armada kami dilengkapi berbagai fasilitas premium untuk
                    kenyamanan perjalanan Anda.
                  </p>
                </div>
                <div class="shape">
                  <svg
                    width="266"
                    height="291"
                    viewBox="0 0 266 291"
                    fill="none"
                  >
                    <path
                      d="M265.563 0.199255L220.943 290.769L0.63271 127.611L265.563 0.199255Z"
                      fill="#A07F56"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-choose-section -->

      <!-- start of barise-property-section -->
      <section class="barise-property-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-12">
              <div class="wpo-section-title">
                <h2>Temukan Armada Mewah Kami</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid carousel-left">
          <div class="choose-slider owl-carousel">
            <div class="card-single">
              <div class="image">
                <img
                  src="{{ asset('barise/assets/images/bus-medium-30seact/busmedium30seat.jpg') }}"
                  style="width: 530px; height: 590px; object-fit: cover"
                  alt="Bus Standar"
                />
                <ul>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/1.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">40 Seat</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/2.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">2 Toilet</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/3.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">AC Dingin</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/4.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">12m Panjang</div>
                  </li>
                </ul>
              </div>
              <div class="text">
                <h2><a href="#">Bus Standar</a></h2>
                <span>Mulai Rp 2.500.000/hari</span>
              </div>
            </div>

            <!-- Card 2 - Bus Luxury -->
            <div class="card-single">
              <div class="image">
                <img
                  src="{{ asset('barise/assets/images/bigbus45seat/bhaladikatampakdepan.jpg') }}"
                  style="width: 530px; height: 590px; object-fit: cover"
                  alt="Bus Luxury"
                />
                <ul>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/1.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">30 Seat</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/2.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">1 Toilet</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/3.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">WiFi</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/4.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">TV LED</div>
                  </li>
                </ul>
              </div>
              <div class="text">
                <h2><a href="#">Bus Luxury</a></h2>
                <span>Mulai Rp 4.000.000/hari</span>
              </div>
            </div>

            <!-- Card 3 - Bus VIP -->
            <div class="card-single">
              <div class="image">
                <img
                  src="{{ asset('barise/assets/images/BigbusVIP28-30Seat/home.jpeg') }}"
                  alt="Bus VIP"
                  style="width: 530px; height: 590px; object-fit: cover"
                />
                <ul>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/1.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">20 Seat</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/2.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">1 Toilet</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/3.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">Seat Reclining</div>
                  </li>
                  <li>
                    <div class="icon">
                      <img
                        src="{{ asset('barise/assets/images/property/4.svg') }}"
                        alt=""
                      />
                    </div>
                    <div class="text-dos">Mini Bar</div>
                  </li>
                </ul>
              </div>
              <div class="text">
                <h2><a href="#">Bus VIP</a></h2>
                <span>Mulai Rp 6.000.000/hari</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-property-section -->

      <!-- start of barise-fun-fact-section -->
      <section class="barise-fun-fact-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="grid">
                <div class="info">
                  <h3>
                    <span class="odometer" data-count="500">00</span>
                    <i class="ti-plus"></i>
                  </h3>
                  <p>Perjalanan Terselesaikan</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="grid">
                <div class="info">
                  <h3>
                    <span class="odometer" data-count="300">00</span>
                    <i class="ti-plus"></i>
                  </h3>
                  <p>Pelanggan Puas</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="grid">
                <div class="info">
                  <h3>
                    <span class="odometer" data-count="15">00</span>
                    <i class="ti-plus"></i>
                  </h3>
                  <p>Armada Tersedia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="grid">
                <div class="info">
                  <h3>
                    <span class="odometer" data-count="10">00</span>
                    <i class="ti-plus"></i>
                  </h3>
                  <p>Tahun Pengalaman</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-fun-fact-section -->

      <!-- start of barise-agents-section -->
      <section class="barise-agents-section section-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-12">
              <div class="agents-left">
                <div class="wpo-section-title">
                  <h2>Lokasi Kantor Kami</h2>
                  <p>
                    Kunjungi kantor kami untuk konsultasi langsung dengan tim
                    profesional kami mengenai kebutuhan transportasi Anda.
                  </p>
                </div>
                <div class="office-info">
                  <div class="info-item">
                    <i class="ti-location-pin"></i>
                    <p>Jl. Contoh No. 123, Kota Baru, Indonesia</p>
                  </div>
                  <div class="info-item">
                    <i class="ti-email"></i>
                    <p>info@barise.com</p>
                  </div>
                  <div class="info-item">
                    <i class="ti-mobile"></i>
                    <p>+62 123 4567 890</p>
                  </div>
                </div>
                <a href="#" class="theme-btn">Hubungi Kami</a>
              </div>
            </div>
            <div class="col-lg-7 col-12">
              <div class="agents-right">
                <div class="map-container">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613506394!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTEnNDEuMSJTIDEwNsKwNDknMTQuMyJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid"
                    width="100%"
                    height="400"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                  >
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of barise-agents-section -->

      <!-- start of wpo-site-footer-section-s2 -->
      <footer class="wpo-site-footer-s2">
        <div class="wpo-upper-footer">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget about-widget">
                  <div class="logo widget-title">
                    <img
                      src="{{ asset('barise/assets/images/bus/logo/logo_black_to_white.png') }}"
                      alt="HalloBus Luxury"
                    />
                  </div>
                  <p>
                    PT. Cahaya Putra Tidar - Penyedia layanan transportasi bus
                    mewah dengan kenyamanan dan keamanan terbaik untuk
                    perjalanan Anda.
                  </p>
                  <div class="social-icon">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="ti-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="ti-whatsapp"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget link-widget">
                  <div class="widget-title">
                    <h3>Perusahaan:</h3>
                  </div>
                  <ul>
                    <li><a href="#">- Tentang Kami</a></li>
                    <li><a href="#">- Armada Kami</a></li>
                    <li><a href="#">- Layanan</a></li>
                    <li><a href="#">- FAQ</a></li>
                    <li><a href="#">- Karir</a></li>
                  </ul>
                </div>
              </div>
              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget newsletter-widget">
                  <div class="widget-title">
                    <h3>Newsletter:</h3>
                  </div>
                  <div class="f-from">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Masukkan email Anda"
                    />
                    <input
                      type="submit"
                      class="theme-btn"
                      value="Berlangganan"
                    />
                  </div>
                </div>
              </div>
              <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="widget instagram">
                  <div class="widget-title">
                    <h3>Galeri Kami:</h3>
                  </div>
                  <ul>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-1.jpg') }}"
                        alt="Armada Bus"
                      />
                    </li>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-2.jpg') }}"
                        alt="Interior Mewah"
                      />
                    </li>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-3.jpg') }}"
                        alt="Fasilitas"
                      />
                    </li>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-4.jpg') }}"
                        alt="Perjalanan"
                      />
                    </li>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-5.jpg') }}"
                        alt="Tim Kami"
                      />
                    </li>
                    <li>
                      <img
                        src="{{ asset('barise/assets/images/instagram/img-6.jpg') }}"
                        alt="Testimoni"
                      />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wpo-lower-footer">
          <div class="container">
            <div class="lower-wrap">
              <div class="row justify-content-center">
                <div class="col col-lg-6 col-12">
                  <p class="copyright">
                    Hak Cipta © {{ date('Y') }} HalloBus Luxury by
                    <a href="#">PT. Cahaya Putra Tidar</a>. Seluruh Hak
                    Dilindungi.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end of wpo-site-footer-section-s2 -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="barise/assets/js/jquery.min.js"></script>
    <script src="barise/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="barise/assets/js/modernizr.custom.js"></script>
    <script src="barise/assets/js/jquery.dlmenu.js"></script>
    <script src="barise/assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="barise/assets/js/script.js"></script>
  </body>
</html>
