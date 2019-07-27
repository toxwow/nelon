@extends('layouts.app')

@section('title', ' - Kawiarnia')
@push('styles')
    <link href="{{ asset('css/user/cafe.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>
    <script src="{{ asset('js/user/cafe.js') }}" defer></script>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="current-site-wrapper">
                    <div class="title">
                        <h3>Kawiarnia</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section second offer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div class="img-wrapper">
                        <img src="{{asset('images/coffe-top.png')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-card">
                        <h2>Poznaj naszą ofertę</h2>
                        <p>Kawiarnia w bawialni w pierwszej kolejności kojarzy się z kawą i ciastkiem dla rodzica. U nas jest podobnie. To co nas wyróżnia to fakt, że wszystkie produkty które sprzedajemy w naszej kawiarni są wybrane z wielką starannością. Dodatkowo sprzedajemy przekąski dla dzieci.  U nas jednak jest ekologicznie i zdrowo – krótkie i proste składy to podstawa! </p>
                        <a href="#menu-scroll" class="link">zobacz menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section menu-card">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title" id="menu-scroll">Menu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 mr-auto my-3">
                    <div class="position-menu">
                        <h4 class="title">Kawa</h4>
                        <ul class="items-menu">
                            <li>
                                <span>ESPRESSO</span>
                                <span>6.00</span>
                            </li>
                            <li>
                                <span>DOPIO</span>
                                <span>8.00</span>
                            </li>
                            <li>
                                <span>AMERICANO</span>
                                <span>9.00</span>
                            </li>
                            <li>
                                <span>LATTE</span>
                                <span>12.00</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-5 ml-auto my-3">
                    <div class="position-menu">
                        <h4 class="title">Kawa</h4>
                        <ul class="items-menu">
                            <li>
                                <span>ESPRESSO</span>
                                <span>6.00</span>
                            </li>
                            <li>
                                <span>DOPIO</span>
                                <span>8.00</span>
                            </li>
                            <li>
                                <span>AMERICANO</span>
                                <span>9.00</span>
                            </li>
                            <li>
                                <span>LATTE</span>
                                <span>12.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 mr-auto my-3">
                    <div class="position-menu">
                        <h4 class="title">Kawa</h4>
                        <ul class="items-menu">
                            <li>
                                <span>ESPRESSO</span>
                                <span>6.00</span>
                            </li>
                            <li>
                                <span>DOPIO</span>
                                <span>8.00</span>
                            </li>
                            <li>
                                <span>AMERICANO</span>
                                <span>9.00</span>
                            </li>
                            <li>
                                <span>LATTE</span>
                                <span>12.00</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-5 ml-auto my-3">
                    <div class="position-menu">
                        <h4 class="title">Kawa</h4>
                        <ul class="items-menu">
                            <li>
                                <span>ESPRESSO</span>
                                <span>6.00</span>
                            </li>
                            <li>
                                <span>DOPIO</span>
                                <span>8.00</span>
                            </li>
                            <li>
                                <span>AMERICANO</span>
                                <span>9.00</span>
                            </li>
                            <li>
                                <span>LATTE</span>
                                <span>12.00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section second more-coffe">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Więcej niż kawiarnia</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 d-flex my-3">
                    <div class="card">
                        <div class="title">
                            <img src="{{asset('images/icon-more-coffe/wifi.png')}}" alt="">
                            <h5>Darmowe Wi-Fi</h5>
                        </div>
                        <div class="description">
                            <p>Spokojnie możesz zerknąć na telefon, kiedy twój maluch bawi się w najlepsze w naszej bawialni.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-3">
                    <div class="card">
                        <div class="title">
                            <img src="{{asset('images/icon-more-coffe/portfolio.png')}}" alt="">
                            <h5>Miejsca do pracy</h5>
                        </div>
                        <div class="description">
                            <p>W naszej bawialni mamy miejsca dedykowane, dla rodziców, którym brakuje czasu na pracę w domu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-3">
                    <div class="card">
                        <div class="title">
                            <img src="{{asset('images/icon-more-coffe/baby-room.png')}}" alt="">
                            <h5>Wygodny przewijak</h5>
                        </div>
                        <div class="description">
                            <p>W toalecie znajdziesz przewijak ścienny. Potrzebujesz pieluszki? Zgłoś się do obsługi. Pomożemy!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-3">
                    <div class="card">
                        <div class="title">
                            <img src="{{asset('images/icon-more-coffe/feeding-chair.png')}}" alt="">
                            <h5>Krzesełka do karmienia</h5>
                        </div>
                        <div class="description">
                            <p>Maluch zgłodniał? Posadź go wygodnie na krzesełku przy stoliku i zamów dla niego coś pysznego.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex my-3">
                    <div class="card">
                        <div class="title">
                            <img src="{{asset('images/icon-more-coffe/mom.png')}}" alt="">
                            <h5>Miejsca do pracy</h5>
                        </div>
                        <div class="description">
                            <p>Twój maluszek jeszcze jest na piersi? U nas możesz spokojnie nakarmić przy stoliku,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section provider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Nasi dostawcy</h3>
                    </div>
                </div>
            </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 mb-5">
                        <div class="img-wrapper">
                            <img src="{{asset('images/mikrocukiernia/1.png')}}" alt="" class="item">
                            <img src="{{asset('images/mikrocukiernia/2.png')}}" alt="" class="item">
                            <img src="{{asset('images/mikrocukiernia/3.png')}}" alt="" class="item">
                            <img src="{{asset('images/mikrocukiernia/4.png')}}" alt="" class="item">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mb-5 ">
                        <div class="title">
                            <div class="name">
                                <img src="{{asset('images/cupcake-dessert.png')}}" alt="">
                                <h5>Mikrocukiernia</h5>
                            </div>
                            <div class="fb">
                                <a href="https://www.facebook.com/Mikrocukiernia-338014120159425/" target="_blank"><img src="{{asset('images/fb-yellow.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="description-text">
                           <p>Monikę i jej wypieki znaleźliśmy zupełnym przypadkiem, ale zakochaliśmy się w nich od pierwszego okruszka.</p>
                            <p>Mikrocukiernia to mała rodzinna firma zajmująca się produkcją tortów, ciast i słodkości. Przy ich tworzeniu korzystają tylko ze sprawdzonych składników: naturalne masło, prawdziwa śmietana, jaja z wolnego wypieku, wysokogatunkowa mąka i miód z własnej pasieki.</p>
                            <p>Nie znajdziecie tu półproduktów, sztucznych barwników, margaryny i oleju palmowego.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-5 mr-auto">
                        <div class="title">
                            <div class="name">
                                <img src="{{asset('images/coffee-beans.png')}}" alt="">
                                <h5>BeMyBean</h5>
                            </div>
                            <div class="fb">
                                <a href="https://www.facebook.com/bemybean.palarnia/" target="_blank"><img src="{{asset('images/fb-yellow.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="description-text">
                            <p>To niewielka palarnia kawy znajdująca się tuż „za rogiem” bo ok 15min na nogach od naszej bawialni. Jest lokalnie i jest z sercem. My wiemy czego potrzebują dzieci, oni wiedzą czego potrzebują dorośli 😉 Uzupełniamy się doskonale. </p>
                            <p>A jeśli chcecie wiedzieć więcej o kawie, którą podajemy. Chcecie posłuchać o sposobach wypalania ziaren, temperaturach, czasie palenia, ilości powietrza i ciepła dostarczanego do ziaren koniecznie musicie ich odwiedzić.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 mb-5 order-first order-md-last">
                        <div class="img-wrapper">
                            <img src="{{asset('images/bemybean/1.png')}}" alt="" class="item">
                            <img src="{{asset('images/bemybean/2.png')}}" alt="" class="item">
                            <img src="{{asset('images/bemybean/3.png')}}" alt="" class="item">
                            <img src="{{asset('images/bemybean/4.png')}}" alt="" class="item">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @component('layouts/components/contactBlock') @endcomponent


@endsection