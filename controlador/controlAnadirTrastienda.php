<?php 
require 'ControlProducto.php';
$nombre=$_REQUEST["nombre"];
$descripcion=$_REQUEST["descripcion"];
$precio=$_REQUEST["precio"];
$imagen=$_REQUEST["imagen"];
$stock=$_REQUEST["stock"];
$producto=new DTOProducto($nombre, $descripcion, $precio, $imagen, $stock);
$control_producto=new ControlProducto();
$resultado= $control_producto->nuevoProducto($producto);
header("Location: ../vista/vistaMostrarTrastienda.php");

?>