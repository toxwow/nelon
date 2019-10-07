@extends('layouts.app')

@section('title', ' - O nas')
@push('styles')
    <link href="{{ asset('css/user/term.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>
    <script src="https://code.jquery.com/ui/jquery-ui-git.js" defer></script>
    {{--<script src="{{ asset('js/user/about.js') }}" defer></script>--}}
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="current-site-wrapper">
                    <div class="title">
                        <h3>Regulamin</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section terms second">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 mx-auto">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Regulamin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Regulamin imprez zamkniętych</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active text-card" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h2>Przed wejściem do bawialni Nelon należy się uśmiechnąć.</h2>
                            <p>

                                Staramy się, aby strefa zabawy była możliwie najbezpieczniejsza, jednak każdy rodzic samodzielnie musi podjąć decyzję, czy chce żeby jego dziecko z niej korzystało. Decydując się na skorzystanie ze strefy zabawy akceptujesz treść regulaminu.<br><br>

                                Strefa zabaw przeznaczona jest dla dzieci od 0 do 6 lat. Dzieci cały czas pozostają pod opieką rodziców lub opiekunów. Opiekunowie odpowiadają za bezpieczeństwo dzieci lub wyrządzone przez nie szkody. Dzieci nie mogą być pozostawione bez opiekuna.<br><br>

                                Podczas zabawy dzieci i opiekunowie nie powinni nosić biżuterii oraz odzieży z luźnymi sznurkami lub takiej, która mogłaby stanowić zagrożenie.<br><br>

                                Do strefy zabawy nie można wnosić własnych zabawek. Najważniejsze, że Twojemu dziecku może być smutno, jeżeli jej zapomni. Poza tym zabawka może być nieodpowiednia dla innych dzieci.<br><br>

                                Na terenie bawialni nie można palić papierosów tradycyjnych, elektronicznych oraz korzystać urządzeń podgrzewających tytoń.<br><br>

                                Bardzo lubimy zwierzęta, jednak ze względu na dobro wszystkich klientów i możliwe alergie prosimy o niezabieranie ich do bawialni.<br><br>

                                Przed wejściem do strefy zabawy upewnij się, że Twój podopieczny jest w czystym ubraniu. Pomoże nam to utrzymać miejsce w czystości dla Ciebie i innych. Dziękujemy!<br><br>

                                Niektóre z zabawek przeznaczone są jedynie dla dzieci powyżej 4 roku życia. Zabawki nieodpowiednie dla dzieci młodszych, to te posiadające małe elementy lub po prostu za duże – są wśród nich drewniane samochodziki, kolejki, domki zabawki z klocków, drewniane klocki, drewniany dźwig, jeździki, zjeżdżalnie, deska do balansowania.<br><br>

                                Przed wejściem do strefy zabawy prosimy umyj lub zdezynfekuj ręce swoje i dziecka. Dzięki temu, że wszyscy tak robią twoje dziecko będzie bawić się w bezpieczniejszym środowisku.<br><br>

                                Do strefy zabawy nie można wnosić jedzenia, ani wchodzić w butach.<br><br>

                                Ze strefy zabaw można korzystać jedynie w skarpetkach z warstwą antypoślizgową. Nie masz skarpetek? Możesz kupić je w barze :)<br><br>

                                Jeżeli Twoje dziecko dopiero rozpoczyna swoją przygodę bez pieluszki i wciąż zdążają mu się wypadki, na czas pobytu w bawialni proszę załóż mu pieluszkę.<br><br>

                                Obsługa ma prawo wyprosić klientów nie przestrzegających regulaminu oraz takich którzy sami lub których podopieczni zachowują się w sposób zagrażający innym.<br><br>

                                Życie rodzica jest wymagające – bądźmy dla siebie mili. Zawsze.<br><br>

                                <strong>Dziękujemy, że nas odwiedzasz :) </strong></p>
                        </div>
                        <div class="tab-pane fade text-card" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <h2>Regulamin imprez zamkniętych</h2>
                            <p>Rezerwując termin dla imprezy zamkniętej akceptujesz treść regulaminu korzystania z bawialni oraz zobowiązujesz się poinformować o jego obowiązywaniu gości. Jeżeli Twoi goście go nieakceptują niestety nie będą mogli skorzystać z bawialni.<br/><br/>

                                Podczas imprez zamkniętych zabrania się przynoszenia potraw (w tym ciast) wykonanych samodzielnie. Zapewniamy catering lub zniżki na napoje dla Państwa gości.<br/><br/><br/><br/>

                                <strong>W przypadku przekroczenia czasu imprezy o więcej niż 15 minut obowiązuje dopłata 100 PLN za każdą rozpoczętą godzinę.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection