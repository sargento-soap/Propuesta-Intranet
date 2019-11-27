   <head>

    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>

  </head>

	<body>
		<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">



<?php

if(isset($_GET["id"])){
	include "db.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		del($img->id);
		unlink($img->folder.$img->src);
		print "<h4>Eliminada Exitosamente!</h4>";
	print "<ul><li><a class= 'btn btn-info' href='./index.php'>Agregar mas</a></li>";
echo "<br>"; 
	print "<li><a class= 'btn btn-success' href='./images.php'>Ver imagenes</a></li>";
  echo "<br>"; 
	print "<li><a class= 'btn btn-default' href='./files.php'>Ver Archivos</a></li></ul>";

	}
}


?>

</div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-12">
  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <p>Copyright © 2019 - Todos los Derechos Reservados por DIFROL.</p>
          </div>
        </div>
      </footer>
  </div>
</div>
</div>