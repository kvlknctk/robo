@extends('layout.master')

@section('body')
    <!-- anaasayfa -->
    <!-- arka slider -->

    <style>
        #myVideo {
            /*position: fixed;*/
            height: 600px!important;
            right: 0;
            min-width: 100%;
            min-height: 100%;
        }

        ._pattern-overlay {
            position: absolute;
            top: 0;
            width: 100%;
            opacity: 0.3;
            bottom: 0;
            background-image: url(https://cdnjs.cloudflare.com/ajax/libs/vegas/2.3.1/overlays/03.png);
            z-index: 1;
        }

        ._pattern-overlay2 {
            z-index: 5;

            position: absolute;
            top: 0;
            margin-top: 200px;
            width: 100%;


        }
        .videoalan {
            background: #000;
            position: relative;
            z-index: -99;
            overflow: hidden;
            height: 61vh;
        }
    </style>

    <div class="bgslider videoalan">
        <div class="_pattern-overlay"></div>



        <video autoplay muted loop id="myVideo">
            <source src="{{asset('video/video3.mp4')}}" type="video/mp4">
            Tarayiciniz video oynatma ozelligini desteklemiyor.
        </video>



        <div id="owl-slider-home" class="owl-carousel _pattern-overlay2">

            @foreach($slider as $item)
                <div class="item">
                    {{--<img alt="background" src="{{asset('storage/'.$item->image)}}">--}}
                    <!-- intro -->
                    <div class=" v-align text-center">
                        <div class="col-md-10 col-xs-11">

                            <h1 class="onStep" data-animation="fadeInUp" data-time="300">
                                {{$item->title1}}
                            </h1>
                            <span class="devider-center onStep" data-animation="fadeInUp" data-time="400"></span>
                            <div class="onStep" data-animation="fadeInUp" data-time="600" id="slidertext">
                                <h3>{{$item->title2}}</h3>
                            </div>

                            {{--@if($item->link)
                                <div class="btn-home onStep scroll-link" data-animation="fadeInUp" data-id="about"
                                     data-time="800">
                                    <a class="link-class" href="{{$item->link}}">DETAY</a>
                                </div>
                            @endif--}}


                        </div>
                    </div>
                    <!-- intro end -->
                </div>
            @endforeach


        </div>
    </div>


    <!-- sarı -->
 {{--   <section class="yellow-page v-align">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <a class="popup-form" href="#subwrap"><h4 class="text-center onStep" data-animation="fadeInUp"
                                                              data-time="600">E-Bülten Kaydı</h4></a>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- sarı end -->

    <!-- bölüm contact -->
    <section class="contactbg  no-bottom" id="contactus">


        <div class="container">
            <div class="row">

                @include('part.contact')
            </div>
        </div>


        <div class="space-single"></div>
    </section>
    <!-- bölüm contact end -->
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        });


        function gonder() {

            var name    = $('#name').val();
            var email   = $('#email').val();
            var message = $('#message').val();

            $.ajax({
                type: "post",
                url: '{{route('iletisim_post')}}',
                data: {
                    name: name,
                    email : email,
                    message: message
                },
                dataType: "json",
                success: function (gelen) {
                    if(gelen == "1"){
                        alert("Mesajınız gönderildi. Kısa süre sonra sizinle iletişime geçilecektir.");
                        $('#name').val("");
                        $('#email').val("");
                        $('#message').val("");
                    }else {
                        alert('Bir problem oluştu lütfen telefon yolu ile iletişime geçiniz. ')
                    }

                }
            });

        }
    </script>
    @endsection