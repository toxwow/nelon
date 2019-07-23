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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="current-site-wrapper">
                    <div class="title">
                        <h3>O nas</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section second idea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 d-none d-lg-block">
                    <div class="img-wrapper">
                        <img src="{{asset('images/toy-square.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="text-card">
                        <h2>Skąd pomysł na bawialnie eko?</h2>
                        <p>Wierzymy, że bycie ekologicznym to przede wszystkim sposób myślenia, przejawiający się w codziennych wyborach, nawet tych najmniejszych. Dlatego zabawki, które u nas znajdziesz nie są z plastiku, a większość jest wykonana z drewna.</p>
                        <p>Poza chęcią dbania o nasze środowisko warto wspomnieć, że zabawki drewniane są dużo bezpieczniejsze od plastikowych. Dzięki nasączeniu drewna odpowiednimi olejkami są w pełni antybakteryjne, zapobiega to też powstawaniu pleśni. Inne materiały które u nas znajdziecie to np. bawełna organiczna - wolna od toksyn i niebezpiecznych barwników</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="section toys-about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Nasze zabawki</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-5">
                    <div class="img-wrapper-toys">
                        <img src="{{asset('images/toys/1.png')}}" alt="" class="item">
                        <img src="{{asset('images/toys/2.png')}}" alt="" class="item">
                        <img src="{{asset('images/toys/3.png')}}" alt="" class="item">
                        <img src="{{asset('images/toys/4.png')}}" alt="" class="item">
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-5">
                    <div class="description-text">
                        <p>Wiele z naszych zabawek jest wykonywanych ręcznie co czyni je w porównaniu do zwykłych plastikowych - wyjątkowymi. Oryginalny i piękny wygląd przyciąga spojrzenie nie tylko najmłodszych, a nie jeden rodzic chciałby z powrotem wrócić do czasów, gdy był małym dzieckiem.</p>
                        <p>Nasze zabawki nie świecą i nie grają. Uczą kreatywności i logiki. Pobudzają dziecięcą fantazję Nie narzucamy dzieciom jak mają się bawić, dajemy im swobodę i cieszymy się, gdy odkryją coś nowego.</p>
                        <div class="logo-toys">
                            <p>W naszej bawialni znajdziecie wiele wspaniałych i pięknych zabawek.</p>
                            <p>W naszym asortymencie znajdują się zabawki z firm takich jak:</p>
                            <div class="logo-wrapper">
                                <img src="{{asset('images/toys/logo/1.png')}}" alt="" class="logo">
                                <img src="{{asset('images/toys/logo/2.png')}}" alt="" class="logo">
                                <img src="{{asset('images/toys/logo/3.png')}}" alt="" class="logo">
                                <img src="{{asset('images/toys/logo/4.png')}}" alt="" class="logo">
                            </div>
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