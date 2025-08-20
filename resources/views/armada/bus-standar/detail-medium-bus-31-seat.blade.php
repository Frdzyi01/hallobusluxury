@extends('layouts.app')

@section('title', 'Bus Standar - HalloBus Luxury')

@section('Title-Head', 'Detail Armada Kami')
@section('Title-Sub', 'Detail - Medium Bus 31 Seat')
@section('content')

    <!-- start wpo-shop-single-section -->
    <section class="wpo-shop-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="shop-single-slider">
                        <div class="slider-for">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/1.png') }}" alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/2.png') }}" alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/3.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/4.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/6.png') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/1.png') }}" alt="Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/2.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/3.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/4.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                            <div>
                                <img src="{{ asset('barise/assets/images/bus-medium-30seact/5.png') }}"
                                    alt="Interior Bus" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-12">
                    <div class="product-details">
                        <h2>Medium Bus 31 Seat </h2>
                        <div class="product-rt">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <span>(7 customer reviews)</span>
                        </div>

                        <p>
                            Medium Bus 31 Seat merupakan solusi transportasi
                            nyaman untuk rombongan kecil hingga menengah. Dilengkapi
                            dengan AC ganda, toilet, dan kursi reclining premium yang
                            ergonomis. Ideal untuk perjalanan wisata, dinas perusahaan,
                            atau acara keluarga.
                        </p>

                        <ul>
                            <li>Kapasitas: 31 Seat Executive</li>
                            <li>Tipe Mesin: Turbo Diesel Euro 4</li>
                            <li>Kecepatan Maks: 120 km/jam</li>
                            <li>Bagasi: Belakang dan samping</li>
                            <li>Tahun: 2022</li>
                        </ul>
                        <div class="product-option">
                            <form class="form">
                                <div class="product-row">
                                    <div>
                                        <input id="product-count" type="text" value="1" name="product-count" />
                                    </div>
                                    <div>
                                        <a href="https://wa.me/6281111830302?text=Hallo%20Bus%20Luxury,%20saya%20ingin%20pesan%20Medium%20Bus%20(31Seat).%20Bisa%20diberi%20informasi%20lebih%20lanjut?"
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

                            <p>
                                <span>Hubungi:</span> 0811-1183-0302 (Admin Nuryanto)
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
                                    Medium Bus 31 Seat Executive dirancang khusus untuk
                                    memberikan kenyamanan premium dengan kapasitas yang lebih
                                    intim. Dengan konfigurasi seat 2-2 yang lapang dan legroom
                                    ekstra, menjamin perjalanan yang nyaman baik untuk jarak
                                    pendek maupun menengah.
                                </p>
                                <h3>Keunggulan Armada Kami</h3>
                                <p>
                                    <strong>Bus dengan perawatan berkala rutin</strong> dan
                                    sertifikasi lengkap untuk keamanan maksimal. Dilengkapi
                                    dengan hiburan onboard, WiFi stabil, dan charging port di
                                    setiap kursi. Pengemudi profesional kami berpengalaman
                                    melayani berbagai kebutuhan perjalanan eksklusif.
                                </p>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="features">
                                <ul class="list list-mark-2 list-ervices">
                                    <li>Dual AC dengan kontrol suhu terpisah</li>
                                    <li>Kursi reclining executive class</li>
                                    <li>Sistem audio premium dengan mic</li>
                                    <li>Toilet modern dengan sanitasi higienis</li>
                                    <li>WiFi gratis selama perjalanan</li>
                                    <li>Stop kontak USB di setiap kursi</li>
                                    <li>Bagasi cukup luas untuk rombongan</li>
                                    <li>Pintu darurat dan alat keselamatan lengkap</li>
                                    <li>Asuransi penumpang komprehensif</li>
                                    <li>Dokumentasi perjalanan profesional</li>
                                    <li>Driver berpengalaman</li>
                                    <li>Air mineral gratis</li>
                                    <li>P3K lengkap</li>
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
                                                            <span>10 Oktober 2023</span>
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
                                                        Sangat nyaman untuk rombongan kantor kami yang
                                                        berjumlah 25 orang. AC dingin merata, kursi
                                                        sangat ergonomis. Sopir sangat profesional dan
                                                        membantu. Ukuran bus pas untuk jalan-jalan
                                                        sempit di daerah wisata.
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
                                                            <span>5 Februari 2024</span>
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
                                                        Bus ukuran sedang ini sangat cocok untuk
                                                        keluarga besar kami. Toilet bersih dan terawat.
                                                        Kursi nyaman dengan legroom cukup. Hanya sedikit
                                                        kecewa dengan space bagasi yang terbatas. Tapi
                                                        secara keseluruhan sangat memuaskan.
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
