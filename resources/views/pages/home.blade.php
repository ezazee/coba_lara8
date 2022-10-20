@extends('layouts.app')

@section('title')
    Beranda
@endsection

@section('content')
    <!-- Hero Section-->
    <section id="home" class="atf-particle-one atf-cover-bg atf-hero-area atf-align-items-details" style="background-image: url('frontend/assets/img/banner/tentangNyaku1.jpg'); background-size:cover; background-position: left;">
        <div class="atf-round-area d-none d-lg-block"></div>
        <div class="container atf-particles-area">
                <div class="row atf-content-details align-items-center">
                        <div class="col-lg-7 col-md-6 col-12 atf-single-details text-lg-left">
                            <h2 class="mb-0 d-block d-lg-block" style="color: var(--warna-putih1);">Ada Nyaku Disetiap Sudut Bitung</h2>
                            <p class="mr-lg-5" style="color: var(--warna-putih1);" > #KitaBela KitaBeli Produk Lokal</p>
                            <div class="atf-one__btn-wrap">
                                <a href="https://play.google.com/store/apps/details?id=com.nusantaraku.nyaku_app_user_merchant"> <img src="{{ asset('frontend/assets/img/googleplay.png') }}" width="150px" alt="googleplay"></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-5 col-12 atf_home_img  atf_home_img4 text-center">
                            <div class="atf-img-inner  wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s" data-wow-offset="0">
                                <div class="home-image-box atf-particle-img"><img src="{{ asset('frontend/assets/img/Frame Smartphone.png') }}" alt="Nyaku Bitung Mockup" class="card-s"></div>
                            </div>
                        </div>
                </div>
        </div>
    </section>
    <!-- Akhir Hero Section -->

    <!-- Tentang-->
    <section class="section section-md bg-default" id="about">
        <div class="container">
            <div class="row row-40 align-items-center wow fadeInUp">
                <div class="col-xl-7 col-lg-6">
                    <div class="img-video">
                        <a class="button-play" href="https://youtu.be/trb7WSUwHA8" data-lightgallery="item">
                            <svg width="19" height="21" viewbox="0 0 19 21">
                                <path d="M18.0698 8.92762C19.3101 9.63455 19.3101 11.3655 18.0698 12.0724L2.85678 20.7432C1.59455 21.4626 -6.40869e-08 20.585 0 19.1708L7.85887e-07 1.82916C8.49974e-07 0.414998 1.59455 -0.462644 2.85678 0.256784L18.0698 8.92762Z"></path>
                            </svg>
                        </a>
                        <img class="box-shadow" src="{{ asset('frontend/assets/img/Ilustrasi/AsetIlustrasi02.jpg') }}" alt="Apa itu Nyaku Bitung" width="660" height="406"/>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <h6>Tentang</h6>
                    <h2 style="font-family: var(--font-dasar); ; font-size: 40px;">Apa itu <span style="color: var(--warna-dasar);"> Nyaku Bitung</span></h2>
                    <p class="big">Nyaku Bitung adalah Super Apps yang menggabungkan <em>Marketplace</em> dan <em>Delivery Order</em>, mempunyai tujuan menjadi wadah jualan produk kearifan lokal Kota Bitung serta untuk meningkatkan penjualan para pelaku UMKM Kota Bitung.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Tentang -->

    <!-- Banner -->
    <div class="content">
        <div class="container wow fadeInUp">
            <h2 class="my-5 text-center" style="font-family: var(--font-dasar);"> <span style="color: var(--warna-dasar);">Fasilitas</span> Yang Kami Sajikan</h2>
            <div class="owl-carousel owl-1">
                <div><img src="{{ asset('frontend/assets/img/banner/Slide1.jpg') }}" alt="Nyaku Bitung Banner" class="img-fluid"></div>
                <div><img src="{{ asset('frontend/assets/img/banner/Slide2.jpg') }}" alt="Nyaku Bitung Banner" class="img-fluid"></div>
                <div><img src="{{ asset('frontend/assets/img/banner/Slide3.jpg') }}" alt="Nyaku Bitung Banner" class="img-fluid"></div>
                <div><img src="{{ asset('frontend/assets/img/banner/Slide4.jpg') }}" alt="Nyaku Bitung Banner" class="img-fluid"></div>
                <div><img src="{{ asset('frontend/assets/img/banner/Slide5.jpg') }}" alt="Nyaku Bitung Banner" class="img-fluid"></div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Kenapa Harus Kami-->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="row row-15 justify-content-sm-between   wow fadeInUp">
                <div class="col-xl-5 col-lg-6">
                    <h6>Kenapa Harus Nyaku Bitung ?</h6>
                    <h2 style="font-family: var(--font-dasar); font-size: 40px;">Portofolio Produk Daerah</h2>
                    <p class="big">Nyaku Bitung merupakan E-Katalog produk kearifan lokal Kota Bitung yang merupakan portofolio produk daerah untuk sektor UMKM, komodistas, pariwisata sehingga memudahkan wisatawan mengenal produk-produk kearifan lokal Kota Bitung.</p>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="text-center text-lg-left">
                        <img src="{{ asset('frontend/assets/img/Ilustrasi/home-img.png') }}" alt="Kenapa Harus Nyaku Bitung" width="500" height="406"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir kenapa harus kami -->

    <!-- Jasa yang ditawarkan-->
    <section class="section section-md bg-default" id="what-we-do">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <h6>Apa Yang Kami Tawarkan ?</h6>
                <h2 style="font-family: var(--font-dasar);">Jasa yang bisa nemenin hari hari mu</h2>
            </div>
            <div class="row wow fadeInUp">
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('frontend/assets/img/IconSVG/Transportasi&Logistik.svg') }}" width="60px" alt="Transportasi & Logistic Nyaku Bitung">
                        </div>
                        <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Transportasi & Logistik</h3>
                        <p>
                            Kami menyediakan layanan transportasi online lokal dan logistik untuk memudahkan proses pengiriman produk-produk kepada masyarakat Bitung.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('frontend/assets/img/IconSVG/MakanandanBelanja.svg') }}" width="60px" alt="Makanan dan Belanja Nyaku Bitung">            </div>
                        <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Makanan & Belanja</h3>
                        <p>
                            Layanan fitur untuk para pembeli yang ingin berbelanja produk-produk khas Bitung.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('frontend/assets/img/IconSVG/Wisata.svg') }}" width="60px" alt="Wisata Nyaku Bitung">
                        </div>
                        <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Wisata</h3>
                        <p>
                            Fitur layanan untuk memandu para wisatawan untuk lebih mengenal destinasi wisata yang ada di Kota Bitung, sehingga dapat melakukan reservasi dan pesen tiket wisata secara digital.
                        </p>
                    </div>
                </div>
                <div class="column pt-5">
                    <div class="card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('frontend/assets/img/IconSVG/Pembayaran.svg') }}" width="60px" alt="Pembayaran Nyaku Bitung">
                        </div>
                        <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Pembayaran</h3>
                        <p>
                            layanan pembayaran yang aman dan terpercaya untuk menjamin keamanan pembayaran di aplikasi Nyaku Bitung.
                        </p>
                    </div>
                </div>
                <div class="column pt-5">
                    <div class="card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('frontend/assets/img/IconSVG/ModalKerja.svg') }}" width="60px" alt="Modal Kerja Nyaku Bitung">
                        </div>
                        <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Modal Kerja</h3>
                        <p>
                            Layanan pembiayaan untuk mitra Nyaku Bitung, khususnya Mitra UMKM dan UMKM yang produktif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Jasa yang ditawarkan -->

    <!-- Layanan Kategori -->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="row row-50 align-items-center flex-xl-row-reverse justify-content-center wow fadeInUp">
                <div class="col-xl-5 col-lg-8 col-md-9 text-center text-xl-left">
                    <h6>Kategori Layanan</h6>
                    <h2 style="font-family: var(--font-dasar);">Kategori Layanan</h2>
                    <a href="html/layanan/layanan.html" class="button button-secondary button-nuka">Selengkapnya</a>
                </div>
                <div class="col-xl-7 col-lg-9">
                    <ul class="list-brands">
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Elektronik.png') }}" alt="Category Elektronik" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Fashion.png') }}" alt="Category Fashion" width="30" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Kerajinan.png') }}" alt="Category Kerajinan" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Kesehatan.png') }}" alt="Category Kesehatan" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Kuliner.png') }}" alt="Category Kuliner" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Oleh-Oleh.png') }}" alt="Category Oleh-Oleh" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Perikanan.png') }}" alt="Category Perikanan" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Perkebunan.png') }}" alt="Category Perkebunan" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Pertanian.png') }}" alt="Category Pertanian" width="50" height="71"/></a></li>
                        <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="{{ asset('frontend/assets/img/icon/Peternakan.png') }}" alt="Category Peternakan" width="50" height="71"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Layanan Kategori -->

    <!-- Ajakan Driver -->
    <section class="section section-md bg-default">
        <div class="text-center wow fadeInUp pb-5">
            <h6>Mitra</h6>
            <h2 style="font-family: var(--font-dasar);">Gabung Bersama Kami</h2>
        </div>
        <div class="row">
            <a class="card2" href="html/mitra/mitra_driver/driver.html">
                <img src="{{ asset('frontend/assets/img/IconMitra/MitraDriver.png') }}" width="80px" alt="Mitra Driver Nyaku Bitung">
                <h3 style="font-family: var(--font-dasar);">Mitra Driver</h3>
                <p class="small">Jadilah pahlawan Masyarakat dan dapatkan pasif income sepenuhnya </p>

                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>
            <a class="card2" href="html/mitra/mitra_merchant/merchant.html">
                <img src="{{ asset('frontend/assets/img/IconMitra/MitraMerchant.png') }}" width="80px" alt="Mitra Merchant Nyaku Bitung">
                <h3 style="font-family: var(--font-dasar);">Mitra Merchant</h3>
                <p class="small">Perluas dan kembangkan penjualan kamu dengan teknologi baru</p>

                <div class="go-corner" href="#">
                    <div class="go-arrow">
                        →
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!-- Akhir Ajakan Driver -->

    <!-- Video Player -->
    <h3 class="heading-galery wow fadeInUp">Butuh Bantuan?</h3>
    <div class="container-video wow fadeInUp">
        <div class="main-video">
            <div class="video">
                <video src="{{ asset('frontend/assets/videos/TutorialDaftarAkunUser.mp4') }}" controls></video>
                <h3 class="title-galery">01. Tutorial Daftar Akun User</h3>
            </div>
        </div>
        <div class="video-list">
            <div class="vid active">
                <video src="{{ asset('frontend/assets/videos/TutorialDaftarAkunUser.mp4') }}"></video>
                <h3 class="title-galery">01. Tutorial Daftar Akun User</h3>
            </div>
            <div class="vid">
                <video src="{{ asset('frontend/assets/videos/BukaToko.mp4') }}"></video>
                <h3 class="title-galery">02. Tutorial Buka Toko</h3>
            </div>
            <div class="vid">
                <video src="{{ asset('frontend/assets/videos/CaraTopTupSaldoDriver.mp4') }}"></video>
                <h3 class="title-galery">03. Tutorial TopUp Saldo Driver</h3>
            </div>
        </div>
    </div>
    <!-- Akhir Video Player -->

    <!-- Showcase -->
    <section class="section section-md bg-default">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="col4">
                        <div class="content wow fadeInUp">
                            <h6>Nyaku Bitung</h6>
                            <p class=" h2 mb-4">Lebih Dari Sekedar Marketplace</p>
                            <p class="text-muted mb-4">Nyaku Bitung merupakan solusi dan layanan untuk memberdayakan jutaan penjual produk kearifan lokal dan konsumen agar dapat berpartisipasi membangun ketahanan ekonomi Kota Bitung
                            <p><a href="html/layanan/layanan.html" class="button button-secondary button-nuka">Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="align-items-center justify-content-center">
                        <div id="carousel" class="owl-carousel wow fadeInUp ">
                            <div>
                                <img width="75%" id="img-1" class="image-app" src="{{ asset('frontend/assets/img/ShowcaseMockup/Homescreen.png') }}" alt="Nyaku Bitung Mockup Showcase" >
                            </div>
                            <div>
                                <img width="75%" id="img-2" class="image-app" src="{{ asset('frontend/assets/img/ShowcaseMockup/Anterin.png') }}" alt="Nyaku Bitung Mockup Showcase" >
                            </div>
                            <div>
                                <img width="75%" id="img-3" class="image-app" src="{{ asset('frontend/assets/img/ShowcaseMockup/AllProduk.png') }}" alt="Nyaku Bitung Mockup Showcase" >
                            </div>
                            <div>
                                <img width="75%" id="img-4" class="image-app" src="{{ asset('frontend/assets/img/ShowcaseMockup/ProdukScreen.png') }}" alt="Nyaku Bitung Mockup Showcase" >
                            </div>
                            <div>
                                <img width="75%" id="img-5" class="image-app" src="{{ asset('frontend/assets/img/ShowcaseMockup/Reservasi.png') }}" alt="Nyaku Bitung Mockup Showcase" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Showcae -->

    <!-- Blog -->
    <section class="section section-md bg-default">
        <div class="text-center wow fadeInUp">
            <h6>Nyaku Blog</h6>
            <h2 style="font-family: var(--font-dasar);">Ikuti Blog Kami Dan Dapatkan Informasi Menarik</h2>
        </div>
        <div class="band wow fadeInUp">
            <div class="item-1">
                <a href="/html/blog/konten/Reward Untuk 100 Driver Pertama !!/Reward Untuk 100 Driver Pertama !!.html" class="card-blog">
                    <div class="thumb" style="background-image: url('frontend/assets/img/kontenblog/Slide1.jpg');"></div>
                    <article>
                        <h1>Reward Untuk 100 Driver Pertama !!</h1>
                        <p>Halo Rekan Mitra, Ada kabar gembira bagi para calon Mitra Driver untuk Nyaku Bitung !</p>
                        <span>Baca Selengkapnya</span>
                    </article>
                </a>
            </div>
            <div class="item-2">
                <a href="/html/blog/konten/Pemkot Bitung Buat Gebrakan Transportasi Online/Pemkot Bitung Buat Gebrakan Transportasi Online.html" class="card-blog">
                    <div class="thumb" style="background-image: url('frontend/assets/img/kontenblog/konten_blog.jpg');"></div>
                    <article>
                        <h1>Pemkot Bitung Buat Gebrakan</h1>
                        <p>Pemerintah Kota (Pemkot) Bitung kembali membuat inovasi baru.</p>
                        <span>Baca Selengkapnya</span>
                    </article>
                </a>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Banner CTA -->
    <section id="cta">
        <div class="container">
            <div class="box-cta">
                <div class="cta-text" data-aos="fade-right">Cintai Produk Bitung.<br> Cintai Produk Daerah.<br> Yuk, download<br> sekarang juga</div>
                    <a href="https://play.google.com/store/apps/details?id=com.nusantaraku.nyaku_app_user_merchant" class="btn btn-cta" title="Download Nyaku" target="_blank" data-aos="fade-down">
                        <i class="fab fa-google-play"></i> Play store
                </a>
            </div>
        </div>
    </section>
    <!-- End Banner CTA -->
@endsection
