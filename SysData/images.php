

<?php
include "db.php";
$images = get_imgs();
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

		<h1>Imagenes</h1>
		<a  class= "btn btn-success" href="./index.php">Agregar mas</a> --- <a  class= "btn btn-default" href="./files.php">Archivos</a>
		<br>
		<?php if(count($images)>0):?>
			<ul>	<br>
			<?php foreach($images as $img):?>
				<li><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">
				<br>
				<a class= "btn btn-primary" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a> 
				<a class= "btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
				</li>
			<?php endforeach;?>
			</ul>
			<br>
<?php else:?>
<p class="alert alert-warning">No hay Imagenes.</p>
<?php endif;  ?>
	

</div>
</div>
<div class="container">
<div class="row">
  <div class="col-md-12">
    <hr>
<p><a href="http://angellomix.com/">Angellomix &copy; 2016</a></p>
  </div>
</div>
</div>


</body>
</html>
