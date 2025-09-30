@extends('layouts.app')

@section('title', 'List PO Hi Ace Standar - HalloBus Luxury')


@section('Title-Head', 'Armada Kami')
@section('Title-Sub', 'List List PO Hi Ace Standar')
@section('content')

    <!-- start wpo-shop-section -->
    <section class="wpo-shop-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Sinar Jaya - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Sinar Jaya - HI Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Sinar Jaya dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Lorena - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3>
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Lorena - Hi Ace Standar</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Lorena dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Haryanto - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Haryanto - Hi Ace Standar</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Haryanto dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Rosalia Indah - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Rosalia Indah - HI Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Rosalia Indah dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Sumber Selamat - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Sumber Selamat - HI Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Sumber Selamat dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Eka - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3><a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Eka - Hi Ace Standar</a>
                                </h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Eka dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Sugeng Rahayu - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Sugeng Rahayu - HI Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Sugeng Rahayu dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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
                                <img src="{{ asset('barise/assets/images/bus/pariwisata.png') }}"
                                    alt="PO Handoyo - Hi Ace Standar" style="height: 280px; object-fit: cover" />
                            </div>
                            <div class="details">
                                <h3> <a href="{{ route('bus.standar.medium-bus-31seat') }}">PO Handoyo - HI Ace Standar</a></h3>
                                <p class="deskripsi-bus">
                                    Bus nyaman dari PO Handoyo dengan fasilitas lengkap termasuk AC dingin,
                                    reclining seat, LCD TV, dan bagasi luas. Dilengkapi dengan
                                    APAR dan pemecah kaca untuk keselamatan penumpang. Cocok
                                    untuk perjalanan jarak menengah dengan kapasitas optimal.
                                </p>
                                <div class="add-to-cart">
                                    <a href="{{ route('bus.standar.medium-bus-31seat') }}"
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

                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end wpo-shop-section -->
@endsection
