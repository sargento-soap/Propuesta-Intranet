<?php
include "SysData/db.php";
$files = get_imgs();
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
  <script src="SysData/res/js/jquery.min.js"></script>

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
          <li>Documentos Oficiales</li>
        </ul>
        <h2>Documentacion Ofical DIFROL</h2>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       
      </div>
    </div>
  </section>
  <!-- end post-wrapper-top -->


  <section class="section1">
    <div class="container clearfix">
      <div class="content col-lg-8 col-md-8 col-sm-8 col-xs-12 clearfix">

      <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

		<h1>Documentos Oficiales</h1>
    <h2>
    <p>En Este apartado podra encontrar los documentos oficiales </p>
    </h2>
	
		<br>
		<?php if(count($files)>0):?>
			<br><table class="table datatable table-bordered table-hover table-striped">
	<thead>
		<!--<th></th>-->
		
		<th>Nombre</th>
    
		<th>Descargar</th>
	
		
	</thead>
			<?php foreach($files as $f):?>
				<tr>
					
				<!--<td><?php echo $f->folder;?></td>-->
        
				<td><?php echo $f->src;?></td>
        
				<td><a class= "btn btn-primary" href="SysData/download.php?id=<?php echo $f->id; ?>">Descargar</a></td>
				
				</tr>
			<?php endforeach;?>
			</table>
<?php else:?>
<p class="alert alert-warning">No hay Archivos.</p>
<?php endif; ?>

        <div class="clearfix"></div>
        <hr>
      

      </div>
      <!-- end content -->
      <div id="sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">








</div>
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
  <div class="dmtop">Boton Envio a Principio</div>

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
