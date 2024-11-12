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
		<section id="logo"><a href="index.php"><img src="https://www.montanacolors.com/negocio/plantillas/panels/header/img/logo_small.svg" alt=""></a></section>
		<section id="trastienda"><a href="menuTrastienda.php">TRASTIENDA</a></section>
		<section id="user"><a href="usuario.php">
			<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1280 1536">
				<path fill="black" d="M1280 1271q0 109-62.5 187t-150.5 78H213q-88 0-150.5-78T0 1271q0-85 8.5-160.5t31.5-152t58.5-131t94-89T327 704q131 128 313 128t313-128q76 0 134.5 34.5t94 89t58.5 131t31.5 152t8.5 160.5m-256-887q0 159-112.5 271.5T640 768T368.5 655.5T256 384t112.5-271.5T640 0t271.5 112.5T1024 384"/>
			</svg>
		</a></section>
		<section id="carrito"><a href="carrito.php">
			<svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" viewBox="0 0 24 24">
				<path fill="black" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2"/>
			</svg>
		</a></section>
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