<?php
require_once('SysFullCalendar/bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DIFROL &mdash;Dirección Nacional de Fronteras y Límites del Estado</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

<!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

<!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/blue.css">

<!-- Full Calendar  -->

	
	<!-- FullCalendar -->
	<link href='SysFullCalendar/css/fullcalendar.css' rel='stylesheet' />   


</head>


<body>
<!-- Container de Barra superior  -->
  <div class="topbar clearfix">
    <div class="container">
      <div class="col-lg-12 text-right">
        <div class="social_buttons">
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS"><i class="fa  fa-id-badge"></i></a>
          <a href="SitioDifrolAdmin/index.php">Funcionario <span class="sr-only">(current)</span></a>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Container de Barra superior   -->

<!-- Cabezera contiene logos  -->
  <header class="header">
    <div class="container">
      <div class="site-header clearfix">

        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.php" title="">
              <h4><img height="100px" width="100px" src="./img/DIFROLlogo.png"></h4>
            </a>
          </div>
        </div>
  <!-- Espacio -->
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
        </div> 
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
        </div>   
  <!-- Logo UGIT -->
        <div class="col-lg-3 col-md-3 col-sm-12 title-area">
          <div class="site-title" id="title">
            <a href="index.php" title="">
              <h4><img height="200px" width="250px" src="./img/Logo_UGIT.png"></h4>
            </a>
          </div>
        </div>
  <!-- Fin Logo UGIT -->
     
      </div>
      <!-- site header -->
    </div>
    <!-- end container -->
  </header>
<!-- Fin Cabezera contiene logos  -->

  <section class="post-wrapper-top">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcrumb">
          <li><a href="index.php">Inicio</a></li>
          <li>Infraestructura y Soporte DIFROL</li>
        </ul>
        <h2>Infraestructura y Soporte DIFROL</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       
      </div>
    </div>
  </section>
  <!-- end post-wrapper-top -->

  <section class="section1">
    <div class="container clearfix">
      <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="dmbox">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a class="" href="#"><i class="dm-icon fa fa-question fa-3x"></i></a>
              </div>
            </div>
            <h4>1. ¿Tienes un Problema o Requerimiento?</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <!-- end dmbox -->

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="dmbox">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a class="" href="#"><i class="dm-icon fa fa-random fa-3x"></i></a>  
              </div>
            </div>
            <h4>2. Ingresa a la plataforma OsTicket </h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <!-- end dmbox -->

        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="dmbox">
            <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a class="" href="#"><i class="dm-icon fa fa-envelope-o fa-3x"></i></a>
              </div>
            </div>
            <h4>3. Envía un Ticket de Solitud</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <!-- end dmbox -->

        <div class="clearfix"></div>
        <div class="divider"></div>

        <div class="general-title text-center">
          <h3>Sistema de Ticket</h3>
          <p>Ingresa a la plataforma OsTicket para realizar la solicitud</p>
          <hr>
        </div>

        <div class="text-center">
        <div class="service-icon">
              <div class="dm-icon-effect-1" data-effect="slide-bottom">
                <a class="" href="http://10.10.255.92/soporte/"><i class="dm-icon fa fa-envelope-o fa-3x"></i></a>
              </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="divider"></div>

      
            
         

         

       
            </li>
          </ul>
          <!-- .forums-directory -->
        </div>
        <!-- /bbpress -->

      </div>
      <!-- end content -->
    </div>
    <!-- end container -->
  </section>
  <!-- end section -->

  <footer class="footer">
  <div class="copyrights">
    <div class="container">
      <div class="col-lg-6 col-md-6 col-sm-12 columns footer-left">
        <p>Copyright © 2019 - Todos los Derechos Reservados por DIFROL.</p>
      </div>
    </div>
  </div>
  </footer>
  <div class="dmtop">Scroll to Top</div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  <script src="lib/isotope/isotope.min.js"></script>
  <script src="lib/hover/hoverdir.js"></script>
  <script src="lib/hover/hoverex.min.js"></script>
  <script src="lib/unveil-effects/unveil-effects.js"></script>
  <script src="lib/owl-carousel/owl-carousel.js"></script>
  <script src="lib/jetmenu/jetmenu.js"></script>
  <script src="lib/animate-enhanced/animate-enhanced.min.js"></script>
  <script src="lib/jigowatt/jigowatt.js"></script>
  <script src="lib/easypiechart/easypiechart.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
