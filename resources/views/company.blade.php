@extends('layout.master')

@section('content')
    <!-- subheader -->
    <section id="subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About</h1>
                    <ul class="subdetail">
                        <li><a href="index.html">Home</a></li>
                        <li class="sep">/</li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader end -->

    <!-- section about -->
    <section class="whitepage no-top" id="about">

        <div class="container">
            <div class="row">

                <!-- space -->
                <div class="space-double"></div>

                <!-- devider -->
                <div class="col-md-12">
                    <div class="devider-page"><div class="devider-img-right"></div></div>
                </div>

                <div class="col-md-5 col-xs-11">
                    <div class="onStep" data-animation="fadeInUp" data-time="300">
                        <article>
                            <h1>
                                Who we are
                            </h1>
                            <span class="devider-cont"></span>
                            <p>
                                <em>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, quasi architecto beatae vitae dicta sunt explicabo.</em>

                                Etiam purus lorem, aliquet a eros sit amet, vestibulum finibus augue. Cras egestas neque vitae dui tincidunt, vitae tristique tellus volutpat. Fusce justo ante, interdum Praesent vel augue rutrum, scelerisque velit non, interdum nisl. Nunc acumsan comodo.
                            </p>
                            <article>
                    </div>
                </div>
                <!-- text end -->

                <!-- col -->
                <div class="col-md-7 col-xs-11">

                    <div class="onStep" data-animation="fadeInUp" data-time="600">
                        <div class="filter-wraper">
                            <ul class="animfadeInUpBig" data-time="1200" id="filters">
                                @php $first = 1; @endphp
                                @php $toplam = $builds->count(); @endphp
                                @foreach($builds as $build)

                                    <li class="filt-serv @if($first == 1) selected @endif"
                                        data-filter=".{{$build->slug}}">{{$build->title}}</li>

                                    @if($toplam !== $first)
                                        <li class="space">•</li>
                                    @endif
                                    @php $first++; @endphp
                                @endforeach
                                {{-- <li class="filt-serv selected" data-filter=".passion">WE ARE PASSIONATE</li>
                                 <li class="space">•</li>
                                 <li class="filt-serv" data-filter=".honcap">HONEST AND CAPABLE</li>
                                 <li class="space">•</li>
                                 <li class="filt-serv" data-filter=".webuild">WE BUILD YOUR DREAM</li>--}}
                            </ul>
                        </div>
                        <div class="space-half"></div>
                    </div>

                    <div class="onStep" data-animation="fadeInUp" data-time="900" id="services">

                        @foreach($builds as $build)
                            <div class="service {{$build->slug}}">

                                <h4>{{$build->title}}</h4>

                                {!! $build->body !!}
                            </div>
                        @endforeach



                      {{--  <div class="service honcap">
                            <img class="img-responsive" alt="img" src="img/img-service-2.jpg">
                            <h4>HONEST AND CAPABLE</h4>

                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
                                et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                            </p>
                        </div>

                        <div class="service webuild">
                            <img class="img-responsive" alt="img" src="img/img-service-3.jpg">
                            <h4>WE BUILD YOUR DREAM</h4>

                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
                                et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.
                            </p>
                        </div>--}}

                    </div>

                </div>
                <!-- col end -->

            </div>
        </div>

    </section>
    <!-- section about end -->

    <!-- section team -->
    <section class="whitepage no-top no-bottom" id="team">
        <!-- team -->
        <div class="container">
            <div class="row">

                <!-- devider -->
                <div class="space-single"></div>
                <div class="col-md-12">
                    <div class="devider-page"><div class="devider-img-right"></div></div>
                </div>

                <div class="col-md-12">
                    <h1>Our Team</h1>
                    <span class="devider-cont"></span>
                    <div class="space-single"></div>
                </div>

                <div class="col-md-3">
                    <div class="team-wrapper onStep" data-animation="fadeInUp" data-time="200">
                        <img alt="team img 1" class="img-responsive" src="img/team-img1.jpg">
                        <div class="team-des">
                            <h3>John Doe</h3>
                            <span>Project Manager</span>
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-wrapper onStep" data-animation="fadeInUp" data-time="400">
                        <img alt="team img 4" class="img-responsive" src="img/team-img4.jpg">
                        <div class="team-des">
                            <h3>Renita</h3>
                            <span>Project Director</span>
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-wrapper onStep" data-animation="fadeInUp" data-time="600">
                        <img alt="team img 3" class="img-responsive" src="img/team-img3.jpg">
                        <div class="team-des">
                            <h3> Steve Makelew</h3>
                            <span>C E O</span>
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="team-wrapper onStep" data-animation="fadeInUp" data-time="800">
                        <img alt="team img 4" class="img-responsive" src="img/team-img2.jpg">
                        <div class="team-des">
                            <h3>Jess Parker</h3>
                            <span>Bussines Dev</span>
                            <a href="#"><span class="ti-facebook"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- team end -->
        <div class="space-single"></div>

    </section>
    <!-- section team end -->

    <!-- service -->
    <section class="yellowpage">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="onStep" data-animation="fadeInLeft" data-time="300">
                        <h2>Looking best partner for your next project?</h2>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="left">
                        <div class="btn-content onStep" data-animation="fadeInRight" data-time="600">
                            <a class="link-class scroll-link" href="#contactus">Let us know</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service end -->

@endsection