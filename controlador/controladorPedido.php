<?php 
// LO QUE CAMBIO NO ESTÁ NECESARIAMENTE RELACIONADO CON LOS ERRORES, PERO SON COSAS QUE CREO QUE PUEDEN TENENR QUE VER
require "ControlProducto.php";
require_once "../modelo/DTOProducto.php";

session_name("sesion_pedido");
session_start();

$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : null;
$cantidad = isset($_REQUEST["cantidad"]) ? $_REQUEST["cantidad"] : null;

$control_producto=new ControlProducto();
$producto = $control_producto->getProducto($id);

var_dump( $producto );

//HE CREADO PRIMERO UN BUCLE QUE RECORRE LA SESION PRODUCTO, PARA VER SI YA SE HABIA AÑADIDO ESE PRODUCTO, PARA EN VEZ DE CREAR 2 ENTRADAS DEL MISMO QUE SE ACTUALICE EL STOCK. DESPUES, NO NECESITAS SESION CANTIDAD, YA EN EL PRODUCTO, CUANDO LO INTRODUCES, LITERALMENTE ESTABAS ACTUALIZANDO EL STOCK. LO UNICO QUE TENDRIAS QUE HACER ES UNA VEZ HECHO ESTO, ACTUALIZAR EL STOCK POR EL NUEVO EN LA BASE DE DATOS, LO QUE HACIAS EN AÑADIR, ERA VOLVER A SUMARSELO 2 VECES O ALGO ASI, PAR HACER LO QUE TE DIGO HE HECHO EL METODO REPONER EN CONTROL PRODUCTO, QUE LO QUE HACE BASICAMENTE ES SETEAR EL STOCK AL STOCK QUE TENGA EL OBJETO QUE LE PASAS POR PARAMETRO. BASICAMENTE LO HACIAS BIEN PERO HACIAS COMO 10 COSAS DE MAS.

if ($_REQUEST["action"] == "+") { //ESTE IF ESTABA 2 VECES
    //LO HE PUESTO PRIMERO PORQUE ES EL PRIMER BOTÓN, ME AYUDA A VERLO MEJOR
    if (!$producto) {
        $mensaje = "Añada producto antes de pedir";
        header("Location: ../vista/vistaPedido.php?mensaje=$mensaje");
        exit;    
    } else {
        $exists = false;
        if (isset($_SESSION['producto'])) {
            for ( $i= 0; $i<count($_SESSION["producto"]); $i++) {
                if ($_SESSION['producto'][$i]->getId() == $id) {
                    $_SESSION['producto'][$i]->setStock($_SESSION['producto']->getStock() + $cantidad);
                    $exists = true;
                }
            }
        }
        if (!$exists) {
            $producto->setStock($producto->getStock() + $cantidad);
            $_SESSION["producto"][]= $producto;
            header("Location: ../vista/vistaPedido.php");
            exit;
        }
    }    
}

if ($_REQUEST["action"] == "cancelar"){
    // SIEMPRE QUE LA SESION PRODUCTO ESTA ACTIVA, LO ESTA LA SESIÓN CANTIDAD, NO SON NECESARIOS 2 IF (AL FINAL HE BORRADO CANTIDAD)
    if(isset($_SESSION["producto"]))
        unset($_SESSION["producto"]);

    header("Location: ../vista/vistaMostrarTrastienda.php");
    exit;
}

if ($_REQUEST["action"] == "confirmar") {// ESTE ESTABA TAMBIÉN 2 VECES
    if (empty($_SESSION["producto"])) {
        $mensaje="No hay productos en tu pedido";
        header("Location: ../vista/vistaPedido.php?mensaje=$mensaje");
        exit;
    } else {
        for ( $i= 0; $i<count($_SESSION["producto"]); $i++) {
            $control_producto->reponer($_SESSION['producto'][$i]);
        }        
        unset($_SESSION["producto"]);
        header("Location: ../vista/vistaMostrarTrastienda.php");
        exit;  
    }
}
?>