@extends('layouts.app')

@section('title', ' - O nas')
@push('styles')
    <link href="{{ asset('css/user/about.css') }}" rel="stylesheet">
@endpush
@push('description')
    <meta name="description" content="Uwielbiamy drewniane zabawki, dlatego stworzyliśmy bawialnię Nelon! Oprócz naturalnych zabawek znajdziesz u nas drewniane domki - sklep, kuchnię i wiele więcej. Nelon to miejsce gdzie możesz pobawić się z dzieckiem." />
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>
    <script src="https://code.jquery.com/ui/jquery-ui-git.js" defer></script>
    <script src="{{ asset('js/user/about.js') }}" defer></script>
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
    <div id='strawberry-plant' data-fruit='12'></div>

    {{--<div class="section second opinion">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="opinion-container" id="mydiv">--}}
                        {{--<div class="opinion-wrapper" id="draggable2">--}}
                            {{--<div data-item="1" class="item" id="chuj" style="background-color: yellow"></div>--}}
                            {{--<div data-item="2" class="item" style="background-color: green"></div>--}}
                            {{--<div data-item="3" class="item" style="background-color: pink"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    @component('layouts/components/contactBlock') @endcomponent


@endsection