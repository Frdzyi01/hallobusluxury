@extends('layouts.app')

@section('title', 'List Po Medium 31 Seat - HalloBus Luxury')


@section('Title-Head', 'Armada Kami')
@section('Title-Sub', 'List List PO Medium 31 Seat')
@section('content')

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus-sinar-jaya/medium-bus-31.png') }}"
                                    alt="PO Sinar Jaya - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-sinar-jaya') }}">PO
                                        Sinar Jaya - Medium Bus 31 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Sinar Jaya dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-sinar-jaya') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Sinar%20Jaya.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/busmedium30seat.jpg') }}"
                                    alt="PO Putra Tidar - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-putra-tidar') }}">PO
                                        Putra Tidar - Medium Bus 31
                                        Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Putra Tidar dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-putra-tidar') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Handoyo.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bhaladika/mediumbus-31seat.png') }}"
                                    alt="PO Bhaladika - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bhaladika') }}">PO
                                        Bhaladika - Medium Bus 31
                                        Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Bhaladika dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bhaladika') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Haryanto.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/white-horse/mediumbus-31seat.webp') }}"
                                    alt="PO White Horse - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-white-horse') }}">PO
                                        White Horse - Medium Bus 31
                                        Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO White Horse dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-white-horse') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Rosalia%20Indah.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/BusBlueStar/mediumbus-31seat.png') }}"
                                    alt="Bus Blue Star - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-blue-star') }}">Bus
                                        Blue Star - Medium Bus
                                        31 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari Bus Blue Star dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-blue-star') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Sumber%20Selamat.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/starbus/mediumbus-31seat.jpg') }}"
                                    alt="Bus Starbus - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-starbus') }}">PO
                                        Bus Starbus - Medium Bus 31
                                        Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari Bus Starbus dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-starbus') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Eka.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bus-bin-ilyas/mediumbus-31seat.png') }}"
                                    alt="Bus Bin Ilyas - Medium Bus 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bin-ilyas') }}">Bus
                                        Bin Ilyas - Medium Bus
                                        31 Seat</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari Bus Bin Ilyas dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bin-ilyas') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Sugeng%20Rahayu.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/big-bird/medium-bus-31seat.png') }}"
                                    alt="Bus Big Bird Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-big-bird') }}">Bus
                                        Big Bird - Medium Bu 31 Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari Rejeki Gemilang dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-big-bird') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Lorena.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
                                <img src="{{ asset('barise/assets/images/bus-rejeki-gemilang/mediumbus-31seat.png') }}"
                                    alt="Bus Rejeki Gemilang 31 Seat" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a
                                        href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bus-rejeki-gemilang') }}">PO
                                        Rejeki Gemilang - Medium Bus
                                        31 Seat</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari Rejeki Gemilang dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-po.po-bus-standar.detail-bus-31-seat.detail-medium-bus-31seat-bus-rejeki-gemilang') }}"
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

                                    <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20bus%2031%20Seat%20PO%20Lorena.%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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
