<?php
	require 'ControlProducto.php';

	$controlProducto = new ControlProducto();
	$productos = $controlProducto->getAllProductos();

	header("Location:index.php?productos=$productos");
?>