<!DOCTYPE html>
<html class="wide wow-animation" lang="en|id">
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
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNQ6TJ9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
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

        @yield('content')

        <!-- Footer -->

        @include('includes.footer')
        <!-- Akhir Footer -->


        <div class="snackbars" id="form-output-global"></div>
        <script src="{{ asset('frontend/js/core.min.js') }}"></script>
        <script src="{{ asset('frontend/js/script.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/video-player.js') }}"></script>
        <script src="{{ asset('frontend/js/merchant.js') }}"></script>
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
