<?php
	require 'ControlProducto.php';

	if (session_status() === PHP_SESSION_NONE) {
		session_name('carrito');
		session_start();
	}

	$id_producto = $_REQUEST['id_producto'];
	$cantidad = $_REQUEST['cantidad'];
	
	$control_producto = new ControlProducto();
	$producto = $control_producto->getProducto($id_producto);
	$_SESSION['productos'][] = $producto;
?>