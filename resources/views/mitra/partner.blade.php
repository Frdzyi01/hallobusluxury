@extends('layouts.app')

@section('title', 'Mitra Kami - HalloBus Luxury')

@section('Title-Head', 'Mitra Kami')
@section('Title-Sub', 'Mitra HalloBus Luxury')
@section('content')
    <style>
        .partner-card {
            padding: 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 100px
        }

        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .partner-card img {
            max-height: 80px;
            object-fit: contain;
            /* filter: grayscale(100%); */
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .partner-card:hover img {
            /* filter: grayscale(0%); */
            opacity: 1;
        }

        .partner-card h5 {
            font-size: 16px;
            font-weight: 600;
            /* color: #333; */
        }
    </style>
    <!-- start wpo-contact-pg-section -->
    <section class="wpo-contact-pg-section section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <!-- Mitra 1 -->
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="partner-card text-center">
                        <img src="https://www.google.com/images/branding/product/1x/google_cloud_96dp.png" alt="BUMMAR"
                            class="img-fluid">
                        <h5 class="mt-3">BUMMAR</h5>
                    </div>
                </div>

                <!-- Mitra 2 -->
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="partner-card text-center">
                        <img src="https://www.google.com/images/branding/product/1x/google_cloud_96dp.png" alt="BUMMAR"
                            class="img-fluid">
                        <h5 class="mt-3">BUMMAR</h5>
                    </div>
                </div>

                <!-- Mitra 3 -->
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="partner-card text-center">
                        <img src="https://www.google.com/images/branding/product/1x/google_cloud_96dp.png" alt="BUMMAR"
                            class="img-fluid">
                        <h5 class="mt-3">BUMMAR</h5>
                    </div>
                </div>

                <!-- Mitra 4 -->
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="partner-card text-center">
                        <img src="https://www.google.com/images/branding/product/1x/google_cloud_96dp.png" alt="BUMMAR"
                            class="img-fluid">
                        <h5 class="mt-3">BUMMAR</h5>
                    </div>
                </div>

                <!-- Mitra 5 -->
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="partner-card text-center">
                        <img src="https://www.google.com/images/branding/product/1x/google_cloud_96dp.png" alt="BUMMAR"
                            class="img-fluid">
                        <h5 class="mt-3">BUMMAR</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
