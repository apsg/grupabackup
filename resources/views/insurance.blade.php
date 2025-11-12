@extends('layouts.guest')

@section('content')

    <section class="insurance-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Insurance Services
                    </h1>
                    <p>

                    </p>
                </div>
                <ul class="row single-icons-wrapper">
                    <li class="col-sm-2">
                        <div class="single-icon">
                            <a href="">
                                <img src="images/icon-home.png" alt="">
                                <h4>
                                    Dom
                                </h4>
                            </a>
                        </div>
                    </li>
                    <li class="col-sm-2">
                        <div class="single-icon">
                            <a href="">
                                <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        fill="currentColor"
                                        d="M320 96L192 96 144.6 24.9C137.5 14.2 145.1 0 157.9 0L354.1 0c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128l128 0c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96L96 512c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4c0 0 0 0 0 0s0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20l0 14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1c0 0 0 0 0 0s0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4l0 14.6c0 11 9 20 20 20s20-9 20-20l0-13.8c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15c0 0 0 0 0 0l-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7l0-13.9z"/>
                                </svg>
                                <h4>
                                    Emerytura
                                </h4>
                            </a>
                        </div>
                    </li>
                    <li class="col-sm-2">
                        <div class="single-icon">
                            <a href="">
                                <img src="images/icon-travel.png" alt="">
                                <h4>
                                    Turystyka
                                </h4>
                            </a>
                        </div>
                    </li>
                    <li class="col-sm-2">
                        <div class="single-icon">
                            <a href="">
                                <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                          d="M96 64a64 64 0 1 1 128 0A64 64 0 1 1 96 64zm48 320l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-192.2L59.1 321c-9.4 15-29.2 19.4-44.1 10S-4.5 301.9 4.9 287l39.9-63.3C69.7 184 113.2 160 160 160s90.3 24 115.2 63.6L315.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4.9-44.1-10L240 287.8 240 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-32 0z"/>
                                </svg>
                                <h4>
                                    Dzieci
                                </h4>
                            </a>
                        </div>
                    </li>
                    <li class="col-sm-2">
                        <div class="single-icon">
                            <a href="">
                                <svg class="icon-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor"
                                          d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z"/>
                                </svg>
                                <h4>
                                    Grupowe
                                </h4>
                            </a>
                        </div>
                    </li>
                    <li class="col-sm-2">
                        <div class="single-icon last">
                            <a href="">
                                <img src="images/icon-health.png" alt="">
                                <h4>
                                    Zdrowie
                                </h4>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>
                        House Protection
                    </h3>
                    <br>
                    <p>
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum
                        dolor sit amet.
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum
                        dolor sit amet
                    </p>
                    <div class="col-md-8 padding-out">
                        <ul class="insurance-list">
                            <li>
                                <b>Amound of Payment:</b> <span>From $20000 to $30000</span>
                            </li>
                            <li>
                                <b>Risk Level:</b> <span>Level2</span>
                            </li>
                            <li>
                                <b>Location:</b> <span>USA</span>
                            </li>
                            <li>
                                <b>Number of people:</b> <span>Max 8</span>
                            </li>
                            <li>
                                <b>Support:</b> <span>24h/7days</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 padding-out">
                        <ul class="ul-list">
                            <li>
                                <i class="fa fa-check"></i> Ne nec detract
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Aperiam accusamus
                            </li>
                            <li>
                                <i class="fa fa-check"></i> Nam albucius ponderum
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/man.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent insurance-section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mobile-change">
                    <img src="images/man2.png" alt="">
                </div>
                <div class="col-lg-7">
                    <br><br>
                    <h3>
                        Why choose us?
                    </h3>
                    <br>
                    <p>
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum
                        dolor sit amet.
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum
                        dolor sit amet
                    </p>
                    <ul class="row">
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-homeb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    House protected
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-carb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Cars protected
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-travelb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Travels protected
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-luxuryb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Luxury protected
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainheadlinewrapper">
                        <div class="mainheadline">
                            <h2>Special Offers</h2>
                            <h3>Lorem ipsum dolor sit amet lore ipsum dolor sit amet
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 insurance-icons">
                    <div class="insurance-icon">
                        <img src="images/icon-home2.png" alt="">
                    </div>
                    <h5>Houses protection</h5>
                    <p>Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                    </p>
                </div>
                <div class="col-lg-4 insurance-icons">
                    <div class="insurance-icon">
                        <img src="images/icon-car2.png" alt="">
                    </div>
                    <h5>Cars protection</h5>
                    <p>Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                    </p>
                </div>
                <div class="col-lg-4 insurance-icons">
                    <div class="insurance-icon">
                        <img src="images/icon-luxury2.png" alt="">
                    </div>
                    <h5>Luxury protection</h5>
                    <p>Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section-cta">
        <div class="cta-left">
            <div class="cta-left-inner">
                <h3>You are covered</h3>
                <br>
                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                    Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                </p>
                <p>Lorem ipsum dolor sit amet lore ipsum dolor sit dolor sit amet lore ipsum dolor sit amet
                </p>
                <div class="button1">
                    <a href="">Request a quote</a>
                </div>
            </div>
        </div>
        <div class="cta-right">
            <img src="images/ctaimage.jpg" alt="">
        </div>
    </section>
    <!-- one section end -->
@endsection
