@extends('layouts.app')

@section('title', ' - Kontakt')
@push('styles')
    <link href="{{ asset('css/user/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>
    <script src="{{asset('js/lightbox.min.js')}}" defer></script>
    <script>
        var map;
        function initMap() {
            var myLatLng = {lat: 50.0480073, lng: 19.9573685};
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 16,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
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
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c9c9c9"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: "{{asset('images/pin-map.png')}}"
            });
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmdGrhU7ZEPSj0M5iudLv0LSC0zRnVYzI&callback=initMap">
    </script>
@endpush
@section('content')
    <div class="section contact position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mr-md-auto">
                    <div class="title">
                        <h4>Masz pytania?</h4>
                        <h4>Skontatkuj się z nami</h4>
                    </div>
                    <div class="contact-item time">
                        <p>Godziny otwarcia:</p>
                        <p style="font-weight: 600;">Od wtorku do niedzieli 11 - 19</p>
                    </div>
                    <div class="contact-item address">
                        <p>Stacja Kolejowa Zabłocie,</p>
                        <p style="font-weight: 600;">ul. Kącik 24; 30-549 Kraków</p>
                        <p class="description">Znajdujemy się na parterze stacji (pod peronami)<br> bez obaw – łatwo nas znaleźć </p>
                    </div>
                    <div class="contact-item phone">
                        <p>info@nelon.pl</p>
                        <p>tel. +48 518 622 180</p>
                    </div>
                    <div class="buttons-wrapper">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">wskazówki dojazdu</a>
                    </div>
                    <div class="info-wrapper">
                        <p>Uwaga z powodu remontu stacji kolejowej póki co wejście jedynie od strony ul. Kącik.</p>
                        <p>Mieszkańcy Zabłocia powinni przejść tunelem podziemnym i skręcić w prawo</p>
                    </div>
                    <div class="modal  fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="type">
                                        <p class="title">Dojazd MPK oraz pociągiem</p>
                                        <ul>
                                            <li><span>Plac Bohaterów Getta (250m)</span><br>
                                                Ulicą Kącik do końca ulicy – wejście na stację przez parking.</li>
                                            <li><span>Zabłocie (650m)</span><br>
                                                Dojście kolejno: ulicą Romanowicza i Lipową, następnie tunelem podziemnym pod torami.</li>
                                        </ul>
                                        <p class="description">Można do nas dojechać również każdym pociągiem zatrzymującym się na stacji Kraków Zabłocie. Bawialnia znajduje się na parterze, pod peronami.</p>
                                    </div>
                                    <div class="line"></div>
                                    <div class="type pb-4">
                                        <p class="title">Dojazd samochodem</p>
                                        <p class="description">W pobliżu stacji znajduje się mały darmowy parking. Można zaparkować również przy ulicy Kącik oraz przyległych. <br> <strong>Uwaga</strong>, oprócz niedziel obowiązuje strefa parkowania (płatne w godzinach 10:00 – 20:00). Strefa dotyczy wyznaczonych miejsce, ale już np. nie obejmuje małe parkingu tuż przy bawialni.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="map" style=""></div>
    </div>
@endsection

@push('scripts')
@endpush