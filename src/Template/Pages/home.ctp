<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$cakeDescription = 'plik.me';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>plik.me - Pożyczka zabezpieczona Bitcoinem</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="/"><h7>plik</h7><h8>.me</h8></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Start</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">O Nas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">Jak działamy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#facts">Statystyki</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/users/login">Panel klienta</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="/users/register">Zarejestruj się</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Odbierz gotówkę <br>zachowując BTC</h2>
                        <h3></h3>
                        <p>Korzystaj ze swojej inwestycji w kryptowaluty bez konieczności pozbywania się ich!</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="/users/register" class="form-inline">
                            <input type="submit" class="submit" value="Załóż konto">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100_50" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Tylko 3 proste kroki</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-user" aria-hidden="true"></i>
                        </div>
                        <h4>Rejestracja</h4>
                        <p>Choćby płakała, powoływała się na demokratyczny i wspaniałomyślny głos mieszkańców Łodzi to kariera Hanny Zdanowskiej na stanowisku prezydenta Łodzi </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-arrow-down" aria-hidden="true"></i>
                        </div>
                        <h4>Depozyt</h4>
                        <p>Choćby płakała, powoływała się na demokratyczny i wspaniałomyślny głos mieszkańców Łodzi to kariera Hanny Zdanowskiej na stanowisku prezydenta Łodzi </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-money" aria-hidden="true"></i>
                        </div>
                        <h4>Gotówka</h4>
                        <p>Choćby płakała, powoływała się na demokratyczny i wspaniałomyślny głos mieszkańców Łodzi to kariera Hanny Zdanowskiej na stanowisku prezydenta Łodzi </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_100 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Jak to działa?</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-stats-up" aria-hidden="true"></i>
                        <h5>Zarabiaj</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-lock" aria-hidden="true"></i>
                        <h5>Bezpieczeństwo</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-panel" aria-hidden="true"></i>
                        <h5>Dostosuj spłatę</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-heart" aria-hidden="true"></i>
                        <h5>Kochaj nas</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-crown" aria-hidden="true"></i>
                        <h5>Jesteśmy kurwa najlepsi</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5>24/7 Wsparcie online</h5>
                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->
    <br><br>

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix" id=facts>
        <div class="container">
            <div class="row" "div-center">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">9</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-cash"></i>
                            <p>Udzielonych<br>Pożyczek</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">8</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Obsłużonych <br>Klientów</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">6.3</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-social-bitcoin"></i>
                            <p>Zastawionych<br>Bitcoinów</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">12</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Średni czas <br>pożyczki (min.)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Skontaktuj się z nami!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Pozostań na bieżąco z naszymi specjalnymi ofertami!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Adres:</span> ul. Skryta 14/1, 60-751 Poznań</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Telefon:</span> +48 654 432 222</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> kontakt@plik.me</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Imię i Nazwisko *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Adres Email *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Twoja wiadomość *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Wyślij</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text" "center">
            <h9>plik</h9><h10>.me</h10>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">O Nas</a></li>
                    <li><a href="#">Regulamin</a></li>
                    <li><a href="#">Polityka Prywatności</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©2018 <a href="/" target="_blank">plik.me</a></p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>
