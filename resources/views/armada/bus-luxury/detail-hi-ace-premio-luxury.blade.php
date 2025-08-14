@extends('layouts.app')

@section('title', 'Detail Hi Ace Premio Luxury - HalloBus Luxury')

@section('Title-Head', 'Detail Armada Kami')
@section('Title-Sub', 'Detail - Hi Ace Premio Luxury')
@section('content')

    <!-- start wpo-shop-single-section -->
    <section class="wpo-shop-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="shop-single-slider">
                        <div class="slider-for">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/1.png') }}"
                                    alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/2.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/3.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/4.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/6.png') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/1.png') }}"
                                    alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/2.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/3.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/4.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-luxury-baru/hiace-premio-luxury/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>Hi Ace Premio Luxury (8 Seat)</h2>
                        <div class="product-rt">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>(9 customer reviews)</span>
                        </div>

                        <p>
                            Hi Ace Premio Luxury (8 Seat) menawarkan pengalaman perjalanan eksklusif dengan kapasitas
                            terbatas untuk kenyamanan maksimal. Dilengkapi dengan interior premium, AC ganda, dan kursi
                            eksekutif yang dapat disesuaikan. Ideal untuk perjalanan bisnis, keluarga kecil, atau kebutuhan
                            transportasi VIP.
                        </p>

                        <ul>
                            <li>Kapasitas: 8 Seat Luxury</li>
                            <li>Tipe Mesin: 2.7L Bensin Euro 4</li>
                            <li>Kecepatan Maks: 140 km/jam</li>
                            <li>Bagasi: Belakang & atap</li>
                            <li>Tahun: 2021</li>
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
                                    Hi Ace Premio Luxury (8 Seat) merupakan kendaraan VIP dengan kapasitas terbatas 8
                                    penumpang. Dirancang khusus untuk memberikan pengalaman perjalanan eksklusif dengan
                                    konfigurasi seat 2-2-2 yang mewah dan legroom ekstra. Dilengkapi dengan fasilitas
                                    premium untuk mendukung perjalanan bisnis maupun wisata yang nyaman.
                                </p>
                                <h3>Keunggulan Armada Kami</h3>
                                <p>
                                    <strong>Hi Ace Premio Luxury dengan perawatan berkala dan sertifikasi
                                        lengkap</strong>
                                    menjamin kenyamanan dan keamanan perjalanan. Dilengkapi dengan sistem hiburan premium,
                                    WiFi stabil, dan charging port di setiap kursi. Pengemudi profesional kami telah
                                    berpengalaman melayani berbagai kebutuhan transportasi eksklusif.
                                </p>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="features">
                                <ul class="list list-mark-2 list-ervices">
                                    <li>Dual AC dengan kontrol suhu independen</li>
                                    <li>Kursi eksekutif leather dengan reclining penuh</li>
                                    <li>Sistem audio dan video premium</li>
                                    <li>Mini bar dan cooler box</li>
                                    <li>WiFi gratis selama perjalanan</li>
                                    <li>Stop kontak USB dan power outlet di setiap kursi</li>
                                    <li>Bagasi belakang yang luas</li>
                                    <li>Pintu geser otomatis</li>
                                    <li>Asuransi penumpang komprehensif</li>
                                    <li>Privacy curtain</li>
                                    <li>Driver profesional berpengalaman</li>
                                    <li>Air mineral premium gratis</li>
                                    <li>P3K lengkap</li>
                                    <li>GPS tracking real-time</li>
                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="Review">
                                <div class="row">
                                    <div class="col col-lg-10 col-12">
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="{{ asset('barise/assets/images/shop/shop-single/review/img-1.jpg') }}"
                                                    alt="Budi Santoso" />
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Budi Santoso</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>12 November 2023</span>
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
                                                        Sangat nyaman untuk perjalanan bisnis kami. Kursi leather yang empuk
                                                        dan bisa direcline membuat perjalanan 4 jam terasa singkat. AC
                                                        bekerja sangat baik dan interiornya bersih. Sopir sangat profesional
                                                        dan membantu. Hanya saja WiFi kadang kurang stabil di beberapa area.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="{{ asset('barise/assets/images/shop/shop-single/review/img-2.jpg') }}"
                                                    alt="Anita Rahayu" />
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Anita Rahayu</h4>
                                                        </div>
                                                        <div class="product-rt">
                                                            <span>28 Januari 2024</span>
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
                                                        Cocok untuk wisata keluarga kecil kami. Interior mewah dan terawat
                                                        baik. Kursi sangat nyaman untuk perjalanan panjang. Mini bar sangat
                                                        membantu. Hanya sedikit kecewa dengan space bagasi yang terbatas
                                                        untuk koper besar. Tapi secara keseluruhan sangat memuaskan.
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
