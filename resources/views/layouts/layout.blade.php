<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="wide wow-animation">

<head>
    <!-- Site Title-->
    <title>Welcom to {{config('app.name')}}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta
        name="description"
        content="Tashi Delek Cuisine in el cerrito, CA. The best Tibetan, Indian and Nepali cuisine in El Cerrito, California area. "
    />
    <meta
        property="og:description"
        content="Tashi Delek Cuisine in el cerrito, CA. The best Tibetan, Indian and Nepali cuisine in El Cerrito, California area. "
    />
    <meta
        property="og:image"
        content="https://popmenucloud.com/cdn-cgi/image/width=300,height=300,format=auto,fit=pad,background=transparent/qevljzux/365ba427-253c-413d-b78b-396a5a076313.png"
    />
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="preload" as="font"
          href="https://fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
    <link rel="preload" as="style" href="{{mix('css/app.css', 'dist')}}">
    <link rel="stylesheet" href="{{asset('static/css/style.css')}}">
    <link rel="stylesheet" href="{{mix('css/app.css', 'dist')}}">


    <!--[if lt IE 10]>
    <div
        style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            src="{{asset('images/ie8-panel/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
{{--    <script src="{{asset('js/html5shiv.min.js')}}"></script>--}}
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-head">
        <!-- RD Navbar-->
        @include('includes.topMenu')
    </header>
    <!-- Page Content-->
    <main class="page-content">
        <!-- Swiper variant 3-->
        @yield('content')

        <section>
            <!-- RD Google Map-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5293.347728247527!2d-122.31582176564793!3d37.920070922416684!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeaf61a6bdbd919f8!2sTashi%20Delek%20Cuisine!5e0!3m2!1sen!2snp!4v1620159603302!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
    <!-- Page Footer-->
    @include('includes.footer')
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- PhotoSwipe Gallery-->
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
<!-- Java script-->
<script src="{{mix('js/manifest.js', 'dist')}}"></script>
<script src="{{mix('js/app.js', 'dist')}}"></script>
<script src="{{mix('js/vendor.js', 'dist')}}"></script>
<script src="{{asset('static/js/core.min.js')}}"></script>
<script src="{{asset('static/js/script.js')}}"></script>

</body>

</html>
