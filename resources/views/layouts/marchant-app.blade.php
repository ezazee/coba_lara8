<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
     <title>Nyaku Bitung | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Nyaku, Marketplace, Bitung, Driver ">
    <meta name="title" content="Nyaku Bitung">
    <meta name="description" content="Nyaku Bitung || Gabungan Marketplace dan Delivery Order">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Nyaku Bitung" />
    <meta property="og:description" content="www.nyakubitung.com" />
    <meta property="og:url" content="https://ezazee.github.io/nyakubitung/" />
    <meta property="og:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}"/>


    <!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">
<meta property="og:url" content="www.nyakubitung.com">
<meta property="og:title" content="Nyaku Bitung || Gabungan Marketplace dan Delivery Order">
<meta property="og:description" content="Gabungan Marketplace dan Delivery Order">
<meta property="og:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">
<meta property="twitter:url" content="www.nyakubitung.com">
<meta property="twitter:title" content="Nyaku Bitung || Gabungan Marketplace dan Delivery Order">
<meta property="twitter:description" content="Gabungan Marketplace dan Delivery Order">
<meta property="twitter:image" content="{{ asset('frontend/assets/img/banner/banner08.jpg') }}">

    <link rel="icon" href="{{ asset('frontend/assets/img/logo/nikila.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900%7CMerriweather:300,400,700,700i,900">

    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/merchant.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/driver.css') }}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

    <style>
          /* Root Variable Color */
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

  /* Button Belanja Sekarang & Button Daftar Sekarang */
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
      /* End Button Belanja Sekarang & Button Daftar Sekarang */


      /* Hover Text Navbar */
      .rd-navbar-static.context-dark .rd-nav-link:hover, .rd-navbar-static.bg-gray-700 .rd-nav-link:hover, .rd-navbar-static.bg-gray-800 .rd-nav-link:hover, .rd-navbar-static.bg-primary-app .rd-nav-link:hover, .rd-navbar-static.bg-primary .rd-nav-link:hover, .rd-navbar-static.bg-primary-1 .rd-nav-link:hover, .rd-navbar-static.bg-primary-2 .rd-nav-link:hover, .rd-navbar-static.bg-wave-dark-wrap .rd-nav-link:hover, .rd-navbar-static.bg-gradient-primary .rd-nav-link:hover, .rd-navbar-static.bg-gradient-primary-1 .rd-nav-link:hover, .rd-navbar-static.rd-navbar-corporate .rd-nav-link:hover {
	    color: var(--warna-dasar);
      }
      /* End Hover Text Navbar */

          /* Card Kenapa Gabung */

.card:hover .circle {
    border-color: var(--warna-kedua);
    background: var(--warna-kedua);
}

.card:hover .circle:after {
    background: var(--warna-dasar);
}

.card:hover p {
    color: var(--warna-putih1);
}


.circle {
    width: 131px;
    height: 131px;
    border-radius: 50%;
    background: #fff;
    border: 2px solid var(--warna-ketiga);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease-out;
}

.circle:after {
    content: "";
    width: 118px;
    height: 118px;
    display: block;
    position: absolute;
    background: var(--warna-ketiga);
    border-radius: 50%;
    top: 7px;
    left: 7px;
    transition: opacity 0.3s ease-out;
}

.overlay {
    width: 118px;
    position: absolute;
    height: 118px;
    border-radius: 50%;
    background: var(--warna-dasar);
    top: 70px;
    left: 50px;
    z-index: 0;
    transition: transform 0.3s ease-out;
}

/* End Card Kenapa Gabung */

/* Button Aktif Tutor Pesen */
.aktif{
    background: var(--warna-kedua);
    color: #FFF;
}
/* End Button */

/* CTA banner */
#cta {
    padding: 50px 0;
    background: var(--warna-kedua) url('frontend/assets/img/Ilustrasi/Daftar.png')  no-repeat;
    background-size: 40%;
    position: relative;
}
#cta1 {
    padding: 50px 0;
    background: var(--warna-kedua) url('frontend/assets/img/Ilustrasi/DaftarDriver.png')  no-repeat;
    background-size: 40%;
    position: relative;
}

@media screen and (max-width: 576px) {
    #cta {
    padding: 50px 0;
    background: var(--warna-kedua) url(../../../assets/img/home-img.png) -110% no-repeat;
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
/* END CTA Banner */

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

      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">

          @include('includes.navbar')

        </div>
      </header>

      @yield('content')

      @include('includes.footer')

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/merchant.js') }}"></script>
    <script src="{{ asset('frontend/js/driver.js') }}"></script>
  </body>
</html>
