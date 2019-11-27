<?php
include "db.php";
$files = get_imgs();
?>
<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
	</head>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>

  </head>

	<body>
		<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

		<h1>Archivos</h1>
		<a  class= "btn btn-info" href="../SitioDifrolAdmin/vistas/updocumen.php">Agregar mas</a> - <a  class= "btn btn-success" href="./images.php">Imagenes</a>
		<br>
		<?php if(count($files)>0):?>
			<br><table class="table datatable table-bordered table-hover table-striped">
	<thead>
		<!--<th></th>-->
		<th></th>
		<th>Nombre</th>
		<th>Descargar</th>
		<th>Eliminar</th>
		
	</thead>
			<?php foreach($files as $f):?>
				<tr>
					<td></td>
				<!--<td><?php echo $f->folder;?></td>-->
				<td><?php echo $f->src;?></td>
				<td><a class= "btn btn-primary" href="./download.php?id=<?php echo $f->id; ?>">Descargar</a></td>
				<td><a class= "btn btn-danger" href="./delete.php?id=<?php echo $f->id; ?>">Eliminar</a></td>
				</tr>
			<?php endforeach;?>
			</table>
<?php else:?>
<p class="alert alert-warning">No hay Archivos.</p>
<?php endif; ?>

</div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <hr>
	<p>Copyright © 2019 - Todos los Derechos Reservados por DIFROL.</p>
  </div>
</div>
</div>


	</body>
</html>
