@extends('layouts.app')

@section('title', 'Kebijakan Sewa - Hallo Bus Luxury')

@section('Title-Head', 'Kebijakan Sewa')
@section('Title-Sub', 'Kebijakan Sewa Hallo Bus Luxury')
@section('content')

    <!-- wpo-service-single-area start -->
    <div class="wpo-service-single-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="wpo-service-single-wrap">
                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Kebijakan Penyewaan</h3>
                            </div>
                            <p>
                                Hallo Bus Luxury menyediakan layanan transportasi bus mewah dengan standar pelayanan
                                terbaik. Berikut adalah kebijakan penyewaan yang berlaku untuk semua pelanggan kami.
                            </p>
                            <ul>
                                <li>Penyewaan minimal 12 jam untuk paket harian.</li>
                                <li>Pembayaran DP 50% diperlukan untuk konfirmasi booking.</li>
                                <li>Pembatalan lebih dari 7 hari sebelum keberangkatan akan dikenakan biaya 10% dari total
                                    harga.</li>
                                <li>Pembatalan dalam 3-7 hari sebelum keberangkatan dikenakan biaya 30% dari total harga.
                                </li>
                                <li>Pembatalan kurang dari 3 hari sebelum keberangkatan dikenakan biaya 50% dari total
                                    harga.</li>
                            </ul>
                        </div>
                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-title">
                                <h3>Syarat dan Ketentuan</h3>
                            </div>
                            <p>
                                Untuk kenyamanan bersama, pelanggan diharapkan mematuhi semua syarat dan ketentuan yang
                                berlaku selama menggunakan layanan Hallo Bus Luxury:
                            </p>
                            <p>
                                1. Dilarang merokok di dalam bus<br>
                                2. Dilarang membawa minuman beralkohol tanpa izin<br>
                                3. Kerusakan akibat kelalaian penumpang akan menjadi tanggung jawab penyewa<br>
                                4. Waktu perjalanan termasuk waktu loading dan unloading penumpang<br>
                                5. Perubahan rute setelah keberangkatan dikenakan biaya tambahan<br>
                                6. Bus harus dikembalikan dalam kondisi bersih
                            </p>
                        </div>
                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Proses Penyewaan</h3>
                            </div>
                            <ul>
                                <li>Pemilihan jenis bus dan fasilitas yang diinginkan</li>
                                <li>Konfirmasi ketersediaan dengan customer service kami</li>
                                <li>Pembayaran DP 50% untuk booking</li>
                                <li>Konfirmasi final 3 hari sebelum keberangkatan</li>
                                <li>Pembayaran lunas maksimal H-1 sebelum keberangkatan</li>
                                <li>Penyerahan dokumen yang diperlukan</li>
                            </ul>
                        </div>
                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-title">
                                <h3>Layanan Kami</h3>
                            </div>
                            <div class="wpo-service-area">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-1.png" alt="" />
                                            </div>
                                            <h2>Bus Mewah</h2>
                                            <p>
                                                Armada terbaru dengan fasilitas lengkap untuk kenyamanan perjalanan Anda.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-2.png" alt="" />
                                            </div>
                                            <h2>Soprofesional</h2>
                                            <p>
                                                Sopir berpengalaman dan terlatih untuk keselamatan perjalanan Anda.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-3.png" alt="" />
                                            </div>
                                            <h2>Fasilitas Lengkap</h2>
                                            <p>
                                                AC, WiFi, TV, toilet, reclining seat, dan fasilitas premium lainnya.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-service-single-item">
                            <div class="wpo-service-contact-area">
                                <div class="wpo-contact-title">
                                    <h2>Pertanyaan lebih lanjut?</h2>
                                    <p>
                                        Hubungi kami untuk informasi lebih detail tentang kebijakan penyewaan atau kebutuhan
                                        transportasi khusus Anda.
                                    </p>
                                </div>
                                <div class="wpo-contact-form-area">
                                    <form method="post" class="contact-validation-active" id="contact-form-main">
                                        <div class="row">
                                            <div class="col col-lg-6 col-md-6 col-12">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Nama Anda*" />
                                            </div>
                                            <div class="col col-lg-6 col-md-6 col-12">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email Anda*" />
                                            </div>
                                            <div class="col col-lg-12 col-12">
                                                <select name="service" class="form-control">
                                                    <option disabled="disabled" selected="">
                                                        Jenis Layanan
                                                    </option>
                                                    <option>Sewa Harian</option>
                                                    <option>Sewa Pariwisata</option>
                                                    <option>Sewa Antar Jemput</option>
                                                    <option>Sewa Acara Khusus</option>
                                                </select>
                                            </div>
                                            <div class="fullwidth col col-lg-12 col-12">
                                                <textarea class="form-control" name="note" id="note" placeholder="Pertanyaan Anda..."></textarea>
                                            </div>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">
                                                Kirim Pesan
                                            </button>
                                            <div id="loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Terima kasih, pesan Anda telah terkirim</div>
                                            <div id="error">
                                                Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.
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
    <!-- wpo-service-single-area end -->

@endsection
