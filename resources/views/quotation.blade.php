@extends('layouts.guest')

@section('content')

    <section class="section" style="margin-top: 120px;">
        <div class="mainheadlinewrapperpage">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="mainheadlinepage">
                            <h1>Zapytanie</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- one section -->
    <section class="wrapper100percent section3">
        <div class="left">
            <div class="left-inner">
                <div class="address">
                    <h4>Informacje kontaktowe</h4>
                    <p>
                        Jeśli masz jakieś pytania lub potrzebujesz więcej informacji, skontaktuj się z nami. Jesteśmy
                        dostępni, aby Ci pomóc.
                    </p>
                    <h3 style="padding-left: 40px; margin-bottom: 30px; color: #288fc5;">
                        Grupa Backup
                    </h3>
                    <ul class="ul-list">
                        <li>
                            <i class="fa fa-phone"></i> <a href="tel:+48512346736">+48 512 346 736</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i> <a href="mailto:biuro@grupabackup.pl" target="_blank">biuro@grupabackup.pl</a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i> ul. Krótka 11, 24-100 Puławy, Polska
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                <a id="kontakt"></a>
                <h3>Skontaktuj się z nami</h3>
                <!-- comment-form -->
                <form class="wrapper100percent" method="post" action="{{ route('email.quotation') }}">
                    @csrf
                    <div id="main">
                        <div>
                            <p><input type="text" placeholder="Nazwa firmy" name="name" required id="name"/>
                            </p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Adres email" name="email" required id="email"/>
                            </p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Orientacyjna liczba pracowników" name="employees"
                                      required id="employees"/>
                            </p>
                        </div>
                        <p><textarea placeholder="Wiadomość" name="message" id="message" rows="12" cols="5"></textarea>
                        </p>
                        <div class="buttoncontact">
                            <label>
                                <input type="checkbox" name="gdpr" id="gdpr" value="1" required/>
                                Wysłanie formularza kontaktowego jest równoznaczne ze zgodą na przetwarzanie danych
                                osobowych. Zobacz <a style="font-weight: 700" href="{{ url('/rodo') }}" target="_blank">pełen
                                    regulamin RODO</a>, aby
                                dowiedzieć się jak przetwarzamy Twoje dane
                            </label>
                            <p>
                                <input type="submit" name="submit" id="submit" value="Wyślij"/>
                            </p>
                        </div>
                        <ul class="col-sm-12" id="response"></ul>
                    </div>
                </form>
                <!-- comment-form-end end -->
            </div>
        </div>
    </section>
    <!-- one section end -->
    <!-- one section -->
    <section class="wrapper100percent section1 career">
        <div class="container">
            <div class="row">
                <div>
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->
@endsection
