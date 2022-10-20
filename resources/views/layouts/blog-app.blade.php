<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nyaku Bitung | @yield('title')</title>
     <meta charset="utf-8">
    <meta name="keywords" content="Nyaku, Marketplace, Bitung, Driver ">
    <meta name="title" content="Nyaku Bitung">
    <meta name="description" content="Nyaku Bitung || Marketplace yang digabungkan dengan Delivery Order">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Nyaku Bitung" />
    <meta property="og:description" content="www.nyakubitung.com" />
    <meta property="og:url" content="https://ezazee.github.io/nyakubitung/" />
    <meta property="og:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}"/>


    <!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">
<meta property="og:url" content="www.nyakubitung.com">
<meta property="og:title" content="Nyaku Bitung || Marketplace yang digabungkan dengan Delivery Order">
<meta property="og:description" content="Marketplace yang digabungkan dengan Delivery Order">
<meta property="og:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">
<meta property="twitter:url" content="www.nyakubitung.com">
<meta property="twitter:title" content="Nyaku Bitung || Marketplace yang digabungkan dengan Delivery Order">
<meta property="twitter:description" content="Marketplace yang digabungkan dengan Delivery Order">
<meta property="twitter:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">

    <link rel="icon" href="../../assets/img/logo/nikila.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900%7CMerriweather:300,400,700,700i,900">
    @include('includes.style')
    <link rel="stylesheet" href="{{ asset('frontend/css/konten_blog.css') }}">
    @stack('add-style')
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <style>
        :root{
    --warna-dasar: #B70909;
    --warna-kedua: #660707;
    --warna-ketiga: #500202;
    --warna-putih1: #fff;
    --warna-putih2: #fafafa;
    --font-dasar: 'Poppins', sans-serif;
    --size-font-subtitle: 50px;
    }

  /* Button Arrow To Top Webstie */
    .ui-to-top {
	position: fixed;
	right: 15px;
	bottom: 15px;
	z-index: 100;
	width: 40px;
	height: 40px;
	font-size: 24px;
	line-height: 36px;
	border-radius: 50%;
	color: #ffffff;
	background: var(--warna-dasar);
	overflow: hidden;
	text-align: center;
	text-decoration: none;
	transition: all 0.3s ease-in-out;
	transform: translate3d(0, 100px, 0);
    }

    .ui-to-top:hover {
        color: #ffffff;
        background: var(--warna-kedua);
        text-decoration: none;
}
/* End Button ARROW  */

    /* Pre Loader */
    .cssload-speeding-wheel {
        width: 64px;
        height: 64px;
        margin: 0 auto;
        border: 3px solid var(--warna-dasar);
        border-radius: 50%;
        border-left-color: transparent;
        border-bottom-color: transparent;
        animation: cssload-spin .88s infinite linear;
  }
/* End Pre Loader */


      /* Button Belanja Sekarang & Button Selengkapnya di Kategori Layanan */
      .button-secondary, .button-secondary:focus {
	    color: #ffffff;
	    background-color: var(--warna-dasar);
	    border-color: var(--warna-dasar);
      }

      .button-secondary:hover, .button-secondary:active, .button-secondary.active {
	    color: #ffffff;
	    background-color: var(--warna-kedua);
    	border-color: var(--warna-kedua);
      }

      .button-secondary.button-nuka:hover, .button-secondary.button-nuka:active, .button-secondary.button-nuka.active {
	background-color: var(--warna-kedua);
      }

      .button-secondary.button-nuka .button-overlay {
        background-color: var(--warna-kedua);
      }
      /* End Button Belanja Sekarang & Button Selengkapnya di Kategori Layanan */


      /* Hover Text Navbar */
      .rd-navbar-static.context-dark .rd-nav-link:hover, .rd-navbar-static.bg-gray-700 .rd-nav-link:hover, .rd-navbar-static.bg-gray-800 .rd-nav-link:hover, .rd-navbar-static.bg-primary-app .rd-nav-link:hover, .rd-navbar-static.bg-primary .rd-nav-link:hover, .rd-navbar-static.bg-primary-1 .rd-nav-link:hover, .rd-navbar-static.bg-primary-2 .rd-nav-link:hover, .rd-navbar-static.bg-wave-dark-wrap .rd-nav-link:hover, .rd-navbar-static.bg-gradient-primary .rd-nav-link:hover, .rd-navbar-static.bg-gradient-primary-1 .rd-nav-link:hover, .rd-navbar-static.rd-navbar-corporate .rd-nav-link:hover {
	    color: var(--warna-dasar);
      }
      /* End Hover Text Navbar */

       /* Button Seacrj */
       .c-search__button {
      position: absolute;
      min-height: 2.75rem;
      min-width: 4rem;
      background-color: transparent;
      font-size: 1rem;
      color: var(--warna-kedua);
      border: none;
      border-top-right-radius: 24px;
      border-bottom-right-radius: 24px;
      text-align: center;
      right: 0;
      top: 0;
      font-weight: 400;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      cursor: pointer;
      -webkit-transition: .3s;
      transition: .3s;
      padding: .5rem;
      font-family: var(--font-dasar)
  }

    .c-search__button:active {
      background-color: var(--warna-ketiga)
  }

  @media (min-width:768px) {
      .c-search__button {
          position: relative;
          top: auto;
          right: auto;
          color: #fff;
          background-color: var(--warna-kedua);
          min-height: 3rem;
          min-width: 7.5rem;
          border-radius: 24px;
          font-size: 1rem
      }
  }
  /* End Button Search */

/* Konten Blog hero  */
  .progress-bar__fill {
    width: 0;
    height: inherit;
    background: var(--warna-kedua);
    transition: all 0.16s;
}

.progress-bar {
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
	text-align: center;
	white-space: nowrap;
	background-color: var(--warna-dasar);
	transition: width 0.6s ease;
}

/* End Konten Blog Hero */

 /* Color Dropdown */
  .c-select__dropdown--active {
     border: .5px solid var(--warna-dasar)
 }
 /* End Color Dropdown */

  /* Banner CTA */
#cta {
    padding: 50px 0;
    background: var(--warna-ketiga) url('frontend/assets/img/Smatphone/smartphone-full.png') -200px center no-repeat;
    background-size: 67%;
    position: relative;
}

@media screen and (max-width: 576px) {
    #cta {
        padding: 50px 0;
        background: var(--warna-kedua) url(../../assets/img/home-img.png) -110% no-repeat;
        background-size: 20%;
        position: relative;
    }

    #cta .box-cta {
        width: auto;
        margin-left: auto;
    }

    #cta .cta-text {
        text-align: center;
        font-size: 30px;
        line-height: 40px;
        font-weight: 600;
        color: #FFF;
        margin-bottom: 30px;
    }

    #cta a.btn-cta {
        background: #FFF;
        border-radius: 40px;
        color: #222;
        margin-left: 100px;
        font-weight: 600;
        padding: 8px 20px;
    }
  }

  /* end banner CTA */


  /* Footer */
footer {
    background: var(--warna-kedua);
    padding: 50px 0 0 0;
    color: #E9E9E9;
}
/* End Footer */
    </style>


</head>
<body>
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

    <!-- Blog -->

    @stack('add-blog')

    <!-- End Blog -->


    <main class="component-wrapper">
        @yield('content')
    </main>

    <section id="cta">
        <div class="container">
            <div class="box-cta">
                <div class="cta-text" data-aos="fade-right">Cintai Produk Lamongan.<br> Cintai Produk Daerah.<br> Yuk, download<br> sekarang juga</div>
                <a href="https://play.google.com/store/apps/details?id=com.nusantaraku.nyaku_app_user_merchant" class="btn btn-cta" title="Download Nyaku Bitung" target="_blank" data-aos="fade-down">
                    <i class="fab fa-google-play"></i> Play store
                </a>
            </div>
        </div>
    </section>

        @include('includes.footer')

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
