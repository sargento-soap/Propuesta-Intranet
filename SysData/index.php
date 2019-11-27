<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Angellomix</title>
	</head>
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <script src="res/js/jquery.min.js"></script>

  </head>

	<body>
		<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">


		<h1>Subir imagenes o archivos</h1>
			 <a href="./images.php" class= "btn btn-success">Imagenes</a>
			 <br>
		<form enctype="multipart/form-data" method="post" action="upload.php"><br>
		<input name="image[]"class= "btn btn-info" required="" type="file" multiple />
		<br>
		<input type="submit" class= "btn btn-primary" value="Upload">
		</form>

	</body>
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
</html>
