@extends('layouts.blog-app')

@section('title')
    Detail Blog
@endsection

@push('add-style')
    <link rel="stylesheet" href="{{ asset('frontend/css/konten.css') }}">
@endpush

@section('content')
<section class="mb-md-4 pb-md-1 mb-4 js-search-box c-search-box c-search-box--sticky c-search-box--static__mobile">
    <div class="container-fluid">
        <div class="container">
            <div class="row col-12 align-items-center u-hide--tablet-desktop">
            </div>
            <div class="col-12 offset-md-2 col-md-8 c-search-box--mobile pt-2 pt-md-0 active" id="form-mobile">
              <form  method="GET">
                <div class="row c-filter-box">
                  <div class="c-search col-md-12">
                    <input type="text" placeholder="Cari Masalah Anda..." class="c-search__field" name="q" autocomplete="off" value="" />
                    <button class="c-search__button" type="submit">
                      <i class="fa fa-search"></i> <span class="u-hide--mobile ml-1">Search</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section>

<article class="container-fluid">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-12 col-md-2"></div>
            <nav class="c-breadcrumbs col-12 col-md-8" aria-label="breadcrumb">
                <ol class="c-breadcrumbs__ol mt-0">
                    <li class="c-breadcrumbs-item active" itemprop="itemListElement" itemscope>
                        <span itemprop="name">Mitra /</span>
                        <span itemprop="name">14 Oktober 2022</span>
                        <meta itemprop="position" content="1" />
                    </li>
                </ol>
            </nav>
        </div>
        <section class="c-section c-faq-detail">
            <div class="row">
                <div class="c-faq-detail__content col-12 offset-md-2 col-md-8">
                    <div class="c-faq-detail__header">
                        <h1 class="c-faq-detail__title">Cara Daftar Menjadi Mitra Driver Nyaku Bitung || Lebih Cepat</h1>
                    </div>
                    <figure class="text-center">
                        <img class="lazy" data-image="11119"  src="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" style="height: auto;width: 100%; border-radius: 10px;"/>
                    </figure>
                    <div class="c-faq-detail__body">
                        <p>Halo Sobat Nyaku Bitung</p>
                        <p>Kamu tertarik untuk menjadi Mitra Driver Nyaku Bitung ? Kali ini Daftar Mitra gampang loh. Pendaftaran dapat dilakukan Online melalui <a href="https://play.google.com/store/apps/details?id=com.driverapp.nyaku">Aplikasi Nyaku Driver</a> yang sudah kamu download di Playstore dan bisa dipandu oleh Customer Service Kami</p>
                        <h6>
                            1. Siapkan Kelengkapan
                        </h6>
                        <br>
                        <p>Sebelum mulai mendaftar, kamu harus mempersiapkan kelengkapan untuk menjadi Mitra Driver</p>
                        <ol>
                            <li>1. Email</li>
                            <li>2. KTP</li>
                            <li>3. SIM</li>
                            <li>4. STNK</li>
                            <li>5. Nomor Telfon</li>
                        </ol>
                        <h6>2. Ikuti Petunjuk Pendaftaran</h6>
                        <ol>
                            <li>1. Isi Halaman Daftar (masukan email & membuat password</li>
                            <li>2. isi halaman data diri</li>
                            <li>3. isi halaman identitas kendaraan</li>
                            <li>4. membuat foto diri dengan KTP</li>
                            <li>5. membuat foto KTP</li>
                            <li>6. membuat foto SIM</li>
                            <li>7. membuat foto STNK</li>
                            <li>8. lalu klik DAFTAR</li>
                        </ol>
                        <p>Jika beruntung, kamu akan mendapatkan Atribut <a href="../Reward Untuk 100 Driver Pertama !!/konten.html">Jaket & Helm Ekslusif dari Nyaku Bitung</a></p>
                        <p>Nah itu semua adalah tata cara daftar secara online dengan <a href="https://play.google.com/store/apps/details?id=com.driverapp.nyaku">Aplikasi Nyaku Driver</a>. Pastikan ikuti semua tahapan diatas diikuti dan dipastikan juga semua dokumen yang diperlukan sudah disiapkan dan di upload dengan jelas. Yuk ambil Handphone mu dan daftar menjadi Mitra Nyaku Bitung</p>
                        <p>untuk pendampingan oleh CS kamu bisa hubungi nomor dibawah ini</p>
                        <button class="fa-whatsapp btn btn-primary btn--outline col-12 col-lg-auto"><a class="col-12 col-lg-auto" href="https://api.whatsapp.com/send/?phone=%2B6287780929728&text&type=phone_number&app_absent=0">+62 877-8092-9728</a></button>
                        <br><br>
                        <h6>FAQ</h6>
                        <p><strong>Q: Saya sudah daftar dan upload semua dokumen nya, tetapi kenapa Status Kendaraan saya belum aktif ?</strong></p>
                        <p><em> A: Ketika sudah upload semua dokumennya, Harap tunggu proses verifikasi yang dilakukan oleh admin kami, jika masih belum aktif kamu bisa hubungi kontak yang sudah tertera di atas</em></p>Z
                    </div>
                    <div class="c-faq-detail__footer">
                        <p class="c-faq-detail__helpful u-text-align__center">Apa artikel ini cukup membantu?</p>
                        <div class="c-faq-detail__buttons row justify-content-md-center">
                        <a
                        href="#"
                            onclick="return false"
                            class="js-snackbar col col-md-auto col-lg-auto"
                            data-snack-label="&lt;strong&gt;Great&lt;/strong&gt;, Thank you for your response"
                            data-snack-color=""
                            data-snack-timer="4000">
                            <button class="btn btn-primary btn--outline col-12 col-lg-auto js-show-popup">Ya</button>
                        </a>
                        <a  href="#"
                            onclick="return false"
                            class="js-snackbar col col-md-auto col-lg-auto pl-1 pl-md-2"
                            data-snack-label="We will try better next time, Thank You"
                            data-snack-color=""
                            data-snack-timer="4000">
                            <button class="btn btn-primary btn--outline col-12 col-lg-auto">Tidak</button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</article>
@endsection
