@extends('layout.slave')

@section('merkez')


    <div class="col-md-3">
        <div class="robo_menu">
            <h3>İçerikler</h3>
            <ul>
                @foreach($linkler as $link)
                    <li>
                        <a href="{{route('kurumsal_slug', ['slug' => $link->slug])}}">{{$link->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <div class="col-md-9">


        <div class=" onStep robo_icerik" data-animation="fadeInUp" data-time="300">
            {!! $detail->body !!}
        </div>

        <div class="space-double"></div>
    </div>



@endsection