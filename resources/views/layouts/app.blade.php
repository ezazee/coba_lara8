<!DOCTYPE html>
<html class="wide wow-animation" lang="en|id">
<head>
    <title>Nyaku Bitung | Beranda</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Nyaku, Marketplace, Bitung, Driver ">
    <meta name="title" content="Nyaku Bitung">
    <meta name="description" content="Nyaku Bitung || Gabungan Marketplace dan Delivery Order">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Nyaku Bitung" />
    <meta property="og:description" content="www.nyakubitung.com" />
    <meta property="og:url" content="https://ezazee.github.io/nyakubitung/" />
    <meta property="og:image" content="assets/img/banner/banner08.jpg"/>

    <!-- Google tag (gtag.js) Annalytics -->
    @include('includes.script')

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="assets/img/banner/banner08.jpg">
    <meta property="og:url" content="www.nyakubitung.com">
    <meta property="og:title" content="Nyaku Bitung || abungan Marketplace dan Delivery Orderr">
    <meta property="og:description" content="abungan Marketplace dan Delivery Orderr">
    <meta property="og:image" content="assets/img/banner/banner08.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="assets/img/banner/banner08.jpg">
    <meta property="twitter:url" content="www.nyakubitung.com">
    <meta property="twitter:title" content="Nyaku Bitung || abungan Marketplace dan Delivery Orderr">
    <meta property="twitter:description" content="abungan Marketplace dan Delivery Orderr">
    <meta property="twitter:image" content="assets/img/banner/banner08.jpg">

    @include('includes.style')

    <!-- Google tag (gtag.js) -->
    @include('includes.script')

    <!-- Unknown Style -->

    @include('includes.style')

  <body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNQ6TJ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">

    <!-- Header -->
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">

            @include('includes.navbar')

        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Section-->

    @include('includes.hero')

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
                <div class="text-center text-lg-left"><img src="{{ asset('frontend/assets/img/Ilustrasi/home-img.png') }}" alt="Kenapa Harus Nyaku Bitung" width="500" height="406"/>
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
              <img src="assets/img/Icon SVG/Transportasi & Logistik.svg" width="60px" alt="Transportasi & Logistic Nyaku Bitung">
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
              <img src="assets/img/Icon SVG/Makanan dan Belanja.svg" width="60px" alt="Makanan dan Belanja Nyaku Bitung">            </div>
            <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Makanan & Belanja</h3>
            <p>Layanan fitur untuk para pembeli yang ingin berbelanja produk-produk khas Bitung.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
             <img src="assets/img/Icon SVG/Wisata.svg" width="60px" alt="Wisata Nyaku Bitung">
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
               <img src="assets/img/Icon SVG/Pembayaran.svg" width="60px" alt="Pembayaran Nyaku Bitung">
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
                <img src="assets/img/Icon SVG/Modal Kerja.svg" width="60px" alt="Modal Kerja Nyaku Bitung">
            </div>
            <h3 style="padding-bottom: 10px; font-family: var(--font-dasar);">Modal Kerja</h3>
            <p>
             Layanan pembiayaan untuk mitra Nyaku Bitung, khususnya Mitra UMKM dan UMKM yang produktif.
            </p>
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
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Elektronik.png" alt="Category Elektronik" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Fashion.png" alt="Category Fashion" width="30" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Kerajinan.png" alt="Category Kerajinan" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Kesehatan.png" alt="Category Kesehatan" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Kuliner.png" alt="Category Kuliner" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Oleh-Oleh.png" alt="Category Oleh-Oleh" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Perikanan.png" alt="Category Perikanan" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Perkebunan.png" alt="Category Perkebunan" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Pertanian.png" alt="Category Pertanian" width="50" height="71"/></a></li>
                <li class="list-brands-item"><a class="list-brands-link" href="#"><img class="list-brands-img" src="assets/img/icon/Peternakan.png" alt="Category Peternakan" width="50" height="71"/></a></li>
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
                      <img src="assets/img/Icon Mitra/Mitra Driver.png" width="80px" alt="Mitra Driver Nyaku Bitung">
                <h3 style="font-family: var(--font-dasar);">Mitra Driver</h3>
                <p class="small">Jadilah pahlawan Masyarakat dan dapatkan pasif income sepenuhnya </p>

                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
                <a class="card2" href="html/mitra/mitra_merchant/merchant.html">
                   <img src="assets/img/Icon Mitra/Mitra Merchant.png" width="80px" alt="Mitra Merchant Nyaku Bitung">
                <h3 style="font-family: var(--font-dasar);">Mitra Merchant</h3>
                <p class="small">Perluas dan kembangkan penjualan kamu dengan teknologi baru</p>

                <div class="go-corner" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
            </div>
        </div>
    </section>
    <!-- Akhir Ajakan Driver -->

    <!-- Video Player -->
<!-- <main class="container-video-player">
        <section class="main-video">
            <video src="assets/videos/Festival Pesona Selat Lembeh 2022.mp4" controls></video>
            <h3 class="title">Festival Pesona Selat Lambeh 2022 </h3>
        </section>
        <section class="video-playlist">
           <h6>Butuh Bantuan ?</h6>
              <h3 style="font-family: var(--font-dasar);">Cek Short Video Dibawah Ya!</h3>
            <div class="videos">
            </div>
        </section>
    </main> -->


    <h3 class="heading-galery wow fadeInUp">Butuh Bantuan?</h3>

    <div class="container-video wow fadeInUp">
      <div class="main-video">
        <div class="video">
          <video src="assets/videos/Tutorial Daftar Akun User.mp4" controls></video>
          <h3 class="title-galery">01. Tutorial Daftar Akun User</h3>
        </div>
      </div>

      <div class="video-list">
        <div class="vid active">
          <video src="assets/videos/Tutorial Daftar Akun User.mp4"></video>
          <h3 class="title-galery">01. Tutorial Daftar Akun User</h3>
        </div>

        <div class="vid">
          <video src="assets/videos/Buka Toko.mp4"></video>
          <h3 class="title-galery">02. Tutorial Buka Toko</h3>
        </div>

        <div class="vid">
          <video src="assets/videos/Cara Top Tup Saldo Driver.mp4"></video>
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
              <img width="75%" id="img-1" class="image-app" src="assets/img/Showcase Mockup/Homescreen.png" alt="Nyaku Bitung Mockup Showcase" >
            </div>

            <div>
              <img width="75%" id="img-2" class="image-app" src="assets/img/Showcase Mockup/Anterin.png" alt="Nyaku Bitung Mockup Showcase" >
            </div>

            <div>
              <img width="75%" id="img-3" class="image-app" src="assets/img/Showcase Mockup/All Produk.png" alt="Nyaku Bitung Mockup Showcase" >
            </div>

            <div>
              <img width="75%" id="img-4" class="image-app" src="assets/img/Showcase Mockup/Produk Screen.png" alt="Nyaku Bitung Mockup Showcase" >
            </div>

            <div>
              <img width="75%" id="img-5" class="image-app" src="assets/img/Showcase Mockup/Reservasi.png" alt="Nyaku Bitung Mockup Showcase" >
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
      <div class="thumb" style="background-image: url(assets/img/konten_blog/Slide_WEB\ Banner_Driver1.jpg);"></div>
      <article>
        <h1>Reward Untuk 100 Driver Pertama !!</h1>
        <p>Halo Rekan Mitra, Ada kabar gembira bagi para calon Mitra Driver untuk Nyaku Bitung !</p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>

  <div class="item-2">
    <a href="/html/blog/konten/Pemkot Bitung Buat Gebrakan Transportasi Online/Pemkot Bitung Buat Gebrakan Transportasi Online.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/konten_blog/konten_blog.jpg);"></div>
      <article>
        <h1>Pemkot Bitung Buat Gebrakan</h1>
        <p>Pemerintah Kota (Pemkot) Bitung kembali membuat inovasi baru.</p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <!-- <div class="item-2">
    <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Slide_WEB\ Banner_Driver.jpg);"></div>
      <article>
        <h1>Para UMKM Bersorak!!</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <div class="item-3">
    <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Banner\ Ads\ 2.png);"></div>
      <article>
        <h1>Termurah Tergokil !</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <div class="item-4">
    <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Banner\ Ads\ 3.png);"></div>
      <article>
        <h1>Termurah Tergokil !</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <div class="item-5">
   <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Banner\ Ads\ 4.png);"></div>
      <article>
        <h1>Termurah Tergokil !</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <div class="item-6">
   <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Banner\ Ads\ 5.png);"></div>
      <article>
        <h1>Termurah Tergokil !</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
  <div class="item-7">
   <a href="/html/bantuan/akun/blog/blog_akun.html" class="card-blog">
      <div class="thumb" style="background-image: url(assets/img/banner/Banner\ Ads\ 6.png);"></div>
      <article>
        <h1>Termurah Tergokil !</h1>
        <p>UMKM Lamongan Sangat Antusian Akan Kehadiran Aplikasi Baru Kabupaten Lamongan </p>
        <span>Baca Selengkapnya</span>
      </article>
    </a>
  </div>
</div> -->
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

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row-footer">
                    <div class="logo-bottom">
                        <img src="assets/img/logo/Logo Nyaku_Landscape-White.png" alt="Nyaku" title="Nyaku">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-footer1">
                                <div class="footer-text">
                                   Nyaku Bitung adalah Super Apps yang menggabungkan <em>Marketplace</em> dan <em>Delivery Order</em>, mempunyai tujuan menjadi wadah jualan produk kearifan lokal Kota Bitung serta untuk meningkatkan penjualan para pelaku UMKM Kota Bitung.
                                </div>
                                <div class="box-sosmed">
                                    <a href="https://www.facebook.com/Nyaku-Bitung-104920565719102" title="Facebook Nyaku" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/nyakubitung.id/" title="Instagram Nyaku" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://twitter.com/Nyaku_Bitung_id" title="Twitter Nyaku" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/channel/UClW2UIC3d6mAyML5ZrdErzA" title="Youtube Nyaku" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.tiktok.com/@nyakubitung.id?lang=id-ID" title="TikTok Nyaku" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-footer2">
                                <h2 style="font-family: var(--font-dasar);">Gabung</h2>
                                <ul class="list1 pt-4">
                                    <li><a href="html/mitra/mitra_merchant/syarat.html" title="">Mitra Merchant</a></li>
                                    <li><a href="html/mitra/mitra_driver/syarat.html" title="">Mitra Driver</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="box-footer2">
                                <h2 style="font-family: var(--font-dasar);">Pintasan</h2>
                                <ul class="list1 pt-4">
                                    <li><a href="html/mitra/mitra_driver/driver.html" title="">Mitra Driver</a></li>
                                    <li><a href="html/mitra/mitra_merchant/merchant.html" title="">Mitra Merchant</a></li>
                                    <li><a href="html/layanan/layanan.html" title="">Layanan</a></li>
                                    <li><a href="html/privacy/privacy.html" title="">Privacy Police</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-footer3">
                                <h2 style="font-family: var(--font-dasar);">Hubungi Kami</h2>
                                <ul class="list1 pt-4">
                                   <li><i class="fas fa-envelope"></i><a href="https://mail.google.com/mail/?view=cm&fs=1&to=nyakubitung.id@gmail.com">nyakubitung.id@gmail.com</a></li>
                                    <li><i class="fa-brands fa-whatsapp"></i><a href="#">+62 8xxxxxxx</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="box-copy">
                        &copy; 2022. <b>Nyaku Bitung</b>. All Rights Reserved
                    </div>
                  <div class="img-nuku">
                    <img src="./assets/img/Powered by NuKu.png" width="150px" alt="Powered By NuKu">
                  </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->

    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/video-player.js') }}"></script>
    <script>
      $('.owl-carousel-video').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
    </script>
    <script>
      let listVideo = document.querySelectorAll('.video-list .vid');
      let mainVideo = document.querySelector('.main-video video');
      let title = document.querySelector('.main-video .title-galery');

      listVideo.forEach(video => {
        video.onclick = () =>{
          listVideo.forEach(vid => vid.classList.remove('active'));
          video.classList.add('active');
          if(video.classList.contains('active')){
            let src = video.children[0].getAttribute('src');
            mainVideo.src = src;
            let text = video.children[1].innerHTML;
            title.innerHTML = text;
          }
        }
      })
    </script>

  </body>
</html>
