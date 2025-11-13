@extends('layouts.guest')

@section('content')

    <!-- slider -->
    <section class="wrapper100percent">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/turystyka.webp" alt=""/>
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 bg-gradient">
                                    <h1>
                                        Najlepsze ubezpieczenia turystyczne
                                    </h1>
                                    <p>
                                        Zapewnij sobie i swoim bliskim spokojny wypoczynek za granicą z naszym
                                        ubezpieczeniem turystycznym.
                                        Chcesz skonsultować zakres ubezpieczenia z doradcą? <br/>
                                        Wciśnij Pomoc i połącz się z nami lub Kup online
                                    </p>
                                    <div class="button1">
                                        <a href="#" onclick="openCP(event)">Kup online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/szkolne.webp" alt=""/>
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-lg-push-8 col-md-push-6 bg-gradient">
                                    <h1>
                                        Ubezpiecz swoje dzieci
                                    </h1>
                                    <p>
                                        Szeroki zakres, wysokie sumy ubezpieczenia, 24h na całym świecie. <br/>
                                        Kup online lub skontaktuj się z nami a doradzimy w wyborze pakietu.
                                    </p>
                                    <div class="button1">
                                        <a href="https://sklep.signal-iduna.pl/?ag_symbol=73098&RauNbr=11731870%2FP&product_code=PNL_NNWI_SZKOLNE">Kup
                                            online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/protect.webp" alt=""/>
                    <div class="flex-caption flex-caption1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-lg-push-8 col-md-push-6 bg-gradient">
                                    <h1>
                                        Zabezpiecz siebie i swoją rodzinę
                                    </h1>
                                    <p>
                                        Zainwestuj w swoje bezpieczeństwo. Chroń siebie i swoich bliskich każdego dnia.
                                        <br/>
                                        Pomożemy Ci znaleźć optymalne rozwiązanie.
                                    </p>
                                    <div class="button1">
                                        <a href="#kontakt" onclick="openCP(event)">Skontaktuj się z Nami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--slider end-->

    <!-- one section -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu3"></div>
        <div class="container">
            <div class="row">
                {{--                <div class="col-md-6">--}}
                {{--                    <br>--}}
                {{--                    <h3>Powstaliśmy by wspierać firmy</h3>--}}
                {{--                    <br>--}}
                {{--                    <p>--}}

                {{--                    </p>--}}
                {{--                    <ul class="ul-list">--}}
                {{--                        <li>--}}
                {{--                            <i class="fa fa-check"></i> Ne nec detracto appellantur--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <i class="fa fa-check"></i> Aperiam accusamus vel eu--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <i class="fa fa-check"></i> Nam albucius ponderum rationibu--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--                <div class="col-md-6">--}}
                {{--                    <img src="images/about.png" alt="">--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section-cta"  >
        <div class="cta-left">
            <div class="cta-left-inner">
                <h3>Powstaliśmy by wspierać firmy</h3>
                <br>
                <ul>
                    <li><i class="fa fa-check"></i> przeanalizujemy rynek ubezpieczeń zdrowotnych i życiowych</li>
                    <li><i class="fa fa-check"></i> dopasujemy zakres ubezpieczenia do Twojej firmy</li>
                    <li><i class="fa fa-check"></i> będziemy Cię wspierać przez cały okres umowy</li>
                </ul>
                <div class="button1">
                    <a href="{{ url('/zapytanie') }}" class="accent-color-bg">Prośba o darmową wycenę</a>
                </div>
            </div>
        </div>
        <div class="cta-right">
            <img src="images/firmowe.webp" alt="">
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu2"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Produkty ubezpieczeniowe</h2>
                <h3>
                    Współpracujemy z najlepszymi towarzystwami ubezpieczeniowymi na rynku. Oferujemy szeroki wachlarz
                    produktów ubezpieczeniowych dopasowanych do Twoich potrzeb.
                </h3>
            </div>
        </div>
        <div class="wrapper100percent">
            <div class="row">
                <div class="services">
                    <!-- one service -->
                    <div class="one-service color1">
                        <ul>
                            <li>
                                <div style="display: inline-block; float: left; margin-right: 15px;">
                                    <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor"
                                              d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z"/>
                                    </svg>
                                </div>
                                <h3>Grupowe</h3>
                                <ul>
                                    <li>
                                        <p>
                                            No errem ridens eam, nam an veniam nam an veniam equidem ex nec.
                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color2">
                        <ul>
                            <li>
                                <div style="display: inline-block; float: left; margin-right: 15px;">
                                    <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path fill="currentColor"
                                            d="M128 128C92.7 128 64 156.7 64 192L64 448C64 483.3 92.7 512 128 512L144 512L144 128L128 128zM192 128L192 512L448 512L448 128L192 128zM512 512C547.3 512 576 483.3 576 448L576 192C576 156.7 547.3 128 512 128L496 128L496 512L512 512zM288 248C288 239.2 295.2 232 304 232L336 232C344.8 232 352 239.2 352 248L352 288L392 288C400.8 288 408 295.2 408 304L408 336C408 344.8 400.8 352 392 352L352 352L352 392C352 400.8 344.8 408 336 408L304 408C295.2 408 288 400.8 288 392L288 352L248 352C239.2 352 232 344.8 232 336L232 304C232 295.2 239.2 288 248 288L288 288L288 248z"/>
                                    </svg>
                                </div>
                                <h3>Zdrowie</h3>
                                <ul>
                                    <li>
                                        <p>
                                            No errem ridens eam, nam an veniam nam an veniam equidem ex nec.
                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color3">
                        <ul>
                            <li>
                                <img src="images/icon-home.png" alt="">
                                <h3>Życie</h3>
                                <ul>
                                    <li>
                                        <p>

                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color4">
                        <ul>
                            <li>
                                <img src="images/icon-travel.png" alt="">
                                <h3>Turystyka</h3>
                                <ul>
                                    <li>
                                        <p>
                                            No errem ridens eam, nam an veniam nam an veniam equidem ex nec.
                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color5">
                        <ul>
                            <li>
                                <div style="display: inline-block; float: left; margin-right: 15px;">
                                    <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            fill="currentColor"
                                            d="M320 96L192 96 144.6 24.9C137.5 14.2 145.1 0 157.9 0L354.1 0c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128l128 0c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96L96 512c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4c0 0 0 0 0 0s0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20l0 14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1c0 0 0 0 0 0s0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4l0 14.6c0 11 9 20 20 20s20-9 20-20l0-13.8c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15c0 0 0 0 0 0l-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7l0-13.9z"/>
                                    </svg>
                                </div>
                                <h3>Emerytura</h3>
                                <ul>
                                    <li>
                                        <p>
                                            No errem ridens eam, nam an veniam nam an veniam equidem ex nec.
                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                    <!-- one service -->
                    <div class="one-service color6">
                        <ul>
                            <li>
                                <div style="display: inline-block; float: left; margin-right: 15px;">
                                    <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor"
                                              d="M96 64a64 64 0 1 1 128 0A64 64 0 1 1 96 64zm48 320l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-192.2L59.1 321c-9.4 15-29.2 19.4-44.1 10S-4.5 301.9 4.9 287l39.9-63.3C69.7 184 113.2 160 160 160s90.3 24 115.2 63.6L315.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4.9-44.1-10L240 287.8 240 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-32 0z"/>
                                    </svg>
                                </div>
                                <h3>Dzieci</h3>
                                <ul>
                                    <li>
                                        <p>
                                            No errem ridens eam, nam an veniam nam an veniam equidem ex nec.
                                        </p>
                                        <a href="#" onclick="openCP(event)">
                                            Poznaj szczegóły <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- one service end -->
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- one section end -->



@endsection
