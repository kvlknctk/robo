@extends('layout.master')



@section('body')

    @include('part.breadcumb')

    <section id="content" aria-label="section-blogg" class="whitepage">
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="onStep" data-animation="fadeInUp" data-time="300">

                        <article>
                            <div class="post-image">
                                <img class="img-responsive" src="{{Voyager::image($work->image)}}" alt="blog-img"/>
                                <div class="post-heading">
                                    <br>
                                    <h2>{{$work->title}}</h2>
                                </div>
                            </div>
                            <p>{!! $work->body !!}</p>
                            <div class="bottom-article">
                                <ul class="meta-post">
                                    <li>{{$work->created_at->diffForHumans()}}</li>
                                </ul>
                            </div>
                        </article>

                    </div>


                    @foreach($work->images as $item)
                        <div style="width: 200px;height: 200px; float: left; margin: 5px;">
                            <div class="hovereffect big-img">
                                <a href="{{Voyager::image($item->image)}}">
                                    <img alt="imageportofolio" class="img-responsive" src="{{Voyager::image($item->thumbnail('cropped'))}}">
                                </a>
                            </div>
                        </div>

                    @endforeach


                </div>


                <div class="col-md-4">
                    <aside class="onStep" data-animation="fadeInUp" data-time="600">

                        <div class="widget">
                            <h5>Diğer Çalışmalar</h5>
                            <div class="space-single devider-widget"></div>
                            <div class="recent">

                                @foreach($others->works as $other)
                                        <div>
                                            <h6><a href="{{route('calismalar_detail', ['slug' => $slug, 'work' => $other->slug])}}">{{$other->title}}</a></h6>
                                            <p>{{$other->created_at->diffForHumans()}}</p>
                                        </div>
                                    <br>
                                @endforeach

                            </div>
                        </div>

                        <div class="widget">
                            <h5>Ekler</h5>
                            <div class="space-single devider-widget"></div>
                            <div class="tags">

                                @if($work->video)
                                    <div>
                                        <a href="{{$work->video}}" target="_blank">Video</a>
                                    </div>
                                @else
                                    <div>
                                        Bu çalışmada dosya eki bulunmamaktadır.
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="widget">
                            <h5>Kategoriler</h5>
                            <div class="space-single devider-widget"></div>
                            <div class="recent">

                                @foreach($categories as $cat)
                                    <div>
                                        <h6>
                                            <a href="{{route('calismalar_cat', ['slug' => $cat->slug])}}">{{$cat->title}}</a>
                                        </h6>
                                    </div>
                                    <br>
                                @endforeach


                            </div>
                        </div>

                    </aside>
                </div>


            </div>
        </div>
    </section>

@endsection
