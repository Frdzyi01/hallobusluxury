@extends('layouts.app')

@section('title', 'Bus Standar - HalloBus Luxury')

@section('Title-Head', 'Detail Armada Kami')
@section('Title-Sub', 'Detail - Big Bus 50 Seat')
@section('content')


    <!-- start wpo-shop-single-section -->
    <section class="wpo-shop-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="shop-single-slider">
                        <div class="slider-for">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/tampakdepan.jpg') }}"
                                    alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursi.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursibelakang.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/tampakdepan.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursibelakang.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursi.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/tampakdepan.jpg') }}"
                                    alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursi.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursibelakang.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/tampakdepan.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursibelakang.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-standar-baru/bigbus50seat/kursi.jpg') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>Bus 50 Seat Executive</h2>
                        <div class="product-rt">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>(10 customer reviews)</span>
                        </div>

                        <p>
                            Bus 50 Seat Executive merupakan armada premium kami yang
                            dirancang khusus untuk kenyamanan rombongan menengah.
                            Dilengkapi dengan triple AC, toilet modern, dan kursi
                            reclining ergonomis untuk perjalanan jarak jauh. Ideal untuk
                            wisata keluarga, perjalanan dinas, atau acara perusahaan.
                        </p>

                        <ul>
                            <li>Kapasitas: 50 Seat Executive</li>
                            <li>Tipe Mesin: Turbo Diesel Euro 4</li>
                            <li>Kecepatan Maks: 120 km/jam</li>
                            <li>Bagasi: Depan, samping, belakang</li>
                            <li>Tahun: 2022</li>
                        </ul>
                        <div class="product-option">
                            <form class="form">
                                <div class="product-row">
                                    <div>
                                        <input id="product-count" type="text" value="1" name="product-count" />
                                    </div>
                                    <div>
                                        <button type="submit" class="theme-btn">
                                            Pesan Sekarang
                                        </button>
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
                                    Bus 50 Seat Executive menawarkan kenyamanan premium dengan
                                    konfigurasi 2-2 yang lapang dan legroom ekstra. Dibangun
                                    dengan standar keamanan tinggi dan material interior
                                    berkualitas untuk pengalaman perjalanan yang menyenangkan.
                                </p>
                                <h3>Keunggulan Armada Kami</h3>
                                <p>
                                    <strong>Bus dengan perawatan berkala dan sertifikasi
                                        lengkap</strong>
                                    menjamin keandalan dan keselamatan perjalanan. Dilengkapi
                                    entertainment system modern, WiFi stabil, dan charging
                                    port di setiap kursi. Sopir profesional kami berpengalaman
                                    melayani rombongan bisnis dan wisata.
                                </p>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="features">
                                <ul class="list list-mark-2 list-ervices">
                                    <li>Triple AC dengan kontrol temperatur zona</li>
                                    <li>Kursi reclining premium dengan sandaran kepala</li>
                                    <li>Entertainment system: LCD 22" + audio premium</li>
                                    <li>Toilet modern dengan sistem sanitasi higienis</li>
                                    <li>WiFi stabil untuk 30+ perangkat</li>
                                    <li>Charging port USB+AC di setiap kursi</li>
                                    <li>Bagasi luas dengan kapasitas 4.5 m³</li>
                                    <li>Sistem keselamatan lengkap + GPS tracking</li>
                                    <li>Asuransi penumpang komprehensif</li>
                                    <li>Dokumentasi perjalanan profesional</li>
                                    <li>Driver berpengalaman + co-driver</li>
                                    <li>Air mineral gratis selama perjalanan</li>
                                    <li>P3K lengkap + obat dasar</li>
                                    <li>Monitor perjalanan digital</li>
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
                                                            <span>15 Oktober 2023</span>
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
                                                        Sangat cocok untuk rombongan kantor kami. AC
                                                        dingin merata ke seluruh bagian bus, kursi
                                                        sangat nyaman untuk perjalanan 8 jam. Sopir
                                                        sangat profesional dan tahu rute dengan baik.
                                                        WiFi cukup stabil selama perjalanan.
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
                                                            <span>5 Januari 2024</span>
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
                                                        Bus sangat nyaman untuk wisata keluarga besar
                                                        kami. Toilet bersih dan terawat. Hanya sedikit
                                                        kecewa karena beberapa charging port tidak
                                                        berfungsi. Tapi secara keseluruhan sangat
                                                        memuaskan untuk harga yang dibayar.
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
