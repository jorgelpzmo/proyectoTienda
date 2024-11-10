<?php 
	require '../modelo/DTOProducto.php';
	
	session_name('carrito');
	session_start();
	//session_unset();
	$total = 0;
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
	<div id="carrito">
		<?php for ($i = 0; $i < count($_SESSION['productos']); $i++):?>
			<?php $total += $_SESSION['productos'][$i]->getPrecio() * $_SESSION['cantidades'][$i] ?>
			<article>
				<img src="" alt="">
				<div>
					<p><?= $_SESSION['productos'][$i]->getNombre() . " " . $_SESSION['cantidades'][$i] . " " . $_SESSION['productos'][$i]->getPrecio()?></p>
				</div>
			</article>
		<?php endfor; ?>
		<h2><?= "TOTAL: " . $total ?></h2>
		<form action="../controlador/controlCarrito.php" method="post">
			<input type="submit" name="action" value="comprar">
			<input type="submit" name="action" value="borrar">
		</form>
	</div>
	<footer>
		<section id="social">

		</section>
		<section id="foot_info">

		</section>
	</footer>
</body>
</html>