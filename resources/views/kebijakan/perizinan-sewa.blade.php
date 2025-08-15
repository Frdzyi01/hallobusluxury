@extends('layouts.app')

@section('title', 'Perizinan Sewa - Hallo Bus Luxury')

@section('Title-Head', 'Perizinan Sewa')
@section('Title-Sub', 'Perizinan Sewa Hallo Bus Luxury')
@section('content')

    <!-- wpo-service-single-area start -->
    <div class="wpo-service-single-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="wpo-service-single-wrap">
                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Persyaratan Perizinan</h3>
                            </div>
                            <p>
                                Hallo Bus Luxury menyediakan layanan transportasi bus mewah dengan perizinan lengkap dan
                                standar pelayanan terbaik.
                                Berikut adalah persyaratan perizinan yang diperlukan untuk penyewaan bus:
                            </p>
                            <div class="wpo-service-single-title">
                                <h4>Dokumen yang Diperlukan</h4>
                            </div>
                            <ul>
                                <li>Fotokopi KTP/Kartu Identitas Pemesan</li>
                                <li>Surat Permohonan Penyewaan (disediakan oleh kami)</li>
                                <li>Surat Kuasa (jika pemesan bukan penanggung jawab)</li>
                                <li>NPWP Perusahaan (untuk penyewaan corporate)</li>
                                <li>Surat Izin Operasional (khusus instansi pemerintah)</li>
                            </ul>
                        </div>

                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-title">
                                <h3>Prosedur Perizinan</h3>
                            </div>
                            <p>
                                Untuk memastikan proses perizinan berjalan lancar, berikut tahapan yang harus dilalui:
                            </p>
                            <p>
                                1. Pengajuan permohonan penyewaan minimal 7 hari sebelum keberangkatan<br>
                                2. Penyerahan dokumen persyaratan lengkap<br>
                                3. Verifikasi dokumen oleh tim kami (1-2 hari kerja)<br>
                                4. Pembayaran DP 50% setelah dokumen disetujui<br>
                                5. Penerbitan surat izin operasional kendaraan<br>
                                6. Penyerahan dokumen perizinan lengkap saat serah terima bus
                            </p>
                        </div>

                        <div class="wpo-service-single-item list-widget">
                            <div class="wpo-service-single-title">
                                <h3>Persyaratan Khusus</h3>
                            </div>
                            <ul>
                                <li>Perjalanan antar kota/provinsi memerlukan surat tugas/izin perjalanan</li>
                                <li>Penggunaan bus untuk acara resmi memerlukan surat pengantar instansi</li>
                                <li>Perjalanan malam hari memerlukan daftar penumpang dan identitas lengkap</li>
                                <li>Rute tertentu mungkin memerlukan izin khusus dari dinas terkait</li>
                            </ul>
                        </div>

                        <div class="wpo-service-single-item">
                            <div class="wpo-service-single-title">
                                <h3>Layanan Perizinan Kami</h3>
                            </div>
                            <div class="wpo-service-area">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-1.png" alt="" />
                                            </div>
                                            <h2>Bantuan Perizinan</h2>
                                            <p>
                                                Tim profesional kami akan membantu memproses semua perizinan yang
                                                diperlukan.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-2.png" alt="" />
                                            </div>
                                            <h2>Dokumen Lengkap</h2>
                                            <p>
                                                Kami menyediakan semua dokumen perizinan yang sah dan terdaftar.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="wpo-service-item">
                                            <div class="image">
                                                <img src="assets/images/choose/icon-3.png" alt="" />
                                            </div>
                                            <h2>Konsultasi Gratis</h2>
                                            <p>
                                                Layanan konsultasi perizinan tanpa biaya tambahan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wpo-service-single-item">
                            <div class="wpo-service-contact-area">
                                <div class="wpo-contact-title">
                                    <h2>Butuh Bantuan Perizinan?</h2>
                                    <p>
                                        Hubungi tim perizinan kami untuk informasi lebih lanjut tentang persyaratan dan
                                        prosedur perizinan penyewaan bus.
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
                                                        Jenis Layanan Perizinan
                                                    </option>
                                                    <option>Perizinan Sewa Harian</option>
                                                    <option>Perizinan Sewa Pariwisata</option>
                                                    <option>Perizinan Antar Kota/Provinsi</option>
                                                    <option>Perizinan Acara Khusus</option>
                                                </select>
                                            </div>
                                            <div class="fullwidth col col-lg-12 col-12">
                                                <textarea class="form-control" name="note" id="note" placeholder="Pertanyaan Anda tentang perizinan..."></textarea>
                                            </div>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn">
                                                Kirim Permohonan
                                            </button>
                                            <div id="loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Terima kasih, permohonan Anda telah terkirim</div>
                                            <div id="error">
                                                Terjadi kesalahan saat mengirim permohonan. Silakan coba lagi nanti.
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
