@extends('layouts.app')

@section('title', 'Tentang Kami - HalloBus Luxury')

@section('Title-Head', 'Tentang Kami')
@section('Title-Sub', 'Mengenal HalloBus Luxury')
@section('content')


    <!-- start of barise-about-section -->
    <section class="barise-about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="about-left-wrap">
                        <div class="about-left-image">
                            <img src="{{ asset('barise/assets/images/about.jpg') }}" alt="Bus Mewah HalloBusLuxury" />
                        </div>
                        <h2 class="title">Beroperasi Sejak 2010</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-right-wrap">
                        <h2>Mewujudkan Perjalanan Mewah Impian Anda</h2>
                        <p>
                            HalloBusLuxury merupakan penyedia layanan transportasi bus
                            mewah terkemuka dengan komitmen memberikan pengalaman
                            perjalanan terbaik bagi pelanggan kami.
                        </p>
                        <div class="about-right-itam">
                            <ul>
                                <li>Armada terbaru dengan fasilitas lengkap</li>
                                <li>Sopir profesional dan berpengalaman</li>
                                <li>Pelayanan 24 jam untuk kebutuhan darurat</li>
                                <li>Harga kompetitif dengan kualitas premium</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of barise-about-section -->

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
                                <div class="bar wow fadeInLeft"
                                    style="
                        width: 90%;
                        visibility: visible;
                        animation-name: fadeInLeft;
                      ">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <a href="konta.html" class="theme-btn">HUBUNGI KAMI</a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="right-content">
                        <div class="cord-single on-cord">
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('barise/assets/images/choose-1.svg') }}" alt="" />
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
                                    <img src="{{ asset('barise/assets/images/choose-2.svg') }}" alt="" />
                                </div>
                                <h2>Fasilitas Lengkap</h2>
                            </div>
                            <p>
                                Armada kami dilengkapi berbagai fasilitas premium untuk
                                kenyamanan perjalanan Anda.
                            </p>
                        </div>
                        <div class="shape">
                            <svg width="266" height="291" viewBox="0 0 266 291" fill="none">
                                <path d="M265.563 0.199255L220.943 290.769L0.63271 127.611L265.563 0.199255Z"
                                    fill="#A07F56" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of barise-choose-section -->

    <!-- stert of barise-testimonial-section -->
    <section class="barise-testimonial-section section-padding testimonial-slider">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="all-imgage">
                        <div class="item">
                            <div class="images">
                                <img src="{{ asset('barise/assets/images/testimonial/1.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="images">
                                <img src="{{ asset('barise/assets/images/testimonial/2.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="images">
                                <img src="{{ asset('barise/assets/images/testimonial/3.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="testimonial slider-nav">
                        <div class="content">
                            <div class="icon">
                                <img src="{{ asset('barise/assets/images/testimonial/q-icon.png') }}" alt="" />
                            </div>
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip”.
                            </p>
                            <h3>Kathryn Murphy</h3>
                            <span>UI/UX Designer</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="{{ asset('barise/assets/images/testimonial/q-icon.png') }}" alt="" />
                            </div>
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip”.
                            </p>
                            <h3>Robert E. Campbell</h3>
                            <span>Project Manager</span>
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="{{ asset('barise/assets/images/testimonial/q-icon.png') }}" alt="" />
                            </div>
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip”.
                            </p>
                            <h3>Alexander</h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of barise-testimonial-section -->

    <!-- satart of barise-text-slider-section -->
    <section class="barise-text-slider-section">
        <div class="top-content">
            <h2>JASA - PENYEWAAN - BUS - LUXURY</h2>
        </div>
    </section>
    <!-- end of barise-text-slider-section -->

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
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/busmedium30seat.jpg') }}"
                                    alt="Bus Standar" style="height: 450px; object-fit: cover" />
                            </div>
                            <div class="text">
                                <span>BUS Standar</span>

                                <ul>
                                    <li>- AC</li>
                                    <li>- Audio System</li>
                                    <li>- Comfortable Seats</li>
                                    <li>- Bagasi Luas</li>
                                </ul>
                                <a href="{{ route('bus.standar') }}" class="theme-btn">
                                    <i class="ti-eye" style="margin-right: 13px"></i>
                                    LIHAT DETAIL
                                </a>
                                <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20bus%20standar.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                    class="theme-btn">
                                    <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                                    PESAN BUS STANDAR
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="property-item">
                            <div class="images">
                                <img src="{{ asset('barise/assets/images/bigbus45seat/bhaladikatampakdepan.jpg') }}"
                                    alt="Bus Luxury" style="height: 450px; object-fit: cover" />
                            </div>
                            <div class="text">
                                <span>BUS Luxury</span>

                                <ul>
                                    <li>- Kapasitas 30 Seat</li>
                                    <li>- WiFi + TV LED</li>
                                    <li>- Interior Premium</li>
                                    <li>- Toilet Pribadi</li>
                                </ul>
                                <a href="{{ route('bus.luxury') }}" class="theme-btn">
                                    <i class="ti-eye" style="margin-right: 13px"></i>
                                    LIHAT DETAIL
                                </a>
                                <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20bus%20luxury.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                    class="theme-btn">
                                    <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                                    PESAN BUS LUXURY
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="property-item">
                            <div class="images">
                                <img src="{{ asset('barise/assets/images/BigbusVIP28-30Seat/home.jpeg') }}"
                                    alt="Bus VIP" style="height: 450px; object-fit: cover" />
                            </div>
                            <div class="text">
                                <span>BUS VIP</span>

                                <ul>
                                    <li>- Kapasitas 20 Seat</li>
                                    <li>- Seat Reclining</li>
                                    <li>- Privasi Maksimal</li>
                                    <li>- Mini Bar</li>
                                </ul>
                                <a href="{{ route('bus.vip') }}" class="theme-btn">
                                    <i class="ti-eye" style="margin-right: 13px"></i>
                                    LIHAT DETAIL
                                </a>
                                <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20bus%20vip.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                    class="theme-btn">
                                    <i class="fab fa-whatsapp" style="font-size: 1.2em"></i>
                                    PESAN BUS VIP
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of barise-property-section-s2 -->

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
                                width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of barise-agents-section -->

@endsection
