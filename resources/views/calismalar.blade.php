@extends('layout.master')

@section('css')
    <style>
        .fact-block .fact {
            text-align: center;
            position: relative;
            padding: 20px 30px;
            margin: 0 0 50px;
            background-color: rgba(19, 19, 19, 0.5);
        }
        .fact-block .fact .factor {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 40px;
            color: rgba(255, 255, 255, 0.5);
            text-align: right;
            margin: 10px 0 15px;
        }
        .fact-block .fact h4 {
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: right;
            font-weight: 600;
            color: #ffffff;
            font-size: 15px;
            margin: 15px 0;
            font-family: 'Josefin Sans', sans-serif;
        }
        .fact-block .fact i {
            font-size: 75px;
            line-height: 100px;
            color: #b46e3c;
            float: left;
            width: 80px;
        }
        .fact-block .fact:hover {
            cursor: pointer;
            border-color: #b46e3c;
        }
        .block-feature-icon {
            position: relative;
            margin-bottom: 50px;
            min-height: 120px;
        }


        .robo_kategori {
            margin: 10px!important;
            width: 290px;
            /*padding: 10px;*/
            padding-bottom: 20px;
            height: 390px;
            background: #fecb00;
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 90%, 88% 100%, 20% 100%, 0% 100%, 0% 20%);
            clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 90%, 88% 100%, 20% 100%, 0% 100%, 0% 20%);
            font-weight: bold;
        }

        .robo_kategori:hover {
            cursor:pointer;

            background: #ffde09;

        }


        .robo_kategori_baslik {
            padding-left: 15px;
            padding-top: 10px;
        }
        .robo_kategori_baslik > h2 {
            color:black;
            font-weight: bold;
        }
        .robo_kategori_baslik > p {
            color:black;

        }

    </style>
@endsection


@section('body')

    @include('part.breadcumb')


    <section class="whitepage no-bottom no-top" id="projects">

        <div class="space-double"></div>

        <div class="container">
            <div class="row">
                <div class="onStep" data-animation="fadeInUp" data-time="600">

                   @foreach($kategoriler as $kategori)

                       <div class="col-md-3 robo_kategori_margin">
                           <div class="robo_kategori" onclick="location.href='{{route('calismalar_cat', ['slug' => $kategori->slug])}}';">

                               <img src="{{Voyager::image($kategori->thumbnail('cropped'))}}" alt="">
                               <div class="robo_kategori_baslik">
                                   <h2>{{$kategori->title}}</h2>
                                   <p>{{$kategori->body}}</p>
                               </div>
                           </div>
                       </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="space-double"></div>

    </section>


    <div class="fact-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <article class="fact" data-perc="{{Voyager::setting('degiskenler.mutlu_musteri')}}">
                        <i class="ion-ios-people-outline"></i>
                        <h1 class="factor">{{Voyager::setting('degiskenler.mutlu_musteri')}}</h1>
                        <h4>Mutlu Müşteri</h4>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="fact" data-perc="{{Voyager::setting('degiskenler.yeni_proje')}}">
                        <i class="ion-ios-lightbulb-outline"></i>
                        <h1 class="factor">{{Voyager::setting('degiskenler.yeni_proje')}}</h1>
                        <h4>Yeni Proje</h4>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6">
                    <article class="fact" data-perc="{{Voyager::setting('degiskenler.tamamlanan_proje')}}">
                        <i class="ion-ios-pint-outline"></i>
                        <h1 class="factor">{{Voyager::setting('degiskenler.tamamlanan_proje')}}</h1>
                        <h4>Tamamlanan Proje</h4>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsPart')


    <script type="application/javascript">



        (function ($) {
            $.fn.countTo = function (options) {

                options = $.extend({}, $.fn.countTo.defaults, options || {});


                var loops = Math.ceil(options.speed / options.refreshInterval),
                    increment = (options.to - options.from) / loops;

                return $(this).each(function () {
                    var _this = this,
                        loopCount = 0,
                        value = options.from,
                        interval = setInterval(updateTimer, options.refreshInterval);

                    function updateTimer() {
                        value += increment;
                        loopCount++;
                        $(_this).html(value.toFixed(options.decimals));

                        if (typeof (options.onUpdate) === 'function') {
                            options.onUpdate.call(_this, value);
                        }

                        if (loopCount >= loops) {
                            clearInterval(interval);
                            value = options.to;

                            if (typeof (options.onComplete) === 'function') {
                                options.onComplete.call(_this, value);
                            }
                        }
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 100, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                onUpdate: null, // callback method for every time the element is updated,
                onComplete: null // callback method for when the element finishes updating
            };
        })(jQuery);

        $(document).ready(function () {


            $(".fact").appear(function () {
                var dataperc;
                $('.fact').each(function () {
                    dataperc = $(this).attr('data-perc');
                    $(this).find('.factor').delay(6000).countTo({
                        from: 0,
                        to: dataperc,
                        speed: 3000,
                        refreshInterval: 50
                    });
                });
            });

        });


    </script>
    @endsection

