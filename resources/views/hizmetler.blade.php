@extends('layout.master')

@section('body')

    @include('part.breadcumb')

    <section class="servicebg" id="service-sec">


        <div class="container-fluid">
            <div class="row">

                <div class="onStep" data-animation="fadeInUp" data-time="300">
                    <div class="filter-wraper text-center">
                        <ul class="animfadeInUpBig" data-time="1200" id="filters">
                            @foreach($hizmetler as $key => $item)
                                <li class="filt-serv @if($key == 0) selected @endif"
                                    data-filter=".{{str_slug($item->title, '')}}">{{$item->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="space-half"></div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="onStep" data-animation="fadeInUp" data-time="600" id="services">
                    @foreach($hizmetler as $item)
                        <div class="col-md-12 col-xs-12">
                            <div class="service {{str_slug($item->title, '')}} text-center">
                                <h4>{{$item->title}}</h4>

                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="space-double"></div>

            <div class="row">
                <div class="onStep" data-animation="fadeInUp" data-time="600" id="services">
                    {{--@foreach($gallery  as $item)--}}

                        {{--<div class="projects arc coor">--}}
                            {{--<div class="hovereffect big-img">--}}
                                {{--<a href="{{asset('storage/'.$item->image)}}">--}}
                                    {{--<img alt="imageportofolio" class="img-responsive" src="{{asset('storage/'.$item->image)}}">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<h3>{{$item->title}}</h3>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>

    </section>




    <section class="contactbg no-top no-bottom" id="contactus">


        <div class="container">
            <div class="row">

                @include('part.contact')
            </div>
        </div>


        <div class="space-single"></div>
    </section>


@endsection



@section('jsPart')

    <script type="application/javascript">

        $(document).ready(function () {


                    @foreach($hizmetler as $key => $item)
                    @if($key == 0)

            var first = '.{{str_slug($item->title, '')}}';

                    @endif
                    @endforeach


            var positionFunc = Isotope.prototype._positionItem;
            Isotope.prototype._positionItem = function (item, x, y, isInstant) {
                positionFunc(item, x, y, true);
            };

            var $container = jQuery('#services');
            $container.isotope({
                itemSelector: '.service',
                filter: first,
                hiddenStyle: {
                    opacity: 0
                },
                visibleStyle: {
                    opacity: 1
                }
            });
            jQuery('.filt-serv').on('click', function (e) {
                e.preventDefault();
                var $this = jQuery(this);
                if ($this.hasClass('selected')) {
                    return false;
                }
                var $optionSet = $this.parents();
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

                var selector = jQuery(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                });
                return false;
            });
        });


    </script>

@endsection

