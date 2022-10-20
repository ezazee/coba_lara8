@extends('layouts.blog-app')

@section('title')
    Blog
@endsection

@push('add-blog')
<div class="carousel-blog">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
        <div class="progress-bar__fill"></div>
    </div>

    <header class="main-post-wrapper">
        <div class="slides">
            <article  class="main-post main-post--active">
                <div class="main-post__image">
                    <img src="{{ asset('frontend/assets/img/kontenblog/fesival.jpeg') }}" alt="Payment Nyaku Bitung" />
                </div>
                <div class="main-post__content">
                    <div class="main-post__tag-wrapper">
                        <span class="main-post__tag">Mitra</span>
                    </div>
                    <h1 class="main-post__title">Nyaku Bitung Eksis Di Festival Pesona Selat Lambeh 2022</h1>
                    <a class="main-post__link" href="./konten/Festival Pesona Selat Lembeh 2022/konten.html">
                        <span class="main-post__link-text">Selengkapnya</span>
                        <svg
                            class="main-post__link-icon main-post__link-icon--arrow"
                            width="37"
                            height="12"
                            viewBox="0 0 37 12"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                            stroke="white"
                            />
                        </svg>
                        </a>
                </div>
            </article>

            <article class="main-post main-post--not-active">
                <div class="main-post__image">
                    <img src="{{ asset('frontend/assets/img/kontenblog/konten_blog.jpg') }}" alt="Reservasi Hotel" />
                </div>
                <div class="main-post__content">
                    <div class="main-post__tag-wrapper">
                    <span class="main-post__tag">Mitra</span>
                    </div>
                    <h1 class="main-post__title">Pemkot Bitung Buat Gebrakan Transportasi Online</h1>
                    <a class="main-post__link" href="./konten/Pemkot Bitung Buat Gebrakan Transportasi Online/konten.html">
                        <span class="main-post__link-text">Selengkapnya</span>
                        <svg
                            class="main-post__link-icon main-post__link-icon--arrow"
                            width="37"
                            height="12"
                            viewBox="0 0 37 12"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                            stroke="white"
                            />
                        </svg>
                        </a>
                </div>
            </article>

            <article class="main-post main-post--not-active">
                <div class="main-post__image">
                    <img src="{{ asset('frontend/assets/img/banner/BannerMitraDriver.jpg') }}" alt="Nyaku Antar Promo" />
                </div>
                <div class="main-post__content">
                    <div class="main-post__tag-wrapper">
                    <span class="main-post__tag">Nyaku Antar</span>
                    </div>
                    <h1 class="main-post__title">Reward Pertama Untuk 100 Driver Pertama !</h1>
                    <a class="main-post__link" href="./konten/Reward Untuk 100 Driver Pertama !!/konten.html">
                        <span class="main-post__link-text">Selengkapnya</span>
                        <svg
                            class="main-post__link-icon main-post__link-icon--arrow"
                            width="37"
                            height="12"
                            viewBox="0 0 37 12"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                            stroke="white"
                            />
                        </svg>
                        </a>
                </div>
            </article>
        </div>
    </header>

    <div class="posts-wrapper hide-on-mobile">
        <article onclick="location.href='./konten/Festival Pesona Selat Lembeh 2022/Festival Pesona Selat Lembeh 2022.html' " style="cursor: pointer;" class="post post--active">
            <div class="progress-bar">
            <div class="progress-bar__fill"></div>
            </div>
            <header class="post__header">
            <span class="post__tag">Mitra</span>
            <p class="post__published">07 Oktober 2022</p>
            </header>
            <h2 class="post__title">Nyaku Bitung Eksis Di Festival Pesona Selat Lembeh 2022 Di Bitung</h2>
        </article>
        <article onclick="location.href='./konten/Pemkot Bitung Buat Gebrakan Transportasi Online/konten.html' " style="cursor: pointer;" class="post">
            <div class="progress-bar">
            <div class="progress-bar__fill"></div>
            </div>
            <header class="post__header">
            <span class="post__tag">Mitra</span>
            <p class="post__published">21 September 2022</p>
            </header>
            <h2 class="post__title">Pemkot Bitung Buat Gebrakan Transportasi Online</h2>
        </article>
        <article onclick="location.href='./konten/Reward Untuk 100 Driver Pertama !!/konten.html' " style="cursor: pointer;" class="post">
            <div class="progress-bar">
            <div class="progress-bar__fill"></div>
            </div>
            <header class="post__header">
            <span class="post__tag">Nyaku Antar</span>
            <p class="post__published">6 Oktober 2022</p>
            </header>
            <h2 class="post__title">Reward Pertama Untuk 100 Driver Pertama !</h2>
        </article>
    </div>
</div>
@endpush

@section('content')
    <section class="c-section container-fluid mb-0">
        <div class="container">
            <h1 class="c-heading__h1 pt-md-4 pt-3 mb-1">
                Ada Apa di Nyaku Bitung ?</h1>
            <p class="c-heading__p pb-md-4 pb-3">
                Berita Baru Dan Seru Untuk Dibaca
            </p>
        </div>
    </section>

    <!-- Search And Kategory -->
    <section class="pb-4 mb-0 mb-md-4">
        <div class="container-fluid">
            <div class="container">
                <form action="#" method="GET">
                    <div class="row c-filter-box p-0">

                        <div class="col-12 col-md-3 mb-1 mb-md-0 pr-0 pr-md-2">
                            <label class="c-filter-box__label mb-2 u-hide--mobile">Kategori</label>
                            <div class="c-select">
                                <input type="hidden" value="#" name="service" id="val-service" />
                                <div class="c-select__dropdown js-dropdown">
                                    <label class="c-select__dropdown__label">
                                        Semua
                                </label>
                                </div>
                                <div class="c-select__option">
                                    <ul class="c-select__list js-colspan">
                                        <li class="c-select__list__option  c-select__list__option--active  js-option" data-value="Niki Anterin" data-placeholder="Niki Anterin" data-target="#val-service" data-list="list__option">
                                            <a> Nyaku Antar</a>
                                        </li>
                                        <li class="c-select__list__option  js-option" data-value="Niki Kirimin" data-placeholder="Niki Kirimin" data-target="#val-service" data-list="list__option">
                                            <a>Nyaku Bakirim</a>
                                        </li>
                                        <li class="c-select__list__option  js-option" data-value="Niki Belanjain" data-placeholder="Niki Belanjain" data-target="#val-service" data-list="list__option">
                                            <a>Nyaku Mobabeli</a>
                                        </li>
                                        <li class="c-select__list__option  js-option" data-value="mitra" data-placeholder="Mitra" data-target="#val-service" data-list="list__option">
                                            <a>Mitra</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 align-self-end">
                            <div class="c-search">
                                <input type="text" placeholder="Cari Blog...." class="c-search__field" name="q"
                                    autocomplete="off" value="" maxlength="100" />
                                <button class="c-search__button col-auto" type="submit">
                                    <i class="fa fa-search"></i> <span class="u-hide--mobile ml-1">Cari</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Card Blog -->
    <section class="c-section container-fluid pb-1 pb-md-2">
        <div class="container-konten-blog">
            <div class="o-row o-row--slider">

                <!-- Card 15 -->
                <div class="o-row--slider__col-3 c-list-grid-item">
                    <a href="./konten/Cara Daftar Menjadi Mitra Nyaku Bitung Lebih Cepat/konten.html">
                        <div class="col-12">
                            <div class="c-blog-hl-wrapper--one lazy">
                                <picture class="lazy loaded">
                                    <img src="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" data-src="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" srcset="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" data-srcset="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" class="c-blog-hl-image-helper lazy loaded" alt="Tata Cara Daftar Mitra Driver Nyaku Bitung" type="image/jpeg" data-was-processed="true">
                                </picture>
                                <picture class="lazy loaded">
                                    <img src="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" data-src="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" srcset="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" data-srcset="{{ asset('frontend/assets/img/kontenblog/konten_12.jpg') }}" class="c-blog-hl-image lazy loaded" alt="Tata Cara Daftar Mitra Driver Nyaku Bitung" type="image/jpeg" data-was-processed="true">
                                </picture>
                            </div>
                        </div>
                        <h3 class="col-12 c-blog-highlight__title-4">Cara Daftar Menjadi Mitra Nyaku Bitung || Lebih Cepat</h3>
                        <div class="mt-auto col-12 row justify-content-between">
                            <span class="c-blog-highlight__date-large">Mitra / 14 Oktober 2022</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
