<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    {!! SEO::generate() !!}
    <meta content="Robotaryum Ltd. Şti. " name="author">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta name="yandex-verification" content="8390d93eebbc930a" />
    <link href="{{asset('img/favicon.png')}}" rel="icon" sizes="32x32" type="image/png">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/animated-black.css')}}" rel="stylesheet">
    <link href="{{asset('css/black-style.css')}}" rel="stylesheet">
    @yield('css')
    <link href="{{asset('css/queries-black.css')}}" media="all" rel="stylesheet" type="text/css">
    <meta content="{{url('/')}}" name="site_url">
    <meta content="{{csrf_token()}}" name="_token">

</head>
<body>

<!-- yükleyici -->
<div class="bg-preloader"></div>
<div class="preloader">
    <div class="mainpreloader">
        <img alt="preloaderlogo" src="{{Voyager::image(setting('grafik.logo'))}}"> <span class="logo-preloader">lütfen bekleyiniz</span>
    </div>
</div>
<!-- yükleyici end -->

<!-- içerik  -->
<div class="content-wrapper">

    <!-- menü -->
    <div class="navbar navbar-default navbar-fixed-top onStep sticky-nav" data-animation="fadeInDown" data-time="0">
        <div class="container" >

            <!-- mobil menü-->
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span></button>

            <!-- logo -->
            <a class="navbar-brand" href="{{route('index')}}" >
                <img alt="Robotaryum logo" src="{{Voyager::image(setting('grafik.logo'))}}">
            </a>

            <!-- anamenü -->
            <div class="menu-init" id="main-menu">
                <nav>
                    <ul>
                        {{--@php(menu('main', 'robo_menu'))--}}
                        <li><a href="{{route('index')}}">Anasayfa</a></li>

                        <li>
                            <a href="{{route('kurumsal')}}">Kurumsal</a>
                            <ul>
                                @foreach($kurumsal as $item)
                                    <li>
                                        <a href="{{route('kurumsal_slug', ['slug'=>$item->slug])}}">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('hizmetler')}}">Hizmetler</a>
                            <ul>
                                @foreach($hizmet as $item2)
                                    <li>
                                        <a href="{{route('hizmetler_slug', ['slug'=>$item2->slug])}}">{{$item2->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('calismalar')}}">Çalışmalar</a>
                            <ul>
                                @foreach($allcategories as $item3)
                                    <li>
                                        <a href="{{route('calismalar_cat', ['slug'=>$item3->slug])}}">{{$item3->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('iletisim')}}">İletişim</a></li>

                    </ul>
                </nav>
            </div>
            <!-- anamenü  -->

        </div>
        <!-- .içerik -->
    </div>


    @yield('body')

    <!-- alt -->
    <section class="footer" aria-label="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="onStep" data-animation="fadeInRight" data-time="0">
                        &copy; Copyright 2017 -  Robotaryum Ltd. Şti.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <div class="social-icons  onStep" data-animation="fadeInLeft" data-time="600">
                            <a href="{{Voyager::setting('sosyal-medya.facebook')}}" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="{{Voyager::setting('sosyal-medya.twitter')}}" target="_blank"><i class="fa fa-twitter fa-lg "></i></a>
                            <a href="{{Voyager::setting('sosyal-medya.youtube')}}" target="_blank"><i class="fa fa-youtube fa-lg "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="totop">
        <i class="fa fa-angle-up"></i>
    </div>

</div>



{{--<div class="white-popup-block mfp-hide animbouncefall" data-time="0" id="subwrap">
    <h5>Lütfen <span class="color">E-Posta</span> adresinizi yazın. </h5>
    <div class="space-half"></div>
    <form action="subscribe.php" id="subscribe" method="post" name="subscribe">
        <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text">
        <button class="btn-form" id="submit-2" type="submit">Haber Listesine Ekle</button>
    </form>
    <div class="subscribesuccess">Teşekkürler. E-Posta listemize eklendiniz. </div>
</div> temizlik ile git kontrolü --}}



<script src="{{asset('plugin/pluginsblack.js')}}" type="text/javascript"></script>
<script src="{{asset('js/black.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.jcountdown.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>

@yield('js')

@yield('jsPart')


</body>


</html>
