@extends('layouts.app')

@section('title', 'Bus Standar - HalloBus Luxury')


@section('Title-Head', 'Armada Kami')
@section('Title-Sub', 'Bus Standar')
@section('content')

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}" alt="Medium Bus Long"
                                    style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('list-po.po-bus-standar.medium-bus-35-seat') }}">Medium Bus 35
                                        Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.medium-bus-35-seat') }}"
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
                                        <i class="ti-eye"></i> List PO Medium Bus 35 Seat
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/busmedium30seat.jpg') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('list-po.po-bus-standar.medium-bus-31-seat') }}">Medium Bus 31
                                        Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus dengan kapasitas 31 seat yang nyaman, dilengkapi AC
                                    dingin, reclining seat, LCD TV, dan bagasi memadai.
                                    Terdapat APAR dan pemecah kaca untuk keamanan perjalanan.
                                    Ideal untuk grup kecil dengan kenyamanan optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.medium-bus-31-seat') }}"
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
                                        <i class="ti-eye"></i> List PO Medium Bus 31 Seat
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/tampakdepan.jpg') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('list-po.po-bus-standar.big-bus-50-seat') }}">big Bus 50 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus besar berkapasitas 50 seat dengan fasilitas lengkap
                                    termasuk AC dingin, reclining seat, LCD TV, dan bagasi
                                    luar dalam yang luas. Dilengkapi APAR dan pemecah kaca
                                    untuk keamanan. Ideal untuk rombongan besar dengan
                                    kenyamanan terjamin.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.big-bus-50-seat') }}"
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
                                        <i class="ti-eye"></i> List PO Big Bus 50 Seat
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bus-standar-59-seat/busdepan.jpeg') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('list-po.po-bus-standar.big-bus-59-seat') }}">big Bus 59 Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus berkapasitas besar 59 seat dengan fasilitas lengkap
                                    meliputi AC dingin, reclining seat nyaman, LCD TV, dan
                                    bagasi luar dalam yang sangat luas. Dilengkapi APAR dan
                                    pemecah kaca untuk standar keselamatan tinggi.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.big-bus-59-seat') }}"
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
                                        <i class="ti-eye"></i> List PO Big Bus 59 Seat
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/hiace-standar/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.hi-ace-standar') }}">HI-Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Kendaraan kompak yang nyaman dengan AC dingin, seat empuk,
                                    dan bagasi memadai. Dilengkapi dengan APAR dan pemecah
                                    kaca untuk keselamatan. Solusi transportasi ideal untuk
                                    grup kecil dengan mobilitas tinggi.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.hi-ace-standar') }}"
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
                                        <i class="ti-eye"></i> Sewa HI-Ace Standar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/elf-standar-18seat/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.elf-standar-18-seat') }}">Elf Standar 18
                                        Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Kendaraan kompak yang nyaman dengan AC dingin, seat empuk, Karoke, musik, TV android
                                    dan bagasi memadai. Dilengkapi dengan APAR dan pemecah
                                    kaca untuk keselamatan. Solusi transportasi ideal untuk
                                    grup kecil dengan mobilitas tinggi.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.elf-standar-18-seat') }}"
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
                                        <i class="ti-eye"></i> Sewa Elf Standar 18 Seat
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/Bigbus-standart-50-seat( 2-2 )/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a href="{{ route('list-po.po-bus-standar.big-bus-50-seat-2-2') }}">Bigbus standar
                                        50 seat ( 2-2 )</a></h3>
                                <p class="deskripsi-bus">
                                    Bus besar berkapasitas 50 seat dengan fasilitas lengkap
                                    termasuk AC Dingin
                                    , android audio karaoke
                                    , led tv
                                    , charge plug hp
                                    , dispenser
                                    , cool box reclining seat, LCD TV, dan bagasi
                                    luar dalam yang luas. Dilengkapi APAR dan pemecah kaca
                                    untuk keamanan. Ideal untuk rombongan besar dengan
                                    kenyamanan terjamin.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.big-bus-50-seat-2-2') }}"
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
                                        <i class="ti-eye"></i> list PO Bigbus 50 Seat ( 2-2 )
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus-42-45seat/1.png') }}"
                                    alt="Medium Bus Long" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a href="{{ route('list-po.po-bus-standar.big-bus-42-45-seat') }}">Bigbus
                                        42-45 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus besar berkapasitas
                                    42-45 Seat dengan fasilitas lengkap
                                    termasuk ac
                                    , android audio karaoke
                                    , led tV
                                    , charge plug hp
                                    , coolbox
                                    , dispenser
                                    , toilet
                                    , smoking roomdan bagasi
                                    luar dalam yang luas. Dilengkapi APAR dan pemecah kaca
                                    untuk keamanan. Ideal untuk rombongan besar dengan
                                    kenyamanan terjamin.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.big-bus-42-45-seat') }}"
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
                                        <i class="ti-eye"></i> List PO Bigbus 42-45 Seat
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
