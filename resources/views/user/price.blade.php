@extends('layouts.app')

@section('title', ' - Kontakt')
@push('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/price.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>

@endpush
@section('content')
    <div class="section single-price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Cennik wejść</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 my-3 wrapper-price-day">
                    <p class="title-day">
                        Wtorek Środa Czwartek
                    </p>
                    <p class="price">
                        Pierwsza godzina - 15zł
                    </p>
                    <p class="price">
                        Każde kolejne 30 min - 6zł
                    </p>
                </div>
                <div class="col-12 col-md-6 my-3 wrapper-price-day">
                    <p class="title-day">
                        Piątek sobota niedziela
                    </p>
                    <p class="price">
                        Pierwsza godzina - 17zł
                    </p>
                    <p class="price">
                        Każde kolejne 30 min - 7zł
                    </p>
                </div>
                <div class="col-12 mt-5 text-center  wrapper-price-day">
                    <p style="font-size: 1.4rem; color: #636363; font-weight: 600;">Na drugie i każde kolejne dziecko zniżka 50%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Pakiet urodzinowy</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-5 mx-auto my-5">
                    <div class="text-card blue">
                        <h4 class="price">400 zł</h4>
                        <p class="days">Wtorek Środa Czwartek</p>
                        <div class="content-list">
                            <div class="item">2 H doskonałej zabawy</div>
                            <div class="item">Przyjęcia dla 10 dzieci</div>
                            <div class="item">Dekoracje urodzinowe</div>
                            <div class="item">Zaproszenia dla gości</div>
                            <div class="item">Zdrowy poczęstunek dla dzieci</div>
                            <div class="item">Mały prezent dla jublitata</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5 mx-auto my-5">
                    <div class="text-card  pink">
                        <h4 class="price">450 zł</h4>
                        <p class="days">Piątek Sobota Niedziela</p>
                        <div class="content-list">
                            <div class="item">2 H doskonałej zabawy</div>
                            <div class="item">Przyjęcia dla 10 dzieci</div>
                            <div class="item">Dekoracje urodzinowe</div>
                            <div class="item">Zaproszenia dla gości</div>
                            <div class="item">Zdrowy poczęstunek dla dzieci</div>
                            <div class="item">Mały prezent dla jublitata</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4">
                    <p>Aby otrzymać pełną ofertę prosimy o kontakt:</p>
                    <p style="color: #E9A08B">info@nelon.pl</p>
                    {{--<a href="{{url('Nelon-oferta-urodzinowa.pdf')}}" target="_blank" class="btn btn-primary ">zobacz pełną ofertę</a>--}}
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush