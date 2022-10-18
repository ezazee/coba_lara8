    <link rel="icon" href="{{ asset('frontend/assets/img/logo/nikila.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900%7CMerriweather:300,400,700,700i,900">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">

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

      /* Heading Sub Judul H6 */
      h6,
    .heading-6 {
	    font-family: var(--font-dasar);
	    font-size: 18px;
	    line-height: 1.6;
	    color: var(--warna-dasar);
    }
     /* End Heading Sub Judul H6 */

     /* Card Yang Ditawarkan */
    .card {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, var(--warna-dasar) 50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
    transition: 0.5s;
    }

    .card:hover {
        background-position: 0 100%;
    }

    .card:hover svg {
        background-color: #ffffff;
        color: var(--warna-dasar);
    }

    .card:hover h3 {
        color: #ffffff;
    }

    .card:hover p {
        color: #f0f0f0;
    }

    .icon-wrapper {
    background-color: var(--warna-dasar);
    position: relative;
    margin: auto;
    margin-bottom: 30px;
    font-size: 30px;
    height: 2.5em;
    width: 2.5em;
    color: #ffffff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: 0.5s;
  }
    /* End Card Yang Ditawarkan */

    /* Card Driver & Merchant */
.card2:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: var(--warna-dasar);
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(2);
    transform-origin: 50% 50%;
    transition: transform 0.15s ease-out;
}
/* End Card Driver & Merchant */

/* Warna Role Berita  */
.main-post__tag {
    font-size: 0.95em;
    background: var(--warna-dasar);
    padding: 6px 18px;
}
/* End Warna Role Berita */

/* Progress Barr Berita */
.progress-bar__fill {
    width: 0;
    height: inherit;
    background: var(--warna-kedua);
    transition: all 0.16s;
}
/* End Progress Barr Berita */


/* CTA banner Download */
#cta {
    padding: 30px 0;
    background: var(--warna-ketiga) url(../assets/img/banner/cta.png) center no-repeat;
    background-size: 100%;
    position: relative;
}

@media screen and (max-width: 576px) {
    #cta {
        padding: 50px 0;
        background: var(--warna-kedua) url(../assets/img/home-img.png) -110% no-repeat;
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
/* END CTA Banner Download */

/* Footer */
footer {
    background: var(--warna-kedua);
    padding: 50px 0 0 0;
    color: #E9E9E9;
}

    </style>
  </head>

