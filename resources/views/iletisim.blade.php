@extends('layout.master')

@section('body')


    @include('part.breadcumb')


    <section class="contactbg no-top no-bottom" id="contactus">


        <div class="jumbotron no-top no-bottom">
            <div class="onStep" data-animation="fadeInUp" data-time="300" id="map"></div>
        </div>


        <div class="container">
            <div class="row">

                @include('part.contact')
            </div>
        </div>


        <div class="space-single"></div>
    </section>


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

@section('jsPart')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>

    <script>
        google.maps.event.addDomListener(window, 'load', init);
        var lat = '{{Voyager::setting('lat')}}';
        var lng = '{{Voyager::setting('lng')}}';

        function init() {


            var myLatlng = new google.maps.LatLng(lat, lng);

            var mapOptions = {

                zoom: 16,
                disableDefaultUI: true,
                scrollwheel: false,
                center: myLatlng,

                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fefefe"

                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };



            var mapElement = document.getElementById('map');


            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: 'img/map-marker.png',
                title: 'Company'
            });


        }

    </script>
@endsection

