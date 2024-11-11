<?php 
	require '../modelo/DTOProducto.php';
	session_name('carrito');
	session_start();
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
	<div id="ticket">
		<h4><?= $_SESSION['id'] ?></h4>
		<?php for ($i = 0; $i < count($_SESSION['productos']); $i++):?>
			<article>
				<img src="" alt="">
				<div>
					<p><?= $_SESSION['productos'][$i]->getNombre() . " " . $_SESSION['cantidades'][$i] . " " . $_SESSION['productos'][$i]->getPrecio()?></p>
				</div>
			</article>
		<?php endfor; ?>
		<h2><?= "TOTAL: " . $_SESSION['total'] ?></h2>
		<?php unset($_SESSION['productos'], $_SESSION['cantidades']); ?>
		<a href="index.php">inicio</a>
	</div>
	<footer>
		<section id="social">

		</section>
		<section id="foot_info">

		</section>
	</footer>
</body>
</html>
</html>