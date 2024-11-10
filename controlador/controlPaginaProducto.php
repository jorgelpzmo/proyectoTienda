<?php
	require 'ControlProducto.php';

	if (session_status() === PHP_SESSION_NONE) {
		session_name('carrito');
		session_start();
	}
	$producto_id = $_REQUEST['producto_id'];
	$cantidad = $_REQUEST['cantidad'];
	
	$control_producto = new ControlProducto();
	$producto = $control_producto->getProducto($producto_id);
	$exists = false;
	if (isset($_SESSION['productos'])) {
		for ($i = 0; $i < count($_SESSION['productos']); $i++)	 {
			if ($_SESSION['productos'][$i]->getId() == $producto_id) {
				print_r($_SESSION['cantidades']);
				$_SESSION['cantidades'][$i] += $cantidad;
				$exists = true;
			}
		}
		if (!$exists) {
			$_SESSION['productos'][] = $producto;
			$_SESSION['cantidades'][] = $cantidad;
		}
	} else {
		$_SESSION['productos'][] = $producto;
		$_SESSION['cantidades'][] = $cantidad;
	}

	$nombre = $producto->getNombre();
	$descripcion = $producto->getDescripcion();
	$precio = $producto->getPrecio();
	$imagen = $producto->getImagen();
	$stock = $producto->getStock();

	header("Location:../vista/paginaProducto.php?id=$producto_id&nombre=$nombre&descripcion=$descripcion&precio=$precio&imagen=$imagen&stock=$stock");
	exit;
?>