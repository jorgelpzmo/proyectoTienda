<?php
	$id = $_REQUEST['id'];
	$nombre = $_REQUEST['nombre'];
	$descripcion = $_REQUEST['descripcion'];
	$precio = $_REQUEST['precio'];
	$imagen = $_REQUEST['imagen'];
	$stock = $_REQUEST['stock'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>montana</title>
</head>
<body>
	<?php 
		echo "<p>$id</p>";
		echo "<p>$nombre</p>";
		echo "<p>$descripcion</p>";
		echo "<p>$precio</p>";
		echo "<p>$imagen</p>";
		echo "<p>$stock</p>";
	?>
</body>
</html>