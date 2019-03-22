@extends('layout.master')

@section('css')
    <style>

        .robo_kose {
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 80%, 90% 100%, 20% 100%, 0% 100%, 0% 20%);
            clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 80%, 90% 100%, 20% 100%, 0% 100%, 0% 20%);

        }

        .robo_kategori {
            margin: 10px!important;
            width: 290px;
            /*padding: 10px;*/
            padding-bottom: 20px;
            height: 100px;
            background: #fecb00;
            -webkit-clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 80%, 90% 100%, 20% 100%, 0% 100%, 0% 20%);
            clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 100% 80%, 90% 100%, 20% 100%, 0% 100%, 0% 20%);
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
          {{--  <div class="row">
                <div class="onStep" data-animation="fadeInUp" data-time="600">

                    @foreach($category_detail->child as $item)

                        <div class="col-md-3 robo_kategori_margin">
                            <div class="robo_kategori"
                                 onclick="location.href='{{route('calismalar_cat', ['cat_id' => 5])}}';">

                                <div class="robo_kategori_baslik">
                                    <h2>{{$item->title}}</h2>
                                    <p>{{str_limit($item->body, 100)}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>--}}



            <section class="whitepage" id="team">
               {{-- <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="text-center onStep" data-animation="fadeInUp" data-time="0">Our Team<span class="devider-black"></span></h2>
                            <div class="space-single">
                            </div>
                        </div>
                    </div>
                </div>--}}

                <div class="container">
                    <div class="row">

                        @foreach($category_detail->works as $work1)

                            @include('part.calisma_one', ['work' => $work1, 'slug' => $category_detail->slug])

                        @endforeach

                    </div>
                </div>
            </section>



        </div>

        <div class="space-double"></div>

    </section>


@endsection
