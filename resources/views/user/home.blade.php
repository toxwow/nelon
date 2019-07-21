@extends('layouts.app')

@section('title', ' - bawialnia dla dzieci')
@push('styles')
    <link href="{{ asset('css/user/index.css') }}" rel="stylesheet">
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

    <div class="home-page">
        <div class="container">
            <div class="row position-relative">
                <div class="col-12 col-md-6">
                    <div class="top-section">
                        <div class="text-wrapper">
                            <h1>Nelon - bawialnia dla dzieci</h1>
                            <h3>Przytulna kawiarnia dla rodziców.</h3>
                            <p>Wierzymy, że na wszystko powinien być czas. Rodzic powinien móc znaleźć miejsce, w którym może pobawić się z dzieckiem. Powinien móc też znaleźć czas na odpoczynek, gdy tego potrzebuje. Bawialnia Nelon to sala zabaw, na której możesz wspólnie z dzieckiem poznawać świat drewnianych zabawek lub pozwolić mu samodzielnie bawić się na bezpiecznej przestrzeni. Wtedy Ty możesz napić się kawy, porozmawiać ze znajomymi lub zrobić to na co wciąż brakuje Ci czasu. Zapłacić rachunki, wysłać maile? To również ważne i my to rozumiemy.</p>
                        </div>
                        <div class="buttons-wrapper">
                            <a href="" class="btn btn-primary">kontakt</a>
                            <a href="" class="btn btn-primary outline">dowiedz się więcej</a>
                        </div>
                    </div>
                </div>
                <div class="slider-container d-none d-md-block">
                    <div class="item">

                        <img src="{{asset('images/slider-top/1.png')}}" alt="">
                        <div class="square"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section second about-us">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-wrapper-center">
                            <h3 class="title">NELON TO</h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 circle-container">
                        <div class="circle-wrapper" id="circle-bawialnia">
                            <div class="title">
                                <p>bawialnia</p>
                            </div>
                        </div>
                        <div class="description-wrapper">
                            <p>U nas czekają na Ciebie kawa, pyszne ciasto, a dla maluchów zdrowe przekąski i napoje</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 circle-container">
                        <div class="circle-wrapper" id="circle-kawiarnia">
                            <div class="title">
                                <p>kawiarnia</p>
                            </div>
                        </div>
                        <div class="description-wrapper">
                            <p>U nas czekają na Ciebie kawa, pyszne ciasto, a dla maluchów zdrowe przekąski i napoje</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 circle-container">
                        <div class="circle-wrapper"  id="circle-urodziny">
                            <div class="title">
                                <p>urodziny dziecka</p>
                            </div>
                        </div>
                        <div class="description-wrapper">
                            <p>Nelon to wspaniałe miejsce na urodziny. Organizujemy wydarzenia zamknięte.  Dowiedz się więcej</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bawialnia">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 mx-auto d-flex align-items-center">
                        <div class="image-wrapper">
                            <img src="{{asset('images/mom.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mx-auto d-flex align-items-center">
                        <div class="text-left-module">
                            <div class="title-wrapper-left">
                                <h3 class="title">BAWIALNIA WEWNĘTRZNA NELON</h3>
                            </div>
                            <div class="description-wrapper">
                                <p>Nasza bawialnia to bezpieczne przestrzeń wyposażona w mądre i nieszablonowe zabawki. U nas dzieci mogą m.in. rozwijać swoją kreatywność, uczyć się logiki czy też ćwiczyć swoje zmysły.</p>
                                <p>Maluchy lubią zabawy, które inspirują i stanowią dla nich wyzwanie, zatem pozwólmy im odkrywać świat po swojemu</p>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn btn-primary" href="">zobacz regulamin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section second kawiarnia">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="text-left-module">
                            <div class="title-wrapper-left">
                                <h3 class="title">Kawiarnia</h3>
                            </div>
                            <div class="description-wrapper">
                                <p>Wszyscy nasi dostawcy to ludzie, którzy tworzą swoje produkty wkładając w to całe swoje serce – zupełnie jak my dlatego wszystkie ciasta, tarty i napoje są takie smaczne!</p>
                                <p>A dla dzieciaków, tylko zdrowe przekąski i napoje - nie znajdziesz u nas coca-coli czy chipsów.</p>
                            </div>
                            <div class="button-wrapper">
                                <a class="btn btn-primary outline" href="">zobacz regulamin</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 ml-auto d-none d-md-flex align-items-center ">
                        <div class="image-wrapper-double">
                            <div class="img-first">
                                <img src="{{asset('images/coffee.png')}}" alt="" style="z-index: 5; position: relative">
                                <div class="behind-image">
                                    <img src="{{asset('images/cake.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-wrapper-center">
                            <h3 class="title">Galeria</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="gallery-container">
                            <div class="item">
                                <a href="{{asset('images/gallery/1.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/1.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/2.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/2.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/3.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/3.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/4.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/4.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/5.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/5.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/6.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/6.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/1.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/1.jpeg')}}')"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{asset('images/gallery/2.jpeg')}}" data-lightbox="roadtrip">
                                    <div class="img-bg" style="background-image: url('{{asset('images/gallery/2.jpeg')}}')"></div>
                                </a>
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


{{--<a href="{{asset('images/gallery/1.jpeg')}}" data-lightbox="roadtrip"><img src="{{asset('images/gallery/1.jpeg')}}" alt=""></a>--}}

{{--<a href="{{asset('images/gallery/2.jpeg')}}" data-lightbox="roadtrip"><img src="{{asset('images/gallery/2.jpeg')}}" alt=""></a>--}}

{{--<a href="{{asset('images/gallery/3.jpeg')}}" data-lightbox="roadtrip"><img src="{{asset('images/gallery/3.jpeg')}}" alt=""></a>--}}
