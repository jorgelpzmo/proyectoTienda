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
	<link rel="shortcut icon" href="https://www.montanacolors.com/favicon.ico">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<header>
		<section id="logo"><a href="index.php">logo</a></section>
		<section id="inicio"><a href="index.php">inicio</a></section>
		<section id="carrito"><a href="carrito.php">carrito</a></section>
		<section id="user"><a href="usuario.php">usuario</a></section>
		<section id="trastienda"><a href="vistaMostrarTrastienda.php">trastienda</a></section>
	</header>
	<div id="main">
		<div id="slide">
			<div>
				<figure>
					<section>
						<p>Nuevos colorores</p>
						<p>Pintura anti-corrosiva</p>
						<a href="">MOSTRAR</a>
					</section>
					<img src="https://www.montanacolors.com/content/imgsxml/panel_slider/propinturaesmalteanticorrosiva18718.jpg" alt="">
				</figure>
				<figure>
					<section>
						<p>MTN Hardcore</p>
						<p>Otoño con MTN</p>
						<a href="">MOSTRAR</a>
					</section>
					<img src="https://www.montanacolors.com/content/imgsxml/panel_slider/mtnhardcorefallhalloween569.jpg" alt="">
				</figure>
				<figure>
					<section>
						<p>Tienda Online</p>
						<p>Sport Team T-Shirt Vol.2</p>
						<a href="">MOSTRAR</a>
					</section>
					<img src="https://www.montanacolors.com/content/imgsxml/panel_slider/mtn-sport-team-vol2-home338.jpg" alt="">
				</figure>
				<figure>
					<section>
						<p>Ahora en formato 400ml</p>
						<p>MTN Water based</p>
						<a href="">MOSTRAR</a>
					</section>
					<img src="https://www.montanacolors.com/content/imgsxml/panel_slider/web-header-wb679.jpg" alt="">
				</figure>
			</div>
		</div>
		<div id="items">
			<h4>Montana Colors Products</h4>
			<section id="sprays">
				<h3>Shop</h3>
				<div>
					<form action="../controlador/controlIndex.php" method="post">
					<?php foreach ($productos as $producto): ?>
					<input type="submit" name="producto" value="<?= $producto->getId(); ?>"> <?= $producto->getNombre(); ?> </input>
					<?php endforeach; ?>
					</form>
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