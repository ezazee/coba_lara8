@extends('layouts.marchant-app')

@section('title')
    Driver
@endsection

@section('content')
    <!-- Hero -->
    <section class="hero-bg" style="    background-image: url('frontend/assets/img/banner/BannerMitraDriver.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 100vh;  position: relative; z-index: 1;">
        <div class="container ">
            <div class="hero row ">
                <div class="text-hero">
                    <h1>Kapan Saja, dimana saja kami siap antar</h1>
                    <p>Manfaatkan waktu luang jadi cuan, tingkatkan pasif income dan jadi pahlawan keluarga</p>
                </div>
                <div class="btns row">
                    <a href="./syarat.html" class="button button-secondary button-nuka">Lihat Persyaratan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Persyaratan -->
    <section class="section section-lg bungkus-fitur bg-gray-100">
        <div class="container text-center text-lg-left">
            <h2><span class="text-bold text-white wow fadeInUp" style="font-family: 'Poppins';">Gabung Driver Mana nih ?</h2>
            <div class="row mt-5 justify-content-center flex-wrap row-30 number-counter-2   wow fadeInUp">
                <div class="col-md-4">
                    <div class="box-numbered-left unit">
                        <div class="unit-body">
                            <img src="{{ asset('frontend/assets/img/IconGabungDriverMana/Delivery.png') }}" alt="Nyaku Mo Bakirim" width="100px"><h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);">Driver Nyaku Mo BaKirim</h4>
                            <div  style="color: #fff;" class="content">Anter pesanan makanan kamu kemanapun dan kapanpun kamu mau</div>
                            <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-numbered-left unit">
                        <div class="unit-body">
                            <img src="{{ asset('frontend/assets/img/IconGabungDriverMana/Anterin.png') }}" alt="Nyaku Mo BaAntar" width="100px">
                            <h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);">Driver Nyaku Mo BaAntar</h4>
                            <div style="color: #fff;" class="content">Bisa nganter kamu kemanapun kamu mau dengan aman dan nyaman... </div>
                            <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-numbered-left unit">
                        <div class="unit-body">
                            <img src="{{ asset('frontend/assets/img/IconGabungDriverMana/Belanjain.png') }}" alt="Nyaku Mo babeli" width="100px">
                            <h4 style="color: var(--warna-putih1); margin-top: 20px; font-family: var(--font-dasar);">Driver Nyaku Mo BaBeli</h4>
                            <div style="color: #fff;" class="content">Bantu kamu buat beliin barang atau makanan yang belum terdaftar di Nyaku Bitung</div>
                            <a href="./syarat.html" class="button button-secondary button-nuka">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kenapa Kami-->

    <section class="section section-md bg-default">
        <div class="text-center wow fadeInUp pb-5">
            <h2 style="font-family: var(--font-dasar);">Kenapa Gabung Mitra Kami ?</h2>
        </div>
        <div class="why-driver wow fadeInUp">
            <a href="#" class="card education">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/SistemIntegrasi.png') }}" style="z-index: 1;" width="80px" alt="Nyaku Bitung Terintegrasi">
                </div>
                <p style="font-weight: 600;" class="text-center">Sistem terintregasi dan aman</p>
            </a>
            <a href="#" class="card credentialing">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/Fee_100__Milik_Mitra_Merchant.png') }}" style="z-index: 1;" width="80px" alt="Fee 100% Nyaku Bitung">
                </div>
                <p  style="font-weight: 600;" class="text-center" class="text-center">Untung 100% untuk driver </p>
            </a>
            <a href="#" class="card wallet">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/Punya Banyak Mitra.png') }}" style="z-index: 1;" width="80px" alt="Nyaku Bitung Banyak Mitra">
                </div>
                <p  style="font-weight: 600;" class="text-center" class="text-center">Punya Banyak Mitra Merchant</p>
            </a>
            <a href="#" class="card human-resources">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/BisaCairinSaldoKapanSaja.png') }}" style="z-index: 1;" width="80px" alt="Nyaku Bitung Cairin Saldo">
                </div>
                <p  style="font-weight: 600;" class="text-center" class="text-center">Bisa Cairin Saldo Kapan Saja</p>
            </a>
            <a href="#" class="card human-resources">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/BisaBuatPromoSendiri.png') }}" style="z-index: 1;" width="80px" alt="Nyaku Bitung Buat Promo Sendiri">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Banyak Reward</p>
            </a>
        </div>
    </section>

    <!-- Tutor Pesen -->
    <div class="container">
        <h1 class="row text-center" style="font-family: var(--font-dasar); font-size: 50px;">Cara pesan Nyaku Anter</h1>
        <div class="row">
            <div class="col-md-6 text-tutor">
                <div>
                    <button id="btn-1" class="btn btn-success aktif" type="button">
                    <div class="box-tutor">1. Buka Aplikasi Nyaku Bitung.</div>
                    <div class="box-tutor">Lalu pilih Nyaku Mo BaAnter</div>
                    </button>
                </div>
                <div>
                    <button id="btn-2" class="btn btn-success" type="button">
                    <div>2. Tentukan Lokasi Jemput.</div>
                    </button>
                </div>
                    <button id="btn-3" class="btn btn-success" type="button">
                        <div>3. Pilih Lokasi Yang Kamu Mau.</div>
                    </button>
                <div>
                    <button id="btn-4" class="btn btn-success" type="button">
                        <div class="box-tutor">4. Cek Ulang Pesanan.</div>
                        <div class="box-tutor">Lalu Pilih Metode Pembayaran</div>
                    </button>
                </div>
                <div>
                    <button id="btn-5" class="btn btn-success" type="button">
                        <div class="box-tutor">5. Driver Menuju Titik Jemput.</div>
                    </button>
                </div>
                <div>
                    <button id="btn-6" class="btn btn-success" type="button">
                        <div class="box-tutor">6. Sesampainya Driver, Kamu </div>
                        <div class="box-tutor">Akan Diantar Sampai Tujuan.</div>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel">
                    <div>
                        <img id="img-1" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/1.png') }}">
                        <p id="mobile" class="text-center text-1">1. Buka Aplikasi Nyaku Bitung Lalu Pilih Nyaku Anter</p>
                    </div>
                    <div>
                        <img id="img-2" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/2.png') }}">
                        <p id="mobile" class="text-center text-1">2. Tentukan Lokasi Jemput</p>
                    </div>
                    <div>
                        <img id="img-3" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/3.png') }}">
                        <p id="mobile" class="text-center text-1">3. Pilih Lokasi yang kamu mau</p>
                    </div>
                    <div>
                        <img id="img-4" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/4.png') }}">
                        <p id="mobile" class="text-center text-1">4. Cek Ulang Pemesanan Lalu Pilih Metode Pembayaran</p>
                    </div>
                    <div>
                        <img id="img-5" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/5.png') }}">
                        <p id="mobile" class="text-center text-1">5. Driver Menuju Tikik Jemput</p>
                    </div>
                    <div>
                        <img id="img-6" class="image-app" src="{{ asset('frontend/assets/img/OrderAnterin/6.png') }}">
                        <p id="mobile" class="text-center text-1">6. Sesampainya Driver, Kamu Diantar Sampai Tujuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="cta1">
        <div class="container">
            <div class="box-cta">
                <div class="cta-text" data-aos="fade-right">Mau Gabung Jadi<br> Mitra Driver ?<br> Yuk, Cek<br> Persyaratan Nya</div>
                <a href="./syarat.html" class="btn btn-cta" title="Download Nyaku" target="_blank" data-aos="fade-down">
                    <i class="fa-solid fa-clipboard"></i> Cek Disini
                </a>
            </div>
        </div>
    </section>
@endsection
