<?php 
$id=$_REQUEST["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controlador/controlModificarTrastienda.php" method="post">
    <label for="id">ID</label>
        <input type="text" name="id" value="<?= $id ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion">
        <label for="precio">Precio</label>
        <input type="text" name="precio">
        <label for="imagen">Imagen</label>
        <input type="text" name="imagen">
        <label for="stock">Stock</label>
        <input type="stock" name="stock">
        <button type="submit" name="action" value="guardar" id="boton">Guardar cambios</button>
    </form>
</body>
</html>