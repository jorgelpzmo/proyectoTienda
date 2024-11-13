<?php 
require "ControlProducto.php";
require_once "../modelo/DTOProducto.php";
session_name("sesion_pedido");
session_start();
$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : null;
$cantidad = isset($_REQUEST["cantidad"]) ? $_REQUEST["cantidad"] : null;
$control_producto=new ControlProducto();
$producto = $control_producto->getProducto($id);
var_dump( $producto );

if($_REQUEST["action"]== "cancelar"){
    if(isset($_SESSION["producto"])){
        unset($_SESSION["producto"]);
        header("Location: ../vista/vistaMostrarTrastienda.php");
    }
    if(isset($_SESSION["cantidad"])){
        unset($_SESSION["cantidad"]);
        header("Location: ../vista/vistaMostrarTrastienda.php");
    }
    else{
        header("Location: ../vista/vistaMostrarTrastienda.php");
        exit;
    }
}

if($_REQUEST["action"]== "confirmar"){
    if(empty($_SESSION["producto"])){
        $mensaje="No hay productos en tu pedido";
        header("Location: ../vista/vistaPedido.php?mensaje=$mensaje");
        exit;
    }
}
if($_REQUEST["action"]=="+"){
    if(!$producto){
    $mensaje="Añada producto antes de pedir";
    
    header("Location: ../vista/vistaPedido.php?mensaje=$mensaje");
    exit;
    
    }
}

if($_REQUEST["action"]== "confirmar"){
    if(isset($_SESSION["producto"])){
        for( $i= 0; $i<count(value: $_SESSION["producto"]);$i++){
            $producto = $control_producto->getProducto($_SESSION["producto"][$i]->getId());
            $nuevoStock=$producto->getStock() + $_SESSION["cantidad"][$i];
            var_dump($nuevoStock);
            var_dump($_SESSION["cantidad"]);
            $idproducto=$_SESSION["producto"][$i]->getId();
            $control_producto->actualizarStock( $producto, $nuevoStock );
        }        
        unset($_SESSION["producto"]);
        unset($_SESSION["cantidad"]);
        header("Location: ../vista/vistaMostrarTrastienda.php");
        exit;       
    }
}

if($_REQUEST["action"]=="+"){
        $producto->setStock($producto->getStock()+$cantidad);
        $_SESSION["producto"][]= $producto;
        $_SESSION["cantidad"][]=$cantidad;
        header("Location: ../vista/vistaPedido.php");
        exit;
    }










?>