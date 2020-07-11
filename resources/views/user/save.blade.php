@extends('layouts.app')
@section('title', ' - Kontakt')
@push('description')
    <meta name="description" content="Sala zabaw Nelon oferuje wejścia pojedyncze na 1 h lub dłużej. Dla rodzeństwa zniżka! Bawialnie możesz wynająć też na urodziny lub inne okazje" />
@endpush
@push('styles')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/save.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/user/index.js') }}"></script>

@endpush
@section('content')
    <div class="section single-save">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-wrapper-center">
                        <h3 class="title">Bezpieczeństwo</h3>
                        <p class="sub-title"><b>Chcemy być możliwie najbezpieczniejszą bawialnią dla dzieci.</b><br>
                            Robimy to byście mogli byś spokojni o zdrowie waszych pociech. Robimy to dla was, ale też dla naszych dzieci, które często spędzają czas w Nelonie.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="saves-wrapper">
                        <p style="font-weight: 300">Bawialnie, po okresie zamrożenia gospodarki spowodowanym Covid-19, mogły rozpocząć działalność już 6 czerwca 2020 r. My zdecydowaliśmy się jednak poczekać, żeby dobrze zapoznać się z wytycznymi ministerstwa i przygotować nawet lepiej niż to jest wymagane</p>
                        <p style="font-weight: 400; margin-top: 10px;">Aby zwiększyć poziom bezpieczeństwa sanitarnego podjęliśmy następujące kroki:</p>
                        <ol>
                            <li>Zakupiliśmy odkurzacz z funkcją dezynfekcji parą. Gorąca para pozwala na dezynfekcje powierzchni bez użycia środków chemicznych – usuwa ona nawet do 99,99% wirusów i bakterii. Jest to jedna z oficjalnie polecanych metod przy walce z koronawirusem. Ponadto jest to nie tylko lepsze dla dzieci, to również lepsze dla środowiska. Dzięki wykorzystaniu pary możemy dezynfekować praktycznie każdą rzecz w naszej bawialni od dywanu, przez zabawki aż do armatury w łazience.</li>
                            <li>Choć to drogie rozwiązanie, to w Nelonie zamontowaliśmy przepływowy sterylizator powietrza. To urządzenie, które w kontrolowanej komorze naświetla powietrze promieniami UV-C. Światło UV-C skutecznie niszczy zarówno bakterie jak i wirusy. Taki sterylizator działa przez cały dzień kiedy w bawialni są nasi klienci.</li>
                            <li>Kupiliśmy przenośny sterylizator UV-C do czytnika kart. Dzięki niemu nasi klienci mogą bezpiecznie wpisać pin dokonując płatności. Dodatkowo dla naszych klientów świadczymy bezpłatną usługę sterylizacji telefonu komórkowego czy innych małych przedmiotów (klucze, maseczka czy ulubiony długopis)</li>
                            <li>Zakupiliśmy bezdotykowe podajniki na płyn dezynfekcyjny i mydło aby jeszcze bardziej zwiększyć komfort naszych gości.</li>
                            <li>Wprowadziliśmy przerwę w środku dnia pracy, aby móc dodatkowo zadbać o czystość.</li>
                            <li>Stosujemy maseczki, przyłbice i rękawiczki.</li>
                        </ol>
                        <p style="font-weight: 400; margin-top: 30px;">Poza tym, robimy to co zawsze było u nas standardem:</p>
                        <ol>
                            <li>Dezynfekujemy powierzchnie płaskie (podłogi, blaty stołów, klamki, zabawki).</li>
                            <li>Mamy wysokiej jakości oczyszczacz powietrze, który zabezpiecza przed smogiem, ale też pomaga w walce z drobnoustrojami.</li>
                            <li>Wszystkie naczynia i sztućce oprócz mycia wyparzamy w specjalnej zmywarko-wyparzarce gastronomicznej</li>
                            <li>Regularnie czyścimy filtry powietrza w urządzeniach nawiewowych (klimatyzacja, ogrzewanie)</li>
                        </ol>
                        <div class="img-wrapper">
                            <img src="{{asset('images/saves/1.png')}}" alt="">
                            <img src="{{asset('images/saves/2.png')}}" alt="">
                            <img src="{{asset('images/saves/3.png')}}" alt="">
                            <img src="{{asset('images/saves/4.png')}}" alt="">
                            <img src="{{asset('images/saves/5.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush