{{--<div class="service-about onStep" data-animation="fadeInUp" data-time="300">--}}
    {{--<a class="detail-page" href="popup-page/about-2.html">--}}
        {{--<div class="hovereffect">--}}
            {{--<img alt="imageportofolio" class="img-responsive" src="{{Voyager::image($work->thumbnail('cropped'))}}">--}}
            {{--<div class="overlay"></div>--}}
            {{--<h2>{{$work->title}}</h2>--}}
        {{--</div></a>--}}
{{--</div>--}}

<div class="col-md-4 robo_kose">
    <div class="team-wrapper onStep" onclick="location.href='{{route('calismalar_detail', ['slug' => $slug, 'work' => $work->slug])}}';"
         data-animation="fadeInUp" data-time="200">
        <img alt="team img 1" class="img-responsive" src="{{Voyager::image($work->thumbnail('cropped'))}}">
        <div class="team-des">
            <h3>{{$work->title}}</h3>
            <span>{{$work->created_at->diffForHumans()}}</span>

        </div>
    </div>
</div>