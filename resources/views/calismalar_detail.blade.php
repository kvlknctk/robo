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
                                    <li><a href="#">{{$work->created_at->diffForHumans()}}</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
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
                                <div><a href="#">Video</a></div>
                                <div><a href="#">Dosya</a></div>

                            </div>
                        </div>


                    </aside>
                </div>

            </div>
        </div>
    </section>




@endsection



