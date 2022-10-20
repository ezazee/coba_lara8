@extends('layouts.marchant-app')

@section('title')
    Merchant
@endsection

@section('content')
    <!-- Hero -->
    <section class="hero-bg" style=" background-image: url('frontend/assets/img/banner/BannerMitraMerchant.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; height: 100vh; position: relative; z-index: 1;">
        <div class="container">
            <div class="hero row ">
                <div class="text-hero">
                    <h1>Perluas omset hemat budget</h1>
                    <p>Tingkatkan income kamu dan jadilah pahlawan untuk Masyarakat Bitung</p>
                </div>
                <div class="btns row">
                    <a href="./syarat.html" class="button button-secondary button-nuka">Lihat Persyaratan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->


    <!-- Kenapa Harus-->
    <section class="section section-md bg-default">
        <div class="text-center wow fadeInUp pb-5">
            <h2 style="font-family: 'Poppins';">Kenapa Gabung Mitra Kami ?</h2>
        </div>
        <div class="why-driver wow fadeInUp ">
            <a href="#" class="card education">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/SistemIntegrasi.png') }}" style="z-index: 1;" width="80px" alt="Sistem Nyaku Ter Integrasi">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Sistem terintregasi & aman</p>
            </a>
            <a href="#" class="card human-resources">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/Fee_100__Milik_Mitra_Merchant.png') }}" style="z-index: 1;" width="80px" alt="Fee 100% Milik Nyaku Merchant">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Tidak ada biaya potongan admin</p>
            </a>
            <a href="#" class="card wallet">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/PunyaBanyakDriver.png') }}" style="z-index: 1;" width="80px" alt="Driver Nyaku Bitung">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Punya Banyak Mitra Driver</p>
            </a>
            <a href="#" class="card human-resources">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/BisaCairinSaldoKapanSaja.png') }}" style="z-index: 1;" width="80px" alt="Cairin Saldo Nyaku Bitung">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Bisa Cairin Saldo Kapan Saja</p>
            </a>
            <a href="#" class="card human-resources">
                <div class="overlay"></div>
                <div class="circle">
                    <img src="{{ asset('frontend/assets/img/IconKelebihan/Bisa Buat Promo Sendiri.png') }}" style="z-index: 1;" width="80px" alt="Buat Promo Sendiri Di Nyaku Bitung">
                </div>
                <p style="font-weight: 600;" class="text-center" class="text-center">Bisa Buat Promo Sendiri</p>
            </a>
        </div>
    </section>


    <!-- Tutor Pesen -->
    <div class="container">
        <h1 class="row text-center" style="font-family: 'Poppins'; font-size: 50px;">Cara pesan Delivery</h1>
        <div class="row">
            <div class="col-md-6 text-tutor">
                <div>
                    <button id="btn-1" class="btn btn-success aktif" type="button">
                        <div class="box-tutor">1. Buka Aplikasi Nyaku Bitung.</div>
                        <div class="box-tutor">Lalu Pilih Salah Satu Kategori</div>
                    </button>
                </div>
                <div>
                    <button id="btn-2" class="btn btn-success" type="button">
                        <div>2. Tentukan Produk Yang</div>
                        <div>Ingin Dibeli</div>
                    </button>
                </div>
                <button id="btn-3" class="btn btn-success" type="button">
                    <div>3. Kalau Sudah, klik BELI.</div>
                </button>
                <div>
                    <button id="btn-4" class="btn btn-success" type="button">
                        <div class="box-tutor">4. Isi semua kolom yang</div>
                        <div class="box-tutor">Yang Sudah Tertera.</div>
                    </button>
                </div>
                <div>
                    <button id="btn-5" class="btn btn-success" type="button">
                        <div class="box-tutor">5. Pilih Alamat </div>
                        <div class="box-tutor">Tujuan Pengiriman Kamu</div>
                    </button>
                </div>
                <div>
                    <button id="btn-6" class="btn btn-success" type="button">
                        <div class="box-tutor">6. Pilih Jasa Pengiriman. </div>
                    </button>
                </div>
                <div>
                    <button id="btn-7" class="btn btn-success" type="button">
                        <div class="box-tutor">7. Pilih Metode Pembayaran</div>
                    </button>
                </div>
                <div>
                    <button id="btn-8" class="btn btn-success" type="button">
                        <div class="box-tutor">8. Pastikan Semua Data </div>
                        <div class="box-tutor">Yang Kamu Isi Sudah Benar</div>
                    </button>
                </div>
                <div>
                    <button id="btn-9" class="btn btn-success" type="button">
                        <div class="box-tutor">9. Tunggu Hingga Pesanan</div>
                        <div class="box-tutor">Kamu Sampai Ke Tujuan.</div>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel">
                    <div>
                        <img id="img-1" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/1.png') }}">
                        <p id="mobile" class="text-center text-1">1. Buka Aplikasi Nyaku Bitung, Lalu Pilih Salah Satu Kategori</p>
                    </div>
                    <div>
                        <img id="img-2" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/2.png') }}">
                        <p id="mobile" class="text-center text-1">2. Tentukan Produk Yang Ingin Dibeli</p>
                    </div>
                    <div>
                        <img id="img-3" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/3.png') }}">
                        <p id="mobile" class="text-center text-1">3. Kalau Sudah, Klik BELI</p>
                    </div>
                    <div>
                        <img id="img-4" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/4.png') }}">
                        <p id="mobile" class="text-center text-1">4. Isi Semua Kolom Yang Sudah Tersedia</p>
                    </div>
                    <div>
                        <img id="img-5" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/5.png') }}">
                        <p id="mobile" class="text-center text-1">5. Pilih Alamat Tujuan Pengiriman Kamu</p>
                    </div>
                    <div>
                        <img id="img-6" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/6.png') }}">
                        <p id="mobile" class="text-center text-1">6. Pilih Jasa Pengiriman</p>
                    </div>
                    <div>
                        <img id="img-7" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/7.png') }}">
                        <p id="mobile" class="text-center text-1">7. Pilih Metode Pembayaran</p>
                    </div>
                    <div>
                        <img id="img-8" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/8.png') }}">
                        <p id="mobile" class="text-center text-1">8. Pastikan Semua Data Yang Kamu Isi Sudah Benar</p>
                    </div>
                    <div>
                        <img id="img-9" class="image-app" src="{{ asset('frontend/assets/img/OrderDelivery/9.png') }}">
                        <p id="mobile" class="text-center text-1">9. Tunggu Hingga Pesanan Kamu Sampai Ke Tujuan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="cta" >
        <div class="container">
            <div class="box-cta" >
                <div class="cta-text" data-aos="fade-right">Mau Gabung Jadi<br> Mitra Merchant ?<br> Yuk, Cek<br> Persyaratan Nya</div>
                <a href="./syarat.html" class="btn btn-cta" title="Download Nyaku" data-aos="fade-down">
                   <i class="fa-solid fa-clipboard"></i> Cek Disini
                </a>
            </div>
        </div>
    </section>
@endsection
