@extends('layouts.app')


@section('title', 'Bus VIP - HalloBus Luxury')

@section('Title-Head', 'Armada Kami')
@section('Title-Sub', 'Bus VIP')
@section('content')


    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/BigbusVIP28-30Seat/home.jpeg') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('bus.vip.bigbus-28-30seat') }}">Big Bus VIP 28 - 30 Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus mewah dengan fasilitas lengkap, AC dingin, reclining
                                    seat, LCD TV, toilet, dan bagasi luas. Cocok untuk
                                    perjalanan jarak jauh dan wisata keluarga.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.vip.bigbus-28-30seat') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Big%20Bus%20Vip%20(28-30Seat).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/BigbusluxuryVVIP18pax/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('bus.vip.bigbus-18-pax') }}">Big Bus VIP 18 Pax</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus mewah dengan fasilitas lengkap, AC dingin, reclining
                                    seat, LCD TV, toilet, dan bagasi luas. Cocok untuk
                                    perjalanan jarak jauh dan wisata keluarga.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.vip.bigbus-18-pax') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Big%20Bus%20(18Pax).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bus-vip/Bigbus-VIP-21Seat-Konfigurasi2-1/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('bus.vip.bigbus-21-seat-konfigurasi-2-1') }}">Bigbus VIP 21 Seat <br>
                                        Konfigurasi 2-1</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus mewah dengan fasilitas lengkap, ac , android audio karaoke
                                    ,led tv
                                    ,charge plug hp
                                    ,toilet
                                    ,smoking room
                                    ,cool box
                                    ,dispenser
                                    ,legrest/sandaran kaki. Cocok untuk
                                    perjalanan jarak jauh dan wisata keluarga.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.vip.bigbus-21-seat-konfigurasi-2-1') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Big%20Bus%20(18Pax).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bus-vip/Bigbus-VIP-28-30Seat/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('bus.vip.detail-big-bus-vip-28-30seat') }}">Bigbus VIP 28 - 30 Seat
                                    </a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus mewah dengan fasilitas lengkap,ac
                                    ,android audio karaoke
                                    ,led tv
                                    ,charge plug hp
                                    ,dispenser
                                    ,cool box
                                    ,toilet
                                    ,smoking room
                                    ,legrest/sandaran kaki
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.vip.detail-big-bus-vip-28-30seat') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Big%20Bus%20(18Pax).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
            <!-- end container -->
        </div>
    </section>
    <!-- end wpo-shop-section -->
@endsection
