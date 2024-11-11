<?php
	require 'controlCompra.php';
	require 'ControlProducto.php';

	// Cuando Fabio suba Usuario
	/*session_name('usuario');
	session_start();
	$usuario_id = $_SESSION['id'];
	session_write_close();*/
	$usuario_id = 1;
	
	session_name('carrito');
	session_start();

	if ($_REQUEST['action'] == 'comprar') {
		if (isset($_SESSION['productos']) && isset($_SESSION['cantidades'])) {
			$productos = $_SESSION['productos'];
			$cantidades = $_SESSION['cantidades'];
		}

		if (!isset($_SESSION['id']))
			$_SESSION['id'] = 1;
		else
			$_SESSION['id']++;

		$control_compra = new ControlCompra();
		$control_producto = new ControlProducto();
		
		for ($i = 0; $i < count($productos); $i++) {
			$producto_id = $productos[$i]->getId();
			$cantidad = $cantidades[$i];
			$fecha_compra = date("Y-m-d H:i:s");
			$compra = new DTOCompra($usuario_id, $producto_id, $fecha_compra, $_SESSION['id'], $cantidad);
			$control_compra->nuevaCompra($compra);
			$control_producto->actualizarStock($productos[$i], $cantidad);
		}
		header("Location:../vista/ticket.php");
		exit;

	} else {
		unset($_SESSION['productos'], $_SESSION['cantidades']);
		header("Location:../vista/carrito.php");
		exit;
	}	
?>