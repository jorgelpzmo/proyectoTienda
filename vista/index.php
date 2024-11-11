<?php
	require '../controlador/ControlProducto.php';

	$control_producto = new ControlProducto();
	$productos = $control_producto->getAllProductos();
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
		<section id="user"><a href="usuario.php">usuario</a></section>
		<section id="trastienda"><a href="menuTrastienda.php">trastienda</a></section>
	</header>
	<div id="main">
		<div id="slide">

		</div>
		<div id="items">
			<h4></h4>
			<section id="sprays">
				<h3>Productos</h3>
				<div>
					<form action="../controlador/controlIndex.php" method="post">
					<?php foreach ($productos as $producto): ?>
					<input type="submit" name="producto" value="<?= $producto->getId(); ?>"> <?= $producto->getNombre(); ?> </input>
					<?php endforeach; ?>
					</form>
				</div>
			</section>
			<section  id="clothing">
				<h3></h3>
				<div>
					<a href="producto"></a>
				</div>
			</section>
		</div>
	</div>
	<footer>
		<section id="social">

		</section>
		<section id="foot_info">

		</section>
	</footer>
</body>
</html>