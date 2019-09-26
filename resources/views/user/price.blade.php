@extends('layouts.app')

@section('title', ' - Kontakt')
@push('styles')
    <link href="{{ asset('css/user/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/price.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>

@endpush
@section('content')
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
                    <a href="{{url('Nelon-oferta-urodzinowa.pdf')}}" target="_blank" class="btn btn-primary ">zobacz pełną ofertę</a>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush