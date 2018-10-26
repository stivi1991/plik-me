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

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

      <?= $this->Html->css('/lib/bootstrap/css/bootstrap.min.css') ?>
      <?= $this->Html->css('/lib/owlcarousel/assets/owl.carousel.min.css') ?>
      <?= $this->Html->css('/lib/owlcarousel/assets/owl.theme.default.min.css') ?>
      <?= $this->Html->css('/lib/font-awesome/css/font-awesome.min.css') ?>
      <?= $this->Html->css('/lib/animate/animate.min.css') ?>
      <?= $this->Html->css('/lib/modal-video/css/modal-video.min.css') ?>
      <?= $this->Html->css('/css/style.css') ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <meta charset="utf-8">
  <title>plik.me</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

</head>
<body class="home">
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>plik</span>.me</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="/users/login">Log In</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>plik.me</h1>
      <br>
      <p>
      <img src="/img/hero-img.png" alt="Hero Imgs">
      <div class="form-group">
      </div>
      <a href="/users/register" class="btn-get-started scrollto">Sign Up</a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="img/about-img.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>Jesteśmy</span>zajebiści</h2>
            <p>Dawaj hajs, u nas będzie mu lepiej.
            </p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Wyjebiste warunki</li>
              <li><i class="fa fa-angle-right"></i>Ciastka</li>
              <li><i class="fa fa-angle-right"></i>Placki</li>
              <li><i class="fa fa-angle-right"></i>Eurosy z nieba</li>
              <li><i class="fa fa-angle-right"></i>Nie odbieraj swojego bitka</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/modal-video/js/modal-video.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
