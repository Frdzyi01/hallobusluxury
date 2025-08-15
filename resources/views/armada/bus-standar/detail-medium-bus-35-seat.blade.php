@extends('layouts.app')

@section('title', 'Bus Standar - HalloBus Luxury')

@section('Title-Head', 'Detail Armada Kami')
@section('Title-Sub', 'Detail - Medium Bus 35 Seat')
@section('content')

    <!-- start wpo-shop-single-section -->
    <section class="wpo-shop-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="shop-single-slider">
                        <div class="slider-for">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/1.png') }}" alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/2.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/3.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/4.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/5.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/6.png') }}" alt="Interior Bus" />
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/1.png') }}" alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/2.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/3.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/4.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/5.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-long/5.png') }}" alt="Interior Bus" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>Medium Bus Long 35 Seat</h2>
                        <div class="product-rt">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>(12 customer reviews)</span>
                        </div>

                        <p>
                            Medium Bus 35 Seat menawarkan kenyamanan maksimal untuk
                            perjalanan jarak jauh. Didesain dengan body panjang yang
                            stabil, bus ini dilengkapi dengan suspensi khusus dan sistem
                            sirkulasi udara yang optimal di seluruh kabin.
                        </p>

                        <ul>
                            <li>
                                <i class="ti-check-box"></i> Body panjang untuk ruang ekstra
                            </li>
                            <li>
                                <i class="ti-check-box"></i> Suspensi khusus untuk
                                perjalanan jarak jauh
                            </li>
                            <li>
                                <i class="ti-check-box"></i> Sistem sirkulasi udara optimal
                                di seluruh kabin
                            </li>
                            <li>
                                <i class="ti-check-box"></i> Triple AC dengan kontrol zona
                                terpisah
                            </li>
                            <li>
                                <i class="ti-check-box"></i> Kursi reclining premium dengan
                                legroom ekstra
                            </li>
                        </ul>
                        <div class="product-option">
                            <form class="form">
                                <div class="product-row">
                                    <div>
                                        <input id="product-count" type="text" value="1" name="product-count" />
                                    </div>
                                    <div>
                                        <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20Bus%20(35Seat).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
                                            class="theme-btn" role="button" aria-label="Pesan Sekarang via WhatsApp">
                                            Pesan Sekarang
                                        </a>
                                    </div>
                                    <div>
                                        <button class="theme-btn heart-btn">
                                            <i class="ti-heart"></i>
                                        </button>
                                        <span></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end option -->
                        <div class="tg-btm">
                            <p><span>Termasuk:</span> PPN & Asuransi</p>
                            <p>
                                <span>Hubungi:</span> 0812-3456-7890 (Admin Andi Wijaya)
                            </p>
                        </div>
                    </div>
                    <!-- end product details -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="product-info">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description"
                                    role="tab" aria-controls="Description" aria-selected="true">Deskripsi</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="features-tab" data-bs-toggle="tab" href="#features" role="tab"
                                    aria-controls="features" aria-selected="false">Fasilitas & Layanan</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="Review-tab" data-bs-toggle="tab" href="#Review" role="tab"
                                    aria-controls="Review" aria-selected="false">Ulasan</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Description">
                                <p>
                                    Medium Bus Long 35 Seat merupakan solusi transportasi
                                    nyaman dengan body memanjang untuk kapasitas lebih besar.
                                    Dilengkapi dengan triple AC, toilet modern, dan kursi
                                    reclining premium yang ergonomis. Cocok untuk perjalanan
                                    wisata, ziarah, atau rombongan kerja.
                                </p>
                                <h3>Keunggulan Armada Kami</h3>
                                <p>
                                    Armada Medium Bus Long 35 Seat kami dirancang untuk
                                    memberikan kenyamanan maksimal selama perjalanan jarak
                                    jauh. Dengan body panjang yang stabil, bus ini mampu
                                    menampung hingga 35 penumpang dengan ruang yang lega.
                                    Suspensi khusus memastikan perjalanan tetap nyaman meski
                                    melalui medan yang berliku. Sistem sirkulasi udara yang
                                    optimal menjaga suhu kabin tetap sejuk, bahkan di hari
                                    terpanas sekalipun.
                                </p>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="features">
                                <ul class="list list-mark-2 list-ervices">
                                    <li>Triple AC dengan kontrol zona terpisah</li>
                                    <li>Kursi reclining premium dengan legroom ekstra</li>
                                    <li>Entertainment system: LCD 24" + audio surround</li>
                                    <li>Toilet modern dengan sistem sanitasi terbaik</li>
                                    <li>WiFi stabil untuk 40+ perangkat</li>
                                    <li>Charging port USB+AC di setiap kursi</li>
                                    <li>Bagasi ekstra panjang (depan & belakang)</li>
                                    <li>Sistem keselamatan lengkap + stability control</li>
                                    <li>Asuransi penumpang komprehensif</li>
                                    <li>Dokumentasi perjalanan profesional</li>
                                    <li>Driver + co-driver berpengalaman</li>
                                    <li>Air mineral gratis sepanjang perjalanan</li>
                                    <li>P3K lengkap + obat-obatan dasar</li>
                                    <li>GPS tracking real-time</li>
                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="Review">
                                <div class="row">
                                    <div class="col col-lg-10 col-12">
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="assets/images/shop/shop-single/review/img-1.jpg"
                                                    alt="Budi Santoso" />
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Budi Santoso</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>15 November 2023</span>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>
                                                        Sangat nyaman untuk perjalanan ziarah kami. Body
                                                        panjang tapi tetap stabil di jalan berliku. AC
                                                        dingin merata sampai kursi belakang. Sopir
                                                        sangat berpengalaman melalui medan pegunungan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="assets/images/shop/shop-single/review/img-2.jpg"
                                                    alt="Anita Rahayu" />
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Anita Rahayu</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>3 Februari 2024</span>
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>
                                                        Ukuran panjangnya memberikan ruang lebih lega
                                                        untuk rombongan kami. Toilet selalu bersih dan
                                                        tersedia air mineral cukup. Hanya agak sulit
                                                        parkir di tempat sempit, tapi secara keseluruhan
                                                        sangat memuaskan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col col-lg-12 col-12 review-form-wrapper">
                                        <div class="review-form">
                                            <h4>Tambah Ulasan</h4>
                                            <p>
                                                Email Anda tidak akan dipublikasikan. Kolom yang
                                                wajib diisi ditandai *
                                            </p>
                                            <form>
                                                <div class="give-rat-sec">
                                                    <p>Rating Anda *</p>
                                                    <div class="give-rating">
                                                        <label>
                                                            <input type="radio" name="stars" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Nama *"
                                                        required />
                                                </div>
                                                <div>
                                                    <input type="email" class="form-control" placeholder="Email *"
                                                        required />
                                                </div>
                                                <div>
                                                    <textarea class="form-control" placeholder="Ulasan Anda *"></textarea>
                                                </div>
                                                <div class="rating-wrapper">
                                                    <div class="submit">
                                                        <button type="submit" class="theme-btn-s2">
                                                            Kirim Ulasan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of wpo-shop-single-section -->

@endsection
