@extends('layout.master')

@section('body')

    @include('part.breadcumb')

    <section class="whitepage" id="about">


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center onStep" data-animation="fadeInUp" data-time="0">
                        Hakkımızda <span class="devider-black"></span>
                    </h2>

                    <div class="space-single">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="text-center onStep" data-animation="fadeInUp" data-time="300">
                        <p>
                            {!! Voyager::setting('hakkimizda') !!}
                        </p>
                    </div>

                    <div class="space-double">
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="service-about">
                        @foreach($images as $item)
                            <div class="service-about onStep" data-animation="fadeInLeft" data-time="0">
                                <a class="hovereffect" target="_blank" href="{{asset('storage/'.$item->image)}}">
                                    <div class="hovereffect">
                                        <img alt="imageportofolio" class="img-responsive" src="{{asset('storage/'.$item->image)}}">
                                        <div class="overlay"></div>
                                        <h2>{{$item->title}}</h2>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>


    </section>


@endsection