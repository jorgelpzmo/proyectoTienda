
<?php 
require '../controlador/ControlProducto.php';
$control_producto = new ControlProducto();
$productos = $control_producto->getAllProductos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto):?>
                <tr>
                    <td><?=$producto->getId();?></td>
                    <td><?=$producto->getNombre();?></td>
                    <td><?=$producto->getDescripcion();?></td>
                    <td><?=$producto->getPrecio();?></td>
                    <td style="width: 20%; height:50%"><img src="<?=$producto->getImagen();?>" alt="<?=$producto->getNombre();?>" style="width: 100%; height:100%"></td>
                    <td><?=$producto->getStock();?></td>
                    <td>
                        <form action="../controlador/controlEliminarTrastienda.php" method="post">
                        <button type="submmit" name="action" value="<?= $producto->getId()?>">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>