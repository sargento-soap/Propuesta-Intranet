<?php

	session_start();
	require_once('../SitioDifrolAdmin/Controladores/Usuario.class.php');

	/* Usando mi namespace SystemRegPHP y heredo la classe Usuario */
	use SitioDifrolAdmin\Usuario as Usuario;

	/* Acceso a MySQL */
	$sql_driver = 'mysql';
	$sql_host = 'localhost';
  $sql_name = 'conexionpdo';
	$sql_user = 'intranet';
	$sql_pass = '2WMPN26W6rrhbb.';
	Usuario::init($sql_driver, $sql_host, $sql_name, $sql_user, $sql_pass);

	/* chequea al usuario actual */
	$user = false;
	if(Usuario::check()) {
        $user = Usuario::getByID($_SESSION['user']['id']);
    }
    else {
        /* redireccionando a index.php */
        header('Location: ../../index.php');
        exit();
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DIFROL &mdash;Administrador</title>

  <link href="../SitioDifrolAdmin/img/favicon.png" rel="icon">

  <!-- Custom fonts for this template-->
  <link href="../SitioDifrolAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../SitioDifrolAdmin/css/sb-admin-2.min.css" rel="stylesheet">

  

  <script src="../../SysData/res/js/jquery.min.js"></script>

</head>

<body>

 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
<div class="sidebar-brand-text mx-3">Administrador</div>
</a>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Tipo de Servicio</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Servicios:</h6>
      <a class="collapse-item" href="updocumen.php">Subir Archivos</a>
      
    </div>
  </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="charts.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Indicadores</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">      
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">    
              <div class="nav-link dropdown-toggle" id="bs-example-navbar-collapse-1">
                <ul >
                    <li><a href="#">Hola, <?php echo $user['name']; ?></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../SitioDifrolAdmin/Controladores/logout.php">, Salir</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
		<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
<!-- Begin Page Content -->
<div class="container-fluid">

<?php

include "db.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = false;

$files = array();
foreach ($_FILES['image'] as $k => $l) {
 foreach ($l as $i => $v) {
 if (!array_key_exists($i, $files))
   $files[$i] = array();
   $files[$i][$k] = $v;
 }
}

foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->Process("uploads/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img("uploads/",$handle->file_dst_name);
    } else {
	  $error = true;
      echo 'Error: ' . $handle->error;
    }
  } else {
   	$error = true;
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
}   

if(!$error){
	print "<h4>Subida con Exito!</h4>";

	print "<ul><li><a class= 'btn btn-info' href='../SitioDifrolAdmin/vistas/updocumen.php'>Agregar mas</a></li>";
  echo "<br>"; 
	print "<li><a class= 'btn btn-default' href='../SitioDifrolAdmin/vistas/updocumen.php'>Ver Archivos</a></li></ul>";
}

?>
</div>
</div>

</body>