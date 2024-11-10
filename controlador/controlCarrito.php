<?php
	require 'controlCompra.php';
	require 'ControlProducto.php';
	
	static $compra_id = 0;
	
	// Cuando Fabio suba Usuario
	/*session_name('usuario');
	session_start();
	$usuario_id = $_SESSION['id'];
	session_write_close();*/
	$usuario_id = 1;
	
	session_name('carrito');
	session_start();

	$control_compra = new ControlCompra();
	$control_producto = new ControlProducto();
	
	$compra_id++;
	for ($i = 0; $i < count($_SESSION['productos']); $i++) {
		$producto_id = $_SESSION['productos'][$i];
		$cantidad = $_SESSION['cantidades'][$i];
		$fecha_compra = date("Y-m-d H:i:s");
		$compra = new DTOCompra($usuario_id, $producto_id, $fecha_compra, $compra_id, $cantidad);
		$control_compra->nuevaCompra($compra);
		$control_producto->actualizarStock($_SESSION['productos'][$i], $cantidad);
	}
?>