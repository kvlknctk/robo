@extends('layout.master')

@section('body')

   @include('part.breadcumb')

    {{--<section id="subheader">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<h1>{{$title}}</h1>--}}
                    {{--<ul class="subdetail">--}}
                        {{--<li><a href="{{route('index')}}">Anasayfa</a></li>--}}
                        {{--<li class="sep">/</li>--}}
                        {{--<li>{{$title}}</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <section class="whitepage">
        <div class="container">
            <div class="row">
                @yield('merkez')
            </div>
        </div>
    </section>

    <section class="contactbg  no-bottom" id="contactus">

        <div class="container">
            <div class="row">
                @include('part.contact')
            </div>
        </div>

        <div class="space-single"></div>

    </section>


@endsection