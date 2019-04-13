<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    {!! SEO::generate() !!}

    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- favicon -->
    <link href="{{asset('img/favicon-black.png')}}" rel="icon" sizes="32x32" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- font themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- black CSS -->
    <link href="{{asset('css/animated-black.css')}}" rel="stylesheet">
    <link href="{{asset('css/black-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/queries-black.css')}}" media="all" rel="stylesheet" type="text/css">
</head>
<body>

<!-- preloader -->
<div class="bg-preloader"></div>
<div class="preloader">
    <div class="mainpreloader">
        <img alt="preloaderlogo" src="{{asset('img/logo.png')}}"> <span class="logo-preloader">lütfen bekleyiniz...</span>
    </div>
</div>
<!-- preloader end -->

<!-- content wraper -->
<div class="content-wrapper">

    <!-- subnav -->
    <div class="subnav">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="social-icons-subnav">
                        <a href="#"><span class="ti-location-pin"></span>129 Park street, New York City, NY 10903</a>
                        <a href="#"><span class="ti-mobile"></span>+02151 7778 009</a>
                        <a href="#"><span class="ti-time"></span>Pazartesi - Cumartesi 08:00am ~ 05:00pm</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="right">
                        <div class="social-icons-subnav">
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-dribbble"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- subnav end -->

    <!-- nav -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">

                <!-- menu mobile display -->
                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span></button>

                <!-- logo -->
                <a class="navbar-brand" href="{{route('index')}}"><img alt="logo" src="{{asset('img/logo.png')}}"></a>

                <!-- mainmenu start -->
                <div class="menu-init" id="main-menu">
                    <nav id="menu-center">
                        <ul>
                            <li><a class="{{active(['index'], 'active')}}" href="{{route('index')}}">Anasayfa</a></li>

                            <li class="space">•</li>

                            <li><a class="{{active(['kurumsal'], 'active')}}" href="{{route('kurumsal')}}">Kurumsal</a></li>

                            <li class="space">•</li>



                        </ul>
                    </nav>
                </div>
                <!-- mainmenu end -->

            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- nav end -->

    @yield('content')

    <!-- footer -->
    <section class="footer" aria-label="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-xs-12">
                    <div class="onStep" data-animation="fadeInLeft" data-time="0">
                        <h4>BLACK CONSTRUCTION</h4>
                        <div class="devider-footer"></div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="onStep" data-animation="fadeInRight" data-time="300">
                        Black &copy; Copyright 2017 by on3-step
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="social-icons  onStep" data-animation="fadeInLeft" data-time="600">
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-dribbble"></span></a>
                        <a href="#"><span class="ti-twitter"></span></a>
                        <a href="#"><span class="ti-linkedin"></span></a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- footer end -->

    <!-- ScrolltoTop -->
    <div id="totop">
        <span class="ti-angle-up"></span>
    </div>

</div>
<!-- content wraper end -->

<!-- plugin JS -->
<script src="plugin/pluginsblack.js" type="text/javascript"></script>
<!--  map google  -->
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>
<script src="js/map.js" type="text/javascript"></script>
<!-- black JS -->
<script src="js/black.js" type="text/javascript"></script>

</body>
</html>