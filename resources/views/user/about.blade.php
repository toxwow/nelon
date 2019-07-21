@extends('layouts.app')

@section('title', ' - O nas')
@push('styles')
    <link href="{{ asset('css/user/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" defer rel="stylesheet">
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
        <div class="section second about-us">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-wrapper-center">
                            <h3 class="title">O nas</h3>
                        </div>
                    </div>
                    <div class="col-9 mx-auto">
                        <h2 class="about-title"><span>Nelon</span> to połączenie wewnętrznego placu zabaw<br>ze strefą odpoczynku i pracy dla rodziców.</h2>
                        <p class="about-text">
                            Nasza bawialnia to bezpieczne przestrzeń wyposażona w mądre i nieszablonowe zabawki. U nas dzieci mogą m.in. rozwijać swoją kreatywność, uczyć się logiki czy też ćwiczyć swoje zmysły. Zabawa oraz ruch dostarczają bodźców, których dzieci potrzebują do prawidłowego rozwoju. Ponadto poprzez kontakt z rówieśnikami dzieci uczą się zachowań społecznych, jest to dla nich trening współpracy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section kawiarnia">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 mx-auto d-flex align-items-center">
                        <div class="image-wrapper">
                            <img src="{{asset('images/double-img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mx-auto d-flex align-items-center">
                        <div class="text-left-module">
                            <div class="title-wrapper-left">
                                <h3 class="title">Nasza kawiarnia to nie „kącik kawowy”. U nas jest zdrowo i pysznie</h3>
                            </div>
                            <div class="description-wrapper">
                                <p>Wszyscy nasi dostawcy to ludzie, którzy tworzą swoje produkty wkładając w to całe swoje serce – zupełnie jak my dlatego wszystkie ciasta, tarty i napoje są takie smaczne!</p>
                                <p>A dla dzieciaków, tylko zdrowe przekąski i napoje - nie znajdziesz u nas coca-coli czy chipsów.</p>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn btn-primary" href="">zobacz menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contact position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mr-md-auto">
                        <div class="title">
                            <h4>Masz pytania?</h4>
                            <h4>Skontatkuj się z nami</h4>
                        </div>
                        <div class="contact-item address">
                            <p>Stacja Kolejowa Zabłocie,</p>
                            <p>ul. Kącik 24; 30-549 Kraków</p>
                            <p class="description">Znajdujemy się na parterze stacji (pod peronami)<br> bez obaw – łatwo nas znaleźć </p>
                        </div>
                        <div class="contact-item phone">
                            <p>info@nelon.pl</p>
                            <p>tel. +48 518 622 180</p>
                        </div>
                        <div class="buttons-wrapper">
                            <a href="" class="btn btn-primary">skontaktuj się z nami</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="map" style=""></div>

        </div>
    </div>

@endsection