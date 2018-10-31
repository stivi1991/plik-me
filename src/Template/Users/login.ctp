<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?= $this->Html->css('/style.css') ?>
    <?= $this->Html->css('/css/responsive.css') ?>
    <?= $this->Html->css('/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/css/animante.css') ?>
    <?= $this->Html->css('/css/font-awesome.min.css') ?>
    <?= $this->Html->css('/css/ionicons.css') ?>
    <?= $this->Html->css('/css/magnific-popup.css') ?>
    <?= $this->Html->css('/css/owl.carousel.min.css') ?>
    <?= $this->Html->css('/css/slick.css') ?>
    <?= $this->Html->css('/css/themify-icons.css') ?>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title -->
    <title>plik.me - Pożyczka zabezpieczona Bitcoinem</title>
    <?= $this->Form->create('User', array('id'=>'login')); ?>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

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
                        </nav>

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

                    </div>
                    <div class="get-start-area">
                      <div class="row register-form">
                          <div class="col-md-6">
                              <div class="form-group">
                                <?= $this->Form->control('email', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Adres email','value'=>'')); ?>
                              </div>
                              <div class="form-group">
                                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Hasło','value'=>'')); ?>
                              </div>
                          </div>
                        </div>

                        <!-- Form Start -->
                        <form class="form-inline">
                          <?php echo $this->Form->submit('Zaloguj', array('class'=>'submit')); ?>
                          <?php echo $this->Form->end(); ?>
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ***** Wellcome Area End ***** -->



    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text" "center">
            <h2>plik.me</h2>
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
    <?= $this->Html->script('/js/jquery-2.2.4.min.js') ?>
    <?= $this->Html->script('/js/popper.min.js') ?>
    <?= $this->Html->script('/js/bootstrap.min.js') ?>
    <?= $this->Html->script('/js/plugins.js') ?>
    <?= $this->Html->script('/js/slick.min.js') ?>
    <?= $this->Html->script('/js/footer-reveal.min.js') ?>
    <?= $this->Html->script('/js/active.js') ?>

</body>

</html>
