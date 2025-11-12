<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/less" href="css/style.less">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/colorbox.css">
</head>
<body data-spy="scroll">
<div id="menu1"></div>
<header>
    <div class="navbar-fixed-top">
        <!-- menu -->
        <nav class="navbar navbar-height1 scroll menuswitch-js">
            <div class="container navbar-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="responsive-wrapper">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="images/logo.svg" alt="main logo"/>
                            </a>
                            <div class="navbar-header">
                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"
                                        type="button">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar icon-bar1"></span>
                                    <span class="icon-bar icon-bar2"></span>
                                    <span class="icon-bar icon-bar3"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <div class="cl-effect-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li><a href="{{ url('/')  }}">Home</a></li>
                                    {{--                                    <li><a href="{{ url('/ubezpieczenia') }}">Ubezpieczenia</a></li>--}}
                                    <li><a href="#menu3">O nas</a></li>
                                    <li><a href="{{ url('/kariera') }}">Kariera</a></li>
                                    <li><a href="#kontakt">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- menu end -->
    </div>
</header>

@yield('content')

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
            <form class="wrapper100percent" method="post" action="sendEmail.php">
                <div id="main">
                    <div>
                        <p><input type="text" placeholder="Imię" name="name" id="name"/>
                        </p>
                    </div>
                    <div>
                        <p><input type="text" placeholder="adres email" name="email" id="email"/>
                        </p>
                    </div>
                    <div>
                        <p>
                            <select name="size" id="size">
                                <option value="10">1-10</option>
                                <option value="25">11-25</option>
                                <option value="100">26-100</option>
                                <option value="200">101+</option>
                            </select>
                        </p>
                    </div>
                    <p><textarea placeholder="wiadomosc" name="message" id="message" rows="12" cols="5"></textarea>
                    </p>
                    <div class="buttoncontact">
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

<!-- content is above this -->
<!-- /footer is below this -->
<footer class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="scrollbutton">
                    <a href="javascript:scrollToTop()" title="go to top"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/flickity.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/masonry.js"></script>
<script src="js/twitter.js"></script>
<script src="js/countto.js"></script>
<script src="js/colorbox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/retina.js"></script>
<script src="js/less.js"></script>
<script src="js/chart.js"></script>
<script src="js/chart_init.js"></script>
<script src="js/scripts.js"></script>

<!-- BEGIN callpage.io widget -->
<script>var loadBabel = function(url, callback) {var script = document.createElement('script');script.async = true;if (script.readyState) {script.onreadystatechange = function() {if (script.readyState == 'loaded' || script.readyState == 'complete') {script.onreadystatechange = null;callback(window, document);}};} else {script.onload = function() {callback(window, document);};}script.src = url;document.head.appendChild(script);};var getCookie = function(cname) {var objToday = new Date();var version = objToday.toISOString().split('T')[0].split('-').join('');var name = cname + '=';var decodedCookie = decodeURIComponent(document.cookie);var cookieArray = decodedCookie.split(';');for (var i = 0; i < cookieArray.length; i++) {var cookie = cookieArray[i];cookie = cookie.trim();if (cookie.indexOf(name) == 0) {return cookie.substring(name.length, cookie.length);}}return version;};var loadWidget = function(window, document) {var __cp = {"id":"HfoztLJOpUFxTlEtr9SPfEuvwHMwmOeejxIb6m_fw-c","version":"1.1"};var cp = document.createElement('script');cp.type = 'text/javascript';cp.async = true;cp.src = "++cdn-widget.callpage.io+build+js+callpage.js".replace(/[+]/g, '/').replace(/[=]/g, '.') + '?v=' + getCookie('callpage-widget-version');var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(cp, s);if (window.callpage) {alert('You could have only 1 CallPage code on your website!');} else {window.callpage = function(method) {if (method == '__getQueue') {return this.methods;} else if (method) {if (typeof window.callpage.execute === 'function') {return window.callpage.execute.apply(this, arguments);} else {(this.methods = this.methods || []).push({arguments: arguments,});}}};window.callpage.__cp = __cp;window.callpage('api.button.autoshow');}};loadBabel('https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js', function() {return loadWidget(window, document);});</script>
<!-- END callpage.io widget -->

<script>
    function openCP(event) {
        event.preventDefault();
        callpage('api.widget.open');
    }
</script>
</body>
</html>
