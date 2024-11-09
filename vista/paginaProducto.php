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
	<header>
		<section id="logo"><a href="index.php">logo</a></section>
		<section id="inicio"><a href="index.php">inicio</a></section>
		<section id="carrito"><a href="carrito.php">carrito</a></section>
		<section id="user"><a href="usuario.php"></a></section>
		<section id="trastienda"><a href="menuTrastienda.php">trastienda</a></section>
	</header>
	<div id="producto">
	<?php
		echo "<p>$id</p>";
		echo "<p>$nombre</p>";
		echo "<p>$descripcion</p>";
		echo "<p>$precio</p>";
		echo "<p>$imagen</p>";
		echo "<p>$stock</p>";
	?>
	<figure></figure>
	
	</div>
	
	<footer>
		<section id="social">

		</section>
		<section id="foot_info">

		</section>
	</footer>
</body>
</html>