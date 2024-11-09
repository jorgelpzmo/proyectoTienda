<?php 
require 'ControlProducto.php';
$id=$_REQUEST["id"];
$nombre=$_REQUEST["nombre"];
$descripcion=$_REQUEST["descripcion"];
$precio=$_REQUEST["precio"];
$imagen=$_REQUEST["imagen"];
$stock=$_REQUEST["stock"];
$producto=new DTOProducto($nombre, $descripcion, $precio, $imagen, $stock);
$producto->setId($id);
$control_producto=new ControlProducto();
$resultado= $control_producto->actualizarProducto($producto);
header("Location: ../vista/vistaMostrarTrastienda.php");
?>