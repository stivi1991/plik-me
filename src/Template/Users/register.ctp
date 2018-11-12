<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Able Pro Responsive Bootstrap 4 Admin Template by Phoenixcoded</title>

	 <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  			<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
	content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="../user/assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="../user/assets/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="../user/assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../user/assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="../user/assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="../user/assets/css/responsive.css">

	<!--color css-->
    <link rel="stylesheet" type="text/css" href="../user/assets/css/color/color-1.min.css" id="color"/>

</head>
<body>
	<section class="login common-img-bg">
		<!-- Container-fluid starts -->
		<div class="container-fluid">
			<div class="row">
					<div class="col-sm-12">
						<div class="login-card card-block bg-white">
							<?= $this->Form->create('User', ['type'=>'text']); ?>
              <div class="text-center">
                <img src="../user/assets/images/logo.jpg" alt="logo">
              </div>
              <h3 class="text-center txt-primary">Nowe konto </h3>
                <div class="md-input-wrapper">
                   <?= $this->Form->control('email', array('label'=>false,'class'=>'md-form-control', 'type'=>'email','required'=>true)); ?>
                   <label>Email *</label>
                </div>

                <div class="md-input-wrapper">
                  <?= $this->Form->control('password', array('label'=>false,'class'=>'md-form-control', 'type'=>'password','required'=>true)); ?>
                  <label>Hasło *</label>
                </div>
                <div class="md-input-wrapper">
                  <?= $this->Form->control('password_confirm', array('label'=>false,'class'=>'md-form-control', 'type'=>'password','required'=>true)); ?>
                  <label>Powtórz hasło *</label>
                </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="md-input-wrapper">
                        <?= $this->Form->control('name_first', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>true)); ?>
                        <label>Imię *</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="md-input-wrapper">
                        <?= $this->Form->control('name_last', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>true)); ?>
                        <label>Nazwisko *</label>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="md-input-wrapper">
                      <?= $this->Form->control('address', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>true)); ?>
                      <label>Ulica i numer domu *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-input-wrapper">
                      <?= $this->Form->control('address_number', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>false)); ?>
                      <label>Numer mieszkania</label>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="md-input-wrapper">
                      <?= $this->Form->control('postal_code', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>true)); ?>
                      <label>Kod pocztowy *</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-input-wrapper">
                      <?= $this->Form->control('city', array('label'=>false,'class'=>'md-form-control', 'type'=>'text','required'=>true)); ?>
                      <label>Miejscowość *</label>
                    </div>
                </div>
              </div>
              <div class="rkmd-checkbox checkbox-rotate checkbox-ripple b-none m-b-20">
                  <?php echo $this->Form->checkbox('checkbox', array('label'=>false,'class'=>'md-form-control', 'type'=>'checkbox', 'required'=>true)); ?>
                <p>Zapoznałem się z Regulaminem i Polityką Prywatności</p>
              </div>
              <div class="col-xs-10 offset-xs-1">
                <?php echo $this->Form->submit('Zarejestruj', array('type'=>'submit', 'class'=>"btn btn-primary btn-md btn-block waves-effect waves-light m-b-20")); ?>
              </button>
              </div>
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <span class="text-muted">Masz już konto?</span>
                    <a href="/users/login" class="f-w-600 p-l-5"> Zaloguj się</a>

                  </div>
                </div>
							<?php echo $this->Form->end(); ?>
							<!-- end of form -->
						</div>
						<!-- end of login-card -->
					</div>
					<!-- end of col-sm-12 -->
				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-fluid -->
	</section>

	<!-- Warning Section Starts -->
<!-- Older IE warning message -->
  <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="../user/assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="../user/assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="../user/assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="../user/assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="../user/assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <!-- Warning Section Ends -->


	<!-- Required Jqurey -->
	<script src="../user/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../user/assets/plugins/tether/dist/js/tether.min.js"></script>
	<!-- Required Fremwork -->
	<script src="../user/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- waves effects.js -->
	<script src="../user/assets/plugins/Waves/waves.min.js"></script>
	<!--text js-->
	<script type="text/javascript" src="../user/assets/pages/elements.js"></script>


</body>
</html>
