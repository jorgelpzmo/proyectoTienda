<?php 
require "../modelo/DTOProducto.php";
require "../controlador/ControlProducto.php";
session_name("sesion_pedido");
session_start();
if (isset($_REQUEST["mensaje"])){
    $mensaje=$_REQUEST["mensaje"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="../controlador/controladorPedido.php" method="post">
        <label for="id">ID producto</label>
        <input type="text" name="id">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad">
        <button type="submit" name="action" value="+">+</button>
    </form>
    <?php 
    if(isset($mensaje)){
        if($mensaje=="Añada producto antes de pedir"){
        print "<form action=\"../controlador/peticionAnadirTrastienda.php\" method=\"post\">";
        print "<label>$mensaje</label>";
        print "<button type=\"submit\" name=\"action\" value=\"anadir\">Añadir producto</button>";
        print "</form>";
        }
        if($mensaje=="No hay productos en tu pedido"){
            print "<p>$mensaje</p>";
        }
    }
    ?>
    <form action="../controlador/controladorPedido.php" method="post">
        <button type="submit" name="action" value="confirmar">Realizar pedido</button>
        <button type="submit" name="action" value="cancelar">Cancelar pedido</button>
    </form>
    <table>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(isset($_SESSION["producto"])){
            for($i=0; $i<count($_SESSION["producto"]);$i++):?>
                <tr>
                    <td><?=$_SESSION["producto"][$i]->getId();?></td>
                    <td><?=$_SESSION["producto"][$i]->getNombre();?></td>
                    <td><?=$_SESSION["producto"][$i]->getDescripcion();?></td>
                    <td><?=$_SESSION["producto"][$i]->getPrecio();?></td>
                    <td><?=$_SESSION["producto"][$i]->getStock();?></td>
                </tr>
            <?php endfor;?>
            <?php }?>
        </tbody>
    </table>
</body>
</html>