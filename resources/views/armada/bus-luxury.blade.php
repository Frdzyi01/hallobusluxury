@extends('layouts.app')

@section('title', 'Bus Luxury - HalloBus Luxury')

@section('Title-Head', 'Armada Kami')
@section('Title-Sub', 'Bus Luxury')
@section('content')


    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bigbus45seat/bhaladikatampakdepan.jpg') }}"
                                    alt="Big Bus 45 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.luxury.bigbus') }}">Big Bus 45 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus mewah berkapasitas 45 seat dengan fasilitas lengkap untuk kenyamanan perjalanan
                                    jarak jauh. Dilengkapi dengan AC double blower, reclining seat ergonomis, entertainment
                                    system, toilet, dan bagasi luas. Sistem keselamatan mencakup emergency exit, APAR, dan
                                    seatbelt.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.luxury.bigbus') }}"
                                        style="
                                        display: inline-block;
                                        padding: 8px 15px;
                                        background: #f5f5f5;
                                        color: #333;
                                        border-radius: 4px;
                                        transition: all 0.3s ease;
                                    "
                                        onmouseover="this.style.background='#e0e0e0'; this.style.color='#000';"
                                        onmouseout="this.style.background='#f5f5f5'; this.style.color='#333';">
                                        <i class="ti-eye"></i> Cek Detail
                                    </a>

                                    <a href="https://wa.me/621290153576?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20big%20bus%20(45Seat).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                        style="
                                        display: inline-block;
                                        padding: 8px 15px;
                                        margin-left: 10px;
                                        background: #a07f56;
                                        color: white;
                                        border-radius: 4px;
                                        transition: all 0.3s ease;
                                    "
                                        onmouseover="this.style.background='#8a6d3b'; this.style.color='#fff';"
                                        onmouseout="this.style.background='#A07F56'; this.style.color='white';">
                                        <i class="ti-shopping-cart"></i> Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/1.png') }}"
                                    alt="HI Ace Premio Luxury" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.luxury.hiace') }}">HI Ace Premio Luxury (8Seat)</a></h3>
                                <p class="deskripsi-bus">
                                    Kendaraan mewah berkapasitas 8 seat dengan interior premium. Dilengkapi AC ganda,
                                    leather seat yang nyaman, entertainment system, dan kabin kedap suara. Cocok untuk
                                    perjalanan bisnis atau keluarga kecil dengan fasilitas bintang lima.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.luxury.hiace') }}"
                                        style="
                                        display: inline-block;
                                        padding: 8px 15px;
                                        background: #f5f5f5;
                                        color: #333;
                                        border-radius: 4px;
                                        transition: all 0.3s ease;
                                    "
                                        onmouseover="this.style.background='#e0e0e0'; this.style.color='#000';"
                                        onmouseout="this.style.background='#f5f5f5'; this.style.color='#333';">
                                        <i class="ti-eye"></i> Cek Detail
                                    </a>

                                    <a href="https://wa.me/621290153576?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Hi-Ace%20Premio%20Luxury%20(45Seat).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                        style="
                                        display: inline-block;
                                        padding: 8px 15px;
                                        margin-left: 10px;
                                        background: #a07f56;
                                        color: white;
                                        border-radius: 4px;
                                        transition: all 0.3s ease;
                                    "
                                        onmouseover="this.style.background='#8a6d3b'; this.style.color='#fff';"
                                        onmouseout="this.style.background='#A07F56'; this.style.color='white';">
                                        <i class="ti-shopping-cart"></i> Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end wpo-shop-section -->
@endsection
